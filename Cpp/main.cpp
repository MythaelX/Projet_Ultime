#include <QApplication>

#include "Widgets/C++/C++.hpp"
#include "MainWindow.h"

int main(int argc, char** argv) {
	arguments.addProg(argc, argv);

	QApplication app(argc, argv);
	MainWindow w;

	w.show();

	return app.exec();
}
