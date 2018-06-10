/*!
*
*	\file		Ant.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		07 juin 2018
*
*/
#ifndef HEADER_ANT
#define HEADER_ANT

#include "Animal.hpp"

/*!
* \class	Ant
* \brief	An ant
*/
class Ant : public Animal {
	public:
		/* Constructor & Destroyer */
			/*!
			* \brief	Constructor of the class
			*		\param[in]		map			The map where it is
			*		\param[in]		pt			The position in the map
			*		\param[in]		attr		The attributes of the object(width, height, angle)
			*/
			Ant(Map* map = nullptr, Point pt = {0, 0, 0}, ContraptionAttr attr = {0, 0, 0});
			/*! \brief	Virtual destructor */
			virtual ~Ant();

		/* Setters */
			/*!
			* \brief	Set the caste of the ant
			*		\param[in]		caste			The caste to set
			*
			*		\return			void
			*/
			void setCaste(const std::string caste){ this->caste = caste; }

			/*!
			* \brief	Se the stone for the ant
			*		\param[in]		stone			The stone to set
			*
			*		\return			void
			*/
			void setStone(const double stone){ this->stone = stone; }
			/*!
			* \brief	Set the maximum stone for the ant
			*		\param[in]		stoneMax		The maximum stone to set
			*
			*		\return			void
			*/
			void setStoneMax(const double stoneMax){ this->stoneMax = stoneMax; }

		/* Getters */
			/*! \return			Return the caste */
			std::string getCaste()const { return caste; }

			/*! \return			Return the stone */
			double getStone()const { return stone; }
			/*! \return			Return the maximum stone */
			double getStoneMax()const { return stoneMax; }

		/* Friends */

		/* Others */
			/*!
			* \brief	Print the infos in the instance of the class in \a stream
			*		\param[in]		stream		The output stream
			*
			*		\return			void
			*/
			virtual void printInfos(std::ostream& stream)const;

	protected:

	private:
		std::string caste;

		double stone;
		double stoneMax;
};

#endif //HEADER_ANT
