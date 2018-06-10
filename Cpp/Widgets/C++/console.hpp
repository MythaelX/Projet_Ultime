/*!
*
*	\file		console.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		31 mai 2018
*
*/
#ifndef HEADER_CONSOLE
#define HEADER_CONSOLE

#include "convert.hpp"
#include "types.hpp"

/*! Colors list */
enum class Colors {
	BLACK_F = 30,
	RED_F = 31,
	GREEN_F = 32,
	YELLOW_F = 33,
	BLUE_F = 34,
	PURPLE_F = 35,
	CYAN_F = 36,
	GREY_F = 37,
	LIGHT_BLACK_F = 90,
	LIGHT_RED_F = 91,
	LIGHT_GREEN_F = 92,
	LIGHT_YELLOW_F = 93,
	LIGHT_BLUE_F = 94,
	LIGHT_PURPLE_F = 95,
	LIGHT_CYAN_F = 96,
	LIGHT_GREY_F = 97,
	BLACK_B = 40,
	RED_B = 41,
	GREEN_B = 42,
	YELLOW_B = 43,
	BLUE_B = 44,
	PURPLE_B = 45,
	CYAN_B = 46,
	GREY_B = 47,
	LIGHT_BLACK_B = 100,
	LIGHT_RED_B = 101,
	LIGHT_GREEN_B = 102,
	LIGHT_YELLOW_B = 103,
	LIGHT_BLUE_B = 104,
	LIGHT_PURPLE_B = 105,
	LIGHT_CYAN_B = 106,
	LIGHT_GREY_B = 107,
	NORMAL = 0,
	BOLD = 1,
	SHADOW = 2,
	ITALIC = 3,
	UNDERLINE = 4,
	INVERT = 7,
	HIDE = 8,
	CROSS = 9
};

/* Class to color the console text */
/*!
* \class	Color
* \brief	Change the text color in the console
*/
class Color{
	public:
		/* Constructor */
		/*!
		* \brief	Construct a Color object with a first color
		*/
		Color(std::string color);

		/* Variadic template constructor */
		/*!
		* \brief	Construct a Color object with colors
		*/
		template<class ...Args> Color(Args... args) :
			code1("\033["),
			code2("m")
		{
			addColors(args...);
		}

		/* Use the class in output stream */
		/*!
		* \brief	Overloading of the << operator
		*/
		friend std::ostream &operator<<(std::ostream &stream, Color const &c);

		/* Last addColors(int) call */
		/*!
		* \brief	Add a color to the object
		*		\param[in]		color		The integer of the color
		*
		*		\return			void
		*/
		void addColors(int color){
			colors += tos(color);
		}
		/* Variadic template addColors(int) member */
		/*!
		* \brief	Add colors to the object
		*		\param[in]		color		One of the colors to add
		*		\param[in]		args		the other colors to add
		*
		*		\return			void
		*/
		template<class ...Args> void addColors(int color, Args... args){
			colors += tos(color) + ";";
			addColors(args...);
		}

		/* Last addColors(Colors) call */
		/*!
		* \brief	Add a color to the object
		*		\param[in]		color		The integer of the color
		*
		*		\return			void
		*/
		void addColors(Colors color){
			colors += tos(color);
		}
		/* Variadic template addColors(Colors) member */
		/*!
		* \brief	Add colors to the object
		*		\param[in]		color		One of the colors to add
		*		\param[in]		args		the other colors to add
		*
		*		\return			void
		*/
		template<class ...Args> void addColors(Colors color, Args... args){
			colors += tos(color) + ";";
			addColors(args...);
		}

	public:

	private:
		std::string code1;
		std::string colors;
		std::string code2;
};

/* Class to reinit the console colors */
/*!
* \class	Reinit
* \brief	Reinit the color in the console
*/
class Reinit : public Color{
	public:
		/* Constructor */
		Reinit();
	private:
};

/* Class to clear the console */
/*!
* \class	Cls
* \brief	Clear the console
*/
class Cls{
	public:
		/* Constructor */
		Cls();

		/* Use the class in output stream */
		/*!
		* \brief	Overloading of the << operator
		*/
		friend std::ostream &operator<<(std::ostream &stream, Cls const &c);
	private:
		std::string code;

};

/* Position the console cursor */
/*!
* \class	ConsoleCursor
* \brief	A class to play with the cursor in the console
* \details	This class allow you to move, save and restore the cursor position
*/
class ConsoleCursor{
	public:
		/*!
		* \brief	Go to an x/y position
		*		\param[in]		x		The x position
		*		\param[in]		y		The y position
		*
		*		\return			void
		*/
		template<typename T>
		static void goTo(T x, T y){
			std::cout << "\033[" << static_cast<int>(x) << ";" << static_cast<int>(y) << "H";
		}

		/*!
		* \brief	Save the actual cursor position
		*
		*		\return			void
		*/
		static void save();

		/*!
		* \brief	Restore the cursor's saved position
		*
		*		\return			void
		*/
		static void restore();

		/*!
		* \brief	Alias for the restore member
		*
		*		\return			void
		*/
		static void home(){ restore(); }
	private:
};

#endif //HEADER_CONSOLE
