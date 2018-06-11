'use strict';
$("#boutonAnnuler").addEventListener('click',function(event){
  event.preventDefault();
  document.location="./index.php";
});

$("#formulaireModification").addEventListener('submit',valideModification);
$("#pseudo").addEventListener('change',verifPseudo);
$("#boutonAvatar").addEventListener('change',recupérationAvatar);

function valideModification(event){
  var text;
  if(verifPseudo()==true || verifMotDePasse2()==true || mdpActuelVerif()==true){
    event.preventDefault();
    if(verifPseudo()){
      text = 'Veuillez rentrer un pseudo entre 2 et 25 caractères';
    }else if(verifMotDePasse2()){
        text = 'Veuillez mettre 2 fois le même mot de passe';
    }else if(mdpActuelVerif()){
        text='Votre mot de passe Actuel est incorrect';
    }
    httpErrors(400,text);
  }
}
