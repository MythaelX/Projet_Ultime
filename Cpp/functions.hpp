/*!
* \file functions.hpp
* \author Mathias CABIOCH-DELALANDE
* \date 09 juin 2018
*/
#ifndef HEADER_FUNCTIONS
#define HEADER_FUNCTIONS

#include "Widgets/C++/C++.hpp"

/*!
* \brief	Format the string to erase the table name
*		\param[in]		str		The string to treat
*		\param[in]		table	The table to format for
*		\return			Return the formatted string
*/
std::string formatColumn(std::string str, std::string table);

/*!
* \brief	Create a game
*/
bool createGame(std::vector<std::string> values);

#endif //HEADER_FUNCTIONS
