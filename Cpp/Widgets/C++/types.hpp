/*!
*
*	\file		types.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		29 mai 2018
*
*/
#ifndef HEADER_TYPES
#define HEADER_TYPES

#include <iostream>
#include <typeinfo>

/*!
* \brief	Print the type of \â obj
*		\param[in]		obj		The variable to print the type of
*
*		\return			void
*/
template<class C>
void printType(C& obj){
	std::cout << "Object type : '" << typeid(obj).name() << "'" << std::endl;
}

namespace Typer{
	/*!
	* \brief	Get the position of the first letter in the in string
	*		\param[in]		in		The string where to find the first letter
	*
	*		\return			Return the position in a size_t
	*/
	size_t firstLetter(std::string in);
};

/*!
* \brief	Get the type of \a obj in a string
*		\param[in]		obj		The variable to get the type of
*
*		\return			Return the type of \a obj
*/
template<class C>
typename std::enable_if<!std::is_pointer<C>::value, std::string>::type
getType(C& obj){
	std::string id{typeid(obj).name()};
	return id.substr(Typer::firstLetter(id));
}

/*!
* \brief	Get the type of a pointer \a obj in a string
*		\param[in]		obj		The variable to get the type of
*
*		\return			Return the type of \a obj
*/
template<class C>
typename std::enable_if<std::is_pointer<C>::value, std::string>::type
getType(C obj){
	std::string id{typeid(*obj).name()};
	return id.substr(Typer::firstLetter(id));
}

#endif //HEADER_TYPES
