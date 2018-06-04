#include "MainWindow.h"

void MainWindow::createConnectWidgets(){
	hLayouts["connect container"] = new QHBoxLayout;
		vLayouts["connect content"] = new QVBoxLayout;
			hLayouts["connect line0"] = new QHBoxLayout;
				labels["connect text"] =new QLabel;
			hLayouts["connect line1"] = new QHBoxLayout;
				vLayouts["connect line1"] = new QVBoxLayout;
					labels["connect url"] = new QLabel;
					lines["connect url"] = new QLineEdit;
			hLayouts["connect line2"] = new QHBoxLayout;
				vLayouts["connect line2"] = new QVBoxLayout;
					labels["connect database"] = new QLabel;
					lines["connect database"] = new QLineEdit;
			hLayouts["connect line3"] = new QHBoxLayout;
				vLayouts["connect line3-1"] = new QVBoxLayout;
					labels["connect username"] = new QLabel;
					lines["connect username"] = new QLineEdit;
				vLayouts["connect line3-2"] = new QVBoxLayout;
					labels["connect password"] = new QLabel;
					lines["connect password"] = new QLineEdit;
			vLayouts["connect line4"] = new QVBoxLayout;
				buttons["connect connect"] = new QPushButton;
	
	this->setContentConnectWidgets();
}

void MainWindow::initConnectWidgets(){
	reader.open(this->config_file.c_str());
	auto config_lines = getlines(reader);

	std::string url{""}, user{""}, database{""};

	if(config_lines.size() != 0){
		url = config_lines[0];
		user = config_lines[1];
		database = config_lines[2];
	}

	labels["connect text"]->setText("CONNEXION");

	labels["connect url"]->setText("URL");
	lines["connect url"]->setText(url.c_str());

	labels["connect username"]->setText("Utilisateur");
	lines["connect username"]->setText(user.c_str());

	labels["connect password"]->setText("Mot de passe");
	lines["connect password"]->setText("hotdogquiz");
	lines["connect password"]->setEchoMode(QLineEdit::Password);

	labels["connect database"]->setText("Base de données");
	lines["connect database"]->setText(database.c_str());

	buttons["connect connect"]->setText("Connexion");
}

void MainWindow::setContentConnectWidgets(){
	hLayouts["connect line0"]->addItem(new QHSpacerItem);
	hLayouts["connect line0"]->addWidget(labels["connect text"]);
	hLayouts["connect line0"]->addItem(new QHSpacerItem);

	vLayouts["connect line1"]->addWidget(labels["connect url"]);
	vLayouts["connect line1"]->addWidget(lines["connect url"]);

	hLayouts["connect line1"]->addLayout(vLayouts["connect line1"]);

	vLayouts["connect line2"]->addWidget(labels["connect database"]);
	vLayouts["connect line2"]->addWidget(lines["connect database"]);

	hLayouts["connect line2"]->addLayout(vLayouts["connect line2"]);

	vLayouts["connect line3-1"]->addWidget(labels["connect username"]);
	vLayouts["connect line3-1"]->addWidget(lines["connect username"]);

	vLayouts["connect line3-2"]->addWidget(labels["connect password"]);
	vLayouts["connect line3-2"]->addWidget(lines["connect password"]);

	hLayouts["connect line3"]->addLayout(vLayouts["connect line3-1"]);
	hLayouts["connect line3"]->addLayout(vLayouts["connect line3-2"]);

	vLayouts["connect line4"]->addItem(new QHSpacerItem);
	vLayouts["connect line4"]->addWidget(buttons["connect connect"]);
	vLayouts["connect line4"]->addItem(new QHSpacerItem);

	vLayouts["connect content"]->addLayout(hLayouts["connect line0"]);
	vLayouts["connect content"]->addLayout(hLayouts["connect line1"]);
	vLayouts["connect content"]->addLayout(hLayouts["connect line2"]);
	vLayouts["connect content"]->addLayout(hLayouts["connect line3"]);
	vLayouts["connect content"]->addLayout(vLayouts["connect line4"]);

	hLayouts["connect container"]->addItem(new QHSpacerItem);
	hLayouts["connect container"]->addLayout(vLayouts["connect content"]);
	hLayouts["connect container"]->addItem(new QHSpacerItem);
}

void MainWindow::useConnectWidgets(){
	center->setLayout(hLayouts["connect container"]);
}

void MainWindow::connections(){
	this->initConnectDialog();
	this->useConnectDialog();

	connect(buttons["dialog ok"], SIGNAL(clicked()), messageBox, SLOT(accept()));

	this->verifyConnection();
}

void MainWindow::verifyConnection(){
	std::string url = lines["connect url"]->text().toStdString();
	std::string user = lines["connect username"]->text().toStdString();
	std::string pass = lines["connect password"]->text().toStdString();
	std::string database = lines["connect database"]->text().toStdString();

	if(bdd.try_connect(url, user, pass)){
		labels["dialog text"]->setText("La connexion à réussi !");

		if(bdd.try_database(database)){
			VS datas;

			writer.open(this->config_file.c_str());

			datas.push_back(url);
			datas.push_back(user);
			datas.push_back(database);

			setlines(writer, datas);

			this->createAdminWidgets();

			adminWidgets();
		} else {
			labels["dialog text"]->setText("La base de données demandée n'existe pas !");
			lines["connect password"]->setText("");

			bdd.reset();

			messageBox->exec();
		}
	} else {
		labels["dialog text"]->setText("La connexion à échoué !\nVeuillez vérifier les informations saisies.\nSinon, vérifiez votre connexion.");
		lines["connect password"]->setText("");

		bdd.reset();

		messageBox->exec();
	}
}
