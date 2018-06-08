#include "Dialog.hpp"

Dialog::Dialog(QWidget* parent, Qt::WindowFlags flags) :
	QDialog(parent, flags),
	container(nullptr),
	buttons(nullptr),
	ok(nullptr),
	cancel(nullptr),
	cancelEnable(false),
	text("")
{}

Dialog::~Dialog(){
	this->deletions();
}

void Dialog::deletions(){
	deletePtr(ok);
	deletePtr(cancel);

	for(auto& label : labels){
		deletePtr(label);
	}
	labels.clear();
	for(auto& layout : lines){
		deletePtr(layout);
	}
	lines.clear();

	deletePtr(buttons);
	deletePtr(container);
}

int Dialog::exec(){
	this->deletions();

	container = new QVBoxLayout;
	buttons = new QHBoxLayout;
	ok = new GreenPushButton;
	cancel = new RedPushButton;

	cancel->setText("Annuler");

	if(cancelEnable){
		buttons->addWidget(cancel);
		buttons->addItem(new QHSpacerItem);
		buttons->addWidget(ok);
		ok->setText("Confirmer");
	} else {
		buttons->addItem(new QHSpacerItem);
		buttons->addWidget(ok);
		buttons->addItem(new QHSpacerItem);
		ok->setText("Continuer");
	}

	container->addItem(new QVSpacerItem);

	auto texts = explode(text, "\n");
	for(auto littleText : texts){
		auto label = new H2TitleLabel;
		auto line = new QHBoxLayout;

		label->setText(QString::fromStdString(littleText));
		labels.push_back(label);

		line->addItem(new QHSpacerItem);
		line->addWidget(label);
		line->addItem(new QHSpacerItem);
		lines.push_back(line);

		container->addLayout(line);
	}

	container->addItem(new QVSpacerItem);
	container->addLayout(buttons);

	this->setLayout(container);

	connect(ok, SIGNAL(clicked()), this, SLOT(accept()));
	connect(cancel, SIGNAL(clicked()), this, SLOT(reject()));

	return QDialog::exec();
}
