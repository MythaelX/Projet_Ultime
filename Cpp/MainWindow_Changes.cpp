#include "MainWindow.h"

void MainWindow::changeActive(int state, std::string table, std::string index){
	state = (state > 0)?1:0;
	std::string task = table + "_actif = " + tos(state);
	
	bdd.update(table + "_actif = " + tos(state), "WHERE id_" + table + " = " + tos(index), "", table);
}

void MainWindow::deleteEntry(std::string table, std::string){
	auto choices = this->getCheckedChoices();

	if(choices.size() == 0){
		messageBox->setText("VEUILLEZ COCHER AU MOINS UNE LIGNE");
		messageBox->exec();
		this->toAdmin(table);

		return;
	}

	messageBox->setText("ÊTES-VOUS SÛR DE VOULOIR SUPPRIMER ?");

	messageBox->enableCancel(true);
	auto ret = messageBox->exec();
	messageBox->enableCancel(false);

	switch(ret){
		case QMessageBox::Accepted:{
			messageBox->setText("ÊTES-VOUS VRAIMENT SÛR ?");

			messageBox->enableCancel(true);
			ret = messageBox->exec();
			messageBox->enableCancel(false);

			switch(ret){
				case QMessageBox::Accepted:{
					for(auto& choice : choices){
						if(table.find("utilisateurs") != std::string::npos){
							bdd.remove("WHERE mail = " + choice.second, "", choice.first);
						} else {
							bdd.remove("WHERE id_" + choice.first + " = " + choice.second, "", choice.first);
						}
					}
					break;}
				case QMessageBox::Rejected:{
					break;}
				default:{
					break;}
			}

			break;}
		case QMessageBox::Rejected:{
			break;}
		default:{
			break;}
	}

	this->toAdmin(table);
}

void MainWindow::updateEntry(std::string table, std::string index){
	auto choices = this->getCheckedChoices();

	if(choices.size() > 1){
		messageBox->setText("VEUILLEZ NE SÉLECTIONNER QU'UNE SEULE LIGNE");
		messageBox->exec();
		this->toAdmin(table);

		return;
	} else if(choices.size() == 0){
		messageBox->setText("VEUILLEZ COCHER AU MOINS UNE LIGNE");
		messageBox->exec();
		this->toAdmin(table);

		return;
	}
	auto choice = choices[0];

	/* Create like add */
		this->addingWidgets(table, index);
	/*******************/

	/* Modifications des différents widgets */
		labels["name2"]->setText("Modifications");
		tableButtons["ajouter"]->setText("Valider");

		disconnect(tableButtons["ajouter"], SIGNAL(clicked(std::string, std::string)), this, SLOT(addEntry(std::string, std::string)));

		if(table.find("utilisateurs") != std::string::npos){
			connect(tableButtons["ajouter"], SIGNAL(clicked(std::string, std::string)), this, SLOT(updEntry(std::string, std::string)));
		} else {
			connect(tableButtons["ajouter"], SIGNAL(clicked(std::string, std::string)), this, SLOT(updEntry(std::string, std::string)));
		}

		bdd.applyForEach(&MainWindow::fillWidgets, this, choice.first, choice.second);
	/****************************************/
}

void MainWindow::updEntry(std::string table, std::string index){
	std::vector<std::string> values;
	this->createValues(table, values);

	if(table.find("utilisateurs") != std::string::npos){
		bdd.update(values, "WHERE mail = " + index, "", table);
	} else {
		bdd.update(values, "WHERE id_" + table + " = " + index, "", table);
	}

	this->toAdmin(table);
}

void MainWindow::addEntry(std::string table, std::string){
	std::vector<std::string> values;
	std::vector<std::string> valuesLabels;
	bdd.applyForEach(&MainWindow::createWidgetsLabels, this, table, std::ref(valuesLabels));

	for(auto label : valuesLabels){
		if(label.find("combos ") != std::string::npos){
			int index = combos[label]->currentIndex();
			std::string strIndex = replace(label, "combos str ", "");

			values.push_back(combos["combos int " + strIndex]->itemText(index).toStdString());
		} else if(label.find("line ") != std::string::npos){
			values.push_back(lines[label]->text().toStdString());
		} else if(label.find("spin ") != std::string::npos){
			values.push_back(tos(spins[label]->value()));
		} else if(label == ""){} else {
			info_log(line_number, __FILE__, "You have to add something here for label '", label, "'");
		}
	}

	if(table.find("partie") != std::string::npos){
		if(!createGame(values)){
			messageBox->setText("UNE ERREUR EST SURVENUE\nIMPOSSIBLE DE CRÉER LA PARTIE\nVEUILLEZ RÉESSAYER");
			messageBox->exec();
		}
	} else {
		std::string command = "";

		for(auto value : values){
			if(command != ""){ command += ", "; }
			command += replace(value, ", ", "\\, ");
		}

		auto back = bdd.insert(command, "", table);

		if(back == 0){
			messageBox->setText("UNE ERREUR EST SURVENUE\nVEUILLEZ RÉESSAYER");
			messageBox->exec();
		}
	}
	this->toAdmin(table);
}
