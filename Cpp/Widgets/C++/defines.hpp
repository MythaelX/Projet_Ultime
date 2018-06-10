/*!
*
*	\file		defines.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		10 juin 2018
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
*					- random\n
*					- algorithm\n
*					- ios\n\n
*					- cmath\n
*					- ctime\n
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
#include "RNG.hpp"
#include "convert.hpp"
#include "string.hpp"
#include "time.hpp"
#include "maths.hpp"
#include "files.hpp"
#include "pointers.hpp"

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

#endif //HEADER_DEFINES
