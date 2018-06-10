#include "types.hpp"

/* Get the position of the first letter in the in string */
size_t Typer::firstLetter(std::string in){
	size_t out{0};

	for(; out < in.size(); ++out){
		if(in[out] < 48 || in[out] > 57){
			break;
		}
	}

	return out;
}
