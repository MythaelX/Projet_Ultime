#include "maths.hpp"

/* Return true if the given number is prime, false either */
bool isPrime(float nb){
	if(nb == 1 || nb == 2){ return true; }
	if(!mod(nb, 2)){ return false; }

	double root = sqrt(nb);

	if(root == wholePart(root)){ return false; }

	for(int i = 3; i < static_cast<long int>(root); i+=2){
		if(!mod(nb, i)){
			return false;
		}
	}

	return true;
}

/* Return true if the caracter is a number */
bool isNumber(char c){
	if(c < '0' || c > '9'){ return false; }

	return true;
}
