/*!
* \file functions.hpp
* \author Mathias CABIOCH-DELALANDE
* \date 02 juin 2018
*/
#ifndef HEADER_FUNCTIONS
#define HEADER_FUNCTIONS

#include "Widgets/C++/C++.hpp"

#define DEBUG 1

void list(BDD& bdd);

/* Users */
ListArray listUsers(BDD& bdd);
bool addUsers(BDD& bdd, std::string args);
bool updateUsers(BDD& bdd, std::string args, std::string condition);
bool deleteUsers(BDD& bdd, std::string condition);

/* Category */
ListArray listCategory(BDD& bdd);
size_t addCategory(BDD& bdd, std::string args);
bool updateCategory(BDD& bdd, std::string args, std::string condition);
bool deleteCategory(BDD& bdd, std::string condition);

/* Difficulty */
ListArray listDifficulty(BDD& bdd);
bool updateDifficulty(BDD& bdd, std::string args, std::string condition);

/* Game */
ListArray listGame(BDD& bdd);
size_t addGame(BDD& bdd, std::string args);
bool updateGame(BDD& bdd, std::string args, std::string condition);
bool deleteGame(BDD& bdd, std::string condition);

/* Ask */
ListArray listAsk(BDD& bdd);
size_t addAsk(BDD& bdd, std::string args);
bool updateAsk(BDD& bdd, std::string args, std::string condition);
bool deleteAsk(BDD& bdd, std::string condition);

/* Question */
ListArray listQuestion(BDD& bdd);
size_t addQuestion(BDD& bdd, std::string args);
bool updateQuestion(BDD& bdd, std::string args, std::string condition);
bool deleteQuestion(BDD& bdd, std::string condition);

/* Points */
ListArray listPoints(BDD& bdd);
bool deletePoints(BDD& bdd, std::string condition);

/* Format */
std::string formatColumn(std::string str, std::string table);

/*!
* \brief Read a Cascade Style Sheet and translate it for Qt
*	\param[in]		path		The path to the file
*	\return			Return the file contents as a string
*/
std::string cssReader(std::string path);

#endif //HEADER_FUNCTIONS
