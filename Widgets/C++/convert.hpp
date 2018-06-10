/*!
*
*	\file		convert.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		01 juin 2018
*
*/
#ifndef HEADER_CONVERT
#define HEADER_CONVERT

#include <sstream>

#include <string>
#include <algorithm>
#include <numeric>
#include <type_traits>

/*!
* \brief	Convert an enum in string
*		\param[in]		in		The variable to convert
*
*		\return			Return a string
*/
template<typename V>
typename std::enable_if<
	std::is_enum<V>::value,
	std::string
>::type
tos(V in){
	std::stringstream out;

	out << static_cast<typename std::underlying_type<V>::type>(in);

	return out.str();
}

/*!
* \brief	Convert \a in variable in string
*		\param[in]		in		The variable to convert
*
*		\return			Return a string
*/
template<typename V>
typename std::enable_if<
	!std::is_enum<V>::value,
	std::string
>::type
tos(V in){
	std::stringstream out;

	out << in;

	return out.str();
}

/*!
* \brief	Convert \a in variable in int
*		\param[in]		in		The variable to convert
*
*		\return			Return an int
*/
template<typename V>
int toi(V in) {
	std::stringstream tmp;
	int out;

	tmp << tos(in);
	tmp >> out;

	return out;
}

/*!
* \brief	Convert \a in variable in double
*		\param[in]		in		The variable to convert
*
*		\return			Return a double
*/
template<typename V>
double tod(V in) {
	std::stringstream tmp;
	double out;

	tmp << tos(in);
	tmp >> out;

	return out;
}

/*!
* \brief	Convert \a in variable in float
*		\param[in]		in		The variable to convert
*
*		\return			Return a float
*/
template<typename V>
float tof(V in) {
	std::stringstream tmp;
	float out;

	tmp << tos(in);
	tmp >> out;

	return out;
}

/*!
* \brief	Convert \a in variable in unsigned int
*		\param[in]		in		The variable to convert
*
*		\return			Return an unsigned int
*/
template<typename V>
unsigned int tou(V in) {
	std::stringstream tmp;
	unsigned int out;

	tmp << tos(in);
	tmp >> out;

	return out;
}

/*!
* \brief	Convert \a in variable in unsigned long long int
*		\param[in]		in		The variable to convert
*
*		\return			Return an unsigned long long int
*/
template<typename V>
unsigned long long int tov(V in) {
	std::stringstream tmp;
	unsigned long long int out;

	tmp << tos(in);
	tmp >> out;

	return out;
}

/*!
* \brief	Convert \a in variable in size_t
*		\param[in]		in		The variable to convert
*
*		\return			Return a size_t
*/
template<typename V>
size_t tost(V in) {
	std::stringstream tmp;
	size_t out;

	tmp << tos(in);
	tmp >> out;

	return out;
}

#endif //HEADER_CONVERT
