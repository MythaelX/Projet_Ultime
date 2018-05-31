#include <QApplication>

#include "MainWindow.h"

int main(int argc, char** argv) {
	arguments.addProg(argc, argv);

	bdd.connect("127.0.0.1:3306", "hotdogquizz", "hotdogquizz");

	bdd.setDatabase("hotdogquiz");

	bool continueTests = true;
	while(continueTests){
		std::cout << Cls();

		std::cout << "What do you want to do ?" << std::endl;
			std::cout << "\t 1 : List users" << std::endl;
			std::cout << "\t 2 : Add a user" << std::endl;
			std::cout << "\t 3 : Update a user" << std::endl;
			std::cout << "\t 4 : Delete a user" << std::endl;

			std::cout << "\t 5 : List the categories" << std::endl;
			std::cout << "\t 6 : Add a category" << std::endl;
			std::cout << "\t 7 : Update a category" << std::endl;
			std::cout << "\t 8 : Delete a category" << std::endl;

			std::cout << "\t 9 : List the difficulties" << std::endl;
			std::cout << "\t10 : Update a difficulty" << std::endl;

			std::cout << "\t11 : List the games" << std::endl;
			std::cout << "\t12 : Add a game" << std::endl;
			std::cout << "\t13 : Update a game" << std::endl;
			std::cout << "\t14 : Delete a game" << std::endl;

			std::cout << "\t15 : List the asks" << std::endl;
			std::cout << "\t16 : Add an ask" << std::endl;
			std::cout << "\t17 : Update an ask" << std::endl;
			std::cout << "\t18 : Delete an ask" << std::endl;

			std::cout << "\t19 : List the questions" << std::endl;
			std::cout << "\t20 : Add a question" << std::endl;
			std::cout << "\t21 : Update a question" << std::endl;
			std::cout << "\t22 : Delete a question" << std::endl;

			std::cout << "\t23 : List the points" << std::endl;
			std::cout << "\t24 : Delete a point" << std::endl;
	
			std::cout << "\t25 : Quit" << std::endl;

		int action;
		std::cin >> action;

		switch(action){
			/*case 1:
				break;
			case 2:
				break;
			case 3:
				break;
			case 4:
				break;*/
			case 5:{
				auto list = listCategory(bdd);
				std::cout << "Catégories ;" << std::endl;

				for(auto line : list){
					std::cout << "\t- ";

					for(auto item : line){
						std::cout << item << " : ";
					}

					std::cout << std::endl;
				}
				break;}
			case 6:{
				addCategory(bdd, "Tests, 0");
				break;}
			case 7:{
				updateCategory(bdd, "categorie_actif = 1", "WHERE nom_categorie = Tests");
				break;}
			case 8:{
				deleteCategory(bdd, "nom_categorie = Tests");
				break;}
			/*case 9:
				break;
			case 10:
				break;
			case 11:
				break;
			case 12:
				break;
			case 13:
				break;
			case 14:
				break;
			case 15:
				break;
			case 16:
				break;
			case 17:
				break;
			case 18:
				break;
			case 19:
				break;
			case 20:
				break;
			case 21:
				break;
			case 22:
				break;
			case 23:
				break;
			case 24:
				break;*/
			default:
				continueTests = false;
				break;
		}
	}

	return 0;

	/*QApplication app(argc, argv);
	MainWindow w;

	w.show();

	return app.exec();*/
}
