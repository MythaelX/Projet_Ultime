#include "MainWindow.h"

void MainWindow::changeActive(int state, std::string table, size_t index){
	state = (state > 0)?1:0;
	std::string task = table + "_actif = " + tos(state);
	
	bdd.update(table + "_actif = " + tos(state), "WHERE id_" + table + " = " + tos(index), "", table);
}

void MainWindow::deleteEntry(std::string table, size_t index){
	
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
