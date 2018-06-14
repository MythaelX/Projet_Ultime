/*!
*	\file creation
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

ajaxRequest('GET','php/request.php/tableauThemes',affichageThemes);
ajaxRequest('GET','php/request.php/tableauDifficulte',affichageDifficulte);
$("#boutonCreer").addEventListener('click',creerPartie);
var nbThemes=0;

/*!
*	\brief    display themes
*		\param[in]		ajaxResponse   The array of the themes
*/
function affichageThemes(ajaxResponse){
  var text,json;
  text="";
  json= JSON.parse(ajaxResponse);
  for (var i = 0; i < json.length; i++) {
    text+='<tr><td>'+
    '<input type="checkbox" id="checkbox'+i+'" name="choix" value="'+json[i]["nom_categorie"]+'">'+'</td><td>'+
    json[i]["nom_categorie"]+'</td></tr>';
    nbThemes+=1;
  }
  $('#tableauThemes').innerHTML= text;
}

/*!*	\brief    Send Data in ajax to create a game and if at least one box is checked */
function creerPartie(){
  var difficulte,themes,nbQuestions,j;
  themes= new Array();
  j=0;
  for (var i = 0; i < nbThemes; i++) {
    if($('#checkbox'+i).checked == true){
      themes[j]=$('#checkbox'+i).value;
      j++;
    }
  }
  if(j==0){
    httpErrors(400,'Veuillez cocher au moins une case dans le tableau');
  }else{
    difficulte=$('#difficulte').value;
    ajaxRequest('POST','php/request.php/creerPartie',function(numPartie){
      alert("Partie n°"+numPartie+" créée");
      document.location="./index.php";
    }
    ,'themes='+themes+'&difficulte='+difficulte);
  }
}
