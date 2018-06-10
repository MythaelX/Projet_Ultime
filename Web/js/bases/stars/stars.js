/*!
*
*	\file		stars.js
*	\author		Mathias CABIOCH-DELALANDE
*	\date		09 juin 2018
*
*	\details	Add \b stars to the page at \b onload \n
*				The value of the choosen note is in an hidden input\n
*				\b id = starInput
*				\b name = stars
*
*/
'use strict';

var starParent;
var stars;
var input;
var path;

/*! \brief	Initialize the differents stars in the page */
function initStars(){
	starParent = document.getElementById("stars");

	if(!starParent){
		return;
	}

	var scripts = document.getElementsByTagName("script");

	for(var i = 0; i < scripts.length; i++){
		var script = scripts[i];
		var pos;

		if((pos = (script.src).search("stars/stars.js")) != -1){
			path = (script.src).substring(0, pos);
		}
	}

	createStars();
	input = document.getElementById("starInput");
}

/*! \brief	Create all the stars that will be shown in the page */
function createStars(){
	var link = document.createElement("link");
	var head = document.getElementsByTagName("head")[0];

	link.rel = "stylesheet";
	link.href = path+"stars/stars.css";

	head.appendChild(link);

	var code = "";

	for(var i = 0; i < 5; i++){
		var a = i+0.5;
		var b = i+1;

		code += "<img src=\""+path+"stars/img/starLV.png\" alt=\"left star "+b+"\" onmouseover=\"enlight("+a+");\" onmouseout=\"envoid();\" onclick=\"choose("+a+");\" class=\"starChoice\" />";
		code += "<img src=\""+path+"stars/img/starRV.png\" alt=\"right star "+b+"\" onmouseover=\"enlight("+b+");\" onmouseout=\"envoid();\" onclick=\"choose("+b+");\" class=\"starChoice\" />";
	}

	code += "\n<input type=\"hidden\" value=0 name=\"stars\" id=\"starInput\" />";

	starParent.innerHTML = code;

	listImgs();
}

var change = 1;

/*! \brief	List the images for the stars */
function listImgs(){
	var imgs = document.getElementsByTagName("img");
	stars = new Array();

	for(var i = 0; i < imgs.length; i++){
		if(imgs[i].className == "starChoice"){
			stars[stars.length] = imgs[i];
		}
	}
}

/*!
* \brief	Enlight the stars to match with the value
*		\param[in]		val				The value to know how to enlight the stars
*/
function enlight(val){
	var index = (val * 2);

	for(var i = 0; i < index; i++){
		stars[i].src = (stars[i].src).replace("V", "P");
	}

	change = 1;
}

/*! \brief	Envoid all the stars */
function envoid(){
	if(change){
		for(var i = 0; i < stars.length; i++){
			stars[i].src = (stars[i].src).replace("P", "V");
		}
	}
}

/*!
* \brief	Enlight the stars and put the choosen value in the right input
*		\param[in]		val				The value of the choosen star
*/
function choose(val){
	var index = (val * 2);

	for(var i = 0; i < index; i++){
		stars[i].src = (stars[i].src).replace("V", "P");
	}

	input.value = val;

	change = 0;
}

addOnload(initStars);
