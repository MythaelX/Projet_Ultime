'use strict';
$("#formulaireInscription").addEventListener('submit',valideInscription);
$("#pseudo").addEventListener('change',verifPseudo);
$("#email").addEventListener('change',verifMail);
$("#boutonAvatar").addEventListener('change',recupérationAvatar);

function valideInscription(event){
  var text;
  if(verifPseudo()==true || verifMotDePasse()==true || verifMail()==true){
    event.preventDefault();
    if(verifPseudo()){
      text = 'Veuillez rentrer un pseudo entre 2 et 25 caractères';
    }else if(verifMotDePasse()){
        text = 'Veuillez mettre 2 fois le même mot de passe';
    }else if(verifMail()){
        text = 'Veuillez mettre un bon email';
    }
    httpErrors(400,text);
  }else{
    alert("Votre inscription a été enregistrée,vous allez etre redirigé vers la page accueil s'il n'y a aucun erreur");
  }
}

$("#boutonAvatar2").addEventListener( "click", function( event ) {
  event.preventDefault();
  console.log("ok")
   $("#boutonAvatar").click();
   return false;
});
