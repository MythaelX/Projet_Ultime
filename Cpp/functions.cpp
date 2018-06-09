#include "functions.hpp"

/* Format */
std::string formatColumn(std::string str, std::string table){
	std::string out = replace(BDD::formatColumn(str), table, "");

	trim(out);

	return uppercase(out, out.begin(), out.begin()+1);
}

/* Create a game */
bool createGame(std::vector<std::string> values){
	std::string difficulty = values[1];
	std::string themes = "";

	size_t idGame = bdd.insert(implode(values, ", "), "", "partie");
	if(idGame == 0){ return false; }

	auto res = bdd.query("SELECT `nb_questions` FROM `difficulte` WHERE `id_difficulte`='" + difficulty + "'");
	if(res == nullptr){
		bdd.remove("WHERE id_partie = " + tos(idGame), "", "partie");
		return false;
	}

	auto questionsRes = bdd.query("SELECT q.id_question FROM `question` AS q, `categorie` AS c WHERE " + themes + " c.id_categorie = q.id_categorie ORDER BY RAND()");
	if(questionsRes == nullptr){
		bdd.remove("WHERE id_partie = " + tos(idGame), "", "partie");
		return false;
	}

	res->next();
	size_t nb = res->getInt(1);

	std::vector<std::string> questionsTab;
	while(questionsRes->next()){
		questionsTab.push_back(questionsRes->getString(1));
	}

	for (size_t i{0}; i < nb && i < questionsTab.size(); ++i) {
		std::string idQuest = questionsTab[i];

		size_t id = bdd.insert(idQuest + ", " + tos(idGame), "", "contient");

		if(id == 0){
			bdd.remove("WHERE id_partie = " + tos(idGame), "", "contient");
			bdd.remove("WHERE id_partie = " + tos(idGame), "", "partie");
		}
	}

	return true;
}
