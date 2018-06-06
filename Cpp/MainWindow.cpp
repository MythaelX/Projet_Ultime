#include "MainWindow.h"

MainWindow::MainWindow(QWidget* parent) :
	Window(parent),
	config_file("res/config"),
	background(nullptr),
	imgPath("res/img/background.png")
{
	this->enableResize(false);
	this->showTitlebar(false);
	this->setMargin(100, 75, 70, 65);

	closeBtnSize = 25;
	closeBtnX = this->width() - 110;
	closeBtnY = 80;

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

	//std::cout << cssReader("res/style.css") << std::endl;
	this->setStyleSheet(cssReader("res/style.css").c_str());
}

MainWindow::~MainWindow(){
	this->deleteAll();
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

void MainWindow::drawBackground(QPixmap* cache){
	if(background == nullptr){
		background = new QPixmap(imgPath.c_str());
	}

	double ratio = background->width() / tod(background->height());
	auto resizedBackground = background->scaled(cache->width() * ratio, cache->height(), Qt::KeepAspectRatio, Qt::SmoothTransformation);

	this->setBackground(&resizedBackground);
}

void MainWindow::quit(){
	qApp->quit();
}
