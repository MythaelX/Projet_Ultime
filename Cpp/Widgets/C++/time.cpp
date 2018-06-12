#include "time.hpp"

/*! \brief	Return the seconds since the Epoch */
std::time_t getSec(){
	return std::time(nullptr);
}

/*! \brief	Return the milliseconds since the Epoch */
std::chrono::milliseconds getMilli(){
	return std::chrono::duration_cast<std::chrono::milliseconds>(std::chrono::system_clock::now().time_since_epoch());
}
