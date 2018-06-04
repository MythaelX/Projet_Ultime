/*!
*
*	\file		TitleLabel.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		04 juin 2018
*
*/
#ifndef HEADER_TITLELABEL
#define HEADER_TITLELABEL

#include <QtWidgets>

/*!
* \class	TitleLabel
* \brief	An implementation of QLabel for the software
*/
class TitleLabel : public QLabel {
	Q_OBJECT
	public:
		/*! \brief	Create a PushButton */
		TitleLabel(QWidget* parent = nullptr) : QLabel(parent){}
};

#endif //HEADER_TITLELABEL
