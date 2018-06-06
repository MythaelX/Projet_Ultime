/*!
* \file functions.hpp
* \author Mathias CABIOCH-DELALANDE
* \date 05 juin 2018
*/
#ifndef HEADER_FUNCTIONS
#define HEADER_FUNCTIONS

#include "Widgets/C++/C++.hpp"

/*!
* \brief	List the entries in the bdd
*		\param[in]		bdd			The bdd var
*		\return			void
*/
void list(BDD& bdd);

/* Users */
/*!
* \brief	List the users
*		\param[in]		bdd			The bdd var
*		\return			Return a vector of vector of string
*/
ListArray listUsers(BDD& bdd);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\return			\b true or \b false
*/
bool addUsers(BDD& bdd, std::string args);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool updateUsers(BDD& bdd, std::string args, std::string condition);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool deleteUsers(BDD& bdd, std::string condition);

/* Category */
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\return			Return a vector of vector of string
*/
ListArray listCategory(BDD& bdd);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\return			Return the index of the added entry
*/
size_t addCategory(BDD& bdd, std::string args);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool updateCategory(BDD& bdd, std::string args, std::string condition);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool deleteCategory(BDD& bdd, std::string condition);

/* Difficulty */
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\return			Return a vector of vector of string
*/
ListArray listDifficulty(BDD& bdd);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool updateDifficulty(BDD& bdd, std::string args, std::string condition);

/* Game */
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\return			Return a vector of vector of string
*/
ListArray listGame(BDD& bdd);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\return			Return the index of the added entry
*/
size_t addGame(BDD& bdd, std::string args);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool updateGame(BDD& bdd, std::string args, std::string condition);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool deleteGame(BDD& bdd, std::string condition);

/* Ask */
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\return			Return a vector of vector of string
*/
ListArray listAsk(BDD& bdd);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\return			Return the index of the added entry
*/
size_t addAsk(BDD& bdd, std::string args);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool updateAsk(BDD& bdd, std::string args, std::string condition);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool deleteAsk(BDD& bdd, std::string condition);

/* Question */
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\return			Return a vector of vector of string
*/
ListArray listQuestion(BDD& bdd);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\return			Return the index of the added entry
*/
size_t addQuestion(BDD& bdd, std::string args);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		args		The arguments to treat
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool updateQuestion(BDD& bdd, std::string args, std::string condition);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool deleteQuestion(BDD& bdd, std::string condition);

/* Points */
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\return			Return a vector of vector of string
*/
ListArray listPoints(BDD& bdd);
/*!
* \brief	
*		\param[in]		bdd			The bdd var
*		\param[in]		condition	The conditions for the treatment
*		\return			\b true or \b false
*/
bool deletePoints(BDD& bdd, std::string condition);

/* Format */
/*!
* \brief	
*		\param[in]		str		The string to treat
*		\param[in]		table	The table to format for
*		\return			Return the formatted string
*/
std::string formatColumn(std::string str, std::string table);

/*!
* \brief Read a Cascade Style Sheet and translate it for Qt
*	\param[in]		path		The path to the file
*	\return			Return the file contents as a string
*/
std::string cssReader(std::string path);

#endif //HEADER_FUNCTIONS
