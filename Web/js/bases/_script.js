/*!
*	\mainpage	My own JS Features
*		\par	Some classes & ids
*					- score					(\b class)
*						- width					(\b attributes)
*						- height				(\b attributes)
*						- min					(\b attributes)
*						- max					(\b attributes)
*						- note					(\b attributes)
*						- degre					(\b attributes)
*					- map					(\b id)
*						- path					(\b attributes)
*						- plain-color			(\b attributes)
*						- line-color			(\b attributes)
*						- hover-plain-color		(\b attributes)
*						- hover-line-color		(\b attributes)
*						- scale					(\b attributes)
*					- gallery				(\b class)
*					- tchat					(\b id)
*						- human					(\b class)
*						- bot					(\b class)
*					- stars					(\b id)
*					- shower				(\b class)
*		\par	Functions
*					- addOnload()
*					- addOnresize()
*					- ajaxRequest()
*					- html_encode()
*					- html_decode()
*
*	\date		10 juin 2018
*	\author		Mathias CABIOCH-DELALANDE
*/
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
*		\param[in]		script				The script to get the path to the css
*		\param[in]		css					The css filename
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
*		\param[in]		shape				The shape of the path to search
*
*		\return			Return the path finded
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
*		\param[in]		nb					The number of caracters
*
*		\return			Return a random string
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
			y = parseFloat(w.innerHeight || e.clientHeight || g.clientHeight);

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
			x = parseFloat(w.innerWidth || e.clientWidth || g.clientWidth);

		if(isNaN(x))
			return 0;

		return x;
	}

	/*!
	* \brief	Get an element dimension
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the element height
	*/
	function getHeight(e){
		var out = parseFloat(e.clientHeight || e.offsetHeight);
		return (isNaN(out))?0:out;
	}
	/*!
	* \brief	Get an element dimension
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the element width
	*/
	function getWidth(e){
		var out = parseFloat(e.clientWidth || e.offsetWidth);
		return (isNaN(out))?0:out;
	}

	/*!
	* \brief	Get an element dimension
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the element height + margins
	*/
	function getTotalHeight(e){
		var out = getHeight(e) + parseFloat(getStyle(e).marginTop) + parseFloat(getStyle(e).marginBottom);
		return (isNaN(out))?0:out;
	}
	/*!
	* \brief	Get an element dimension
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the element width + margins
	*/
	function getTotalWidth(e){
		var out = getWidth(e) + parseFloat(getStyle(e).marginLeft) + parseFloat(getStyle(e).marginRight);
		return (isNaN(out))?0:out;
	}

	/*!
	* \brief	Get the principal struct dimension
	*		\return			Return the total struct height
	*/
	function getStructHeight(){
		var header = $("header");
		var nav = $("nav");
		var main = $("main");
		var footer = $("footer");
		var height = 0;

		if(isset(header)){
			height += getTotalHeight(header);
		}
		if(isset(nav)){
			height += getTotalHeight(nav);
		}
		if(isset(main)){
			height += getTotalHeight(main);
		}
		if(isset(footer)){
			height += getTotalHeight(footer);
		}

		return height;
	}
/**********************************/

/* Get the positions of an element */
	/*!
	* \brief	Get the positions of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the top position of an element
	*/
	function getTop(e){
		var out = parseFloat(e.clientTop || e.offsetTop);
		return (isNaN(out))?0:out;
	}
	/*!
	* \brief	Get the positions of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the bottom position of an element
	*/
	function getBottom(e){
		var out = parseFloat(e.clientBottom || e.offsetBottom);
		return (isNaN(out))?0:out;
	}

	/*!
	* \brief	Get the positions of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the left position of an element
	*/
	function getLeft(e){
		var out = parseFloat(e.clientLeft || e.offsetLeft);
		return (isNaN(out))?0:out;
	}
	/*!
	* \brief	Get the positions of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the right position of an element
	*/
	function getRight(e){
		var out = parseFloat(e.clientRight || e.offsetRight);
		return (isNaN(out))?0:out;
	}
/***********************************/

/* Get the positions of an element from the window */
	/*!
	* \brief	Get the positions of an element from the window
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the top position of an element from the window
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
	*		\return			Return the bottom position of an element from the window
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
	*		\return			Return the left position of an element from the window
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
	*		\return			Return the right position of an element from the window
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
	*		\return			Return the scroll top position
	*/
	function getScrollTop(){
		return parseFloat(document.documentElement.scrollTop || document.body.scrollTop);
	}
	/*!
	* \brief	Function to verify the scroll position of an element
	*		\return			Return the scroll left position
	*/
	function getScrollLeft(){
		return parseFloat(document.documentElement.scrollLeft || document.body.scrollLeft)
	}
/********************************************************/

