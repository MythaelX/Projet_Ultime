/*!
*
*	\file		maths.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		10 juin 2018
*
*/
#ifndef HEADER_MATHS
#define HEADER_MATHS

#include <iostream>
#include <cmath>

/*!
* \brief	Return the whole part of the given number
*		\param[in]		a		The value to compute
*
*		\return			Return the whole part of \a a
*/
template<typename V> V wholePart(V a){
	return static_cast<V>(std::floor(a));
}

/*!
* \brief	Return the decimal part of the given number
*		\param[in]		a		The value to compute
*
*		\return			Return the decimal part of \a a
*/
template<typename V> V decimalPart(V a){
	return a - wholePart(a);
}

/*!
* \brief	Return the modulo of two numbers
*		\param[in]		a		The value to compute
*		\param[in]		b		The value to compute
*
*		\return			Return the result of the modulo
*/
template<typename V, typename U> V mod(V a, U b){
	double factA;
	double factB;

	for(factA = 1; decimalPart(a*factA) != 0; factA *= 10){}
	for(factB = 1; decimalPart(b*factB) != 0; factB *= 10){}

	V out = static_cast<V>(static_cast<long long int>(a*factA) % static_cast<long long int>(b*factB)) / static_cast<V>(factA*factB);
	//out = static_cast<V>(static_cast<long long int>(a) % static_cast<long long int>(b));

	return out;
}

/*!
* \brief	Return the result of the pgcd
*		\param[in]		a		The value to compute
*		\param[in]		b		The value to compute
*
*		\return			Return the result of pgcd
*/
template<typename V> V pgcd(V a, V b){
	V r(0);

	if(a < b){
		std::swap(a, b);
	}

	if(!(r = mod(a, b))){
		return b;
	} else {
		return pgcd(b, r);
	}
}

/*!
* \brief	Return the result of the euclidian function
*		\param[in]		a		The value to compute
*		\param[in]		b		The value to compute
*
*		\return			Return the result of the euclidian divide
*/
template<typename V> V eucl(V a, V b){
	V r(a), u(1), v(0), r2(b), u2(0), v2(1);
	int q;
	V rs, us, vs;

	while(r2){
		q = static_cast<int>(r/r2);

		rs = r;
		us = u;
		vs = v;

		r = r2;
		u = u2;
		v = v2;

		r2 = rs-static_cast<float>(q)*r;
		u2 = us-static_cast<float>(q)*u;
		v2 = vs-static_cast<float>(q)*v;
	}

	V k(0);

	if(u-1*b < u){
		while(u-k*b < 2 || u-k*b > b){
			k--;
		}
	} else {
		while(u-k*b < 2 || u-k*b > b){
			k++;
		}
	}

	return u-k*b;
}

/*!
* \brief	Return the distance of the given coordinates
*		\param[in]		x1		X position of the first point
*		\param[in]		x2		X position of the second point
*		\param[in]		y1		Y position of the first point
*		\param[in]		y2		Y position of the second point
*		\param[in]		z1		Z position of the first point
*		\param[in]		z2		Z position of the second point
*
*		\return			Return the distance between the given coordinates
*/
template<class T> inline T dist(T x1, T x2, T y1, T y2, T z1=0, T z2=0) {
	return static_cast<T>(sqrt(((x1-x2)*(x1-x2)) + ((y1-y2)*(y1-y2)) + ((z1-z2)*(z1-z2))));
}

/*!
* \brief	Return the square of the given number
*		\param[in]		in		The value to compute
*
*		\return			Return the square of \a in
*/
template<class T> inline T sq(T in) {
	return in*in;
}

/*!
* \brief	Return the absolute value of the given number
*		\param[in]		in		The value to compute
*
*		\return			Return the absolute value of \a in
*/
template<class T> inline T abs(T in) {
	return (in < 0)?(-1)*in:in;
}

/*!
* \brief	Return the minimum of the arguments
*		\param[in]		a		The value to compute
*		\param[in]		b		The value to compute
*
*		\return			Return the minimum of \a a and \a b
*/
template<
	typename T,
	typename V,
	typename U = typename std::conditional<
		std::is_integral<T>::value && std::is_integral<V>::value || std::is_floating_point<T>::value && std::is_floating_point<V>::value,
		typename std::conditional<
			sizeof(T) >= sizeof(V),
			T,
			V
		>::type,
		typename std::conditional<
			std::is_floating_point<T>::value && std::is_integral<V>::value,
			T,
			typename std::conditional<
				std::is_floating_point<V>::value && std::is_integral<T>::value,
				V,
				V
			>::type
		>::type
	>::type
>
U min(T a, V b){
	U c = static_cast<U>(a);
	U d = static_cast<U>(b);
	return (c < d)?c:d;
}

/*!
* \brief	Return the maximum of the arguments
*		\param[in]		a		The value to compute
*		\param[in]		b		The value to compute
*
*		\return			Return the maximum of \a a and \a b
*/
template<
	typename T,
	typename V,
	typename U = typename std::conditional<
		std::is_integral<T>::value && std::is_integral<V>::value || std::is_floating_point<T>::value && std::is_floating_point<V>::value,
		typename std::conditional<
			sizeof(T) >= sizeof(V),
			T,
			V
		>::type,
		typename std::conditional<
			std::is_floating_point<T>::value && std::is_integral<V>::value,
			T,
			typename std::conditional<
				std::is_floating_point<V>::value && std::is_integral<T>::value,
				V,
				V
			>::type
		>::type
	>::type
>
U max(T a, V b){
	U c = static_cast<U>(a);
	U d = static_cast<U>(b);
	return (c > d)?c:d;
}

/*!
* \brief	Return the round of the given number
*		\param[in]		a		The value to round
*		\param[in]		zeros	The number of nums after the coma
*
*		\return			Return the rounded value of \a a
*/
template<class T>
T round(T a, int zeros=0){
	double fact = 1;

	while(zeros){
		fact *= 10;
		zeros--;
	}

	return static_cast<T>(static_cast<double>(static_cast<long long int>(a * fact)) / fact);
}

/*!
* \brief	Return true if the given number is prime, false either
*		\param[in]		nb		The value to verify
*
*		\return			\b true or \b false
*/
bool isPrime(float nb);
/*!
* \brief	Return true if the caracter is a number
*		\param[in]		c		The caracter to verify
*
*		\return			\b true or \b false
*/
bool isNumber(char c);

/*!
* \brief	Return the result of the sigmoide function
*		\param[in]		in		The value to compute
*
*		\return			Return the result
*/
inline double sigmoide(double in){
	return (1 / (1 + std::exp(-1 * in)));
}

/*!
* \brief	Compute with the derivated sigmoide
*		\param[in]		in		The value to compute
*
*		\return			Return the result
*/
inline double dsigmoide(double in){
	return (std::exp(-1 * in) / sq(1 + std::exp(-1 * in)));
}

/*!
* \brief	Do the log of x in base 2
*		\param[in]		x		The value to compute
*
*		\return			Return log2(\a x)
*/
inline int log2p(int x){
	return static_cast<int>(log(x) / log(2));
}

#endif //HEADER_MATHS
