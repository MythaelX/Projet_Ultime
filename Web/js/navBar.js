'use strict';

var pseudo =null;
if(Cookies.get('pseudo')){
  pseudo = Cookies.get('pseudo');
}

affichageNav(pseudo);

function affichageNav(pseudo){
  if(pseudo==null){
    affichageDeconnecter();
  }else{
    ajaxRequest('GET', 'php/request.php/navInfo', affichageConnecter,'pseudo='+pseudo);
  }
}

function affichageDeconnecter(){
  var text ="";
  text+='<li><a href="./connexion.php" target="_self">CONNEXION</a></li>';
	text+='<li><a href="./inscription.php" target="_self">INSCRIPTION</a></li>';
  $('#connexion').innerHTML= text;
}

function affichageConnecter(ajaxResponse){
  var json= JSON.parse(ajaxResponse);
  var text ="";
  console.log(json[0]['avatar']);
  text+='<li><span><img src="files/img/'+json[0]['avatar']+'" alt="Avatar">'+json[0]['pseudo']+'</span></li>';
  text+='<li class="deconnexion" id="boutonDeconnexion"><img src="design/img/deconnexion.png" alt="icon deconnexion"><span ">Deconnexion</span></li>';
  $('#connexion').innerHTML= text;
  $('#boutonDeconnexion').addEventListener('click',deconnexion);
}

function deconnexion(){
  ajaxRequest('DELETE','php/request.php/sessionDestroy')
  Cookies.remove('pseudo');
  Cookies.remove('token');
  Cookies.remove('PHPSESSID');
  $('#boutonDeconnexion').removeEventListener('click',deconnexion);
  document.location.reload(true);
}
