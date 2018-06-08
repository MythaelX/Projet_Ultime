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
}

function affichage(event) {
  var idBouton=event.currentTarget.id,difficulte;
  console.log(idBouton);
  switch (idBouton) {
    case "bouton1":
      difficulte=1;
    break;
    case "bouton2":
      difficulte=2;
    break;
    case "bouton3":
      difficulte=3;
    break;
    case "bouton4":
      difficulte=4;;
    break;
  }
  ajaxRequest('GET', 'php/request.php/tableauPalmares',loadTabPalmares,'difficulte='+difficulte);
}

function affichageTableau(array){
  var text="";
  for (var i = 0; i < array.length; i++) {
    text+='<tr><td>'+
    (i+1)+' Kg</td><td>'+
    array[i]["pseudo"]+'</td><td>'+
    array[i]["score"]+' / '+array[i]["temps"]+'</td><td>'+
    array[i]["date_score"]+
    '</td></tr>';
  }
  $('#tableauPalmares').innerHTML= text;
}

function loadTabPalmares(ajaxResponse){
var json= JSON.parse(ajaxResponse);
affichageTableau(json)
}
