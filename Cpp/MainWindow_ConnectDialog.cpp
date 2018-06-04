#include "MainWindow.h"

void MainWindow::createConnectDialog(){
	vLayouts["dialog container"] = new QVBoxLayout;
	labels["dialog text"] = new QLabel;
	vLayouts["dialog button"] = new QVBoxLayout;
	buttons["dialog ok"] = new QPushButton;

	this->setContentConnectDialog();
}

void MainWindow::initConnectDialog(){
	buttons["dialog ok"]->setText("Ok");
}

void MainWindow::setContentConnectDialog(){
	vLayouts["dialog button"]->addWidget(buttons["dialog ok"]);
	vLayouts["dialog container"]->addWidget(labels["dialog text"]);
	vLayouts["dialog container"]->addItem(new QHSpacerItem);
	vLayouts["dialog container"]->addLayout(vLayouts["dialog button"]);
}

void MainWindow::useConnectDialog(){
	messageBox->setLayout(vLayouts["dialog container"]);
}
