/*!
*	\file jeu
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

/* Array for display Question propositions and take the time */
var questions=new Array();
questions['solution_un']=new Array();
questions['solution_deux']=new Array();
questions['id_question']=new Array();
var proposition=new Array();
var data=new Array();
data['temps']=new Array();
data['reponses']=new Array();
/***************************/

var compteurProposition=0;
var compteurQuestion=0;

ajaxRequest('GET','php/request.php/nomDifficulte',affichageDifficulte,'id_partie='+id_partie);
ajaxRequest('GET','php/request.php/questions',recupererQuestions,'id_partie='+id_partie);

$("#bouton1").addEventListener('click',compteur);
$("#bouton2").addEventListener('click',compteur);
$("#bouton3").addEventListener('click',compteur);

/*!
*	\brief    Advance the counter by 1 of proposition or question and go to the game function for change display.
*		\param[in]		event   The event of the button
*/
function compteur(event){
  var reponse=this.textContent;
  recuperationReponseTemp(reponse);
  if(compteurProposition>=proposition[compteurQuestion].length-1){
    compteurProposition=0;
    compteurQuestion+=1;
  }else{
    compteurProposition+=1;
  }
  jeu();
}

/*!
*	\brief    display difficulty.
*		\param[in]		ajaxResponse   The Array of "nom_difficulte"
*/
function affichageDifficulte(ajaxResponse){
  var json= JSON.parse(ajaxResponse);
  $("#difficulte").innerHTML="Menu "+json[0]['nom_difficulte'];
}

/*!
*	\brief    check if the game is over.
*
*	\details    If the game is not finished
* he call the function "affichageJeu".Otherwise he send data to calculate score with an ajax request
*/
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

/*!*	\brief    display the questions and propositions with the value of counter question and proposition.*/
function affichageJeu(){
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

/*!
*	\brief    Get the time and value of the answer with an ajax request for the value.
*		\param[in]		reponse   The reponse of the player
*/
function recuperationReponseTemp(reponse){
  var i,j,temps;
  i=compteurProposition;
  j=compteurQuestion;
  temps=new Date();
  ajaxRequest('GET','php/request.php/solutionspropositions',function(ajaxResponse){
    var json= JSON.parse(ajaxResponse);
    data['reponses'][j][i]=json['verification'];
  },'texte_proposition='+proposition[j][i]+'&reponse='+reponse+'&id_question='+questions['id_question'][j], function(){}, false);
  data['temps'][j][i]=parseInt(temps.getTime())-data['temps'][j][i];
}

/*!
*	\brief    Recover the Questions and send an ajax request who send data in the function "recupererPropositions".
*		\param[in]		ajaxResponse   The arrays of "solution_un","solution_deux","id_questions"
*/
function recupererQuestions(ajaxResponse){
  var json= JSON.parse(ajaxResponse);
  for (var i = 0; i < json.length; i++) {
    questions['solution_un'][i]=json[i]['solution_un'];
    questions['solution_deux'][i]=json[i]['solution_deux'];
    questions['id_question'][i]=json[i]['id_question'];
    ajaxRequest('GET','php/request.php/propositions',recupererPropositions,'id_question='+json[i]['id_question'], function(){}, false);
  }
}

/*!
*	\brief    Recover the propositions of the array json and create array to recover time and answer then he call the function jeu.
*		\param[in]		ajaxResponse   The arrays of "solution_un","solution_deux","id_questions"
*/
function recupererPropositions(ajaxResponse){
  var json= JSON.parse(ajaxResponse);
  var j =proposition.length;
  proposition[j]=new Array();
  data['temps'][j]=new Array();
  data['reponses'][j]=new Array();
  for (var i = 0; i < json.length; i++) {
    proposition[j][i]=json[i]['texte_proposition'];
  }
  jeu();
}

/*!
*	\brief    Display the time and the score of the game
*		\param[in]		ajaxResponse   The arrays of "score" and "time"
*/
function affichageScore(ajaxResponse){
var json= JSON.parse(ajaxResponse);
$("#score").innerHTML="Votre score : "+json['score']+" Dog";
$("#temps").innerHTML="Votre temps :   "+json['temps'];
}
