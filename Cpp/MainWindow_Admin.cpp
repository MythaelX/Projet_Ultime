#include "MainWindow.h"

void MainWindow::createAdminWidgets(){
	this->deleteAll();

	hLayouts["admin container"] = new QHBoxLayout;

	auto tablesList = bdd.tables();

	for(auto& tables : tablesList){
		for(auto& table : tables){
			if(table != "contient" && table != "joue_a"){
				tabs[table] = new QWidget;

				tabWidget->addTab(tabs[table], uppercase(table, table.begin(), table.begin()+1).c_str());

				std::string mapIndex = table + " container";
				vLayouts[mapIndex] = new QVBoxLayout;

				tabs[table]->setLayout(vLayouts[mapIndex]);

				auto tableLines = bdd.list(table);
				auto columns = bdd.getColumns(table);

				size_t colIndex = 0;
				std::string mapColIndex = "column " + table;
				hLayouts[mapColIndex] = new QHBoxLayout;

				vLayouts[mapIndex]->addLayout(hLayouts[mapColIndex]);

				for(auto& column : columns){
					if(column["autoincrement"] != "1"){
						std::string labelIndex = "label column " + tos(colIndex);
						labels[labelIndex] = new QLabel;

						labels[labelIndex]->setText(formatColumn(replace(column["name"], "id_", ""), table).c_str());

						hLayouts[mapColIndex]->addWidget(labels[labelIndex]);
					}

					colIndex++;
				}

				size_t index = 0;
				for(auto& tableLine : tableLines){
					std::string mapLineIndex = table + " " + tos(index);
					hLayouts[mapLineIndex] = new QHBoxLayout;

					vLayouts[mapIndex]->addLayout(hLayouts[mapLineIndex]);

					size_t activeIndex = 0;
					for(size_t i{0}; i < tableLine.size(); ++i){
						auto& lineContent = tableLine[i];
						auto& column = columns[i];

						std::string labelColumn = formatColumn(column["name"], table);

						if(column["autoincrement"] == "1"){
							activeIndex = tost(lineContent);
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

								hLayouts[mapLineIndex]->addWidget(labels[labelIndex]);
							} else {
								auto rep = bdd.query("SELECT nom_" + otherTable + " FROM " + otherTable + " WHERE id_" + otherTable + " = " + lineContent);
								rep->next();

								std::string labelIndex = "label " + tos(index) + " " + tos(i);
								labels[labelIndex] = new QLabel;

								labels[labelIndex]->setText(rep->getString(1).c_str());

								hLayouts[mapLineIndex]->addWidget(labels[labelIndex]);
							}

						} else if(labelColumn == "Actif"){
							std::string checkIndex = table + " " + tos(i);
							checkboxs[checkIndex] = new CheckBox;

							checkboxs[checkIndex]->setTable(table);
							checkboxs[checkIndex]->setIndex(activeIndex);

							if(lineContent == "1"){
								checkboxs[checkIndex]->setChecked(true);
							}

							connect(checkboxs[checkIndex], SIGNAL(stateChanged(int, std::string, size_t)), this, SLOT(changeActive(int, std::string, size_t)));

							hLayouts[mapLineIndex]->addWidget(checkboxs[checkIndex]);
						} else {
							std::string labelIndex = "label " + tos(index) + " " + tos(i);
							labels[labelIndex] = new QLabel;

							labels[labelIndex]->setText(lineContent.c_str());

							hLayouts[mapLineIndex]->addWidget(labels[labelIndex]);
						}
					}

					index++;
				}
				
				std::string indexAddButton = "add " + table;
				std::string indexModButton = "modify " + table;
				std::string indexDelButton = "delete " + table;
				
				tableButtons[indexAddButton] = new GreenPushButton;
				tableButtons[indexModButton] = new GreyPushButton;
				tableButtons[indexDelButton] = new RedPushButton;
				
				tableButtons[indexAddButton]->setTable(table);
				tableButtons[indexModButton]->setTable(table);
				tableButtons[indexDelButton]->setTable(table);
				
				tableButtons[indexAddButton]->setText("Ajouter");
				tableButtons[indexModButton]->setText("Modifier");
				tableButtons[indexDelButton]->setText("Supprimer");
				
				connect(tableButtons[indexAddButton], SIGNAL(clicked(std::string, size_t)), this, SLOT(addEntry(std::string, size_t)));
				connect(tableButtons[indexDelButton], SIGNAL(clicked(std::string, size_t)), this, SLOT(deleteEntry(std::string, size_t)));
				
				hLayouts["admin buttons"] = new QHBoxLayout;
				
				vLayouts[mapIndex]->addItem(new QVSpacerItem);
				vLayouts[mapIndex]->addLayout(hLayouts["admin buttons"]);
				
				hLayouts["admin buttons"]->addWidget(tableButtons[indexDelButton]);
				hLayouts["admin buttons"]->addWidget(tableButtons[indexModButton]);
				hLayouts["admin buttons"]->addWidget(tableButtons[indexAddButton]);
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

void MainWindow::adminWidgets(){
	this->useAdminWidgets();
}
