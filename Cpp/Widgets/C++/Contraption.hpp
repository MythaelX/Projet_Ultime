/*!
*
*	\file		Contraption.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		12 juin 2018
*
*/
#ifndef HEADER_CONTRAPTION
#define HEADER_CONTRAPTION

#include "defines.hpp"
#include "collides.hpp"

#include "Map.hpp"

/*!
* \class	Contraption
* \brief	A contraption
*/
class Contraption {
	public:
		/* Constructor & Destroyer */
			/*!
			* \brief	Constructor of the class
			*		\param[in]		map			The map where it is
			*		\param[in]		pt			The position in the map
			*		\param[in]		attr		The attributes of the object(width, height, angle)
			*/
			Contraption(Map* map = nullptr, Point pt = {0, 0, 0}, ContraptionAttr attr = {0, 0, 0});
			/*! \brief	Virtual destructor */
			virtual ~Contraption();

		/* Setters */
			/*!
			* \brief	Set the position
			*		\param[in]		pt				The value to set
			*
			*		\return			void
			*/
			void setPosition(Point pt){ setPosition(pt.x, pt.y, pt.z); }
			/*!
			* \brief	Set the position
			*		\param[in]		x				The x to set
			*		\param[in]		y				The y to set
			*		\param[in]		z				The z to set
			*
			*		\return			void
			*/
			void setPosition(double x, double y, double z = 0);

			/*!
			* \brief	Set the x coordinate
			*		\param[in]		x				The value to set
			*
			*		\return			void
			*/
			void setX(double x);
			/*!
			* \brief	Set the y coordinate
			*		\param[in]		y				The value to set
			*
			*		\return			void
			*/
			void setY(double y);
			/*!
			* \brief	Set the z coordinate
			*		\param[in]		z				The value to set
			*
			*		\return			void
			*/
			void setZ(double z){ this->pt.z = z; }

			/*!
			* \brief	Set the attributes
			*		\param[in]		attr			The value to set
			*
			*		\return			void
			*/
			void setAttributes(ContraptionAttr attr){ setAttributes(attr.w, attr.h, attr.angle); }
			/*!
			* \brief	Set the attributes
			*		\param[in]		w				The width to set
			*		\param[in]		h				The height to set
			*		\param[in]		angle			The angle to set
			*
			*		\return			void
			*/
			void setAttributes(double w, double h, double angle = 0);

			/*!
			* \brief	Set the width
			*		\param[in]		w				The value to set
			*
			*		\return			void
			*/
			void setW(double w){ this->attr.w = w; }
			/*!
			* \brief	Set the height
			*		\param[in]		h				The value to set
			*
			*		\return			void
			*/
			void setH(double h){ this->attr.h = h; }
			/*!
			* \brief	Set the angle
			*		\param[in]		angle			The value to set
			*
			*		\return			void
			*/
			void setA(double angle){ this->attr.angle = angle; }

			/*!
			* \brief	Set the map
			*		\param[in]		map				The value to set
			*
			*		\return			void
			*/
			void setMap(Map* map){ this->map = map; }

			/*!
			* \brief	Set the level
			*		\param[in]		level			The value to set
			*
			*		\return			void
			*/
			void setLevel(size_t level){ this->level = level; }

		/* Getters */
			/*! \return			Return the position */
			Point getPosition()const { return pt; }

			/*! \return			Return the X position */
			double getX()const { return pt.x; }
			/*! \return			Return the Y position */
			double getY()const { return pt.y; }
			/*! \return			Return the Z position */
			double getZ()const { return pt.z; }

			/*! \return			Return the attributes */
			ContraptionAttr getAttributes()const { return attr; }

			/*! \return			Return the width */
			double getW()const { return attr.w; }
			/*! \return			Return the height */
			double getH()const { return attr.h; }
			/*! \return			Return the angle */
			double getA()const { return attr.angle; }

			/*! \return			Return the map */
			Map* getMap()const { return map; }

			/*! \return			Return the level */
			size_t getLevel()const{ return level; }

		/* Friends */
			/*!
			* \brief	Overload of the << operator
			* \details	Allow you to put a Contraption object in an output stream
			*/
			friend std::ostream& operator<<(std::ostream& stream, Contraption const &in);

		/* Others */
			/*!
			* \brief	Print the infos in the instance of the class in \a stream
			*		\param[in]		stream		The output stream
			*
			*		\return			void
			*/
			virtual void printInfos(std::ostream& stream)const;
			/*!
			* \brief	Compute a z with the obstacles
			*		\param[in]		obj			The obstacle to compute z with
			*
			*		\return			Return the computed z
			*/
			virtual double getRelativeZ(Contraption& obj);

			/*!
			* \brief	Add coordinates to the actual position
			*		\param[in]		x			X coordinate
			*		\param[in]		y			Y coordinate
			*		\param[in]		z			Z coordinate
			*
			*		\return			void
			*/
			void addPosition(double x, double y, double z = 0);
			/*!
			* \brief	Turn the Contraption to the left
			* \return			void
			*/
			void turnLeft(){ setA(getA() - 90); }
			/*!
			* \brief	Turn the Contraption to the right
			* \return			void
			*/
			void turnRight(){ setA(getA() + 90); }

	protected:


	private:


	private:
		Map* map;

		Point pt;
		ContraptionAttr attr;

		size_t level;
};

#endif //HEADER_CONTRAPTION
