#include "collides.hpp"

bool collidesC(double r1, double x1, double y1, double r2, double x2, double y2){
	double d = dist(x1, x2, y1, y2);

	if(abs(r1 + r2) <= d){ return true; }

	return false;
}

bool collidesRC(double rx, double ry, double w, double h, double cx, double cy, double r){
	if(!collidesR(rx, ry, w, h, cx, cy, r*2, r*2)){ return false; }

	if(collidesPC(cx, cy, r, rx, ry) ||
		collidesPC(cx, cy, r, rx, ry + h) ||
		collidesPC(cx, cy, r, rx + w, ry) ||
		collidesPC(cx, cy, r, rx + w, ry + h)){
		return true;
	}

	if(collidesPR(rx, ry, w, h, cx, cy)){ return true; }

	bool projvertical = ProjectionSurSegment(cx, cy, rx, ry, rx, ry + h);
	bool projhorizontal = ProjectionSurSegment(cx, cy, rx, ry, rx + w, ry); 

	if(projvertical || projhorizontal){	return true; }

	return false;   
}

bool ProjectionSurSegment(double Cx, double Cy, double Ax, double Ay, double Bx, double By){
	double ACx = Cx-Ax;
	double ACy = Cy-Ay; 

	double ABx = Bx-Ax;
	double ABy = By-Ay; 

	double BCx = Cx-Bx;
	double BCy = Cy-By; 

	double s1 = (ACx*ABx) + (ACy*ABy);
	double s2 = (BCx*ABx) + (BCy*ABy);

	return (s1*s2 == 0);
}

bool collidesR(double x1, double y1, double w1, double h1, double x2, double y2, double w2, double h2){
	if(x1 >= x2 + w2 || x1 + w1 <= x2){ return false; }
	if(y1 >= y2 + h2 || y1 + h1 <= y2){ return false; }

	return true;
}

bool collidesPR(double rx, double ry, double w, double h, double x, double y){
	if(x > rx + w || x < rx){ return false; }
	if(y > ry + h || y < ry){ return false; }

	return true;
}

bool collidesPC(double cx, double cy, double r, double x, double y){
	double d = dist(cx, x, cy, y);

	if(d <= r){ return true; }

	return false;
}
