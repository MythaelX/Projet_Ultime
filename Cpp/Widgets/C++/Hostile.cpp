#include "Hostile.hpp"

Hostile::Hostile() :
	target(nullptr),
	strength(0)
{

}

Hostile::~Hostile(){

}

bool Hostile::hurt(Entity* target){
	if(target == nullptr){
		target = this->target;

		if(target == nullptr){
			return false;
		}
	}

	target->hit(strength);

	return true;
}

void Hostile::printInfos(std::ostream& stream)const {
	stream << "\tHostile attributes ;" << std::endl;
		stream << "\t\t- strength : " << getStrength() << std::endl;
}
