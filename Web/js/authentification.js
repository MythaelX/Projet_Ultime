'use strict';
$("#boutonConnexion").addEventListener('click',valideLogin);

function valideLogin(event) {
    var pseudo, mdp, text, xhr;
    event.preventDefault();
    pseudo = $('#pseudo').value;
    mdp = $('#mdp').value;

    if (pseudo == '' || mdp == '') {
        text = 'L\'un des champs est vide.';
        httpErrors(400,text)
    } else {
    Cookies.set('pseudo', pseudo);

    xhr = new XMLHttpRequest();
    xhr.open('GET', 'php/request.php/authentification', true);
    xhr.setRequestHeader('Authorization', 'Basic ' + btoa(pseudo + ':' + mdp));

    xhr.onload = function () {
        switch (xhr.status) {
            case 200:
                Cookies.set('token', xhr.responseText);
                break;
            default:
                httpErrors(xhr.status);
        }
    };

    xhr.send();
    }
    document.location="./index.php";
}
