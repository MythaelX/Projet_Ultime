#include "time.hpp"

/* Constructor */
Timer::Timer() :
	m_start(0),
	started(false)
{}

/* Start the timer */
void Timer::start(int sec){
	if(!started){
		m_start = getSec();
		started = true;

		if(sec){}
	}
}

/* Restart the timer */
void Timer::restart(int sec){
	if(started){
		m_start = getSec();
	} else {
		start(sec);
	}
}
