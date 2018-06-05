'use strict';
boutons();
ajaxRequest('GET', 'php/request.php/tabVegan', loadTabPalmares);
function boutons(){
  $('#boutonVegan').addEventListener('click',affichage);
  $('#boutonVegetarien').addEventListener('click',affichage);
  $('#boutonOmnivore').addEventListener('click',affichage);
  $('#boutonCarnivore').addEventListener('click',affichage);
}

function affichage(event) {
  var idBouton=event.currentTarget.id;
  console.log(idBouton);
  switch (idBouton) {
    case "boutonVegan":
      ajaxRequest('GET', 'php/request.php/tabVegan', loadTabPalmares);
    break;
    case "boutonVegetarien":
      ajaxRequest('GET', 'php/request.php/tabVegetarien', loadTabPalmares);
    break;
    case "boutonOmnivore":
      ajaxRequest('GET', 'php/request.php/tabOmnivore', loadTabPalmares);
    break;
    case "boutonCarnivore":
      ajaxRequest('GET', 'php/request.php/tabCarnivore', loadTabPalmares);
    break;
  }
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
