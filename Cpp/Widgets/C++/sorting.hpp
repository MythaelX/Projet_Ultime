/*!
*
*	\file		sorting.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		29 mai 2018
*
*/
#ifndef HEADER_SORTING
#define HEADER_SORTING

#include <iostream>
#include <algorithm>
#include <map>
#include <set>
#include <functional>

/*!
* \brief	sort a map ascendently
*		\param[in]		map		The map to sort
*
*		\return			Return a sorted vector
*/
template<typename Key, typename Value>
auto sortAsc(std::map<Key, Value> map){
	std::vector<std::pair<Key, Value>> out;

	typedef std::function<bool(std::pair<Key, Value>, std::pair<Key, Value>)> Comparator;

	Comparator asc =
		[](std::pair<Key, Value> elem1, std::pair<Key, Value> elem2){
			return elem1.second < elem2.second;
		};

	std::set<std::pair<Key, Value>, Comparator> set(
		map.begin(), map.end(), asc);

	for(auto s : set){
		out.push_back(s);
	}

	return out;
}

/*!
* \brief	Sort a map descendently
*		\param[in]		map		The map to sort
*
*		\return			Return a sorted vector
*/
template<class Key, class Value>
auto sortDesc(std::map<Key, Value> map){
	std::vector<std::pair<Key, Value>> out;

	typedef std::function<bool(std::pair<Key, Value>, std::pair<Key, Value>)> Comparator;

	Comparator desc =
		[](std::pair<Key, Value> elem1, std::pair<Key, Value> elem2){
			return elem1.second > elem2.second;
		};

	std::set<std::pair<Key, Value>, Comparator> set(
		map.begin(), map.end(), desc);

	for(auto s : set){
		out.push_back(s);
	}

	return out;
}

#endif //HEADER_SORTING
