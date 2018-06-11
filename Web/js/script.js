'use strict';

function posMain(){
	var main = $("main");
	if(isIn("index.php")){
		if($("#accueilPerso").style.display == "none"){
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
	}
}

addOnresize(posMain);
