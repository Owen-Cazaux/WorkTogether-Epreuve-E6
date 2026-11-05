
document.addEventListener('click', (event) => {
    if (!event.target.closest('#edit-button')) {
        return;
    }

    document.querySelectorAll('.profile-card').forEach((card) => {
        card.classList.toggle('hidden');
    });
});
