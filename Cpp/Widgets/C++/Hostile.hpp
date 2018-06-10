/*!
*
*	\file		Hostile.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		07 juin 2018
*
*/
#ifndef HEADER_HOSTILE
#define HEADER_HOSTILE

#include "Entity.hpp"

/*!
* \class	Hostile
* \brief	A class to derivate from when the thing can attack
*/
class Hostile {
	public:
		/* Constructor & Destroyer */
			/*! \brief	The constructor of the class */
			Hostile();
			/*! \brief	Virtual destructor */
			virtual ~Hostile();

		/* Setters */
			/*!
			* \brief	Set the Hostile's strength
			*		\param[in]		strength		The new strength
			*
			*		\return			void
			*/
			void setStrength(double strength){ this->strength = strength; }
			/*!
			* \brief	Set the Hostile's strength
			*		\param[in]		target			The new target
			*
			*		\return			void
			*/
			void setTarget(Entity* target){ this->target = target; }

		/* Getters */
			/*!
			* \brief	Get the Hotsile's strength
			*		\return			Return the strength
			*/
			double getStrength()const { return strength; }
			/*!
			* \brief	Get the Hotsile's target
			*		\return			Return the target
			*/
			Entity* getTarget()const { return target; }

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
			* \brief	Hurt the target
			*		\param[in]		target			The target to hurt
			*
			*		\return			\b true or \b false
			*/
			bool hurt(Entity* target = nullptr);
			/*!
			* \brief	Attack
			*		\param[in]		target			The target to attack
			*
			*		\return			\b true or \b false
			*/
			virtual bool attack(Entity* target = nullptr) = 0;

			/*!
			* \brief	Set the target to null
			*		\return			void
			*/
			void untarget(){ target = nullptr; }

	protected:
		Entity* target;

	private:
		double strength;
};

#endif //HEADER_HOSTILE
