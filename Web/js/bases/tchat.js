/*!
*
*	\file		tchat.js
*	\author		Mathias CABIOCH-DELALANDE
*	\date		09 juin 2018
*
*	\details	- Implement a tchat on the website \n
*				- Create an object(\b div, \b span, ...) with the id \b tchat \n
*				- You can add some attributes ; \n
*					- \b textbefore : The input text's placeholder \n
*					- \b buttonvalue : The text on the sender button
*
*/
'use strict';

var tchatContainer;
var tchatTextZone;
	var tchatChildType = "li";
var tchatSendZone;
	var tchatTextToSend;
	var tchatButton;

/*!
* \brief	Create the child that will contains the text
*		\param[in]		text			The text to put in the child object
*
*		\return			Return the child that contains the text
*/
function tchatChildCreator(text){
	var child = document.createElement(tchatChildType);
	child.innerHTML = text;

	return child;
}

/*!
* \brief	Add a received message to the that with class \b bot
*		\param[in]		text			The message to add to the tchat
*/
function tchatAddAnswer(text){
	var tchatChild = tchatChildCreator(text);

	tchatChild.setAttribute("class", "bot");

	putTchatChild(tchatChild);
}

/*!
* \brief	Add a written message to the tchat with class \b human
*		\param[in]		text			The message to add to the tchat
*/
function tchatAddQuestion(text){
	var tchatChild = tchatChildCreator(text);

	tchatChild.setAttribute("class", "human");

	putTchatChild(tchatChild);
}

/*!
* \brief	Add the new message in the tchatbox
*		\param[in]		child			The object that contains the message to add
*
*		\return			Scroll to the end of the tchatbox
*/
function putTchatChild(child){
	tchatTextZone.appendChild(child);
	scrollToEnd(tchatTextZone);
}

/*! \brief	Initialize the tchat */
function initTchat(){
	tchatContainer = document.getElementById("tchat");

	tchatContainer.innerHTML = "";

	tchatTextZone = document.createElement("ul");
		tchatTextZone.style.overflowY = "scroll";
	tchatSendZone = document.createElement("div");
		tchatSendZone.style.textAlign = "center";
		tchatTextToSend = document.createElement("input");
			tchatTextToSend.style.width = "75%";
			tchatTextToSend.style.margin = "0";
		tchatButton = document.createElement("button");
			tchatButton.style.width = "20%";
			tchatButton.style.margin = "0";

	/*! \brief	Create the tchat's variables */
	tchatTextZone.id = "tchat_text_zone";

	tchatSendZone.id = "tchat_send_zone";

		tchatButton.innerHTML = tchatContainer.getAttribute("buttonvalue");
		tchatButton.setAttribute("onclick", "tchatSend();");
		tchatButton.id = "tchat_button";

		tchatTextToSend.placeholder = tchatContainer.getAttribute("textbefore");
		tchatTextToSend.setAttribute("onkeypress", "if(event.keyCode == 13){ tchatSend(); }");
		tchatTextToSend.setAttribute("autofocus", "");
		tchatTextToSend.id = "tchat_text_to_send";

	/*! \brief	Create the tchat's children */
	tchatContainer.appendChild(tchatTextZone);
	tchatContainer.appendChild(tchatSendZone);
		tchatSendZone.appendChild(tchatTextToSend);
		tchatSendZone.appendChild(tchatButton);

	/*! \brief	Print the welcome message */
	ajaxRequest("GET", "php/bases/tchat.php/start", function(val){
		tchatAddAnswer(val);
	});
}

/*! \brief	Send something in the tchat with AJAX */
function tchatSend(){
	var tchatText = tchatTextToSend.value;
	tchatTextToSend.value = "";

	if(tchatText == "")
		return;

	tchatAddQuestion(tchatText);
	ajaxRequest("POST", "php/bases/tchat.php/talk", function(val){
		tchatAddAnswer(val);
	}, "text="+tchatText);
}

/*! \brief	Launch the initialization of the tchat */
addOnload(initTchat);
