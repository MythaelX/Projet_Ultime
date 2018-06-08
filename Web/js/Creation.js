ajaxRequest('GET','php/request.php/tableauThemes',affichageThemes);
ajaxRequest('GET','php/request.php/tableauDifficulte',affichageDifficulte);
$("#boutonCreer").addEventListener('click',creerPartie);
var nbThemes=0;
function affichageThemes(ajaxResponse){
  var text,json;
  text="";
  json= JSON.parse(ajaxResponse);
  for (var i = 0; i < json.length; i++) {
    text+='<tr><td>'+
    '<input type="checkbox" id="checkbox'+i+'" name="choix" value="'+json[i]["nom_categorie"]+'">'+'</td><td>'+
    'Partie'+json[i]["nom_categorie"]+
    '</td></tr>';
    nbThemes+=1;
  }
  $('#tableauThemes').innerHTML= text;
}
function affichageDifficulte(ajaxResponse){
  var text,json;
  text="";
  json= JSON.parse(ajaxResponse);
  for (var i = 0; i < json.length; i++) {
    text+='<option value="1">'+json[i]['nom_difficulte']+'</option>';
  }
  $('#difficulte').innerHTML= text;
}
//Creation de la partie
function creerPartie(){
  var difficulte,theme,nbQuestions,j;
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
    console.log(themes);
    difficulte=$('#difficulte').value;
    ajaxRequest('POST','php/request.php/creerPartie',function(){
      alert("Partie Crée");
      document.location="./index.php";
    }
    ,'themes='+themes+'&difficulte='+difficulte);
  }
}
