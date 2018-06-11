#include "MainWindow.h"

void MainWindow::createAdminWidgets(){
	this->deleteAll();

	hLayouts["admin container"] = new QHBoxLayout;

	auto tablesList = bdd.tables();

	for(auto& tables : tablesList){
		for(auto& table : tables){
			if(table != "contient" && table != "joue_a"){
				tabs[table] = new QWidget;

				std::string tabText = uppercase(table, table.begin(), table.begin()+1);
				this->putAccents(tabText);
				tabWidget->addTab(tabs[table], QString::fromUtf8(tabText.c_str()));

				std::string mapIndex = table + " container";
				vLayouts[mapIndex] = new QVBoxLayout;

				tabs[table]->setLayout(vLayouts[mapIndex]);

				auto tableLines = bdd.list(table);
				auto columns = bdd.getColumns(table);

				size_t colIndex = 0;
				std::string mapColIndex = "column " + table;
				tLayouts[mapColIndex] = new TableWidget;

				/* Headers */
					if(bdd.hasAutoincrement(table) || table.find("utilisateurs") != std::string::npos){
						labels["column choice"] = new QLabel;
						labels["column choice"]->setText("Choix");
						tLayouts[mapColIndex]->addHeader(labels["column choice"]);
					}

					for(auto& column : columns){
						if(column["autoincrement"] != "1"
							&& column["name"].find("avatar") == std::string::npos
							&& column["name"].find("token") == std::string::npos){
							std::string labelIndex = "label column " + tos(colIndex);
							labels[labelIndex] = new QLabel;

							std::string labelText = formatColumn(replace(column["name"], "id_", ""), table);
							this->putAccents(labelText);
							labels[labelIndex]->setText(QString::fromUtf8(labelText.c_str()));

							tLayouts[mapColIndex]->addHeader(labels[labelIndex]);
						}

						colIndex++;
					}

					if(table.find("categorie") != std::string::npos){
						std::string labelIndex = "label quantity";
						labels[labelIndex] = new QLabel;

						std::string labelText = "Nb questions";
						this->putAccents(labelText);
						labels[labelIndex]->setText(QString::fromUtf8(labelText.c_str()));

						tLayouts[mapColIndex]->addHeader(labels[labelIndex]);
					}
				/***********/

				/* Choices */
					if(bdd.hasAutoincrement(table) || table.find("utilisateurs") != std::string::npos){
						size_t choicesIndex = 0;
						for(auto& tableLine : tableLines){
							std::string mapLineIndex = table + " " + tos(choicesIndex);

							std::string activeIndex = "";
							bool addChoice = false;

							for(size_t i{0}; i < tableLine.size(); ++i){
								auto& lineContent = tableLine[i];
								auto& column = columns[i];

								if(column["autoincrement"] == "1"){
									activeIndex = lineContent;
									addChoice = true;
									break;
								} else if(column["name"].find("avatar") != std::string::npos
										|| column["name"].find("token") != std::string::npos){
									continue;
								} else if(table.find("utilisateurs") != std::string::npos){
									activeIndex = bdd.list(table)[choicesIndex][0];
									addChoice = true;
									break;
								}
							}

							if(addChoice){
								choiceboxs[mapLineIndex] = new CheckBox;

								choiceboxs[mapLineIndex]->setTable(table);
								choiceboxs[mapLineIndex]->setIndex(activeIndex);
							}

							choicesIndex++;
						}
					}
				/***********/

				/* Lines */
					size_t index = 0;
					for(auto& tableLine : tableLines){
						std::string mapLineIndex = table + " " + tos(index);

						if(bdd.hasAutoincrement(table) || table.find("utilisateurs") != std::string::npos){
							tLayouts[mapColIndex]->add(choiceboxs[mapLineIndex]);
						}

						std::string activeIndex = "";
						for(size_t i{0}; i < tableLine.size(); ++i){
							auto& lineContent = tableLine[i];
							auto& column = columns[i];

							std::string labelColumn = formatColumn(column["name"], table);

							if(column["autoincrement"] == "1"){
								activeIndex = lineContent;
								continue;
							} else if(column["name"].find("avatar") != std::string::npos
									|| column["name"].find("token") != std::string::npos){
								continue;
							}

							if(labelColumn.find("Id ") != std::string::npos){
								std::string otherTable = replace(labelColumn, "Id ", "");

								if(otherTable == "question"){
									auto rep = bdd.query("SELECT solution_un, solution_deux FROM " + otherTable + " WHERE id_" + otherTable + " = " + lineContent);
									rep->next();

									std::string labelIndex = "label " + tos(index) + " " + tos(i);
									labels[labelIndex] = new QLabel;

									std::string labelValue = rep->getString(1) + ", " + rep->getString(2) + " ou les deux";
									labels[labelIndex]->setText(labelValue.c_str());

									tLayouts[mapColIndex]->add(labels[labelIndex]);
								} else {
									auto rep = bdd.query("SELECT nom_" + otherTable + " FROM " + otherTable + " WHERE id_" + otherTable + " = " + lineContent);
									rep->next();

									std::string labelIndex = "label " + tos(index) + " " + tos(i);
									labels[labelIndex] = new QLabel;

									labels[labelIndex]->setText(rep->getString(1).c_str());

									tLayouts[mapColIndex]->add(labels[labelIndex]);
								}

							} else if(labelColumn == "Actif"){
								std::string checkIndex = table + " " + tos(i);
								checkboxs[checkIndex] = new CheckBox;

								checkboxs[checkIndex]->setTable(table);
								checkboxs[checkIndex]->setIndex(activeIndex);

								if(lineContent == "1"){
									checkboxs[checkIndex]->setChecked(true);
								}

								connect(checkboxs[checkIndex], SIGNAL(stateChanged(int, std::string, std::string)), this, SLOT(changeActive(int, std::string, std::string)));

								tLayouts[mapColIndex]->add(checkboxs[checkIndex]);
							} else {
								std::string labelIndex = "label " + tos(index) + " " + tos(i);
								labels[labelIndex] = new QLabel;

								labels[labelIndex]->setText(QString::fromStdString(lineContent));

								tLayouts[mapColIndex]->add(labels[labelIndex]);
							}
						}

						if(table.find("categorie") != std::string::npos){
							auto quantity = bdd.getCount("question", "WHERE id_categorie = " + tableLine[0]);

							std::string labelIndex = "label " + tos(index) + " quantity";
							labels[labelIndex] = new QLabel;

							labels[labelIndex]->setText(tos(quantity).c_str());

							tLayouts[mapColIndex]->add(labels[labelIndex]);
						}

						index++;
					}
				/*********/
				vLayouts[mapIndex]->addWidget(tLayouts[mapColIndex]->get(center->width()));

				/* Footer's buttons */
					hLayouts["admin buttons"] = new QHBoxLayout;

					vLayouts[mapIndex]->addItem(new QVSpacerItem);
					vLayouts[mapIndex]->addLayout(hLayouts["admin buttons"]);

					if(table.find("difficulte") == std::string::npos){
						std::string indexDelButton = "delete " + table;
						tableButtons[indexDelButton] = new RedPushButton;
						tableButtons[indexDelButton]->setTable(table);
						tableButtons[indexDelButton]->setText("Supprimer");
						connect(tableButtons[indexDelButton], SIGNAL(clicked(std::string, std::string)), this, SLOT(deleteEntry(std::string, std::string)));
						hLayouts["admin buttons"]->addWidget(tableButtons[indexDelButton]);
					}

					if(1){
						std::string indexModButton = "modify " + table;
						tableButtons[indexModButton] = new GreyPushButton;
						tableButtons[indexModButton]->setTable(table);
						tableButtons[indexModButton]->setText("Modifier");
						if(table.find("utilisateurs") == std::string::npos){
							connect(tableButtons[indexModButton], SIGNAL(clicked(std::string, std::string)), this, SLOT(updateEntry(std::string, std::string)));
						} else {
							connect(tableButtons[indexModButton], SIGNAL(clicked(std::string, std::string)), this, SLOT(updateEntry(std::string, std::string)));
						}

						hLayouts["admin buttons"]->addWidget(tableButtons[indexModButton]);
					}

					if(table.find("difficulte") == std::string::npos){
						std::string indexAddButton = "add " + table;
						tableButtons[indexAddButton] = new GreenPushButton;
						tableButtons[indexAddButton]->setTable(table);
						tableButtons[indexAddButton]->setText("Ajouter");
						connect(tableButtons[indexAddButton], SIGNAL(clicked(std::string, std::string)), this, SLOT(addingWidgets(std::string, std::string)));
						hLayouts["admin buttons"]->addWidget(tableButtons[indexAddButton]);
					}
				/********************/
			}
		}
	}

	this->setContentAdminWidgets();
}

