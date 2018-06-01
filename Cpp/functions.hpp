#ifndef HEADER_FUNCTIONS
#define HEADER_FUNCTIONS

#include "Widgets/C++/C++.hpp"

void list(BDD& bdd);

/* Users */
std::vector<std::vector<std::string>> listUsers(BDD& bdd);
bool addUsers(BDD& bdd, std::string args);
bool updateUsers(BDD& bdd, std::string args, std::string condition);
bool deleteUsers(BDD& bdd, std::string condition);

/* Category */
std::vector<std::vector<std::string>> listCategory(BDD& bdd);
size_t addCategory(BDD& bdd, std::string args);
bool updateCategory(BDD& bdd, std::string args, std::string condition);
bool deleteCategory(BDD& bdd, std::string condition);

/* Difficulty */
std::vector<std::vector<std::string>> listDifficulty(BDD& bdd);
bool updateDifficulty(BDD& bdd, std::string args, std::string condition);

/* Game */
std::vector<std::vector<std::string>> listGame(BDD& bdd);
size_t addGame(BDD& bdd, std::string args);
bool updateGame(BDD& bdd, std::string args, std::string condition);
bool deleteGame(BDD& bdd, std::string condition);

/* Ask */
std::vector<std::vector<std::string>> listAsk(BDD& bdd);
size_t addAsk(BDD& bdd, std::string args);
bool updateAsk(BDD& bdd, std::string args, std::string condition);
bool deleteAsk(BDD& bdd, std::string condition);

/* Question */
std::vector<std::vector<std::string>> listQuestion(BDD& bdd);
size_t addQuestion(BDD& bdd, std::string args);
bool updateQuestion(BDD& bdd, std::string args, std::string condition);
bool deleteQuestion(BDD& bdd, std::string condition);

/* Points */
std::vector<std::vector<std::string>> listPoints(BDD& bdd);
bool deletePoints(BDD& bdd, std::string condition);

#endif //HEADER_FUNCTIONS
