#include "Entity.hpp"

Entity::Entity(Map* map, Point pt, ContraptionAttr attr) :
	Contraption(map, pt, attr),
	life(0),
	damages(0),
	resistance(0),
	age(0)
{
	setReborn(0);
	setTimeActReborn(0);
	setTimePrecReborn(0);

	setRegen(0);
	setTimeActRegen(0);
	setTimePrecRegen(0);
}

Entity::~Entity(){

}

void Entity::printInfos(std::ostream& stream)const {
	Contraption::printInfos(stream);
	stream << "\tLife ;" << std::endl;
		stream << "\t\t- life : " << getLifeMax() << std::endl;
		stream << "\t\t- damages : " << getDamages() << std::endl;
	stream << "\tSpecifications ;" << std::endl;
		stream << "\t\t- resistance : " << getResistance() << std::endl;
		stream << "\t\t- age : " << getAge() << std::endl;
}

void Entity::hit(double damages){
	double d = damages - resistance;

	d = (d < 0)?0:d;

	if(d > life){
		life = 0;
	} else {
		life -= d;
	}
}

void Entity::grow(){

}
