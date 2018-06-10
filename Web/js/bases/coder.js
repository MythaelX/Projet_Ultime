/*!
*
*	\file		coder.js
*	\author		Mathias CABIOCH-DELALANDE
*	\date		09 juin 2018
*
*/
/*!
* \brief	Encode html caracters in string
*		\param[in]		str			The string to encode
*
*		\return			Return the encoded string
*/
function html_encode(str) {
	return String(str).replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"');
}

/*!
* \brief	Decode html caracters in string
*		\param[in]		str			The string to decode
*
*		\return			Return the decoded string
*/
function html_decode(str) {
	return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}
