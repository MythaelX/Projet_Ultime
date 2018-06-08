#include "CheckBox.hpp"

CheckBox::CheckBox(QWidget* parent) :
	QCheckBox(parent),
	table(""),
	index("")
{
	connect(this, SIGNAL(stateChanged(int)), this, SLOT(changeActive(int)));
}

void CheckBox::changeActive(int state){
	emit stateChanged(state, table, index);
}

