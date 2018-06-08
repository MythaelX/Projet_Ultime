'use strict';
boutons();
ajaxRequest('GET', 'php/request.php/tableauPalmares', loadTabPalmares,'difficulte="1"');

function boutons(){
  $('#boutonVegan').addEventListener('click',affichage);
  $('#boutonVegetarien').addEventListener('click',affichage);
  $('#boutonOmnivore').addEventListener('click',affichage);
  $('#boutonCarnivore').addEventListener('click',affichage);
}

function affichage(event) {
  var idBouton=event.currentTarget.id,difficulte;
  console.log(idBouton);
  switch (idBouton) {
    case "boutonVegan":
      difficulte=1;
    break;
    case "boutonVegetarien":
      difficulte=2;
    break;
    case "boutonOmnivore":
      difficulte=3;
    break;
    case "boutonCarnivore":
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
