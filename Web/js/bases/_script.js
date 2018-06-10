/*!
*
*	\file		_script.js
*	\author		Mathias CABIOCH-DELALANDE
*	\date		09 juin 2018
*
*/
'use strict';

/*!
* \brief	Adding a css stylesheet to the page
*		\param[in]		script				
*		\param[in]		css					
*
*		\return			
*/
function addCss(script, css){
	var link = document.createElement("link");
	var head = document.getElementsByTagName("head")[0];

	link.rel = "stylesheet";
	link.href = getPath(script)+css;

	head.appendChild(link);
}

/*!
* \brief	Getting the path of the page with the path written in the script tag
*		\param[in]		shape				
*
*		\return			
*/
function getPath(shape){
	var scripts = document.getElementsByTagName("script");
	var path = "";

	for(var i = 0; i < scripts.length; i++){
		var script = scripts[i];
		var pos;

		if((pos = (script.src).search(shape)) != -1){
			path = (script.src).substring(0, pos);
		}
	}

	return path;
}

/*!
* \brief	Creat a random string of the specified size
*		\param[in]		nb					
*
*		\return			
*/
function randStr(nb){
	var list = new Array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","0","1","2","3","4","5","6","7","8","9", " ", "", ".", ",", "?", "!", ":", ";");
	var str ='';
	for(var i = 0; i < nb; i++)
		str = str + list[Math.floor(Math.random()*list.length)];

	return str;
}

/* Get the dimensions of elements */
	/*!
	* \brief	Get the dimensions of the window
	*		\return			Return the window height
	*/
	function windowHeight(){
		var w = window,
			d = document,
			e = d.documentElement,
			g = d.getElementsByTagName('body')[0],
			y = parseInt(w.innerHeight || e.clientHeight || g.clientHeight);

		if(isNaN(y))
			return 0;

		return y;
	}
	/*!
	* \brief	Get the dimensions of the window
	*		\return			Return the window width
	*/
	function windowWidth(){
		var w = window,
			d = document,
			e = d.documentElement,
			g = d.getElementsByTagName('body')[0],
			x = parseInt(w.innerWidth || e.clientWidth || g.clientWidth);

		if(isNaN(x))
			return 0;

		return x;
	}

	/*!
	* \brief	Get an element dimension
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function getHeight(e){
		var out = parseInt(e.clientHeight || e.offsetHeight);
		return (isNaN(out))?0:out;
	}
	/*!
	* \brief	Get an element dimension
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function getWidth(e){
		var out = parseInt(e.clientWidth || e.offsetWidth);
		return (isNaN(out))?0:out;
	}

	/*!
	* \brief	Get the principal struct dimension
	*		\return			
	*/
	function getStructHeight(){
		var header = $("header");
		var nav = $("nav");
		var main = $("main");
		var footer = $("footer");
		var height = 0;

		if(isset(header)){
			height += getHeight(header);
		}
		if(isset(nav)){
			height += getHeight(nav);
		}
		if(isset(main)){
			height += getHeight(main);
		}
		if(isset(footer)){
			height += getHeight(footer);
		}

		return height;
	}
/**********************************/

/* Get the positions of an element */
	/*!
	* \brief	Get the positions of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function getTop(e){
		var out = parseInt(e.clientTop || e.offsetTop);
		return (isNaN(out))?0:out;
	}
	/*!
	* \brief	Get the positions of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function getBottom(e){
		var out = parseInt(e.clientBottom || e.offsetBottom);
		return (isNaN(out))?0:out;
	}

	/*!
	* \brief	Get the positions of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function getLeft(e){
		var out = parseInt(e.clientLeft || e.offsetLeft);
		return (isNaN(out))?0:out;
	}
	/*!
	* \brief	Get the positions of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function getRight(e){
		var out = parseInt(e.clientRight || e.offsetRight);
		return (isNaN(out))?0:out;
	}
/***********************************/

/* Get the positions of an element from the window */
	/*!
	* \brief	Get the positions of an element from the window
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function onWindowTop(e){
		if(!e){
			return 0;
		}
		return getTop(e) + onWindowTop(e.parentNode);
	}
	/*!
	* \brief	Get the positions of an element from the window
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function onWindowBottom(e){
		if(!e){
			return 0;
		}
		return getBottom(e) + onWindowBottom(e.parentNode);
	}

	/*!
	* \brief	Get the positions of an element from the window
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function onWindowLeft(e){
		if(!e){
			return 0;
		}
		return getLeft(e) + onWindowLeft(e.parentNode);
	}
	/*!
	* \brief	Get the positions of an element from the window
	*		\param[in]		e				The element to treat
	*
	*		\return			
	*/
	function onWindowRight(e){
		if(!e){
			return 0;
		}
		return getRight(e) + onWindowRight(e.parentNode);
	}
