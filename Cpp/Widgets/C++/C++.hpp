/*!
*	\mainpage	My own C++ Features
*		\par	Objects
*					- Contraption
*						- Object
*						- Entity
*							- Vegetal
*								- Plant
*								- Mushroom
*							- Animal
*								- Ant
*					- Player
*
*					- Arguments
*					- BDD
*					- jumble
*
*					- Color
*					- Reinit
*					- Cls
*					- ConsoleCursor
*
*					- abstract Crypto
*						- Cesar
*						- RSA
*					- Map
*
*					- RNG
*					- Rng
*
*					- Clock
*					- Timer
*		\par	Some structures & defines
*					- arguments
*					- bdd
*					- cesar
*					- reader
*					- writer
*					- rng
*
*					- Colors
*					- Point
*					- ContraptionAttr
*					- Direction
*					- Tile
*					- WorldDimensions
*					- Node
*
*					- line_number = __LINE__
*					- RIGHT_NODE = 1
*					- LEFT_NODE = -1
*					- NO_NODE = 0
*		\par	Functions
*					- ALIAS_TEMPLATE_FUNCTION
*
*					- deletePtr(T&)
*
*					- rngRange(T, U)
*
*					- getSec()
*					- getMilli()
*
*					- split(std::string, char)
*					- split(std::string, std::string)
*					- explode(std::string, char)
*					- explode(std::string, std::string)
*					- trim(std::string&)
*					- uppercase(std::string, std::string::iterator, std::string::iterator)
*					- lowercase(std::string, std::string::iterator, std::string::iterator)
*					- replace(std::string, std::string, std::string)
*					- randStr(size_t)
*
*					- sortAsc(std::map<Key, Value>)
*					- sortDesc(std::map<Key, Value>)
*
*					- wholePart(V)
*					- decimalPart(V)
*					- mod(V, U)
*					- pgcd(V, V)
*					- eucl(V, V)
*					- dist(T, T, T, T, T, T)
*					- sq(T)
*					- abs(T)
*					- min(T, V)
*					- max(T, V)
*					- round(T, int)
*					- isPrime(float)
*					- isNumber(char)
*					- sigmoide(double)
*					- dsigmoide(double)
*					- log2p(int)
*
*					- collidesC(double, double, double, double, double, double)
*					- collidesR(double, double, double, double, double, double, double, double)
*					- collidesRC(double, double, double, double, double, double, double)
*					- collidesPC(double, double, double, double, double)
*					- collidesPR(double, double, double, double, double, double)
*					- ProjectionSurSegment(double, double, double, double, double, double)
*
*					- tos(V)
*					- toi(V)
*					- tod(V)
*					- tof(V)
*					- tou(V)
*					- tov(V)
*					- tost(V)
*
*					- error_log(size_t, T, Args...)
*					- warning_log(size_t, T, Args...)
*					- info_log(size_t, T, Args...)
*
*					- fileFormat(std::string&)
*					- getFileSize(const std::string&)
*					- getlines(std::ifstream&)
*					- setlines(std::ofstream&, std::vector<std::string>)
*
*					- printType(C&)
*					- getType(C&)
*					- getType(C)
*
*					- implode(std::vector<T>, std::string)
*					- print_r(std::vector<T>)
*					- print_r(T)
*					- rewrite(std::vector<V>, unsigned)
*					- contains(std::vector<T>, T)
*
*					- printNode(Node<T>*, long int)
*					- sorter(std::pair<T, NodeWeight>, std::pair<T, NodeWeight>)
*					- createBinaryTree(std::vector<std::pair<T, NodeWeight>>)
*					- convertInTreeValues(std::vector<std::pair<T, U>>)
*					- createChild(T, NodeWeight)
*					- treeHeight(Node<T>*)
*					- printTree(Node<T>*)
*					- getRightNodeCount(Node<T>*)
*					- getLeftNodeCount(Node<T>*)
*					- finder(T, Node<T>*, std::string&)
*					- find(T, Node<T>*)
*					- freeTree(Node<T>*)
*		\par	Other things
*					- ColsArray
*					- ListArray
*					- VI
*					- VS
*					- MapLine
*					- MapArray
*
*	\date		10 juin 2018
*	\author		Mathias CABIOCH-DELALANDE
*/
/*!
*
*	\file		C++.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		07 juin 2018
*
*/
#ifndef HEADER_CPP
#define HEADER_CPP

#include "Entities.hpp"
#include "Player.hpp"

#include "cryptage.hpp"
#include "console.hpp"
#include "defines.hpp"
#include "errors.hpp"

#include "convert.hpp"
#include "collides.hpp"
#include "string.hpp"
#include "array.hpp"
#include "time.hpp"
#include "maths.hpp"
#include "files.hpp"
#include "sorting.hpp"
//#include "tree.hpp"
#include "Map.hpp"

#include "macro.hpp"
#include "types.hpp"

#endif //HEADER_CPP
