console.log(id_partie);
ajaxRequest('GET','php/request.php/nomDifficulte',affichageDifficulte,'id_partie='+id_partie);
var question=new Array();
jeu();

$("#bouton1").addEventListener('click',function(event){
  console.log("ouiiiiiiiiiiiii");
});
$("#bouton2").addEventListener('click',function(event){
  console.log("oui");
});
$("#bouton3").addEventListener('click',function(event){
  console.log("oi");
});

function affichageDifficulte(ajaxResponse){
var json= JSON.parse(ajaxResponse);
$("#difficulte").innerHTML=json[0]['nom_difficulte'];
}

function jeu(){
  ajaxRequest('GET','php/request.php/Question',function(){console.log("ok");},'id_partie='+id_partie);
//recuperer question et proposition

//afficher la question et c'est n proposition
//les bouton appelle la fonction suite
}
