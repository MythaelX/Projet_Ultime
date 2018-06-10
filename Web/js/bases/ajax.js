/*!
*
*	\file		ajax.js
*	\author		Mathias CABIOCH-DELALANDE
*	\date		09 juin 2018
*
*/
'use strict';

var errorDiv = document.getElementById("errors");
var divErrorsClass = "container";

/*!
* \brief	Initialize the error div
*		\param[in]		errorNumber				The number of the error
*		\param[in]		errorText				The text of the error
*
* \details	The function is called when an error occurs in the request
*/
function httpErrors(errorNumber, errorText){
	var out = "<b>Error</b> : ";

	if(!errorDiv){
		errorDiv = document.createElement("div");
		document.getElementsByTagName("body")[0].insertAdjacentElement("afterbegin", errorDiv);
	}
	errorDiv.style.display = "inline-block";

	errorDiv.style.position = "fixed";
	errorDiv.style.top = "10px";

	errorDiv.style.zIndex = "666";
	errorDiv.style.opacity = "1";

	out += errorNumber + " - " + errorText;
	switch(errorNumber){
		case 401:
		case 403:
		case 405:
		case 406:
		case 500:
		case 501:
		case 520:
			errorDiv.style.backgroundImage = "";
			errorDiv.style.color = "";
			errorDiv.setAttribute("class", divErrorsClass+" alert alert-danger");
			break;
		case 418:
			errorDiv.style.backgroundImage = "linear-gradient(#ff72c4, #ff3697)";
			errorDiv.style.color = "yellow";
			errorDiv.setAttribute("class", divErrorsClass+" alert");
			break;
		default:
			errorDiv.style.backgroundImage = "";
			errorDiv.style.color = "";
			errorDiv.setAttribute("class", divErrorsClass+" alert alert-warning");
			break;
	}
	errorDiv.innerHTML = out;

	var hideErrorInterval = setInterval(function(){}, 10000);

	/*! \brief	After 2 seconds, hide the div more and more every 0.05 seconds */
	setTimeout(function(){
		clearInterval(hideErrorInterval);

		hideErrorInterval = setInterval(function(){
			var opacity = errorDiv.style.opacity;
			opacity -= 0.01;

			if(opacity < 0){
				errorDiv.style.display = "none";
				clearInterval(hideErrorInterval);
			} else {
				errorDiv.style.opacity = opacity;
			}

		}, 50);
	}, 2000);
}

/*! \brief	On success, hide the error div */
function httpSuccess(){
	if(!errorDiv){
		errorDiv = document.createElement("div");
		document.getElementsByTagName("body")[0].insertAdjacentElement("afterbegin", errorDiv);
	}
}

/*!
* \brief	The function that start an ajax request
*		\param[in]		type					The type of the request \b GET, \b POST, \b PUT, \b DELETE, \b AUTH
*		\param[in]		request					The file to request for
*		\param[in]		callback				The function to call on success
*		\param[in]		data					The datas to send
*		\param[in]		errorCallback			The function to call on error
*		\param[in]		async					Set if the request has to be \b synchronous(false) or \b asynchronous(true)
*/
function ajaxRequest(type, request, callback, data = null, errorCallback = function(){}, async = true){
	if((type == "POST" || type == "PUT") && data == null){
		console.log("Please put datas to be sended with this protocol");
		return;
	}

	var xhr;
	var auth = 0;
	xhr = new XMLHttpRequest();

	/* On AUTH */
		if(type == "AUTH"){
			type = "GET";
			auth = 1;
		}
	/***********/

	/* If it's GET or DELETE  and if there are datas and it's no an AUTH */
		if((type == "GET" || type == "DELETE") && data != null){
			if(!auth){
				request += "?" + data;
			}
		}
	/*************************/

	xhr.open(type, request, async);
	if(Cookies.get('token')){
		xhr.setRequestHeader('Authorization', 'Bearer ' + Cookies.get('token'));
	}

	/* Add a header for a POST or PUT */
	if(type == "POST" || type == "PUT"){
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	}
	/* Add another header for an AUTH */
	if(auth){
		if(Cookies.get('token')){} else {
			xhr.setRequestHeader('Authorization', 'Basic ' + btoa(data));
		}
	}

	/* Set the onload function */
	xhr.onload = function(){
		switch(xhr.status){
			case 200:
			case 201:
				httpSuccess();
				callback(xhr.responseText);
				break;
			default:
				httpErrors(xhr.status, xhr.statusText);
				errorCallback(xhr.responseText);
		}
	};

	/* Send what is needed according to the protocol */
	if(type == "GET" || type == "DELETE"){
		xhr.send(null);
	} else if(type == "POST" || type == "PUT"){
		xhr.send(data);
	}
}
