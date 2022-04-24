function check_mdp() {
    var mdp = document.getElementById('mdp').value;
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!regex.test(mdp)) {
        document.querySelector(".error_message").style.opacity = "1";

        document.getElementById('mdp').style.boxShadow = 'inset 0 0 0 1px rgb(255, 150, 150)';
    } else {
        document.querySelector(".error_message").style.opacity = "0";

        document.getElementById('mdp').style.boxShadow = 'none';
    }

} // On vérifie que l'input contient au moins 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial