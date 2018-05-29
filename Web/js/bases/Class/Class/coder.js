/************************************************************************************/
/*																					*/
/*					File : coder.js													*/
/*						Created by Mathias CABIOCH-DELALANDE						*/
/*							Last modification : 21/04/2018							*/
/*																					*/
/*						Authorization : use only									*/
/*																					*/
/************************************************************************************/

'use strict';

function html_encode(str) {
    return String(str).replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"');
}

function html_decode(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}