void MainWindow::setContentAdminWidgets(){
	hLayouts["admin container"]->addWidget(tabWidget);
}

void MainWindow::useAdminWidgets(){
	center->setLayout(hLayouts["admin container"]);
}

void MainWindow::adminWidgets(std::string table){
	this->useAdminWidgets();

	if(table != ""){
		size_t tabIndex = 0;
		for(auto& tab : tabs){
			if(tab.second != nullptr){
				if(tab.first.find(table) != std::string::npos){
					tabWidget->setCurrentIndex(tabIndex);
					break;
				}
				tabIndex++;
			}
		}
	}
}

std::string MainWindow::createWidgetsLabel(std::map<std::string, std::string> col, std::string index){
	if(col["autoincrement"] == "1"
		|| col["name"].find("actif") != std::string::npos
		|| col["name"].find("avatar") != std::string::npos
		|| col["name"].find("token") != std::string::npos
		|| col["name"].find("nb_jouees") != std::string::npos){
		return "";
	} else if(col["name"].find("date") != std::string::npos){
		return "line " + index;
	}

	if(col["name"].find("id_") != std::string::npos){
		std::string otherTable = replace(col["name"], "id_", "");
		return "combos str " + otherTable;
	} else if(col["numeric"] == "1"){
		return "spin " + index;
	} else {
		return "line " + index;
	}
}

