#include "MainWindow.h"

void MainWindow::createAdminWidgets(){
	tablesList = bdd.tables();

	deletePtr(hLayouts["connect container"]);

	hLayouts["admin container"] = new QHBoxLayout;

	for(auto& tables : tablesList){
		for(auto& table : tables){
			if(table != "contient" && table != "joue_a"){
				tabs[table] = new QWidget;
				tabWidget->addTab(tabs[table], table.c_str());

				std::string mapIndex = table + " container";
				vLayouts[mapIndex] = new QVBoxLayout;

				tabs[table]->setLayout(vLayouts[mapIndex]);

				auto tableLines = bdd.list(table);

				size_t index = 0;
				for(auto& tableLine : tableLines){
					std::string mapLineIndex = table + " " + tos(index);
					hLayouts[mapLineIndex] = new QHBoxLayout;

					vLayouts[mapIndex]->addLayout(hLayouts[mapLineIndex]);

					size_t lineIndex = 0;
					for(auto& lineContent : tableLine){
						std::string labelIndex = "label " + tos(index) + " " + tos(lineIndex);
						labels[labelIndex] = new QLabel;
						
						labels[labelIndex]->setText(lineContent.c_str());
						
						hLayouts[mapLineIndex]->addWidget(labels[labelIndex]);
						
						lineIndex++;
					}

					index++;
				}
			}
		}
	}

	this->setContentAdminWidgets();
}

void MainWindow::initAdminWidgets(){
	/*reader.open("res/config");
	auto config_lines = getlines(reader);

	std::string url{""}, user{""}, database{""};

	if(config_lines.size() != 0){
		url = config_lines[0];
		user = config_lines[1];
		database = config_lines[2];
	}

	labels["admin url"]->setText("URL");
	lines["admin url"]->setText(url.c_str());

	labels["admin username"]->setText("Utilisateur");
	lines["admin username"]->setText(user.c_str());

	labels["admin password"]->setText("Mot de passe");
	lines["admin password"]->setText("");
	lines["admin password"]->setEchoMode(QLineEdit::Password);

	labels["admin database"]->setText("Base de données");
	lines["admin database"]->setText(database.c_str());

	buttons["admin connect"]->setText("Connexion");*/
}

void MainWindow::setContentAdminWidgets(){
	hLayouts["admin container"]->addWidget(tabWidget);
}

void MainWindow::useAdminWidgets(){
	center->setLayout(hLayouts["admin container"]);
}

void MainWindow::adminWidgets(){
	this->initAdminWidgets();
	this->useAdminWidgets();
}
