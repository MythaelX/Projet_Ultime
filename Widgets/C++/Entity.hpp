/*!
*
*	\file		Entity.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		30 mai 2018
*
*/
#ifndef HEADER_ENTITY
#define HEADER_ENTITY

#include "Contraption.hpp"

/*!
* \class	Entity
* \brief	An entity
*/
class Entity : public Contraption {
	public:
		/* Constructor & Destroyer */
			/*!
			* \brief	Constructor of the class
			*		\param[in]		map			The map where it is
			*		\param[in]		pt			The position in the map
			*		\param[in]		attr		The attributes of the object(width, height, angle)
			*/
			Entity(Map* map = nullptr, Point pt = {0, 0, 0}, ContraptionAttr attr = {0, 0, 0});
			/*! \brief	Virtual destructor */
			virtual ~Entity();

		/* Setters */
			/*!
			* \brief	Set the life of the entity
			*		\param[in]		life			The life to set
			*
			*		\return			void
			*/
			void setLife(double life){ this->life = life; }
			/*!
			* \brief	The damages of the entity
			*		\param[in]		damages			The damages to set
			*
			*		\return			void
			*/
			void setDamages(double damages){ this->damages = damages; }
			/*!
			* \brief	Set the resistance of the entity
			*		\param[in]		resistance		The resistance to set
			*
			*		\return			void
			*/
			void setResistance(double resistance){ this->resistance = resistance; }
			/*!
			* \brief	Set the age of the entity
			*		\param[in]		age				The age to set
			*
			*		\return			void
			*/
			void setAge(double age){ this->age = age; }

			/*!
			* \brief	Set the reborn time
			*		\param[in]		reborn			The time to set
			*
			*		\return			void
			*/
			void setReborn(const double reborn){ this->reborn = reborn; }
			/*!
			* \brief	Set the actual time
			*		\param[in]		time			The time to set
			*
			*		\return			void
			*/
			void setTimeActReborn(const double time){ this->timeActReborn = time; }
			/*!
			* \brief	Set the precedent time
			*		\param[in]		time			The time to set
			*
			*		\return			void
			*/
			void setTimePrecReborn(const double time){ this->timePrecReborn = time; }

			/*!
			* \brief	Set the regeneration time
			*		\param[in]		regen			The time to set
			*
			*		\return			void
			*/
			void setRegen(const double regen){ this->regen = regen; }
			/*!
			* \brief	Set the actual time
			*		\param[in]		time			The time to set
			*
			*		\return			void
			*/
			void setTimeActRegen(const double time){ this->timeActRegen = time; }
			/*!
			* \brief	Set the precedent time
			*		\param[in]		time			The time to set
			*
			*		\return			void
			*/
			void setTimePrecRegen(const double time){ this->timePrecRegen = time; }

		/* Getters */
			/*! \return			Return the max life */
			double getLifeMax()const { return life; }
			/*! \return			Return the damages */
			double getDamages()const { return damages; }
			/*! \return			Return the resistance */
			double getResistance()const { return resistance; }
			/*! \return			Return the age */
			double getAge()const { return age; }

			/*! \return			Return the reborn duration */
			double getReborn()const { return reborn; }
			/*! \return			Return the actual time since reborn */
			double getTimeActReborn()const { return timeActReborn; }
			/*! \return			Return the precedent time since reborn */
			double getTimePrecReborn()const { return timePrecReborn; }

			/*! \return			Return the regen duration */
			double getRegen()const { return regen; }
			/*! \return			Return the actual time since regen */
			double getTimeActRegen()const { return timeActRegen; }
			/*! \return			Return the precedet time since regen */
			double getTimePrecRegen()const { return timePrecRegen; }

		/* Friends */


		/* Others */
			/*!
			* \brief	Print the infos in the instance of the class in \a stream
			*		\param[in]		stream		The output stream
			*
			*		\return			void
			*/
			virtual void printInfos(std::ostream& stream)const;
			/*!
			* \brief	Grow the entity
			*		\return			void
			*/
			virtual void grow();

			/*! 		\return			Return the actual life */
			double getLife()const { return (life-damages < 0)?0:life-damages; }

			/*!
			* \brief	Hit an entity with \a damages
			*		\param[in]		damages		The damages to hit
			*
			*		\return			void
			*/
			void hit(double damages);

	protected:

	private:
		double life;
		double damages;

		double resistance;

		double age;

		double reborn;
		double timeActReborn;
		double timePrecReborn;

		double regen;
		double timeActRegen;
		double timePrecRegen;
};

#endif //HEADER_ENTITY
