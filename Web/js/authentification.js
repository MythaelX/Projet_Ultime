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

    ajaxRequest('AUTH','php/request.php/authentification',function(token){
      Cookies.set('token', token);
      Cookies.set('pseudo', pseudo);
      document.location="./index.php";
    },pseudo + ':' + mdp);
  }
}
