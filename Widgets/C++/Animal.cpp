#include "Animal.hpp"

Animal::Animal(Map* map, Point pt, ContraptionAttr attr) :
	Entity(map, pt, attr),
	speed(0),
	obstacle(nullptr),
	species(""),
	specialAttack("")
{
	setFood(0);
	setFoodMax(0);
}

Animal::~Animal(){

}

void Animal::printInfos(std::ostream& stream)const {
	Entity::printInfos(stream);
	Hostile::printInfos(stream);
	stream << "\tAnimal specifications ;" << std::endl;
		stream << "\t\tFood : " << food << "/" << foodMax << std::endl;
		stream << "\t\tSpecies : '" << species << "'" << std::endl;
		stream << "\t\tSpecial attack : '" << specialAttack << "'" << std::endl;
}

void Animal::goLeft(){
	turn(270);
}

void Animal::goRight(){
	turn(90);
}

void Animal::goTop(){
	turn(0);
}

void Animal::goBot(){
	turn(180);
}

void Animal::turn(double na){
	if(na != getA()){
		//send({"playerTurn", tos(na)});
	}
}

double Animal::getRelativeZ(Contraption& obj){
	if(obstacle != nullptr && obstacle == getTarget()){
		return Contraption::getRelativeZ(obj);
	}
	
	return 0;
}

/*void Animal::move(){
	//send({"playerMove", tos(z)});
}*/

void Animal::move(){
	switch(direction){
		case Direction::UP:
			setY(getY() - speed);
			break;
		case Direction::DOWN:
			setY(getY() + speed);
			break;
		case Direction::LEFT:
			setX(getX() - speed);
			break;
		case Direction::RIGHT:
			setX(getX() + speed);
			break;
		default:
			break;
	}
}

void Animal::move(Direction dir){
	direction = dir;
	move();
}

bool Animal::collidesRect(Contraption& other){
	return collidesRect(&other);
}

bool Animal::collidesCircle(Contraption& other, double radius){
	return collidesCircle(&other, radius);
}

bool Animal::collidesRect(Contraption* other){
	if(other == nullptr){
		if(obstacle == nullptr){
			return false;
		}

		other = obstacle;
	}

	return collidesR(this->getX(), this->getY(), this->getW(), this->getH(), other->getX(), other->getY(), other->getW(), other->getH());
}

bool Animal::collidesCircle(Contraption* other, double radius){
	if(other == nullptr){
		if(obstacle == nullptr){
			return false;
		}

		other = obstacle;
	}

	return collidesRC(other->getX(), other->getY(), other->getW(), other->getH(), this->getX(), this->getY(), radius);
}