/* Function to simulate a scroll */
	/*!
	* \brief	Function to simulate a scroll
	*		\param[in]		el				The element to treat
	*		\param[in]		duration		The time to go to the element
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
	*		\param[in]		el				The element to treat
	*		\param[in]		from			The start element
	*		\param[in]		to				The end element
	*		\param[in]		duration		The time to go to the element
	*/
	function scrollToC(el, from, to, duration) {
		if (duration < 0) return;
		if(typeof from === "object") from = from.offsetTop;
		if(typeof to === "object") to = to.offsetTop;

		scrollToX(el, from, to, 0, 1/duration, 20, easeOutCuaic);
	}

	/*!
	* \brief	Function to simulate a scroll
	*		\param[in]		el				The element to treat
	*		\param[in]		x1				The X position of the first element
	*		\param[in]		x2				The X position of the second element
	*		\param[in]		t				The new position
	*		\param[in]		v				The speed to go to
	*		\param[in]		step			The number of step to go to
	*		\param[in]		operacion		The function to do the scroll animation
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
	*		\param[in]		t				The new position
	*
	*		\return			Return t^3 + 1
	*/
	function easeOutCuaic(t){
		t--;
		return t*t*t+1;
	}

	/*!
	* \brief	Get the offset of an element
	*		\param[in]		e				The element to treat
	*
	*		\return			Return the offset top of an element
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
	* \brief	Scroll to the end of something
	*		\param[in]		el				The element to treat
	*/
	function scrollToEnd(el){
		el.scrollTop = el.scrollHeight;
	}
/*********************************/

/*!
* \brief	Function to get the computed style of an element
*		\param[in]		el					The element to get the style of
*
*		\return			Return a variable that contains the computed style of the element
*/
function getStyle(el){
	return el.currentStyle || window.getComputedStyle(el);
}

/*!
* \brief	Function to know if is the asked page
*		\param[in]		page				The page to search
*
*		\return			\b true or \b false
*/
function isIn(page){
	page = "/" + page;
	if(window.location.pathname.indexOf(page) != -1){ return true; }
	return false;
}

/*!
* \brief	Function that create a struct object with as fields, the ones that were pass in argument
*		\param[in]		fields				The fields to add to the struct
*
*		\return			Return the constructor of the struct
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
*		\param[in]		args				The variable to verify if it exists
*		\return			\b true or \b false
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
*		\param[in]		e				The element to treat
*
*		\return			\b false
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
*		\param[in]		e				The event to treat
*
*		\return			Return the target of the event
*/
function getEventElement(e){
	return e.target;
}

/*!
* \brief	Function to set the active class to an element and erase it if it is on an other one brother element
*		\param[in]		e				The element to treat
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
*		\param[in]		e				The element to treat
*		\param[in]		id				The id to set to the element
*/
function setId(e, id){
	if(isset(e) && isset(id)){
		e.setAttribute("id", id);
	}
}

/*!
* \brief	Function to copy the element text
*		\param[in]		text				The text to copy to the clipboard
* \todo
*/
function copyToClipboard(text){
	alert(text);
}

/*!
* \brief	Function that replace all occurences in a string
*		\param[in]		from				The caracter to replace
*		\param[in]		to					The caracter to use for the replacement
*		\param[in]		str					The string in which to do the replacement
*
*		\return			Return the replaced string
*/
function replace_all(from, to, str){
	return str.split(from).join(to);
}

/* Functions that will be launched at the window onload event */
	var onloadFunctions = new Array;
	var onloadLine = createStruct("f args");

	/*!
	* \brief	Add a function to the onloadFunction array and save the arguments
	*		\param[in]		funct			The function to add
	*		\param[in]		args			The arguments of the function
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
	*		\param[in]		funct			The function to add
	*		\param[in]		args			The arguments of the function
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
*		\param[in]		el				The element to treat
*/
function disable(el){
	if(isset(el)){
		el.setAttribute("disabled", true);
	}
}
/*!
* \brief	Enable an element
*		\param[in]		el				The element to treat
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

			if(isset(body)){
				body.style.height = "auto";
			}
			if(isset(header)){
				header.style.height = "auto";
			}
			if(isset(nav)){
				nav.style.height = "auto";
			}
			if(isset(main)){
				main.style.height = "auto";
			}
			if(isset(footer)){
				footer.style.height = "auto";
			}

			if(getStructHeight() <= windowHeight()){
				var newMainHeight = windowHeight();
				
				if(isset(header)){
					newMainHeight -= getTotalHeight(header);
				}
				if(isset(nav)){
					newMainHeight -= getTotalHeight(nav);
				}
				if(isset(main)){
					newMainHeight -= parseFloat(getStyle(main).marginTop);
				}
				if(isset(footer)){
					newMainHeight -= getTotalHeight(footer);
				}

				if(isset(body)){
					body.style.height = windowHeight() + "px";
				}

				if(isset(main)){
					main.style.height = newMainHeight + "px";
					main.style.marginBottom = "0";
				}
			} else {
				if(isset(body)){
					body.style.height = "auto";
					body.style.paddingBottom = "1px";
				}

				if(isset(main)){
					main.style.height = "auto";
					main.style.marginBottom = height + "px";
				}
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
* \brief	Selector as in JQuery
*		\param[in]		selector			The css selector of the wanted object
*/
var $ = function(selector){
	return document.querySelector(selector);
}

/*! \brief	Add an ease-out effect to scroll to a position where a link point to */
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
