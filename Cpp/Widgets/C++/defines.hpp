/*!
*
*	\file		defines.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		14 juin 2018
*
*	\details	- Include ;
*					- iostream\n
*					- fstream\n
*					- sstream\n\n
*					- vector\n
*					- map\n
*					- tuple\n
*					- iterator\n\n
*					- string\n
*					- numeric\n\n
*					- type_traits\n
*					- typeinfo\n\n
*					- thread\n
*					- mutex\n\n
*					- limits\n
*					- utility\n
*					- memory\n
*					- locale\n
*					- functional\n
*					- random\n
*					- algorithm\n
*					- ios\n\n
*					- cmath\n
*					- ctime\n
*					- chrono\n
*				- Enable the use of ;
*					- BDD with bdd\n
*					- RNG with rng\n
*					- Arguments with arguments\n
*					- std::ifstream with reader\n
*					- std::ofstream with writer\n
*
*/
#ifndef HEADER_DEFINES
#define HEADER_DEFINES

#include <limits>
#include <utility>
#include <memory>
#include <iterator>
#include <tuple>
#include <ios>

#include "bdd.hpp"
#include "Args.hpp"

/* Some defines */
/*! \brief	Alias for \b std::vector<int> */
using VI = std::vector<int>;
/*! \brief	Alias for \b std::vector<std::string> */
using VS = std::vector<std::string>;

/*! \brief	A struct to define a point in space */
struct Point {
	/*! X position */
	double x;
	/*! Y position */
	double y;
	/*! Z position */
	double z = 0;
};

/*! \brief	A struct to define \b Contraption attributes */
struct ContraptionAttr{
	/*! Width */
	double w;
	/*! Height */
	double h;
	/*! Angle */
	double angle = 0;
};

/*! \brief	Directions to move */
enum class Direction {
	UP,
	DOWN,
	RIGHT,
	LEFT,
	NONE
};

/*! \brief	A container for three values */
template<typename T, typename U, typename V>
struct trio{
	T first;
	U second;
	V ter;
};

#endif //HEADER_DEFINES
