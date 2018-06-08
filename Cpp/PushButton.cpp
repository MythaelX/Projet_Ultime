#include "PushButton.hpp"

PushButton::PushButton(QWidget* parent) :
	QPushButton(parent),
	table(""),
	index("")
{
	connect(this, SIGNAL(clicked()), this, SLOT(click()));
}

void PushButton::click(){
	emit clicked(table, index);
}