void MainWindow::createWidgetsLabels(std::string,
									 std::map<std::string, std::string> col,
									 size_t index,
									 std::vector<std::string>& out)
{
	out.push_back(this->createWidgetsLabel(col, tos(index)));
}

void MainWindow::createAddingWidgets(std::string table,
									 std::map<std::string, std::string> col,
									 size_t index)
{
	std::string layoutIndex = "layout " + tos(index);
	std::string labelIndex = "label " + tos(index);
	
	std::string usefull = this->createWidgetsLabel(col, tos(index));

	if(col["autoincrement"] == "1"
		|| col["name"].find("actif") != std::string::npos
		|| col["name"].find("avatar") != std::string::npos
		|| col["name"].find("token") != std::string::npos
		|| col["name"].find("nb_jouees") != std::string::npos){
		return;
	} else if(col["name"].find("date") != std::string::npos){
		lines[usefull] = new QLineEdit;
		lines[usefull]->setText("NOW()");

		return;
	}

	hLayouts[layoutIndex] = new QHBoxLayout;
	labels[labelIndex] = new QLabel;
	labels[labelIndex]->setText(formatColumn(replace(col["name"], "id_", ""), table).c_str());

	hLayouts[layoutIndex]->addWidget(labels[labelIndex]);

	if(col["name"].find("id_") != std::string::npos){
		std::string otherTable = replace(col["name"], "id_", "");

		combos[usefull] = new QComboBox;
		combos[replace(usefull, "combos str", "combos int")] = new QComboBox;

		if(otherTable != "question"){
			auto rep = bdd.query("SELECT `nom_" + otherTable + "` AS `nom`, `id_" + otherTable + "` AS `id` FROM `" + otherTable + "`");

			for(; rep->next(); ){
				combos[usefull]->addItem(rep->getString(1).c_str());
				combos[replace(usefull, "combos str ", "combos int ")]->addItem(tos(rep->getInt(2)).c_str());
			}
		} else {
			auto rep = bdd.query("SELECT `solution_un`, `solution_deux`, `id_question` FROM `" + otherTable + "`");

			for(; rep->next(); ){
				std::string a = rep->getString(1);
				std::string b = rep->getString(2);
				std::string item = uppercase(a, a.begin(), a.begin()+1) + ", " + uppercase(b, b.begin(), b.begin()+1) + " ou les deux";
				std::string index = tos(rep->getInt(3));

				combos[usefull]->addItem(item.c_str());
				combos[replace(usefull, "combos str ", "combos int ")]->addItem(index.c_str());
			}
		}

		hLayouts[layoutIndex]->addWidget(combos[usefull]);
	} else if(col["numeric"] == "1"){
		spins[usefull] = new QSpinBox;
		spins[usefull]->setRange(0, 100);
		hLayouts[layoutIndex]->addWidget(spins[usefull]);
	} else {
		lines[usefull] = new QLineEdit;
		hLayouts[layoutIndex]->addWidget(lines[usefull]);
	}

	vLayouts["adding layout"]->addLayout(hLayouts[layoutIndex]);
}

void MainWindow::fillWidgets(std::string table,
							 std::map<std::string, std::string> col,
							 size_t index,
							 std::string lineId)
{
	sql::ResultSet* rep = nullptr;
	std::string command = "";

	if(table.find("utilisateurs") != std::string::npos){
		command = "SELECT `" + col["name"] + "` FROM " + table + " WHERE `mail` = '" + lineId + "'";
	} else {
		command = "SELECT `" + col["name"] + "` FROM " + table + " WHERE `id_" + table + "` = '" + lineId + "'";
	}

	rep = bdd.query(command);
	if(rep == nullptr){
		return;
	}

	rep->next();

	auto value = rep->getString(1);
	auto label = this->createWidgetsLabel(col, tos(index));

	if(label.find("combos ") != std::string::npos){
		auto comboIndex = combos[replace(label, "combos str ", "combos int ")]->findText(value.c_str());
		combos[label]->setCurrentIndex(comboIndex);
	} else if(label.find("line ") != std::string::npos){
		lines[label]->setText(value.c_str());
	} else if(label.find("spin ") != std::string::npos){
		spins[label]->setValue(toi(value));
	} else if(label == ""){} else {
		info_log(line_number, __FILE__, "You have to add something here for label '", label, "'");
	}

	tableButtons["ajouter"]->setIndex(lineId);
}

