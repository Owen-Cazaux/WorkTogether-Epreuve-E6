import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['content', 'track', 'thumb'];

    connect() {
        this.dragStartY = null;
        this.dragStartScrollTop = null;
        this.resizeObserver = new ResizeObserver(() => this.update());
        this.resizeObserver.observe(this.contentTarget);
        this.resizeObserver.observe(this.trackTarget);
        this.contentTarget.addEventListener('scroll', this.onScroll);
        this.trackTarget.addEventListener('pointerdown', this.onPointerDown);
        this.trackTarget.addEventListener('pointermove', this.onPointerMove);
        this.trackTarget.addEventListener('pointerup', this.onPointerUp);
        this.trackTarget.addEventListener('pointercancel', this.onPointerUp);
        this.trackTarget.addEventListener('keydown', this.onKeyDown);
        this.update();
    }

    disconnect() {
        this.resizeObserver.disconnect();
        this.contentTarget.removeEventListener('scroll', this.onScroll);
        this.trackTarget.removeEventListener('pointerdown', this.onPointerDown);
        this.trackTarget.removeEventListener('pointermove', this.onPointerMove);
        this.trackTarget.removeEventListener('pointerup', this.onPointerUp);
        this.trackTarget.removeEventListener('pointercancel', this.onPointerUp);
        this.trackTarget.removeEventListener('keydown', this.onKeyDown);
    }

    onScroll = () => this.update();

    onPointerDown = (event) => {
        if (event.button !== 0) {
            return;
        }

        event.preventDefault();
        this.trackTarget.setPointerCapture(event.pointerId);
        this.dragStartY = event.clientY;
        this.dragStartScrollTop = this.contentTarget.scrollTop;

        if (event.target !== this.thumbTarget) {
            this.scrollToTrackPosition(event.clientY);
            this.dragStartScrollTop = this.contentTarget.scrollTop;
        }
    };

    onPointerMove = (event) => {
        if (this.dragStartY === null) {
            return;
        }

        const scrollableDistance = this.contentTarget.scrollHeight - this.contentTarget.clientHeight;
        const thumbTravel = this.trackTarget.clientHeight - this.thumbTarget.offsetHeight;

        if (thumbTravel > 0) {
            this.contentTarget.scrollTop = this.dragStartScrollTop
                + ((event.clientY - this.dragStartY) / thumbTravel) * scrollableDistance;
        }
    };

    onPointerUp = () => {
        this.dragStartY = null;
        this.dragStartScrollTop = null;
    };

    onKeyDown = (event) => {
        const page = this.contentTarget.clientHeight;
        const scrollAmount = {
            ArrowDown: 40,
            ArrowUp: -40,
            PageDown: page,
            PageUp: -page,
            Home: -this.contentTarget.scrollTop,
            End: this.contentTarget.scrollHeight - this.contentTarget.clientHeight - this.contentTarget.scrollTop,
        }[event.key];

        if (scrollAmount === undefined) {
            return;
        }

        event.preventDefault();
        this.contentTarget.scrollTop += scrollAmount;
    };

    scrollToTrackPosition(clientY) {
        const trackRect = this.trackTarget.getBoundingClientRect();
        const thumbTravel = this.trackTarget.clientHeight - this.thumbTarget.offsetHeight;

        if (thumbTravel <= 0) {
            return;
        }

        const thumbPosition = Math.min(
            Math.max(clientY - trackRect.top - this.thumbTarget.offsetHeight / 2, 0),
            thumbTravel
        );
        this.contentTarget.scrollTop = (thumbPosition / thumbTravel)
            * (this.contentTarget.scrollHeight - this.contentTarget.clientHeight);
    }

    update() {
        const contentHeight = this.contentTarget.scrollHeight;
        const visibleHeight = this.contentTarget.clientHeight;
        const scrollableDistance = contentHeight - visibleHeight;
        const thumbHeight = Math.max(
            32,
            (visibleHeight / contentHeight) * this.trackTarget.clientHeight
        );
        const thumbTravel = this.trackTarget.clientHeight - thumbHeight;
        const scrollProgress = scrollableDistance > 0
            ? this.contentTarget.scrollTop / scrollableDistance
            : 0;

        this.thumbTarget.style.height = `${thumbHeight}px`;
        this.thumbTarget.style.transform = `translateY(${thumbTravel * scrollProgress}px)`;
        this.trackTarget.setAttribute('aria-valuenow', `${Math.round(scrollProgress * 100)}`);
    }
}
