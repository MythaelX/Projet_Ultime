/*!
*	\file script
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/

/*!*	\brief    set marginTop for the style for all pages*/
function posMain(){
	var main = $("main");
	if(isIn("index.php")){
		if(main.style.display == "none"){
			main.style.marginTop = "5%";
		} else {
			main.style.marginTop = "8%";
		}
	} else if(isIn("connexion.php")){
		main.style.marginTop = "5%";
	} else if(isIn("inscription.php")){
		main.style.marginTop = "3%";
	} else if(isIn("palmares.php")){
		main.style.marginTop = "2%";
	}else if(isIn("creer-une-partie.php")){
		main.style.marginTop = "3%";
	}else if(isIn("jeu.php")){
		main.style.marginTop = "3%";
	}
}

addOnresize(posMain);
