#include "string.hpp"

std::vector<std::string> split(std::string in, char separator){
	std::vector<std::string> out;
	std::string part{""};

	for(auto c : in){
		if(c == separator){
			if(part != ""){
				out.push_back(part);
				part = "";
			}
		} else {
			part += c;
		}
	}

	if(part != ""){
		out.push_back(part);
		part = "";
	}

	return out;
}

std::vector<std::string> split(std::string in, std::string c){
	std::vector<std::string> out;
	size_t pos{0};

	while((pos = in.find(c)) != std::string::npos){
		out.push_back(in.substr(0, pos));
		in = in.substr(pos+c.size(), in.size());
	}

	if(in.size()){
		out.push_back(in.substr(0, in.size()));
	}

	return out;
}

std::vector<std::string> split(std::string in, std::vector<std::string> cars){
	std::vector<std::string> out;
	std::string mask = "&*-/_=";

	for(auto car : cars){
		in = replace(in, car, mask);
	}
	out = explode(in, mask);

	return out;
}

void trim(std::string& in){
	std::string out = in;
	in = "";

	for(unsigned i{0}; i < out.size(); ++i){
		if(!(out[i] == ' ' && (!in.size() || in[i-1] == ' ' || i+1 == out.size()))){
			in += out[i];
		}
	}
}

std::string uppercase(std::string str, std::string::iterator begin, std::string::iterator end){
	std::string out = "";
	short modify = 0;

	for(auto it = str.begin(); it != str.end(); ++it){
		if((*it) == (*begin) && !modify){
			modify = 1;
		} else if((*it) == (*end)){
			modify = 2;
		}

		if(modify == 1){
			out += tos(static_cast<char>(toupper(*it)));
		} else {
			out += tos(*it);
		}
	}

	return out;
}
std::string lowercase(std::string str, std::string::iterator begin, std::string::iterator end){
	std::string out = "";
	short modify = 0;

	for(auto it = str.begin(); it != str.end(); ++it){
		if((*it) == (*begin) && !modify){
			modify = 1;
		} else if((*it) == (*end)){
			modify = 2;
		}

		if(modify == 1){
			out += tos(static_cast<char>(tolower(*it)));
		} else {
			out += tos(*it);
		}
	}

	return out;
}

std::string replace(std::string str, std::string from, std::string to, bool regex){
	std::regex str_regex;

	try {
		if(regex){
			str_regex.assign(from);
		} else {
			str_regex.assign("(" + from + ")");
		}
	} catch(std::regex_error& e){
		error_log(line_number, "Regex Error", "An error occured during the replacement in \n" , str, "\n where ", from, " has to be replaced by ", to, "\n", e.what());
	}

	return std::regex_replace(str, str_regex, to);//implode(explode(str, from), to);
}

std::string randStr(size_t nb){
	std::string out = "";
	std::vector<std::string> cars = {"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m",
									 "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z",
									 "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
									 "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z",
									 "0", "1", "2", "3", "4", "5", "6", "7", "8", "9",
									 " ", "?", "!", ".", "_", "-", ",", ":", ";", "/", "*"};

	for(size_t i{0}; i < nb; ++i){
		out += cars[rng(0, static_cast<int>(cars.size())-1)];
	}

	return out;
}

size_t count(std::string text, char c){
	size_t nb{0};

	for(auto car : text){
		if(car == c){
			nb++;
		}
	}

	return nb;
}

std::vector<std::vector<std::string>> getall(std::string str_regex, std::string str){
	std::regex regex(str_regex);
	std::sregex_iterator regex_it_next(str.begin(), str.end(), regex);
	std::sregex_iterator regex_it_end;
	std::vector<std::vector<std::string>> out;

	while(regex_it_next != regex_it_end){
		std::smatch it_match = *regex_it_next;
		std::vector<std::string> occurence;

		if(it_match.size() > 1){
			for(size_t i{1}; i < it_match.size(); ++i){
				occurence.push_back(it_match.str(i));
			}
			out.push_back(occurence);
		} else if(it_match.size() > 0){
			for(size_t i{0}; i < it_match.size(); ++i){
				occurence.push_back(it_match.str(i));
			}
			out.push_back(occurence);
		}

		regex_it_next++;
	}

	return out;
}

std::string removeAccents(std::string str){
	str = replace(str, "(é|è|ê|ë)", "e", true);
	str = replace(str, "(à|â|ä)", "a", true);
	str = replace(str, "(ç)", "c", true);
	str = replace(str, "(î|ï|ì)", "i", true);
	str = replace(str, "(ô|ö|ò)", "o", true);
	str = replace(str, "(û|ù|ü)", "u", true);

	return str;
}
