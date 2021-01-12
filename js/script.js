function validarSenha(inputPassword, inputPass, campo) {

    var result = document.getElementById(campo);

    senhaP = document.getElementById(inputPassword).value;
    senhaS = document.getElementById(inputPass).value;

    if ((senhaP == senhaS)) {

        result.innerHTML = "Senhas Coincidem";
        result.style.color = "green";

    } else {

        result.innerHTML = "Senhas Incoincidem";
        result.style.color = "red";

    }

}