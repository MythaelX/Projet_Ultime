/*!
*	\file modification
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

/* addEventListener */
$("#boutonAnnuler").addEventListener('click',function(event){
  event.preventDefault();
  document.location="./index.php";
});

$("#formulaireModification").addEventListener('submit',valideModification);
$("#pseudo").addEventListener('change',verifPseudo);
$("#boutonAvatar").addEventListener('change',recupérationAvatar);
$("#boutonAvatar2").addEventListener( "click", function( event ) {
  event.preventDefault();
   $("#boutonAvatar").click();
   return false;
});

$("#pseudo").addEventListener('change',function(event){
  var pseudo=event.currentTarget.value;
  ajaxRequest("GET",'php/request.php/pseudo',verifPseudoBDD,'pseudo='+pseudo);
});
/***************************/
var verifBDDPseudo=false;

/*!
*	\brief    check the information before the POST in the file modifier
*		\param[in]		event   The event on the form
*/
function valideModification(event){
  var text;
  if( verifBDDPseudo==true || verifPseudo()==true || verifMotDePasse2()==true || mdpActuelVerif()==true || verifImage()==true){
    event.preventDefault();
    if(verifBDDPseudo){
        surligne(pseudo, true);
        text = 'Votre pseudo est déja pris';
    }else if(verifPseudo()){
      text = 'Veuillez rentrer un pseudo entre 2 et 25 caractères';
    }else if(verifMotDePasse2()){
        text = 'Veuillez mettre 2 fois le même mot de passe';
    }else if(mdpActuelVerif()){
        text='Votre mot de passe Actuel est incorrect';
    }else if(verifImage()){
      text = 'Veuillez mettre une image png,jpg,jpeg,ou gif';
    }
    httpErrors(403,text);
  }else{
    alert("Votre modification a été enregistrée, vous allez être redirigé vers la page d'accueil s'il n'y a aucune erreur pour l'avatar.");
  }
}
