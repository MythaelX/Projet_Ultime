/*!
*
*	\file		Threadable.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		12 juin 2018
*
*/
#ifndef HEADER_THREADABLE
#define HEADER_THREADABLE

#include <thread>
#include <mutex>
#include <functional>

#include "pointers.hpp"

#define THREADABLE\
	public:\
		/*! \brief	The function to start the thread */\
		void launch(){\
			Threadable::launch(this);\
		}\
		/*!
		\brief	The function call by the thread, that call update()
		\details	The update call is locked up between a lock and an unlock of the Threadable \b mutex
		*/\
		void updater(){\
			while(!this->hasToStop()){\
				mutex.lock();\
				this->update();\
				mutex.unlock();\
			}\
		}

/*!
* \brief	A class to let another one to be threadable with update() member in a thread
* \details	On heritage,\n
*			- : public Threadable<\b Your \b class >
*			- Add \b THREADABLE before \b public
*/
template<class C>
class Threadable {
	public:
		/*! \brief	The constructor of the Threadable class */
		Threadable() : 
			m_loopThread(nullptr),
			m_threadStopper(false)
		{}
		~Threadable(){
			deletePtr(m_loopThread);
		}

		#ifndef DOXYGEN_SHOULD_SKIP_THIS
			virtual void update() = 0;

			void launch(C* obj){
				m_loopThread = new std::thread(&C::updater, obj);
			}
		#endif //DOXYGEN_SHOULD_SKIP_THIS

		/*! \brief	Start the thread */
		virtual void launch() = 0;

		/*! \brief	Stop the thread and delete the pointer correctly */
		void stop(){
			m_threadStopper = true;
			deletePtr(m_loopThread);
		}

		/*!
		* \brief	Return if the thread has to stop or not
		*		\return		\b true or \b false
		*/
		bool hasToStop(){
			return m_threadStopper;
		}

	protected:
		#ifndef DOXYGEN_SHOULD_SKIP_THIS
			std::thread* m_loopThread;
			bool m_threadStopper;
		#endif //DOXYGEN_SHOULD_SKIP_THIS

		/*! \brief	The mutex variable to use in the thread */
		std::mutex mutex;

	private:
};

#endif //HEADER_THREADABLE
