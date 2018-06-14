/*!
*
*	\file		string.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		14 juin 2018
*
*/
#ifndef HEADER_STRING
#define HEADER_STRING

#include <locale>
#include <regex>

#include "macro.hpp"
#include "convert.hpp"
#include "array.hpp"
#include "RNG.hpp"
#include "errors.hpp"

/*!
* \brief	Explode a string in an array with the given caracter
*		\param[in]		in			The string to cut
*		\param[in]		separator	The separator caracter to cut \a in
*
*		\return			Return an array with the differents parts of the cut string
*/
std::vector<std::string> split(std::string in, char separator = ' ');
/*!
* \brief	Explode a string in an array with the given string
*		\param[in]		in		The string to cut
*		\param[in]		c		The separator string to cut \a in
*
*		\return			void
*/
std::vector<std::string> split(std::string in, std::string c);
/*!
* \brief	Explode a string in an array with the given separators
*		\param[in]		in		The string to cut
*		\param[in]		cars	The separators string to cut \a in
*
*		\return			void
*/
std::vector<std::string> split(std::string in, std::vector<std::string> cars);


/*! \brief Alias for \b split */
	ALIAS_TEMPLATE_FUNCTION(explode, split);
/***********/

/*!
* \brief	Delete all the too-much spaces in the given string
*		\param[in,out]		in		The string to treat
*
*		\return			void
*/
void trim(std::string& in);

/*!
* \brief	Set the given interval to uppercase
*		\param[in]		str		The string to treat
*		\param[in]		begin	The begininng of the transformation
*		\param[in]		end		The end of the transformation
*
*		\return			Return the changed string
*/
std::string uppercase(std::string str, std::string::iterator begin, std::string::iterator end);
/*!
* \brief	Set the given interval to lowercase
*		\param[in]		str		The string to treat
*		\param[in]		begin	The begininng of the transformation
*		\param[in]		end		The end of the transformation
*
*		\return			Return the changed string
*/
std::string lowercase(std::string str, std::string::iterator begin, std::string::iterator end);

/*!
* \brief	Replace something by something else in a string using regex_replace
*		\param[in]		str		The string to treat
*		\param[in]		from	The string to replace
*		\param[in]		to		The string to use to replace
*		\param[in]		regex	\b true or \b false, \b true if \a from is a regex
*
*		\return			Return the changed string
*/
std::string replace(std::string str, std::string from, std::string to, bool regex = false);

/*!
* \brief	Create a random string
*		\param[in]		nb		The number of caracters
*
*		\return			Return the rand string
*/
std::string randStr(size_t nb);

/*!
* \brief	Count the number of appearances
*		\param[in]			text			The text to read
*		\param[in]			c				The caracter to find
*		\return				Return number of appearances
*/
size_t count(std::string text, char c);

#endif //HEADER_STRING
