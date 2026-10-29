import './stimulus_bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

const continuesignin = document.getElementById('continue-signin');
continuesignin.addEventListener('click', function() {
    const client = document.getElementById('client')

    if (client.checked) {
        continuesignin.href = continuesignin.dataset.clientUrl;
    } else {
        continuesignin.href = continuesignin.dataset.comptableUrl;
    }
});
