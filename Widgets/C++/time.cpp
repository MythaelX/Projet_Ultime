#include "time.hpp"

/* Return the seconds since the Epoch */
std::time_t getSec(){
	return std::time(nullptr);
}

/* Return the milliseconds since the Epoch TODO */
std::time_t getMilli(){
	return 0;
}
