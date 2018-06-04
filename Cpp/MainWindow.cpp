#include "MainWindow.h"

MainWindow::MainWindow(QWidget* parent) :
	QMainWindow(parent),
	config_file("res/config")
{
	/* Creation of the objects */
		center = new QWidget;
		messageBox = new QDialog(this, Qt::Popup);
		tabWidget = new QTabWidget;
		hLayouts["admin container"] = nullptr;

		this->createConnectWidgets();
		this->createConnectDialog();
	/***************************/

	this->initConnectWidgets();

	/* Adding them to the window */
		this->useConnectWidgets();
		this->setCentralWidget(center);
	/*****************************/

	/* Connections */
		connect(buttons["connect connect"], SIGNAL(clicked()), this, SLOT(connections()));
	/***************/

	this->move(getDesktopWidth() / 2 - this->width() / 4, getDesktopHeight() / 2 - this->height() / 4);

	std::cout << cssReader("res/style.css") << std::endl;
	this->setAttribute(Qt::WA_TranslucentBackground);
	this->setStyleSheet(cssReader("res/style.css").c_str());
}

MainWindow::~MainWindow(){
	
}

void MainWindow::deleteAll(){
	for(auto& item : buttons){
		deletePtr(item.second);
	}
	for(auto& item : labels){
		deletePtr(item.second);
	}
	for(auto& item : lines){
		deletePtr(item.second);
	}
	for(auto& item : checkboxs){
		deletePtr(item.second);
	}
	for(auto& item : tableButtons){
		deletePtr(item.second);
	}
	deletePtr(hLayouts["connect container"]);
	deletePtr(hLayouts["admin container"]);
}
