$("#boutonModifier").addEventListener('click',function(event){
  event.preventDefault();
  document.location="./modifier-son-profil.php";
});

$("#boutonCréer").addEventListener('click',function(event){
  event.preventDefault();
  document.location="./creer-une-partie.php";
});

affichageAccueil(pseudo);
function affichageAccueil(pseudo){
  if(pseudo!=null){
    var difficulte=1;
    $('#presentation').style.display= "none";
    $('#accueilPerso').style.display= "block";
    ajaxRequest('GET','php/request.php/tableauParties',affichageParties,'difficulte='+difficulte);
  }
}

function affichageParties(ajaxResponse){
var text,json;
text="";
json= JSON.parse(ajaxResponse);
for (var i = 0; i < json.length; i++) {
  text+='<tr><td>'+
  '<input type="radio" id="radioButton'+i+'" name="choix" value="'+json[i]["id_partie"]+'">'+'</td><td>'+
  'Partie'+json[i]["id_partie"]+
  '</td></tr>';
}
$('#tableaudepartie').innerHTML= text;
$('#radioButton0').checked=true;
}
