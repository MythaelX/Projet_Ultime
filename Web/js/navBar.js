var pseudo =null;
if(Cookies.get('pseudo')){
  pseudo = Cookies.get('pseudo');
}

affichageNav(pseudo);

function affichageNav(pseudo){
  if(pseudo==null){
    affichageDeconnecter();
  }else{
    ajaxRequest('GET', 'php/request.php/navInfo?&pseudo='+pseudo, affichageConnecter);
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
  text+='<li><span><img src="design/img/presentation.png" alt="Avatar">'+json[0]['pseudo']+'</span></li>';
  text+='<li class="deconnexion" id="boutonDeconnexion"><img src="design/img/presentation.png" alt="icon deconnexion"><span ">Deconnexion</span></li>';
  $('#connexion').innerHTML= text;
  $('#boutonDeconnexion').addEventListener('click',deconnexion);
}

function deconnexion(){
  Cookies.remove('pseudo');
  $('#boutonDeconnexion').removeEventListener('click',deconnexion);
  document.location.reload(true);
}
