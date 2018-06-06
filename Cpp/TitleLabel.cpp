#include "TitleLabel.hpp"

TitleLabel::TitleLabel(QWidget* parent) :
	QLabel(parent)
{
	this->setFont(Font::load("res/fonts/cheeseborger.ttf"));
	level(1);
}
