'use strict';
var questions=new Array();
questions['solution_un']=new Array();
questions['solution_deux']=new Array();
var proposition=new Array();
var solutionProposition=new Array();
var data=new Array();
data['temps']=new Array();
data['reponses']=new Array();
var compteurProposition=0;
var compteurQuestion=0;

ajaxRequest('GET','php/request.php/nomDifficulte',affichageDifficulte,'id_partie='+id_partie);
ajaxRequest('GET','php/request.php/questions',recupererQuestions,'id_partie='+id_partie);


$("#bouton1").addEventListener('click',compteur);
$("#bouton2").addEventListener('click',compteur);
$("#bouton3").addEventListener('click',compteur);

function compteur(event){
  var reponse=this.textContent;
  recuperationReponseTemp(reponse);
  console.log(proposition[0].length-1);
  console.log(compteurProposition);
  if(compteurProposition>=proposition[compteurQuestion].length-1){
    compteurProposition=0;
    compteurQuestion+=1;
  }else{
    compteurProposition+=1;
  }
  jeu();
}

function affichageDifficulte(ajaxResponse){
  var json= JSON.parse(ajaxResponse);
  $("#difficulte").innerHTML="Menu "+json[0]['nom_difficulte'];
}

function jeu(){
  if(compteurQuestion<=questions['solution_un'].length-1){
    affichageJeu();
  }else{
    $('#blocChrono').style.display= "none";
    $('#jeu').style.display= "none";
    $('#blocScore').style.display= "block";
    ajaxRequest('POST','php/request.php/jeu',affichageScore,'temps='+JSON.stringify(data['temps'])+'&reponses='+JSON.stringify(data['reponses'])+'&pseudo='+Cookies.get('pseudo')+'&id_partie='+id_partie);
  }
}

function affichageJeu(){
  console.log(questions);
  console.log(proposition);
  console.log(data);
  console.log(proposition);
  var j,i,temps;
  j=compteurQuestion;
  i=compteurProposition;
  temps = new Date();
  data['temps'][j][i]=parseInt(temps.getTime());
  $("#question").innerHTML='N°'+(j+1)+'/'+questions['solution_un'].length+' '+questions['solution_un'][j]+', '+questions['solution_deux'][j]+' ou les deux ?';
  $("#proposition").innerHTML='N°'+(i+1)+'/'+proposition[j].length+' '+proposition[j][i]+' :';
  $("#bouton1").innerHTML=questions['solution_un'][j];
  $("#bouton2").innerHTML=questions['solution_deux'][j];
}

function recuperationReponseTemp(reponse){
  var i,j,temps;
  i=compteurProposition;
  j=compteurQuestion;
  temps=new Date();
  if(reponse.toLowerCase()==solutionProposition[j][i].toLowerCase()){
    data['reponses'][j][i]=true;
  }else{
    data['reponses'][j][i]=false;
  }
  data['temps'][j][i]=parseInt(temps.getTime())-data['temps'][j][i];
}

function recupererQuestions(ajaxResponse){
  var json= JSON.parse(ajaxResponse);
  for (var i = 0; i < json.length; i++) {
    questions['solution_un'][i]=json[i]['solution_un'];
    questions['solution_deux'][i]=json[i]['solution_deux'];
    ajaxRequest('GET','php/request.php/propositions',recupererPropositions,'id_question='+json[i]['id_question'], function(){}, false);
  }
}

function recupererPropositions(ajaxResponse){
  var json= JSON.parse(ajaxResponse);
  var j =proposition.length;
  proposition[j]=new Array();
  solutionProposition[j]=new Array();
  data['temps'][j]=new Array();
  data['reponses'][j]=new Array();
  for (var i = 0; i < json.length; i++) {
    proposition[j][i]=json[i]['texte_proposition'];
    solutionProposition[j][i]=json[i]['solution_proposition'];
  }
  jeu();
}

function affichageScore(ajaxResponse){
var json= JSON.parse(ajaxResponse);

$("#score").innerHTML="Votre score : "+json['score']+" Dog";

$("#temps").innerHTML="Votre temps :   "+json['temps'];
}
