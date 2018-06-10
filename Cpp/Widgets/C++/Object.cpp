#include "Object.hpp"

Object::Object(Map* map, Point pt, ContraptionAttr attr) :
	Contraption(map, pt, attr)
{}

Object::~Object(){

}

void Object::printInfos(std::ostream& stream)const {
	Contraption::printInfos(stream);
}