/***************************************************/

/* Function to verify the scroll position of an element */
	/*!
	* \brief	Function to verify the scroll position of an element
	*		\return			
	*/
	function getScrollTop(){
		return parseInt(document.documentElement.scrollTop || document.body.scrollTop);
	}
	/*!
	* \brief	Function to verify the scroll position of an element
	*		\return			
	*/
	function getScrollLeft(){
		return parseInt(document.documentElement.scrollLeft || document.body.scrollLeft)
	}
/********************************************************/

/* Function to simulate a scroll */
	/*!
	* \brief	Function to simulate a scroll
	*		\param[in]		el
	*		\param[in]		duration
	*
	*		\return			
	*/
	function scrollTo(el, duration) {
		var e = document.documentElement;

		if(getScrollTop() === 0){
			var t = getScrollTop();
			++e.scrollTop;
			e = t+1 === e.scrollTop--?e:document.body;
		}

		scrollToC(e, e.scrollTop, el, duration);
	}

	/*!
	* \brief	Function to simulate a scroll
	*		\param[in]		
	*		\param[in]		
	*		\param[in]		
	*		\param[in]		
	*
	*		\return			
	*/
	function scrollToC(el, from, to, duration) {
		if (duration < 0) return;
		if(typeof from === "object") from = from.offsetTop;
		if(typeof to === "object") to = to.offsetTop;

		scrollToX(el, from, to, 0, 1/duration, 20, easeOutCuaic);
	}

	/*!
	* \brief	Function to simulate a scroll
	*		\param[in]		
	*		\param[in]		
	*		\param[in]		
	*		\param[in]		
	*		\param[in]		
	*		\param[in]		
	*		\param[in]		
	*
	*		\return			
	*/
	function scrollToX(el, x1, x2, t, v, step, operacion) {
		if (t < 0 || t > 1 || v <= 0) return;

		el.scrollTop = x1 - (x1-x2)*operacion(t);
		t += v * step;

		setTimeout(function() {
			scrollToX(el, x1, x2, t, v, step, operacion);
		}, step);
	}

	/*!
	* \brief	An ease out animation
	*		\param[in]		
	*
	*		\return			
	*/
	function easeOutCuaic(t){
		t--;
		return t*t*t+1;
	}

	/*!
	* \brief	Get the offset of an element
	*		\param[in]		
	*
	*		\return			
	*/
	function getOffsetTop(e){
		var pos = 0;

		do {
			pos += e.offsetTop;
			e = e.offsetParent;
		} while(e != null);

		return pos;
	}

	/*!
	* \brief	Function to simulate a scroll
	*		\param[in]		
	*
	*		\return			
	*/
	function scrollToEnd(el){
		el.scrollTop = el.scrollHeight;
	}
/*********************************/

/*!
* \brief	Function that create a struct object with as fields, the ones that were pass in argument
*		\param[in]		
*
*		\return			
*/
function createStruct(fields) {
	var fields = fields.split(' ');
	var nbFields = fields.length;

	function constructor() {
		for (var i = 0; i < nbFields; ++i) {
			this[fields[i]] = arguments[i];
		}
	}

	return constructor;
}

/*!
* \brief	Function to know if a variable exist
*		\return			
*/
function isset(){
	var a = arguments;
	var l = a.length;

	for(var i = 0; i < l; ++i){
		if(typeof a[i] === "undefined" || a[i] === null){ return false; }
	}

	return true;
}

/*!
* \brief	Function to cancel a link click
*		\param[in]		
*
*		\return			
*/
function cancel(e){
	if(e && e.stopPropagation && e.preventDefault) {
		e.stopPropagation();
		e.preventDefault();
	} else if(e && window.event) {
		window.event.cancelBubble = true;
		window.event.returnValue = false;
	}

	return false;
}

/*!
* \brief	Function to get the event caller
*		\param[in]		
*
*		\return			
*/
function getEventElement(e){
	return e.target;
}

/*!
* \brief	Function to set the active class to an element and erase it if it is on an other one brother element
*		\param[in]		
*
*		\return			
*/
function setActive(e){
	var p = e.parentElement;
	var cs = p.children;

	for(var i = 0; i < cs.length; ++i){
		var c = cs[i];

		var classes = c.getAttribute("class");
		var outClass = "";

		if(isset(classes)){
			classes = classes.split("active");

			for(var j = 0; j < classes.length; ++j){
				outClass += classes[j];
			}
		}

		c.setAttribute("class", outClass);
	}

	var classes = e.getAttribute("class");

	if(isset(classes)){
		e.setAttribute("class", "active " + classes);
	} else {
		e.setAttribute("class", "active");
	}
}

/*!
* \brief	Function to set the id of an element
*		\param[in]		
*		\param[in]		
*
*		\return			
*/
function setId(e, id){
	if(isset(e) && isset(id)){
		e.setAttribute("id", id);
	}
}

