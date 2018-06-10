/*!
*
*	\file		Object.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		07 juin 2018
*
*/
#ifndef HEADER_OBJECT
#define HEADER_OBJECT

#include "Contraption.hpp"

/*!
* \class	Object
* \brief	An object
*/
class Object : public Contraption {
	public:
		/* Constructor & Destroyer */
			/*!
			* \brief	Constructor of the class
			*		\param[in]		map			The map where it is
			*		\param[in]		pt			The position in the map
			*		\param[in]		attr		The attributes of the object(width, height, angle)
			*/
			Object(Map* map = nullptr, Point pt = {0, 0, 0}, ContraptionAttr attr = {0, 0, 0});
			/*! \brief	Virtual destructor */
			virtual ~Object();

		/* Setters */

		/* Getters */

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

};

#endif //HEADER_OBJECT
