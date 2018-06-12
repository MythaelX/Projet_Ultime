'use strict';
$("#formulaireInscription").addEventListener('submit',valideInscription);
$("#pseudo").addEventListener('change',verifPseudo);
$("#email").addEventListener('change',verifMail);
$("#boutonAvatar").addEventListener('change',recupérationAvatar);

$("#boutonAvatar2").addEventListener( "click", function( event ) {
  event.preventDefault();
   $("#boutonAvatar").click();
   return false;
});

$("#pseudo").addEventListener('blur',function(event){
var pseudo=event.currentTarget.value;
ajaxRequest("GET",'php/request.php/pseudo',verifPseudoBDD,'pseudo='+pseudo);
});

$("#email").addEventListener('blur',function(event){
var email=event.currentTarget.value;
ajaxRequest("GET",'php/request.php/email',verifEmailBDD,'email='+email);
});

var verifBDDPseudo=false;
var verifBDDEmail=false;

function valideInscription(event){
  var text;
  if(verifBDDPseudo==true || verifBDDEmail==true || verifMotDePasse()==true || verifMail()==true || verifPseudo()==true){
    event.preventDefault();
    if(verifBDDPseudo){
        surligne(pseudo, true);
        text = 'Votre pseudo est déja pris';
    }else if(verifBDDEmail){
        surligne(email, true);
        text = 'Un compte est déja relié à cette adresse email';
    }else if(verifMotDePasse()){
        text = 'Veuillez mettre 2 fois le même mot de passe';
    }else if(verifMail()){
        text = 'Veuillez mettre un bon email';
    }else if(verifPseudo()){
      text = 'Veuillez rentrer un pseudo entre 2 et 25 caractères';
    }
    httpErrors(403,text);
  }else{
    alert("Votre inscription a été enregistrée, vous allez être redirigé vers la page d'accueil s'il n'y a aucune erreur pour l'avatar.");
  }
}
