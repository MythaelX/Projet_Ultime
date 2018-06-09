#include "MainWindow.h"

MainWindow::MainWindow(QWidget* parent) :
	Window(parent),
	config_file("res/config"),
	background(nullptr),
	imgPath("res/img/background.png")
{
	this->enableResize(false);
	this->setSize(612, 612);
	this->showTitlebar(false);
	this->setMargin(120, 85, 80, 75);

	closeBtnSize = 25;
	closeBtnX = this->width() - 130;
	closeBtnY = 90;

	/* Creation of the objects */
		center = new QWidget;
		messageBox = new Dialog(this, Qt::Popup);
		tabWidget = new QTabWidget;
		hLayouts["connect container"] = nullptr;
		hLayouts["admin container"] = nullptr;
		vLayouts["adding layout"] = nullptr;

		this->createConnectWidgets();
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
	for(auto& item : choiceboxs){
		deletePtr(item.second);
	}
	for(auto& item : tableButtons){
		deletePtr(item.second);
	}
	for(auto& item : tabs){
		deletePtr(item.second);
	}
	for(auto& item : combos){
		deletePtr(item.second);
	}
	for(auto& item : spins){
		deletePtr(item.second);
	}
	deletePtr(hLayouts["connect container"]);
	deletePtr(hLayouts["admin container"]);
	deletePtr(vLayouts["adding layout"]);
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

void MainWindow::putAccents(std::string& text){
	std::map<std::string, std::string> replacements;

	replacements["Categorie"] = "Catégorie";
	replacements["categorie"] = "catégorie";
	replacements["Difficulte"] = "Difficulté";
	replacements["difficulte"] = "difficulté";
	replacements["Password"] = "Mot de passe";
	replacements["password"] = "mot de passe";
	replacements["Solution un"] = "Un";
	replacements["solution un"] = "un";
	replacements["Solution deux"] = "Deux";
	replacements["solution deux"] = "deux";

	for(auto& item : replacements){
		if(text == item.first){
			text = item.second;
		}
	}
}
