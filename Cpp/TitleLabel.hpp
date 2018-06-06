/*!
*
*	\file		TitleLabel.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		06 juin 2018
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
		/*! \brief	Create a QLabel */
		TitleLabel(QWidget* parent = nullptr);
	protected:
};

/*!
* \class	H2TitleLabel
* \brief	An implementation of TitleLabel for the software
*/
class H2TitleLabel : public TitleLabel {
	Q_OBJECT
	public:
		/*! \brief	Create a TitleLabel */
		H2TitleLabel(QWidget* parent = nullptr) : TitleLabel(parent){}
	protected:
};

#endif //HEADER_TITLELABEL
