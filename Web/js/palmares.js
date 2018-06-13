/*!
*	\file palmares
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

$('#bouton1').addEventListener('click',affichage);
$('#bouton2').addEventListener('click',affichage);
$('#bouton3').addEventListener('click',affichage);
$('#bouton4').addEventListener('click',affichage);

ajaxRequest('GET', 'php/request.php/tableauPalmares', loadTabPalmares,'difficulte="1"');
ajaxRequest('GET', 'php/request.php/tableauDifficulte', affichageBouton);

/*!
*	\brief    Displays button with the name difficulty of the database.
*		\param[in]		ajaxResponse   The Array of the "nom_difficulte"
*/
function affichageBouton(ajaxResponse){
var json= JSON.parse(ajaxResponse);
for (var i = 0; i < json.length; i++) {
  $('#bouton'+(i+1)).innerHTML=json[i]['nom_difficulte'];
}
$('#bouton1').style.backgroundColor="rgba(0,0,0,0.3)";
}

/*!
*	\brief    Displays the array in relation to the chosen difficulty by the user.
*		\param[in]		ajaxResponse   The Array of the "nom_difficulte"
*/
function affichage(event) {
  var difficulte=event.currentTarget.value;
  $('#bouton1').style.backgroundColor="#707070";
  $('#bouton2').style.backgroundColor="#707070";
  $('#bouton3').style.backgroundColor="#707070";
  $('#bouton4').style.backgroundColor="#707070";
  event.currentTarget.style.backgroundColor="rgba(0,0,0,0.3)";
  ajaxRequest('GET', 'php/request.php/tableauPalmares',loadTabPalmares,'difficulte='+difficulte);
}

/*!
*	\brief    Displays the scoreboards recover in ajax response.
*		\param[in]		ajaxResponse   The Array of the "pseudo","score","temps","id_partie" and "date_score"
*/
function loadTabPalmares(ajaxResponse){
var json,text;
json= JSON.parse(ajaxResponse);
text="";
for (var i = 0; i < json.length; i++) {
  text+='<tr><td>'+
  (i+1)+' Kg</td><td>'+
  json[i]["pseudo"]+'</td><td>'+
  json[i]["score"]+' Dog / '+json[i]["temps"]+'</td><td>'+
  json[i]["id_partie"]+'</td><td>'+
  json[i]["date_score"]+
  '</td></tr>';
}
$('#tableauPalmares').innerHTML= text;
resizeOnloadFunctions();
}
