/*!
*
*	\file		TitleLabel.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		05 juin 2018
*
*/
#ifndef HEADER_TITLELABEL
#define HEADER_TITLELABEL

#include "Widgets/Qt.hpp"

/*!
* \class	TitleLabel
* \brief	An implementation of QLabel for the software
*/
class TitleLabel : public QLabel {
	Q_OBJECT
	public:
		/*! \brief	Create a PushButton */
		TitleLabel(QWidget* parent = nullptr);
};

#endif //HEADER_TITLELABEL
