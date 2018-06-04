#include "functions.hpp"

void list(BDD& bdd){
	#if DEBUG
		bdd.debug();
	#endif

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

	#if DEBUG
		bdd.debug();
	#endif

	bdd.insert(args);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}
bool updateUsers(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("utilisateurs");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.update(args, condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}
bool deleteUsers(BDD& bdd, std::string condition){
	bdd.setTable("utilisateurs");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.remove("WHERE " + condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}

/* Category */
std::vector<std::vector<std::string>> listCategory(BDD& bdd){
	return bdd.list("categorie");
}
size_t addCategory(BDD& bdd, std::string args){
	bdd.setTable("categorie");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.insert(args);

	#if DEBUG
		bdd.undebug();
	#endif

	return bdd.lastId();
}
bool updateCategory(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("categorie");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.update(args, condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}
bool deleteCategory(BDD& bdd, std::string condition){
	bdd.setTable("categorie");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.remove("WHERE " + condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}

/* Difficulty */
std::vector<std::vector<std::string>> listDifficulty(BDD& bdd){
	return bdd.list("difficulte");
}
bool updateDifficulty(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("difficulte");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.update(args, condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}

/* Game */
std::vector<std::vector<std::string>> listGame(BDD& bdd){
	return bdd.list("partie");
}
size_t addGame(BDD& bdd, std::string args){
	bdd.setTable("partie");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.insert(args);

	#if DEBUG
		bdd.undebug();
	#endif

	return bdd.lastId();
}
bool updateGame(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("partie");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.update(args, condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}
bool deleteGame(BDD& bdd, std::string condition){
	bdd.setTable("partie");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.remove("WHERE " + condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}

/* Ask */
std::vector<std::vector<std::string>> listAsk(BDD& bdd){
	return bdd.list("proposition");
}
size_t addAsk(BDD& bdd, std::string args){
	bdd.setTable("proposition");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.insert(args);

	#if DEBUG
		bdd.undebug();
	#endif

	return bdd.lastId();
}
bool updateAsk(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("proposition");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.update(args, condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}
bool deleteAsk(BDD& bdd, std::string condition){
	bdd.setTable("proposition");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.remove("WHERE " + condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}

/* Question */
std::vector<std::vector<std::string>> listQuestion(BDD& bdd){
	return bdd.list("question");
}
size_t addQuestion(BDD& bdd, std::string args){
	bdd.setTable("question");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.insert(args);

	#if DEBUG
		bdd.undebug();
	#endif

	return bdd.lastId();;
}
bool updateQuestion(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("question");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.update(args, condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}
bool deleteQuestion(BDD& bdd, std::string condition){
	bdd.setTable("question");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.remove("WHERE " + condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}

/* Points */
std::vector<std::vector<std::string>> listPoints(BDD& bdd){
	return bdd.list("joue_a");
}
bool deletePoints(BDD& bdd, std::string condition){
	bdd.setTable("joue_a");

	#if DEBUG
		bdd.debug();
	#endif

	bdd.remove("WHERE " + condition);

	#if DEBUG
		bdd.undebug();
	#endif

	return true;
}
