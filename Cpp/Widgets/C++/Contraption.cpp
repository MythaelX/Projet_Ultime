#include "Contraption.hpp"

Contraption::Contraption(Map* map, Point pt, ContraptionAttr attr) :
	map(map),
	level(0)
{
	setPosition(pt);
	setAttributes(attr);
}

Contraption::~Contraption(){

}

void Contraption::setPosition(double x, double y, double z){
	setX(x);
	setY(y);
	setZ(z);
}

void Contraption::setX(double x){
	if(map != nullptr){
		if(map->isXIn(x, this->getW())){
			this->pt.x = x;
		}
	} else {
		this->pt.x = x;
	}
}

void Contraption::setY(double y){
	if(map != nullptr){
		if(map->isYIn(y, this->getH())){
			this->pt.y = y;
		}
	} else {
		this->pt.y = y;
	}
}

void Contraption::setAttributes(double w, double h, double angle){
	setW(w);
	setH(h);
	setA(angle);
}

void Contraption::addPosition(double x, double y, double z){
	setPosition(getX()+x, getY()+y, getZ()+z);
}

double Contraption::getRelativeZ(Contraption& obj){
	double out{0};

	double cx = this->getX()+this->getW()/2;
	double cy = this->getY()+this->getH()/2;

	double cx2 = obj.getX()+obj.getW()/2;
	double cy2 = obj.getY()+obj.getH()/2;

	if(collidesR(this->getX(), this->getY(), this->getW(), this->getH(), obj.getX(), obj.getY(), obj.getW(), obj.getH())){
		double d = dist(cx, cx2, cy, cy2);
		double dMax = 100;

		out = ((dMax - d) / (sq(dMax) * (9.0 / 10.0))) * 5.0;
	}

	if(out < 0){
		return 0;
	}

	return out;
}

void Contraption::printInfos(std::ostream& stream)const {
	stream << "\tPosition ;" << std::endl;
		stream << "\t\t- x : " << getX() << std::endl;
		stream << "\t\t- y : " << getY() << std::endl;
		stream << "\t\t- z : " << getZ() << std::endl;
	stream << "\tSize ;" << std::endl;
		stream << "\t\t- width : " << getW() << std::endl;
		stream << "\t\t- height : " << getH() << std::endl;
		stream << "\t\t- angle : " << getA() << std::endl;
	stream << "\tLevel : " << getLevel() << std::endl;
}

/* Print the informations of the object in an output stream */
std::ostream& operator<<(std::ostream& stream, Contraption const &in){
	stream << getType(in) << std::endl;
	in.printInfos(stream);

	return stream;
}
