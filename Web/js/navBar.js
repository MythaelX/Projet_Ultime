/*!
*	\file navBar
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

'use strict';

affichageNav();

/*!
*	\brief  Manage the display of the navBar if a pseudo cookie exists or not.
*
*/
function affichageNav(){
  var pseudo;
  if(Cookies.get('pseudo')){
    pseudo = Cookies.get('pseudo');
    ajaxRequest('GET', 'php/request.php/navInfo', affichageConnecter,'pseudo='+pseudo);
  }else{
    affichageDeconnecter();
  }
}

/*!
*	\brief  Displays the navbar when you are disconnected
*
*/
function affichageDeconnecter(){
  var text ="";
  text+='<li><a href="./connexion.php" target="_self">CONNEXION</a></li>';
	text+='<li><a href="./inscription.php" target="_self">INSCRIPTION</a></li>';
  $('#connexion').innerHTML= text;
}

/*!
*	\brief  Displays the navbar when you are connected
*
*/
function affichageConnecter(ajaxResponse){
  var json= JSON.parse(ajaxResponse);
  var text ="";
  text+='<li><span><img src="'+json[0]['avatar']+'" alt="Avatar">'+json[0]['pseudo']+'</span></li>';
  text+='<li class="deconnexion" id="boutonDeconnexion"><img src="design/img/deconnexion.png" alt="icon deconnexion"><span ">Deconnexion</span></li>';
  $('#connexion').innerHTML= text;
  $('#boutonDeconnexion').addEventListener('click',deconnexion);
}

/*!
*	\brief  Delete cookies and the current session and reload the page
*
*/
function deconnexion(){
  ajaxRequest('DELETE','php/request.php/sessionDestroy')
  Cookies.remove('pseudo');
  Cookies.remove('token');
  Cookies.remove('PHPSESSID');
  $('#boutonDeconnexion').removeEventListener('click',deconnexion);
  document.location.reload(true);
}
