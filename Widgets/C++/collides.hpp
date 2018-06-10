/*!
*
*	\file		collides.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		29 mai 2018
*
*/
#ifndef HEADER_COLLIDES
#define HEADER_COLLIDES

#include "maths.hpp"

/*!
* \brief	Compute if there is a collision between two circles
*		\param[in]		r1		Radius of the first circle
*		\param[in]		x1		X position of the first circle's center
*		\param[in]		y1		Y position of the first circle's center
*		\param[in]		r2		Radius of the second circle
*		\param[in]		x2		X position of the second circle's center
*		\param[in]		y2		Y position of the second circle's center
*
*		\return			\b true or \b false
*/
bool collidesC(double r1, double x1, double y1, double r2, double x2, double y2);
/*!
* \brief	Compute if there is a collision between two rectangles
*		\param[in]		x1		X position of the first rectangle's left corner
*		\param[in]		y1		Y position of the first rectangle's left corner
*		\param[in]		w1		Width of the first rectangle
*		\param[in]		h1		Height of the first rectangle
*		\param[in]		x2		X position of the second rectangle's left corner
*		\param[in]		y2		Y position of the second rectangle's left corner
*		\param[in]		w2		Width of the second rectangle
*		\param[in]		h2		Height of the second rectangle
*
*		\return			\b true or \b false
*/
bool collidesR(double x1, double y1, double w1, double h1, double x2, double y2, double w2, double h2);

/*!
* \brief	Compute if there is a collision between a rectangle and a circle
*		\param[in]		rx		X position of the rectangle's left
*		\param[in]		ry		Y position of the rectangle's left
*		\param[in]		w		Width of the rectangle
*		\param[in]		h		Height of the rectangle
*		\param[in]		cx		X position of the circle's center
*		\param[in]		cy		Y position of the circle's center
*		\param[in]		r		Radius of the circle
*
*		\return			\b true or \b false
*/
bool collidesRC(double rx, double ry, double w, double h, double cx, double cy, double r);
/*!
* \brief	Compute if there is a collision between a point and a circle
*		\param[in]		cx		X position of the circle's center
*		\param[in]		cy		Y position of the circle's center
*		\param[in]		r		Radius of the circle
*		\param[in]		x		X position of the point
*		\param[in]		y		Y position of the point
*
*		\return			\b true or \b false
*/
bool collidesPC(double cx, double cy, double r, double x, double y);
/*!
* \brief	Compute if there is a collision between a point and a rectangle
*		\param[in]		rx		X position of the rectangle's left corner
*		\param[in]		ry		Y position of the rectangle's left corner
*		\param[in]		w		Width of the rectangle
*		\param[in]		h		Height of the rectangle
*		\param[in]		x		X position of the point
*		\param[in]		y		Y position of the point
*
*		\return			\b true or \b false
*/
bool collidesPR(double rx, double ry, double w, double h, double x, double y);

/*!
* \brief	Compute if there is a collision on a segment
*		\param[in]		Cx		X position of the point
*		\param[in]		Cy		Y position of the point
*		\param[in]		Ax		X position of the segment's first side
*		\param[in]		Ay		Y position of the segment's first side
*		\param[in]		Bx		X position of the segment's second side
*		\param[in]		By		Y position of the segment's second side
*
*		\return			\b true or \b false
*/
bool ProjectionSurSegment(double Cx, double Cy, double Ax, double Ay, double Bx, double By);

#endif //HEADER_COLLIDES
