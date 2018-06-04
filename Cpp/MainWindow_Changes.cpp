#include "MainWindow.h"

void MainWindow::changeActive(int state, std::string table, size_t index){
	state = (state > 0)?1:0;
	std::string task = table + "_actif = " + tos(state);
	
	bdd.update(table + "_actif = " + tos(state), "WHERE id_" + table + " = " + tos(index), "", table);
}

void MainWindow::deleteEntry(std::string table, size_t index){
	
}

void MainWindow::addEntry(std::string table, size_t index){
	
}
