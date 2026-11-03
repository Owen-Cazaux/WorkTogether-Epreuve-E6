const button = document.querySelector('#edit-button');
const boxs = document.querySelectorAll('.profile-card');

button?.addEventListener('click', () => {
    for (const box of boxs)
    {
        box.classList.toggle('hidden');
        console.log('bouton appuyé')
    }  
});
