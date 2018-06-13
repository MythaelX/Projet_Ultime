/*!
*	\file authentification
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

'use strict';

$("#boutonConnexion").addEventListener('click',valideLogin);

/*!
*	\brief    verifies the authentication
*		\param[in]		event   The event of the button
*
*	\details   check if the fields are not empty and send an ajax request.
*  Then he creates a cookie "pseudo" and a cookie "token" thanks to the informations receive with the ajax request.
*/
function valideLogin(event) {
    var pseudo, mdp, text, xhr;
    event.preventDefault();
    pseudo = $('#pseudo').value;
    mdp = $('#mdp').value;

    if (pseudo == '' || mdp == '') {
        text = 'L\'un des champs est vide.';
        httpErrors(400,text)
    } else {

    ajaxRequest('AUTH','php/request.php/authentification',function(token){
      Cookies.set('token', token);
      Cookies.set('pseudo', pseudo);
      document.location="./index.php";
    },pseudo + ':' + mdp);
  }
}
