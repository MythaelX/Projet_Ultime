#include "time.hpp"

/* Constructor */
Clock::Clock() :
	m_start(0),
	started(false)
{}

/* Start the clock */
void Clock::start(){
	if(!started){
		m_start = getSec();
		started = true;
	}
}

/* Restart the clock */
void Clock::restart(){
	if(started){
		m_start = getSec();
	} else {
		start();
	}
}

/* Return the number of seconds since the clock is started */
std::time_t Clock::getElapsed(){
	if(!started){
		return 0;
	}

	return getSec() - m_start;
}
