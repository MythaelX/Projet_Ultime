/*!
*	\file fonctions
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

/*!	\brief    Displays the avatar chosen by the user on his computer.*/
function recupérationAvatar() {
  var f = $("#boutonAvatar");
  if (f.files && f.files[0] && verifImage()==false) {
    var f = $("#boutonAvatar");
    var reader= new FileReader();
    reader.onload = function(e) {
      $('#imageAvatar').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(f.files[0]);
  }
}

/*!*	\brief    Check if the value of the nickname is correct. */
function verifPseudo(){
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

/*!*	\brief    Check if the value of the password is correct.*/
function verifMotDePasse(){
  var mdp=$('#mdp');
  var mdpVerif=$('#mdpVerif');
  if(mdp.value!=mdpVerif.value){
    if(mdp.value==""){
      surligne(mdp, true);
      surligne(mdpVerif, false);
    }else if(mdpVerif.value==""){
      surligne(mdp, false);
      surligne(mdpVerif, true);
    }else{
      surligne(mdp, true);
      surligne(mdpVerif, true);
    }
    return true;
  }else{
    if(mdp.value==""){
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

/*!*	\brief    Check if the value of the nickname is correct.*/
function verifMotDePasse2(){
  var mdp=$('#mdp');
  var mdpVerif=$('#mdpVerif');
  if(mdp.value!=mdpVerif.value){
    if(mdp.value==""){
      surligne(mdp, true);
      surligne(mdpVerif, false);
    }else if(mdpVerif.value==""){
      surligne(mdp, false);
      surligne(mdpVerif, true);
    }else{
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

/*!*	\brief    Check if the value of the email is correct.*/
function verifMail(){
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

/*!*	\brief    Check if the value of the password is correct compared to the database password.*/
function mdpActuelVerif(){
  var verification;
  var mdp=$('#mdpActuel');
  ajaxRequest('GET','php/request.php/verifMotDePasse',function(ajaxResponse){
    json= JSON.parse(ajaxResponse);
    if(!json['verification']){
      surligne(mdpActuel, false);
      verification=false;
    }else{
      surligne(mdpActuel, true);
      verification=true;
    }
  },"mdp="+mdp.value+"&pseudo="+Cookies.get('pseudo'),function(){},false);
  return verification;
}

/*!*
*	\brief    check if the nickname is not taken.
*		\param[in]		ajaxResponse   The array of "pseudo"
*/
function verifPseudoBDD(ajaxResponse){
var json=JSON.parse(ajaxResponse);
pseudo=$('#pseudo');
if(json[0]!=null){
  surligne(pseudo, true);
  verifBDDPseudo=true;
}else{
  surligne(pseudo, false);
  verifBDDPseudo=false;
  }
}

/*!
*	\brief    Check if the email is not taken.
*		\param[in]		ajaxResponse   The array of "email"
*/
function verifEmailBDD(ajaxResponse){
var json=JSON.parse(ajaxResponse);
if(json[0]!=null){
  surligne(email, true);
  verifBDDEmail=true;
}else{
  surligne(email, false);
  verifBDDEmail=false;
  }
}

/*!
*	\brief    Change backgound color of the html element if there is an error or not.
*		\param[in]		champ   The html element
*		\param[in]		erreur  Boolean if there is an error or not
*/
function surligne(champ, erreur){
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

/*!
*	\brief    display difficulty with the html element "option" in a select.
*		\param[in]		ajaxResponse   The Array of "nom_difficulte"
*/
function affichageDifficulte(ajaxResponse){
  var text,json;
  text="";
  json= JSON.parse(ajaxResponse);
  for (var i = 0; i < json.length; i++) {
    text+='<option value="'+(i+1)+'">'+json[i]['nom_difficulte']+'</option>';
  }
  $('#difficulte').innerHTML= text;
}

/*!*	\brief  Check if the type of the avatar is a jpeg or jpg or gif or png  .*/
function verifImage(){
  var file,fileTypes;
  file=$('#boutonAvatar');
  fileTypes = ['image/jpeg','image/jpg','image/png','image/gif'];
  for (var i = 0; i < fileTypes.length; i++) {
    if(file.files[0].type == fileTypes[i]) {
      return false;
    }
  }
  return true;
}
