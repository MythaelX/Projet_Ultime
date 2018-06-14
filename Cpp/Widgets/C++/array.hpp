/*!
*
*	\file		array.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		14 juin 2018
*
*/
#ifndef HEADER_ARRAY
#define HEADER_ARRAY

#include <iostream>
#include <vector>
#include <map>
#include <array>
#include <string>

/*! \brief	A template struct to test if T is an array, a vector or a map */
template<typename T>
struct is_array{
	const static bool value = false;
};

#ifndef DOXYGEN_SHOULD_SKIP_THIS
template<typename T>
struct is_array<std::vector<T>>{
	const static bool value = true;
};

template<typename T, typename U>
struct is_array<std::map<T, U>>{
	const static bool value = true;
};

template<typename T, std::size_t U>
struct is_array<std::array<T, U>>{
	const static bool value = true;
};
#endif //DOXYGEN_SHOULD_SKIP_THIS

/*!
* \brief	Stick the \a a vector with the \a glue given
*		\param[in]		a			The arrau to stick
*		\param[in]		glue		The string to stick the array's elements
*
*		\return			Return a string of the array
*/
template<typename T>
std::string implode(std::vector<T> a, std::string glue = ""){
	std::string out{""};
	size_t size = a.size();
	size_t index = 0;

	for(auto& elem : a){
		out += tos(elem);

		if(index+1 < size){
			out += glue;
		}

		index ++;
	}

	return out;
}

/*!
* \brief	Print the content of a vector
*		\param[in]		a		The vector to print
*
*		\return			void
*/
template<typename T>
void print_r(std::vector<T> a){
	size_t index{0};
	for(auto& elem : a){
		std::cout << index << " : '" << elem << "'" << std::endl;
		index++;
	}
}

/*!
* \brief	Print the content of an array
*		\param[in]		a		The array to print
*
*		\return			void
*/
template<typename T>
typename std::enable_if<std::is_array<T>::value>::type
print_r(T a){
	size_t index{0};

	for(auto& elem : a){
		std::cout << index << " : '" << elem << "'" << std::endl;
		index++;
	}
}

/*!
* \brief	Rewrite a vector array without the value at the given index
*		\param[in]		table		The array to rewrite
*		\param[in]		index		The index not to let in the array
*
*		\return			Return an array without the \a index
*/
template<typename V>
std::vector<V> rewrite(std::vector<V> table, unsigned index) {
	std::vector<V> out;

	for(unsigned i{0}; i < index; ++i){
		out.push_back(table[i]);
	}
	for(unsigned i{index+1}; i < table.size(); ++i){
		out.push_back(table[i]);
	}

	return out;
};

/*!
* \brief	Verify if a vector contains or not something
*		\param[in]		table		The array in which to verify
*		\param[in]		value		The value to search
*
*		\return			\b true or \b false
*/
template<typename T>
bool contains(std::vector<T> table, T value){
	/*std::cout << "Contains ;" << std::endl;
	std::cout << "\t- value : '" << value << "'" << std::endl;
	std::cout << "\t- table.size() = " << table.size() << std::endl;
	std::cout << "\t- table ;" << std::endl;
	for(size_t i{0}; i < table.size(); ++i){
		std::cout << "\t\t- table[" << i << "] = '" << table[i] << "'" << std::endl;
	}*/

	if(table.empty()){ return false; }

	if(std::find(table.begin(), table.end(), value) == table.end()){ return false; }

	return true;
}

/*!
* \brief	Concate an array when it only contains an array in a field
*		\param[in]		table		The array to concate
*
*		\return			Return the concatenate array
* \todo		Do the function
*/
template<typename T>
T concate(T table){
	if(is_array<T>::value){
		std::cout << "It's an array" << std::endl;
		for(auto& line : table){
			
		}
	} else {
		std::cout << "It isn't an array" << std::endl;
	}

	return table;
}

/*!
* \class	jumble
* \brief	A dynamic array to store any type of variable
* \todo		Create the class
*/
class jumble {
	public:
		/* Constructor et Destroyer */
		/*! \brief	Constructor of the class */
		jumble();
		~jumble();

		/* Setters */

		/* Others */

	private:
		std::vector<std::pair<std::string, std::string>> contents;
};

#endif //HEADER_ARRAY
