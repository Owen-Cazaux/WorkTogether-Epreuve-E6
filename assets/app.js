import './stimulus_bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

// Fonction permettant de modifier le path donné par le bouton en fonction de la sélection comptable ou client lors de l'inscription
function updateSignupUrl() {
    const continueSignin = document.getElementById('continue-signin');
    const client = document.getElementById('client');

    if (!continueSignin || !client) {
        return;
    }

    if (client.checked) {
        continueSignin.href = continueSignin.dataset.clientUrl;
    } else {
        continueSignin.href = continueSignin.dataset.comptableUrl;
    }
}
//écoute tous les changements sur le radio et applique la fonction updateSignupUrl qui modifie le path du href du bouton
document.addEventListener('change', (event) => {
    if (event.target instanceof HTMLInputElement && event.target.name === 'type_compte') {
        updateSignupUrl();
    }
});
// relance de la fonction lorsque le site turboload la page, concrement lorsque qu'on revient en arrière après la sélection, sinon la fonction n'est plus active et n'écoute plus les changements et donc le bouton reste bloqué sur  un choix.
document.addEventListener('turbo:load', updateSignupUrl);
updateSignupUrl();
