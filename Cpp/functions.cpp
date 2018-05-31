#include "functions.hpp"

void list(BDD& bdd){
	bdd.debug();
	bdd.list("categorie");
	bdd.list("difficulte");
	bdd.list("partie");
	bdd.list("proposition");
	bdd.list("question");
	bdd.list("score");
	bdd.list("utilisateurs");
}

/* Users */
std::vector<std::vector<std::string>> listUsers(BDD& bdd){
	return bdd.list("utilisateurs");
}
bool updateUsers(BDD& bdd, std::string condition, std::string args){
	
	
	return true;
}
bool deleteUsers(BDD& bdd, std::string condition){
	
	
	return true;
}

/* Category */
std::vector<std::vector<std::string>> listCategory(BDD& bdd){
	return bdd.list("categorie");
}
bool addCategory(BDD& bdd, std::string args){
	bdd.setTable("categorie");

	bdd.debug();
	bdd.insert(args);
	bdd.undebug();

	return true;
}
bool updateCategory(BDD& bdd, std::string condition, std::string args){
	
	
	return true;
}
bool deleteCategory(BDD& bdd, std::string condition){
	bdd.setTable("categorie");

	bdd.debug();
	bdd.remove("WHERE " + condition);
	bdd.undebug();

	return true;
}

/* Difficulty */
std::vector<std::vector<std::string>> listDifficulty(BDD& bdd){
	return bdd.list("difficulte");
}
bool updateDifficulty(BDD& bdd, std::string condition, std::string args){
	
	
	return true;
}

/* Game */
std::vector<std::vector<std::string>> listGame(BDD& bdd){
	return bdd.list("partie");
}
bool addGame(BDD& bdd, std::string args){
	
	
	return true;
}
bool updateGame(BDD& bdd, std::string condition, std::string args){
	
	
	return true;
}
bool deleteGame(BDD& bdd, std::string condition){
	
	
	return true;
}

/* Ask */
std::vector<std::vector<std::string>> listAsk(BDD& bdd){
	return bdd.list("proposition");
}
bool addAsk(BDD& bdd, std::string args){
	
	
	return true;
}
bool updateAsk(BDD& bdd, std::string condition, std::string args){
	
	
	return true;
}
bool deleteAsk(BDD& bdd, std::string condition){
	
	
	return true;
}

/* Question */
std::vector<std::vector<std::string>> listQuestion(BDD& bdd){
	return bdd.list("question");
}
bool addQuestion(BDD& bdd, std::string args){
	
	
	return true;
}
bool updateQuestion(BDD& bdd, std::string condition, std::string args){
	
	
	return true;
}
bool deleteQuestion(BDD& bdd, std::string condition){
	
	
	return true;
}

/* Points */
std::vector<std::vector<std::string>> listPoints(BDD& bdd){
	return bdd.list("score");
}
bool deletePoints(BDD& bdd, std::string condition){
	
	
	return true;
}
