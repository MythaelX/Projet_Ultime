#include "console.hpp"

/* Clear the console */
	Cls::Cls() :
		code("\033[H\033[2J")
	{}

	std::ostream &operator<<(std::ostream &stream, Cls const &c){
		return stream << c.code;
	}
/*******************/

/* Colors */
	Reinit::Reinit() :
		Color(Colors::NORMAL)
	{}

	Color::Color(std::string color) :
		code1("\033["),
		colors(color),
		code2("m")
	{}

	std::ostream &operator<<(std::ostream &stream, Color const &c){
		return stream << c.code1 << c.colors << c.code2;
	}
/*******************/

/* Cursor */
	void ConsoleCursor::save(){
		std::cout << "\033[s";
	}

	void ConsoleCursor::restore(){
		std::cout << "\033[u";
	}
/**********/
