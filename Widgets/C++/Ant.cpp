#include "Ant.hpp"

Ant::Ant(Map* map, Point pt, ContraptionAttr attr) :
	Animal(map, pt, attr),
	caste("")
{
	setStone(0);
	setStoneMax(0);
}

Ant::~Ant(){

}

void Ant::printInfos(std::ostream& stream)const {
	Animal::printInfos(stream);
	stream << "\tAnt specifications ;" << std::endl;
		stream << "\t\t- Stone : " << stone << "/" << stoneMax << std::endl;
		stream << "\t\t- Caste : '" << caste << "'" << std::endl;
}
