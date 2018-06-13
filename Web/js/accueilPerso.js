/*!
*	\file	accueilPerso
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

'use strict';
affichageAccueil();
ajaxRequest('GET','php/request.php/tableauDifficulte',affichageDifficulte);

/* addEventListener */
$("#boutonModifier").addEventListener('click',function(event){
  event.preventDefault();
  document.location="./modifier-son-profil.php";
});

$("#boutonCreer").addEventListener('click',function(event){
  event.preventDefault();
  document.location="./creer-une-partie.php";
});

$('#difficulte').addEventListener('change',function(event){
  var difficulte=$('#difficulte').value;
  console.log(difficulte);
  ajaxRequest('GET','php/request.php/tableauParties',affichageParties,'difficulte='+difficulte);
});
/***************************/

/*!
*	\brief    Displays the block "accueilPerso" if he is connected.
*
*/
function affichageAccueil(){
  if(Cookies.get('pseudo')){
    var difficulte=1;
    $('#presentation').style.display= "none";
    $('#accueilPerso').style.display= "block";
    ajaxRequest('GET','php/request.php/tableauParties',affichageParties,'difficulte='+difficulte);
  }
}

/*!
*	\brief    Displays the array of the games in relation of the difficulty.
*		\param[in]		ajaxResponse   The array of the games
*/
function affichageParties(ajaxResponse){
  var text,json;
  json= JSON.parse(ajaxResponse);
  text="";
  if(0<json.length){
    for (var i = 0; i < json.length; i++) {
      text+='<tr><td>'+
      '<input type="radio" id="radioButton'+i+'" name="choix" value="'+json[i]["id_partie"]+'">'+'</td><td>'+
      'Partie'+json[i]["id_partie"]+'</td><td>'+
      json[i]["nb_jouees"]+
      '</td></tr>';
    }

    $('#tableaudepartie').innerHTML= text;
    $('#radioButton0').checked=true;
    resizeOnloadFunctions();
  }else{
    $('#tableaudepartie').innerHTML= text;
  }
}
