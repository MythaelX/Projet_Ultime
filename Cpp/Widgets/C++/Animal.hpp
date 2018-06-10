/*!
*
*	\file		Animal.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		07 juin 2018
*
*/
#ifndef HEADER_ANIMAL
#define HEADER_ANIMAL

#include "Entity.hpp"
#include "Hostile.hpp"

/*!
* \class	Animal
* \brief	An animal
*/
class Animal : public Entity, public Hostile {
	public:
		/* Constructor & Destroyer */
			/*!
			* \brief	Constructor of the class
			*		\param[in]		map			The map where it is
			*		\param[in]		pt			The position in the map
			*		\param[in]		attr		The attributes of the object(width, height, angle)
			*/
			Animal(Map* map = nullptr, Point pt = {0, 0, 0}, ContraptionAttr attr = {0, 0, 0});
			/*! \brief	Virtual destructor */
			virtual ~Animal();

		/* Setters */
			/*!
			* \brief	Set the speed
			*		\param[in]		speed				The value to set
			*
			*		\return			void
			*/
			void setSpeed(double speed){ this->speed = speed; }

			/*!
			* \brief	Set the food
			*		\param[in]		food				The value to set
			*
			*		\return			void
			*/
			void setFood(const double food){ this->food = food; }
			/*!
			* \brief	Set the maximum food
			*		\param[in]		foodMax				The value to set
			*
			*		\return			void
			*/
			void setFoodMax(const double foodMax){ this->foodMax = foodMax; }

			/*!
			* \brief	Set the species
			*		\param[in]		species				The value to set
			*
			*		\return			void
			*/
			void setSpecies(const std::string species){ this->species = species; }

			/*!
			* \brief	Set the special attack
			*		\param[in]		specialAttack		The value to set
			*
			*		\return			void
			*/
			void setSpecialAttack(const std::string specialAttack){ this->specialAttack = specialAttack; }

		/* Getters */
			/*! \return			Return the speed */
			double getSpeed()const { return speed; }

			/*! \return			Return the food */
			double getFood()const { return food; }
			/*! \return			Return the maximum food */
			double getFoodMax()const { return foodMax; }

			/*! \return			Return the species */
			std::string getSpecies()const { return species; }

			/*! \return			Return the special attack */
			std::string getSpecialAttack()const { return specialAttack; }

		/* Friends */

		/* Others */
			/* Collisions */
				/*!
				* \brief	Verify the collisions between two objects like rectangles
				*		\param[in]		other		The obstacle to verify
				*
				*		\return			\b true or \b false
				*/
				bool collidesRect(Contraption& other);
				/*!
				* \brief	Verify the collisions between a circle around this Animal and an other animal
				*		\param[in]		other		The obstacle to verify
				*		\param[in]		radius		The radius for the circle
				*
				*		\return			\b true or \b false
				*/
				bool collidesCircle(Contraption& other, double radius);

				/*!
				* \brief	Verify the collisions between two objects like rectangles
				*		\param[in]		other		The obstacle to verify
				*
				*		\return			\b true or \b false
				*/
				bool collides(Contraption& other){ return collidesRect(other); }

				/*!
				* \brief	Verify the collisions between two objects like rectangles
				*		\param[in]		other		The obstacle to verify
				*
				*		\return			\b true or \b false
				*/
				bool collidesRect(Contraption* other = nullptr);
				/*!
				* \brief	Verify the collisions between a circle around this Animal and an other animal
				*		\param[in]		other		The obstacle to verify
				*		\param[in]		radius		The radius for the circle
				*
				*		\return			\b true or \b false
				*/
				bool collidesCircle(Contraption* other = nullptr, double radius = 0);

				/*!
				* \brief	Verify the collisions between two objects like rectangles
				*		\param[in]		other		The obstacle to verify
				*
				*		\return			\b true or \b false
				*/
				bool collides(Contraption* other = nullptr){ return collidesRect(other); }

				/*!
				* \brief	Take of the obstacle
				* \return			void
				*/
				void anyObstacle(){ obstacle = nullptr; }
			/**************/

			/*!
			* \brief	Print the infos in the instance of the class in \a stream
			*		\param[in]		stream		The output stream
			*
			*		\return			void
			*/
			virtual void printInfos(std::ostream& stream)const;

			/*!
			* \brief	Go to the left
			* \return			void
			*/
			void goLeft();
			/*!
			* \brief	Go to the right
			* \return			void
			*/
			void goRight();
			/*!
			* \brief	Go to the top
			* \return			void
			*/
			void goTop();
			/*!
			* \brief	Go to the bot
			* \return			void
			*/
			void goBot();

			/*!
			* \brief	Turn with a given angle
			*		\param[in]		na			The angle to turn to
			*
			*		\return			void
			*/
			void turn(double na);

			/*!
			* \brief	Compute the Z
			*		\param[in]		obj			The obj relative
			*
			*		\return			Return the computed Z of the animal
			*/
			double getRelativeZ(Contraption& obj);

			/*!
			* \brief	Move to the actual direction
			* \return			void
			*/
			virtual void move();
			/*!
			* \brief	Move to the direction
			*		\param[in]		dir			The direction where to move
			*
			*		\return			void
			*/
			virtual void move(Direction dir);

			/*!
			* \brief	Attack the target
			*		\param[in]		target			The target for the attack
			*
			*		\return			\b true or \b false
			*/
			virtual bool attack(Entity* target = nullptr){
				if(target == nullptr){
					target = getTarget();
				}
				if(target == nullptr){
					return false;
				}

				return true;
			}

	protected:
		Direction direction;

	private:
		double speed;

		Contraption* obstacle;

		double food;
		double foodMax;

		std::string species;
		std::string specialAttack;
};

#endif //HEADER_ANIMAL
