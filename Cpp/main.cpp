#include <QApplication>

#include "MainWindow.h"

int main(int argc, char** argv) {
	arguments.addProg(argc, argv);

	bdd.connect("127.0.0.1:3306", "hotdogquiz", "hotdogquiz");

	bdd.setDatabase("hotdogquiz");

	bool continueTests = true;
	while(continueTests){
		std::cout << Cls();

		std::cout << "What do you want to do ?" << std::endl;
			std::cout << "\t 1 : Users" << std::endl;
			std::cout << "\t 2 : Categories" << std::endl;

			std::cout << "\t 3 : List the difficulties" << std::endl;
//			std::cout << "\t 4 : Update a difficulty" << std::endl;

//			std::cout << "\t 5 : Games" << std::endl;
//			std::cout << "\t 6 : Asks" << std::endl;
			std::cout << "\t 7 : Questions" << std::endl;

			std::cout << "\t 8 : List the points" << std::endl;
//			std::cout << "\t 9 : Delete a point" << std::endl;

			std::cout << "\t10 : Quit" << std::endl;

		int action;
		std::cin >> action;

		std::cout << Cls();
		switch(action){
			case 1:{
				std::string printer("Utilisateurs");
				auto list = listUsers(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				addUsers(bdd, "exemple@exemple.fr, hello, azerty, ../");

				list = listUsers(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				updateUsers(bdd, "password = 42", "WHERE mail = exemple@exemple.fr");

				list = listUsers(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				deleteUsers(bdd, "mail = exemple@exemple.fr");

				list = listUsers(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}
				break;}
			case 2:{
				std::string printer("Catégories");
				auto list = listCategory(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				addCategory(bdd, "NULL, Tests, 0");

				list = listCategory(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				updateCategory(bdd, "categorie_actif = 1", "WHERE nom_categorie = Tests");

				list = listCategory(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				deleteCategory(bdd, "nom_categorie = Tests");

				list = listCategory(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}
				break;}
			case 3:{
				std::string printer("Difficultés");
				auto list = listDifficulty(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}
				break;}
			case 4:{
				break;}
			case 5:{
				std::string printer("Parties");
				auto list = listGame(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				addGame(bdd, "Tests, 0");

				list = listGame(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				updateGame(bdd, "categorie_actif = 1", "WHERE nom_categorie = Tests");

				list = listGame(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				deleteGame(bdd, "nom_categorie = Tests");

				list = listGame(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}
				break;}
			case 6:{
				std::string printer("Propositions");
				auto list = listAsk(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				addAsk(bdd, "Tests, 0");

				list = listAsk(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				updateAsk(bdd, "categorie_actif = 1", "WHERE nom_categorie = Tests");

				list = listAsk(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				deleteAsk(bdd, "nom_categorie = Tests");

				list = listAsk(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}
				break;}
			case 7:{
				std::string printer("Questions");
				auto list = listQuestion(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				addQuestion(bdd, "NULL, Bernard Tapis, un Tapis, People, 1");

				list = listQuestion(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				updateQuestion(bdd, "solution_deux = un Rocher", "WHERE id_question = 1");

				list = listQuestion(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}

				deleteQuestion(bdd, "id_question = 1");

				list = listQuestion(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}
				break;}
			case 8:{
				std::string printer("Scores");
				auto list = listPoints(bdd);
				std::cout << printer << " ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}
				break;}
			case 9:{
				break;}
			default:
				continueTests = false;
				break;
		}

		if(continueTests){
			char c;
			std::cout << "Continue (o/n) ? ";
			std::cin >> c;
		}
	}

	return 0;

	/*QApplication app(argc, argv);
	MainWindow w;

	w.show();

	return app.exec();*/
}