void MainWindow::createValues(std::string table, std::vector<std::string>& values){
	std::vector<std::string> valuesLabels;
	bdd.applyForEach(&MainWindow::createWidgetsLabels, this, table, std::ref(valuesLabels));

	for(auto label : valuesLabels){
		if(label.find("combos ") != std::string::npos){
			int index = combos[label]->currentIndex();
			std::string strIndex = replace(label, "combos str ", "");

			values.push_back(combos["combos int " + strIndex]->itemText(index).toStdString());
		} else if(label.find("line ") != std::string::npos){
			values.push_back(replace(lines[label]->text().toStdString(), ", ", "\\, "));
		} else if(label.find("spin ") != std::string::npos){
			values.push_back(tos(spins[label]->value()));
		} else if(label == ""){} else {
			info_log(line_number, __FILE__, "You have to add something here for label '", label, "'");
		}
	}
}

void MainWindow::addingWidgets(std::string table, std::string){
	this->deleteAll();

	std::string name = uppercase(table, table.begin(), table.begin()+1);
	this->putAccents(name);

	vLayouts["adding layout"] = new QVBoxLayout;
		hLayouts["layout name"] = new QHBoxLayout;
			labels["name"] = new TitleLabel;
		hLayouts["layout name2"] = new QHBoxLayout;
			labels["name2"] = new H2TitleLabel;

	vLayouts["adding layout"]->addItem(new QVSpacerItem);

		hLayouts["layout name"]->addItem(new QHSpacerItem);
			labels["name"]->setText(QString::fromUtf8(name.c_str()));
		hLayouts["layout name"]->addWidget(labels["name"]);
		hLayouts["layout name"]->addItem(new QHSpacerItem);
	vLayouts["adding layout"]->addLayout(hLayouts["layout name"]);
		hLayouts["layout name2"]->addItem(new QHSpacerItem);
			labels["name2"]->setText("Ajout");
		hLayouts["layout name2"]->addWidget(labels["name2"]);
		hLayouts["layout name2"]->addItem(new QHSpacerItem);
	vLayouts["adding layout"]->addLayout(hLayouts["layout name2"]);

	vLayouts["adding layout"]->addItem(new QVSpacerItem);

	/* Create the widgets */
	bdd.applyForEach(&MainWindow::createAddingWidgets, this, table);
	/**********************/

	vLayouts["adding layout"]->addItem(new QVSpacerItem);

	tableButtons["annuler"] = new RedPushButton;
	tableButtons["ajouter"] = new GreenPushButton;
	hLayouts["buttons add"] = new QHBoxLayout;

	tableButtons["ajouter"]->setText("Ajouter");
	tableButtons["ajouter"]->setTable(table);

	tableButtons["annuler"]->setText("Annuler");
	tableButtons["annuler"]->setTable(table);

	connect(tableButtons["annuler"], SIGNAL(clicked(std::string, std::string)), this, SLOT(toAdmin(std::string, std::string)));
	connect(tableButtons["ajouter"], SIGNAL(clicked(std::string, std::string)), this, SLOT(addEntry(std::string, std::string)));

	hLayouts["buttons add"]->addItem(new QHSpacerItem);
	hLayouts["buttons add"]->addWidget(tableButtons["annuler"]);
	hLayouts["buttons add"]->addItem(new QHSpacerItem);
	hLayouts["buttons add"]->addWidget(tableButtons["ajouter"]);
	hLayouts["buttons add"]->addItem(new QHSpacerItem);

	vLayouts["adding layout"]->addLayout(hLayouts["buttons add"]);

	vLayouts["adding layout"]->addItem(new QVSpacerItem);

	center->setLayout(vLayouts["adding layout"]);
}

void MainWindow::toAdmin(std::string table, std::string){
	this->deleteAll();
	this->createAdminWidgets();
	this->adminWidgets(table);
}

std::vector<std::pair<std::string, std::string>> MainWindow::getCheckedChoices(){
	std::vector<std::pair<std::string, std::string>> out;

	for(auto& check : choiceboxs){
		if(check.second != nullptr){
			if(check.second->isChecked()){
				out.push_back(std::make_pair(check.second->getTable(), tos(check.second->getIndex())));
			}
		}
	}

	return out;
}
