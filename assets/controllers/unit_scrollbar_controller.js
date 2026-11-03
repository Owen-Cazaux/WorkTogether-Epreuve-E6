import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['content', 'track', 'thumb'];

    connect() {
        this.pointerId = null;
        this.boundPointerDown = this.pointerDown.bind(this);
        this.boundPointerMove = this.pointerMove.bind(this);
        this.boundPointerUp = this.pointerUp.bind(this);
        this.boundKeyDown = this.keyDown.bind(this);

        this.trackTarget.addEventListener('pointerdown', this.boundPointerDown);
        this.trackTarget.addEventListener('pointermove', this.boundPointerMove);
        this.trackTarget.addEventListener('pointerup', this.boundPointerUp);
        this.trackTarget.addEventListener('pointercancel', this.boundPointerUp);
        this.trackTarget.addEventListener('keydown', this.boundKeyDown);
        this.contentTarget.addEventListener('scroll', this.updateThumb);

        this.resizeObserver = new ResizeObserver(this.updateThumb);
        this.resizeObserver.observe(this.contentTarget);
        this.resizeObserver.observe(this.trackTarget);
        this.updateThumb();
    }

    disconnect() {
        this.trackTarget.removeEventListener('pointerdown', this.boundPointerDown);
        this.trackTarget.removeEventListener('pointermove', this.boundPointerMove);
        this.trackTarget.removeEventListener('pointerup', this.boundPointerUp);
        this.trackTarget.removeEventListener('pointercancel', this.boundPointerUp);
        this.trackTarget.removeEventListener('keydown', this.boundKeyDown);
        this.contentTarget.removeEventListener('scroll', this.updateThumb);
        this.resizeObserver.disconnect();
    }

    updateThumb = () => {
        const { scrollHeight, clientHeight, scrollTop } = this.contentTarget;
        const trackHeight = this.trackTarget.clientHeight;
        const thumbHeight = Math.min(trackHeight, Math.max(36, trackHeight * clientHeight / scrollHeight));
        const maxThumbTop = trackHeight - thumbHeight;
        const maxScrollTop = scrollHeight - clientHeight;
        const scrollRatio = maxScrollTop > 0 ? scrollTop / maxScrollTop : 0;

        this.thumbTarget.style.height = `${thumbHeight}px`;
        this.thumbTarget.style.top = `${maxThumbTop * scrollRatio}px`;
        this.trackTarget.setAttribute('aria-valuenow', `${Math.round(scrollRatio * 100)}`);
    };

    pointerDown(event) {
        if (event.button !== 0) {
            return;
        }

        event.preventDefault();
        const trackRect = this.trackTarget.getBoundingClientRect();
        const thumbRect = this.thumbTarget.getBoundingClientRect();
        const onThumb = this.thumbTarget.contains(event.target);

        this.pointerId = event.pointerId;
        this.dragOffset = onThumb ? event.clientY - thumbRect.top : thumbRect.height / 2;

        if (!onThumb) {
            this.scrollToPointer(event.clientY, trackRect);
        }

        this.trackTarget.setPointerCapture(event.pointerId);
    }

    pointerMove(event) {
        if (event.pointerId !== this.pointerId) {
            return;
        }

        this.scrollToPointer(event.clientY, this.trackTarget.getBoundingClientRect());
    }

    pointerUp(event) {
        if (event.pointerId !== this.pointerId) {
            return;
        }

        if (this.trackTarget.hasPointerCapture(event.pointerId)) {
            this.trackTarget.releasePointerCapture(event.pointerId);
        }
        this.pointerId = null;
    }

    scrollToPointer(clientY, trackRect) {
        const thumbHeight = this.thumbTarget.offsetHeight;
        const maxThumbTop = this.trackTarget.clientHeight - thumbHeight;
        const thumbTop = Math.min(maxThumbTop, Math.max(0, clientY - trackRect.top - this.dragOffset));
        const scrollRatio = maxThumbTop > 0 ? thumbTop / maxThumbTop : 0;

        this.contentTarget.scrollTop = scrollRatio * (this.contentTarget.scrollHeight - this.contentTarget.clientHeight);
    }

    keyDown(event) {
        const { contentTarget } = this;
        const pageStep = contentTarget.clientHeight;
        const keys = {
            ArrowDown: 40,
            ArrowUp: -40,
            PageDown: pageStep,
            PageUp: -pageStep,
            Home: -contentTarget.scrollTop,
            End: contentTarget.scrollHeight - contentTarget.clientHeight - contentTarget.scrollTop,
        };

        if (!Object.hasOwn(keys, event.key)) {
            return;
        }

        event.preventDefault();
        contentTarget.scrollTop += keys[event.key];
    }
}
