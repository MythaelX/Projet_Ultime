'use strict';
boutons();
ajaxRequest('GET', 'php/request.php/tableauPalmares', loadTabPalmares,'difficulte="1"');
ajaxRequest('GET', 'php/request.php/tableauDifficulte', affichageBouton);
function boutons(){
  $('#bouton1').addEventListener('click',affichage);
  $('#bouton2').addEventListener('click',affichage);
  $('#bouton3').addEventListener('click',affichage);
  $('#bouton4').addEventListener('click',affichage);
}

function affichageBouton(ajaxResponse){
var json= JSON.parse(ajaxResponse);
for (var i = 0; i < json.length; i++) {
  $('#bouton'+(i+1)).innerHTML=json[i]['nom_difficulte'];
}
$('#bouton1').style.backgroundColor="rgba(0,0,0,0.3)";
}

function affichage(event) {
  var difficulte=event.currentTarget.value;
  $('#bouton1').style.backgroundColor="#707070";
  $('#bouton2').style.backgroundColor="#707070";
  $('#bouton3').style.backgroundColor="#707070";
  $('#bouton4').style.backgroundColor="#707070";
  event.currentTarget.style.backgroundColor="rgba(0,0,0,0.3)";
  ajaxRequest('GET', 'php/request.php/tableauPalmares',loadTabPalmares,'difficulte='+difficulte);
}

function loadTabPalmares(ajaxResponse){
var json,text;
json= JSON.parse(ajaxResponse);
text="";
for (var i = 0; i < json.length; i++) {
  text+='<tr><td>'+
  (i+1)+' Kg</td><td>'+
  json[i]["pseudo"]+'</td><td>'+
  json[i]["score"]+' / '+json[i]["temps"]+'</td><td>'+
  json[i]["date_score"]+
  '</td></tr>';
}
$('#tableauPalmares').innerHTML= text;
}
