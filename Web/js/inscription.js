'use strict';
$("#formulaireInscription").addEventListener('submit',valideInscription);
$("#pseudo").addEventListener('change',verifPseudo);
$("#email").addEventListener('change',verifMail);
$("#boutonAvatar").addEventListener('change',recupérationAvatar);

function valideInscription(event){
  var pseudo, mdp,mdpVerif,email,avatar,text;
  pseudo = $('#pseudo').value;
  mdp = $('#mdp').value;
  mdpVerif = $('#mdpVerif').value;
  email =$('#email').value;
  if(verifPseudo()==true || verifMotDePasse()==true || verifMail==true){
    event.preventDefault();
    if(verifPseudo()){
      text = 'Veuillez rentrer un pseudo entre 2 et 25 caractères';
    }else if(verifMotDePasse()){
        text = 'Veuillez mettre 2 fois le même mot de passe';
    }else if(verifMail()){
        text = 'Veuillez mettre un bon email';
    }
    httpErrors(400,text);
  }
}

function recupérationAvatar() {
  console.log("ok");
  var f = $("#boutonAvatar");
  if (f.files && f.files[0]) {
    console.log("ok2");
    var f = $("#boutonAvatar");
    var reader= new FileReader();
    reader.onload = function(e) {
      $('#imageAvatar').setAttribute('src', e.target.result);
      console.log("ok3");
    }
    reader.readAsDataURL(f.files[0]);
  }
}
function verifPseudo(){
  //http://www.astuces-webmaster.ch/page/check-user-ajax
  var pseudo=$('#pseudo');
  var regex = new RegExp("[-_.,*$?!@=+]");
  if(pseudo.value.length < 2 || pseudo.value.length >= 25 || regex.test(pseudo.value)){
      surligne(pseudo, true);
      return true;
   }else{
      surligne(pseudo, false);
      return false;
   }
}

function verifMotDePasse(){
  var mdp=$('#mdp');
  var mdpVerif=$('#mdpVerif');
  if(mdp.value!=mdpVerif.value){
    if(mdp.value==""){ //si mdp est nul
      surligne(mdp, true);
      surligne(mdpVerif, false);
    }else if(mdpVerif.value==""){ //si mdpVerif est nul
      surligne(mdp, false);
      surligne(mdpVerif, true);
    }else{ //si les deux sont différentes et non nul
      surligne(mdp, true);
      surligne(mdpVerif, true);
    }
    return true;
  }else{
    if(mdp.value==""){ //si les valeurs de mdp et mdpVerif sont nuls
      surligne(mdp, true);
      surligne(mdpVerif, true);
      return true;
    }else{
      surligne(mdp, false);
      surligne(mdpVerif, false);
      return false;
    }
  }
}

function verifMail(){
  //http://www.astuces-webmaster.ch/page/check-user-ajax
  email=$("#email");
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(regex.test(email.value)){
     surligne(email, false);
     return false;
   }else{
     surligne(email, true);
     return true;
   }
}

function surligne(champ, erreur){
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
