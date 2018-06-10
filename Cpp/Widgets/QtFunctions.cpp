#include "QtFunctions.hpp"

QtWindow getDesktopSize(){
	QScreen *screen = QGuiApplication::primaryScreen();
	QRect geometry = screen->geometry();
	QtWindow out;
	
	out.h = geometry.height();
	out.w = geometry.width();
	
	return out;
}

size_t getDesktopWidth(){
	return getDesktopSize().w;
}

size_t getDesktopHeight(){
	return getDesktopSize().h;
}

/* CSS */
std::string cssReader(std::string path){
	reader.open(path.c_str());
	return implode(getlines(reader), "\n");
}
