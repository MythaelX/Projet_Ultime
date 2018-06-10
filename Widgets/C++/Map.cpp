#include "Map.hpp"

/* Constructor */
Map::Map(WorldDimensions dimensions) :
	errorTile(Tile::ERROR)
{
	setSize(dimensions);
}

/* Setters */
void Map::setSize(WorldDimensions dimensions){
	this->w = dimensions.w;
	this->h = dimensions.h;

	MapLine line;
	line.reserve(w);

	for(size_t i{0}; i < h; ++i){
		for(size_t j{0}; j < w; ++j){
			line.push_back(Tile::NONE);
		}

		map.push_back(line);
		line.clear();
	}
}

void Map::setW(size_t w){
	setSize(WorldDimensions{w, h});
}

void Map::setH(size_t h){
	setSize(WorldDimensions{w, h});
}

/* Getters */


/* Operators */
Tile& Map::operator()(const size_t& i, const size_t& j){
	if(j < h && i < w){
		return map[j][i];
	} else {
		error_log(line_number,
				  "Map operator() error",
				  "The value of w(", i, ") or h(", j, ") is wrong !",
				  "\nMax values are : w = ", w, " and h = ", h
				 );
		return errorTile;
	}
}

Tile Map::operator()(const size_t& i, const size_t& j) const {
	if(j < h && i < w){
		return map[j][i];
	} else {
		error_log(line_number,
				  "Map operator() error",
				  "The value of w(", i, ") or h(", j, ") is wrong !",
				  "\nMax values are : w = ", w, " and h = ", h
				 );
		return errorTile;
	}
}

/* Others */
void Map::clear(){
	for(auto& line : map){
		line.clear();
	}

	map.clear();

	w = 0;
	h = 0;
}

void Map::consolePrint(){
	for(size_t i{0}; i < map.size(); ++i){
		for(size_t j{0}; j < map[i].size(); ++j){
			switch(map[i][j]){
				case Tile::NONE:
					std::cout << Color(Colors::NORMAL, Colors::BOLD) << "*";
					break;
				case Tile::WATER:
					std::cout << Color(Colors::LIGHT_CYAN_B) << " ";
					break;
				case Tile::VOID:
					std::cout << Color(Colors::NORMAL) << " ";
					break;
				case Tile::HOLE:
					std::cout << Color(Colors::BLACK_B) << " ";
					break;
				case Tile::WALL:
					std::cout << Color(Colors::LIGHT_RED_B) << " ";
					break;
				case Tile::STONE:
					std::cout << Color(Colors::GREY_B) << " ";
					break;
				case Tile::LAVA:
					std::cout << Color(Colors::RED_B) << " ";
					break;
				case Tile::GRASS:
					std::cout << Color(Colors::GREEN_B) << " ";
					break;
				case Tile::DIRT:
					std::cout << Color(Colors::YELLOW_B) << " ";
					break;
				case Tile::AIR:
					std::cout << Color(Colors::LIGHT_GREY_B) << " ";
					break;
				default:
					std::cout << Color(Colors::PURPLE_B) << " ";
					break;
			}

			std::cout << Reinit();
		}

		std::cout << std::endl;
	}
}

bool Map::isXIn(double pt, double dim){
	if(pt < 0 || pt > static_cast<double>(getW()) - dim){
		return false;
	}

	return true;
}

bool Map::isYIn(double pt, double dim){
	if(pt < 0 || pt > static_cast<double>(getH()) - dim){
		return false;
	}

	return true;
}

bool Map::load(std::string file){
	std::ifstream input;
	std::string path = file + ".map";

	input.open(path.c_str());

	if(!input){
		return false;
	}

	auto lines = getlines(input);
	map.clear();

	for(auto line : lines){
		MapLine mapline;

		for(auto point : line){
			mapline.push_back(static_cast<Tile>(toi(point)));
		}

		map.push_back(mapline);
		mapline.clear();
	}

	input.close();

	return true;
}

bool Map::save(std::string file){
	std::ofstream output;
	std::string path = file + ".map";

	output.open(path.c_str());

	if(!output){
		return false;
	}

	for(auto line : map){
		for(auto point : line){
			output << tos(point);
		}

		output << std::endl;
	}

	output.close();

	return true;
}
