#include "Vegetal.hpp"

Vegetal::Vegetal(Map* map, Point pt, ContraptionAttr attr) :
	Entity(map, pt, attr)
{}

Vegetal::~Vegetal(){

}

void Vegetal::printInfos(std::ostream& stream)const {
	Entity::printInfos(stream);
}

Vegetal* Vegetal::cut(double percent){
	percent = (percent > 100)?100:percent;
	Vegetal* child = new Vegetal(getMap(), getPosition(), getAttributes());

	child->setLife(this->getLife() * percent / 100.0);
	child->setResistance(this->getResistance());

	return nullptr;
}