/*!
* \brief	Function to copy the element text
*		\param[in]		
*
*		\return			
*/
function copyToClipboard(text){
	alert(text);
}

/*!
* \brief	Function that replace all occurences in a string
*		\param[in]		
*		\param[in]		
*		\param[in]		
*
*		\return			
*/
function replace_all(from, to, str){
	return str.split(from).join(to);
}

/* Functions that will be launched at the window onload event */
	var onloadFunctions = new Array;
	var onloadLine = createStruct("f args");

	/*!
	* \brief	Add a function to the onloadFunction array and save the arguments
	*		\param[in]		
	*
	*		\return			
	*/
	function addOnload(funct){
		var args = new Array;
		for(var i = 1; i < arguments.length; ++i){
			args.push(arguments[i]);
		}

		var line = new onloadLine(funct, args);
		var length = onloadFunctions.length;

		onloadFunctions.push(line);
	}

	/*! \brief	Launch the functions in the array with the arguments passed */
	function launchOnloadFunctions(){
		for(var i = 0; i < onloadFunctions.length; ++i){
			onloadFunctions[i].f.apply(null, onloadFunctions[i].args);
		}
	}

	/*! \brief	Put the function in the onload event */
	window.onload = launchOnloadFunctions;
/**************************************************************/

/* Functions that will be launched at the window onresize event */
	var onresizeFunctions = new Array;
	var onresizeLine = createStruct("f args");

	/*!
	* \brief	Add a function to the onresizeFunction array and save the arguments
	*		\param[in]		
	*
	*		\return			
	*/
	function addOnresize(funct){
		var args = new Array;
		for(var i = 1; i < arguments.length; ++i){
			args.push(arguments[i]);
		}

		var line = new onresizeLine(funct, args);
		var length = onresizeFunctions.length;

		onresizeFunctions.push(line);
	}

	/*! \brief	Launch the functions in the array with the arguments passed */
	function resizeOnloadFunctions(){
		for(var i = 0; i < onresizeFunctions.length; ++i){
			onresizeFunctions[i].f.apply(null, onresizeFunctions[i].args);
		}
	}

	/*! \brief	Put the function in the onresize event */
	window.onresize = resizeOnloadFunctions;
/**************************************************************/

/*!
* \brief	Disable an element
*		\param[in]		
*
*		\return			
*/
function disable(el){
	if(isset(el)){
		el.setAttribute("disabled", true);
	}
}
/*!
* \brief	Enable an element
*		\param[in]		
*
*		\return			
*/
function enable(el){
	if(isset(el)){
		el.removeAttribute("disabled");
	}
}

/* Layout of the elements */
	var footerInterval;
	var footerElement;

	/*! \brief	Place all the elements (header, nav, main, footer) in the HTML body */
	function placeAll(){
		var height = getHeight(footerElement);

		if(height != 0){
			clearInterval(footerInterval);

			var body = $("body");
			var header = $("header");
			var nav = $("nav");
			var main = $("main");
			var footer = footerElement;

			body.style.height = "auto";
				header.style.height = "auto";
				nav.style.height = "auto";
				main.style.height = "auto";
				footer.style.height = "auto";

			if(getStructHeight() <= windowHeight()){
				var newMainHeight = windowHeight() - getHeight(header) - getHeight(nav) - getHeight(footer);

				body.style.height = windowHeight() + "px";

				main.style.height = newMainHeight + "px";
				main.style.marginBottom = "0";
			} else {
				body.style.height = "auto";
				body.style.paddingBottom = "1px";

				main.style.height = "auto";
				main.style.marginBottom = height + "px";
			}
		}
	}

	/*! \brief	Set the position of all the elements (header, nav, main, footer) */
	function setAll(){
		footerElement = $("footer");

		if(isset(footerInterval)){
			clearInterval(footerInterval);
		}

		if(getHeight(footerElement) == 0){
			footerInterval = setInterval(placeAll, 100);
		} else {
			setTimeout(placeAll, 100);
		}
	}

	addOnload(setAll);
	addOnresize(setAll);
/**************************/

/*!
* \fn		$(selector)
* \brief	Selector as in JQuery
*		\param[in]		selector			The css selector of the wanted object
*/
var $ = function(selector){
	return document.querySelector(selector);
}

/* Add an ease-out effect to scroll to a position where a link point to */
document.addEventListener('DOMContentLoaded', function() {
	var links = document.querySelectorAll('a[href*="#"]');
	for(var i = 0, len = links.length; i < len; ++i) {
		links[i].onclick = function(){
			if(location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = this.getAttribute("href").slice(1);
				if(target.length) {
					scrollTo(getOffsetTop(document.getElementById(target)), 1500);
					return false;
				}
			}
		};
	}
});
/************************************************************************/
