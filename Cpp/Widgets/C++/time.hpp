/*!
*
*	\file		time.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		11 juin 2018
*
*/
#ifndef HEADER_TIME
#define HEADER_TIME

#include <ctime>
#include <chrono>
#include "Threadable.hpp"

/*!
* \brief	Get the number of seconds since the Epoch
*
*		\return			Return the number of seconds
*/
std::time_t getSec();

/*! \brief	Return the milliseconds since the Epoch */
std::chrono::milliseconds getMilli();

/*!
* \class	Clock
* \brief	A clock to measure the elapsed time
*/
class Clock {
	public:
		/* Constructor */
		Clock();

		/* Getters */
		/*!
		* \brief	Get time elapsed
		*		\return			Return time elapsed since the clock started
		*/
		std::time_t getElapsed();
		/*!
		* \brief	Get the time start
		*		\return			Return the start time since last clock start
		*/
		std::time_t getStart()const { return m_start; }

		/* Others */
		/*!
		* \details Start the clock
		*/
		void start();
		/*!
		* \details Restart the clock
		*/
		void restart();

	protected:
		std::time_t m_start;
		bool started;
};

/*!
* \class	Timer
* \brief	A timer to do something at the end
* \todo		Create the class
*/
class Timer : public Threadable<Timer> {
	THREADABLE
	public:
		/* Constructor */
		Timer();

		/* Getters */
		std::time_t getStart()const { return m_start; }

		/* Others */
		void start(int sec);
		void restart(int sec);

	protected:
		std::time_t m_start;
		bool started;
};

#endif //HEADER_TIME
