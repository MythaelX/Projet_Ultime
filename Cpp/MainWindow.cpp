#include "MainWindow.h"

MainWindow::MainWindow(QWidget* parent) :
	QMainWindow(parent),
	config_file("res/config")
{
	/* Creation of the objects */
		center = new QWidget;
		messageBox = new QDialog(this, Qt::Popup);
		tabWidget = new QTabWidget;

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
}

MainWindow::~MainWindow(){
	
}
