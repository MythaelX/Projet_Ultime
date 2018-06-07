#include "MainWindow.h"

void MainWindow::changeActive(int state, std::string table, size_t index){
	state = (state > 0)?1:0;
	std::string task = table + "_actif = " + tos(state);
	
	bdd.update(table + "_actif = " + tos(state), "WHERE id_" + table + " = " + tos(index), "", table);
}

void MainWindow::deleteEntry(std::string table, size_t){
	auto choices = this->getCheckedChoices();
	QMessageBox msgBox;

	if(choices.size() == 0){
		msgBox.setText("Choix");
		msgBox.setInformativeText("Veuillez cocher au moins une ligne");
		msgBox.setStandardButtons(QMessageBox::Ok);
		msgBox.setDefaultButton(QMessageBox::Ok);

		msgBox.exec();
		this->toAdmin(table);

		return;
	}

	msgBox.setText("Suppression");
	msgBox.setInformativeText("Êtes-vous sûr de vouloir supprimer ?");
	msgBox.setStandardButtons(QMessageBox::Ok | QMessageBox::Cancel);
	msgBox.setDefaultButton(QMessageBox::Ok);

	auto ret = msgBox.exec();

	switch(ret){
		case QMessageBox::Ok:{
			msgBox.setInformativeText("Êtes-vous vraiment sûr ?");
			ret = msgBox.exec();

			switch(ret){
				case QMessageBox::Ok:{
					for(auto& choice : choices){
						bdd.remove("WHERE id_" + choice.first + " = " + choice.second, "", choice.first);
					}
					break;}
				case QMessageBox::Cancel:{
					break;}
				default:{
					break;}
			}

			break;}
		case QMessageBox::Cancel:{
			break;}
		default:{
			break;}
	}

	this->toAdmin(table);
}

void MainWindow::updateEntry(std::string table, size_t index){
	auto choices = this->getCheckedChoices();
	QMessageBox msgBox;

	if(choices.size() > 1){
		msgBox.setText("Trop de choix");
		msgBox.setInformativeText("Veuillez ne sélectionner qu'une seule ligne");
		msgBox.setStandardButtons(QMessageBox::Ok);
		msgBox.setDefaultButton(QMessageBox::Ok);

		msgBox.exec();
		this->toAdmin(table);

		return;
	} else if(choices.size() == 0){
		msgBox.setText("Choix");
		msgBox.setInformativeText("Veuillez cocher au moins une ligne");
		msgBox.setStandardButtons(QMessageBox::Ok);
		msgBox.setDefaultButton(QMessageBox::Ok);

		msgBox.exec();
		this->toAdmin(table);

		return;
	}
	auto choice = choices[0];

	/* Create like add */
		this->addingWidgets(table, index);
	/*******************/

	/* Modifications des différents widgets */
		labels["name2"]->setText("Modifications");
		disconnect(tableButtons["ajouter"], SIGNAL(clicked(std::string, size_t)), this, SLOT(addEntry(std::string, size_t)));
		connect(tableButtons["ajouter"], SIGNAL(clicked(std::string, size_t)), this, SLOT(updEntry(std::string, size_t)));

		auto rep = bdd.query("SELECT * FROM `" + choice.first + "` WHERE `id_" + choice.first + "` = '" + choice.second + "'");
		for(; rep->next(); ){
			
		}
	/****************************************/
}

void MainWindow::updEntry(std::string table, size_t index){
	std::vector<std::string> values;

	for(auto& item : lines){
		if(item.second != nullptr){
			values.push_back(item.second->text().toStdString());
		}
	}
	for(auto& item : combos){
		if(item.second != nullptr && item.first.find("combos int ") == std::string::npos){
			int index = item.second->currentIndex();
			std::string strIndex = replace(item.first, "combos str ", "");

			values.push_back(combos["combos int " + strIndex]->itemText(index).toStdString());
		}
	}

	bdd.remove("WHERE id_" + table + " = " + tos(index), "", table);
	auto newId = bdd.insert(implode(values, ", "), "", table);
	bdd.update("id_" + table + " = " + tos(index), "WHERE id_" + table + " = " + tos(newId), "", table);

	this->toAdmin(table);
}

void MainWindow::addEntry(std::string table, size_t){
	std::vector<std::string> values;

	for(auto& item : lines){
		if(item.second != nullptr){
			values.push_back(item.second->text().toStdString());
		}
	}
	for(auto& item : combos){
		if(item.second != nullptr && item.first.find("combos int ") == std::string::npos){
			int index = item.second->currentIndex();
			std::string strIndex = replace(item.first, "combos str ", "");

			values.push_back(combos["combos int " + strIndex]->itemText(index).toStdString());
		}
	}

	bdd.insert(implode(values, ", "), "", table);
	this->toAdmin(table);
}
