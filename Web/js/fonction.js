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

function verifMotDePasse2(){
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
      surligne(mdp, false);
      surligne(mdpVerif, false);
      return false;
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

function mdpActuelVerif(){
  mdpActuel=$("#mdpActuel");
  if(mdpActuel.value==mdpActuelBDD){
    surligne(mdpActuel, false);
    return false;
  }else{
    surligne(mdpActuel, true);
    return true;
  }
}

function surligne(champ, erreur){
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}
