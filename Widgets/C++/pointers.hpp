/*!
*
*	\file		pointers.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		31 mai 2018
*
*/
#ifndef HEADER_POINTERS
#define HEADER_POINTERS

#include <iostream>

#ifndef DOXYGEN_SHOULD_SKIP_THIS
template<typename T>
typename std::enable_if<std::is_same<T, std::thread*>::value, void>::type
deleteThreadPtr(T& pointer){
	if(pointer->joinable()){
		pointer->join();
	}
}
#endif /* DOXYGEN_SHOULD_SKIP_THIS */
#ifndef DOXYGEN_SHOULD_SKIP_THIS
template<typename T>
typename std::enable_if<!std::is_same<T, std::thread*>::value, void>::type
deleteThreadPtr(T&){}
#endif /* DOXYGEN_SHOULD_SKIP_THIS */

/*!
* \brief	Delete a pointer
*		\param[in,out]		pointer		The pointer to delete
*
*		\return			void
* \details	Delete \a pointer if is \b not \b equal to nullptr and \b not a joinable thread pointer.\n
* 			For a joinable thread pointer, it wait for the end of the function.\n
* 			After delete, it put the pointer to \b nullptr.
*/
template<typename T>
typename std::enable_if<std::is_pointer<T>::value, void>::type
deletePtr(T& pointer){
	if(pointer == nullptr){
		return;
	}
	if(std::is_same<T, std::thread*>::value){
		deleteThreadPtr(pointer);
	}

	delete pointer;
	pointer = nullptr;
}

#endif //HEADER_POINTERS
