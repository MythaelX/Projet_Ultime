#include "functions.hpp"

void list(BDD& bdd){
	bdd.list("categorie");
	bdd.list("difficulte");
	bdd.list("partie");
	bdd.list("proposition");
	bdd.list("question");
	bdd.list("score");
	bdd.list("utilisateurs");
}

/* Users */
ListArray listUsers(BDD& bdd){
	return bdd.list("utilisateurs");
}
bool addUsers(BDD& bdd, std::string args){
	bdd.setTable("utilisateurs");

	bdd.insert(args);

	return true;
}
bool updateUsers(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("utilisateurs");

	bdd.update(args, condition);

	return true;
}
bool deleteUsers(BDD& bdd, std::string condition){
	bdd.setTable("utilisateurs");

	bdd.remove("WHERE " + condition);

	return true;
}

/* Category */
ListArray listCategory(BDD& bdd){
	return bdd.list("categorie");
}
size_t addCategory(BDD& bdd, std::string args){
	bdd.setTable("categorie");

	bdd.insert(args);

	return bdd.lastId();
}
bool updateCategory(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("categorie");

	bdd.update(args, condition);

	return true;
}
bool deleteCategory(BDD& bdd, std::string condition){
	bdd.setTable("categorie");

	bdd.remove("WHERE " + condition);

	return true;
}

/* Difficulty */
ListArray listDifficulty(BDD& bdd){
	return bdd.list("difficulte");
}
bool updateDifficulty(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("difficulte");

	bdd.update(args, condition);

	return true;
}

/* Game */
ListArray listGame(BDD& bdd){
	return bdd.list("partie");
}
size_t addGame(BDD& bdd, std::string args){
	bdd.setTable("partie");

	bdd.insert(args);

	return bdd.lastId();
}
bool updateGame(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("partie");

	bdd.update(args, condition);

	return true;
}
bool deleteGame(BDD& bdd, std::string condition){
	bdd.setTable("partie");

	bdd.remove("WHERE " + condition);

	return true;
}

/* Ask */
ListArray listAsk(BDD& bdd){
	return bdd.list("proposition");
}
size_t addAsk(BDD& bdd, std::string args){
	bdd.setTable("proposition");

	bdd.insert(args);

	return bdd.lastId();
}
bool updateAsk(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("proposition");

	bdd.update(args, condition);

	return true;
}
bool deleteAsk(BDD& bdd, std::string condition){
	bdd.setTable("proposition");

	bdd.remove("WHERE " + condition);

	return true;
}

/* Question */
ListArray listQuestion(BDD& bdd){
	return bdd.list("question");
}
size_t addQuestion(BDD& bdd, std::string args){
	bdd.setTable("question");

	bdd.insert(args);

	return bdd.lastId();;
}
bool updateQuestion(BDD& bdd, std::string args, std::string condition){
	bdd.setTable("question");

	bdd.update(args, condition);

	return true;
}
bool deleteQuestion(BDD& bdd, std::string condition){
	bdd.setTable("question");

	bdd.remove("WHERE " + condition);

	return true;
}

/* Points */
ListArray listPoints(BDD& bdd){
	return bdd.list("joue_a");
}
bool deletePoints(BDD& bdd, std::string condition){
	bdd.setTable("joue_a");

	bdd.remove("WHERE " + condition);

	return true;
}

/* Format */
std::string formatColumn(std::string str, std::string table){
	std::string out = replace(BDD::formatColumn(str), table, "");

	trim(out);

	return uppercase(out, out.begin(), out.begin()+1);
}
