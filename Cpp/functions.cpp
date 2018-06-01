#include "functions.hpp"

void list(BDD& bdd){
	//bdd.debug();
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
bool addUsers(BDD& bdd, std::string args){
	bdd.setTable("utilisateurs");

	//bdd.debug();
	bdd.insert(args);
	//bdd.undebug();

	return true;
}
bool updateUsers(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("utilisateurs");

	//bdd.debug();
	bdd.update(args, condition);
	//bdd.undebug();
	
	return true;
}
bool deleteUsers(BDD& bdd, std::string condition){
	bdd.setTable("utilisateurs");

	//bdd.debug();
	bdd.remove("WHERE " + condition);
	//bdd.undebug();
	
	return true;
}

/* Category */
std::vector<std::vector<std::string>> listCategory(BDD& bdd){
	return bdd.list("categorie");
}
size_t addCategory(BDD& bdd, std::string args){
	bdd.setTable("categorie");

	//bdd.debug();
	bdd.insert(args);
	//bdd.undebug();

	return bdd.lastId();
}
bool updateCategory(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("categorie");

	//bdd.debug();
	bdd.update(args, condition);
	//bdd.undebug();

	return true;
}
bool deleteCategory(BDD& bdd, std::string condition){
	bdd.setTable("categorie");

	//bdd.debug();
	bdd.remove("WHERE " + condition);
	//bdd.undebug();

	return true;
}

/* Difficulty */
std::vector<std::vector<std::string>> listDifficulty(BDD& bdd){
	return bdd.list("difficulte");
}
bool updateDifficulty(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("difficulte");

	//bdd.debug();
	bdd.update(args, condition);
	//bdd.undebug();
	
	return true;
}

/* Game */
std::vector<std::vector<std::string>> listGame(BDD& bdd){
	return bdd.list("partie");
}
size_t addGame(BDD& bdd, std::string args){
	bdd.setTable("partie");

	//bdd.debug();
	bdd.insert(args);
	//bdd.undebug();
	
	return bdd.lastId();
}
bool updateGame(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("partie");

	//bdd.debug();
	bdd.update(args, condition);
	//bdd.undebug();
	
	return true;
}
bool deleteGame(BDD& bdd, std::string condition){
	bdd.setTable("partie");

	//bdd.debug();
	bdd.remove("WHERE " + condition);
	//bdd.undebug();
	
	return true;
}

/* Ask */
std::vector<std::vector<std::string>> listAsk(BDD& bdd){
	return bdd.list("proposition");
}
size_t addAsk(BDD& bdd, std::string args){
	bdd.setTable("proposition");

	//bdd.debug();
	bdd.insert(args);
	//bdd.undebug();
	
	return bdd.lastId();
}
bool updateAsk(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("proposition");

	//bdd.debug();
	bdd.update(args, condition);
	//bdd.undebug();
	
	return true;
}
bool deleteAsk(BDD& bdd, std::string condition){
	bdd.setTable("proposition");

	//bdd.debug();
	bdd.remove("WHERE " + condition);
	//bdd.undebug();
	
	return true;
}

/* Question */
std::vector<std::vector<std::string>> listQuestion(BDD& bdd){
	return bdd.list("question");
}
size_t addQuestion(BDD& bdd, std::string args){
	bdd.setTable("question");

	//bdd.debug();
	bdd.insert(args);
	//bdd.undebug();
	
	return bdd.lastId();;
}
bool updateQuestion(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("question");

	//bdd.debug();
	bdd.update(args, condition);
	//bdd.undebug();
	
	return true;
}
bool deleteQuestion(BDD& bdd, std::string condition){
	bdd.setTable("question");

	//bdd.debug();
	bdd.remove("WHERE " + condition);
	//bdd.undebug();
	
	return true;
}

/* Points */
std::vector<std::vector<std::string>> listPoints(BDD& bdd){
	return bdd.list("joue_a");
}
bool deletePoints(BDD& bdd, std::string condition){
	bdd.setTable("joue_a");

	//bdd.debug();
	bdd.remove("WHERE " + condition);
	//bdd.undebug();
	
	return true;
}
