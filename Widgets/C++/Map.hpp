/*!
*
*	\file		Map.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		30 mai 2018
*
*/
#ifndef HEADER_MAP
#define HEADER_MAP

#include "console.hpp"
#include "errors.hpp"
#include "files.hpp"

/*!
* \brief	Tiles of the map
*/
enum class Tile {
	NONE = 0,
	WATER,
	LAVA,
	GRASS,
	DIRT,
	WALL,
	STONE,
	HOLE,
	VOID,
	ERROR,
	AIR
};

/*!
* \brief	An object to group the dimensions of the world
*/
struct WorldDimensions {
	size_t w = 0;
	size_t h = 0;
	size_t z = 0;
};

using MapLine = std::vector<Tile>;
using MapArray = std::vector<MapLine>;

/*!
* \class	Map
* \brief	A map class to have something common
*/
class Map {
	public:
		/* Constructor */
			/*!
			* \brief	The constructor of the map that initialize it
			*		\param[in]		dimensions		The dimensions of the map
			*/
			Map(WorldDimensions dimensions);

		/* Setters */
			/*!
			* \brief	Set new dimensions for the map
			*		\param[in]		dimensions		The dimensions of the map
			*
			*		\return			void
			*/
			void setSize(WorldDimensions dimensions);
			/*!
			* \brief	Set a new width for the map
			*		\param[in]		w				The width of the map
			*
			*		\return			void
			*/
			void setW(size_t w);
			/*!
			* \brief	Set a new height for the map
			*		\param[in]		h				The height of the map
			*
			*		\return			void
			*/
			void setH(size_t h);

		/* Getters */
			/*! \return			Return the size */
			WorldDimensions getSize()const { return WorldDimensions{w, h}; }
			/*! \return			Return the width */
			size_t getW()const { return w; }
			/*! \return			Return the height */
			size_t getH()const { return h; }

			/*! \return			Return the maparray */
			MapArray get()const { return map; }

		/* Operators */
			/*!
			* \brief	Overloading of the () operator
			*		\param[in]		i			The x coordinate of the Tile
			*		\param[in]		j			The y coordinate of the Tile
			*
			*		\return			Return a Tile of the map
			*/
			Tile& operator()(const size_t& i, const size_t& j);
			/*!
			* \brief	Overloading of the () operator
			*		\param[in]		i			The x coordinate of the Tile
			*		\param[in]		j			The y coordinate of the Tile
			*
			*		\return			Return a Tile of the map
			*/
			Tile operator()(const size_t& i, const size_t& j) const;

		/* Others */
			/*!
			* \brief	Clear the map array
			*		\return			void
			*/
			void clear();
			/*!
			* \brief	Print the map in the console
			*		\return			void
			*/
			void consolePrint();

			/*!
			* \brief	Verify if the point is in map on X axis
			*		\param[in]		pt			The x coordinate
			*		\param[in]		dim			The width of the object
			*
			*		\return			\b true or \b false
			*/
			bool isXIn(double pt, double dim);
			/*!
			* \brief	Verify if the point is in map on Y axis
			*		\param[in]		pt			The y coordinate
			*		\param[in]		dim			The height of the object
			*
			*		\return			\b true or \b false
			*/
			bool isYIn(double pt, double dim);

			/*!
			* \brief	Load the map from a file
			*		\param[in]		file		The file to load from
			*
			*		\return			\b true or \b false
			*/
			bool load(std::string file);
			/*!
			* \brief	Save the map in a file
			*		\param[in]		file		The file to save in
			*
			*		\return			\b true or \b false
			*/
			bool save(std::string file);

	protected:


	private:
		Tile errorTile;

		size_t w;
		size_t h;

		MapArray map;
};

#endif //HEADER_MAP
