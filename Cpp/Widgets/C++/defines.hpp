/*!
*
*	\file		defines.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		02 juin 2018
*
*/
#ifndef HEADER_DEFINES
#define HEADER_DEFINES

/*!
*		#include <iostream>
*
*		#include <fstream>
*		#include <sstream>
*
*		#include <vector>
*		#include <map>
*
*		#include <string>
*
*		#include <random>
*		#include <algorithm>
*
*		#include <type_traits>
*		#include <typeinfo>
*		#include <numeric>
*
*		#include <thread>
*		#include <mutex>
*
*		#include <cmath>
*		#include <ctime>
*/

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
