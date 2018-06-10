/*!
*
*	\file		Widget.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		08 juin 2018
*
*/
#ifndef HEADER_WIDGET
#define HEADER_WIDGET

#include <QtWidgets>

/*!
* \class	Widget
* \brief	Create a personnalized Widget
*/
class Widget : public QWidget {
	Q_OBJECT
	public:
		/*! \brief	Create a QWidget */
		Widget(QWidget* parent = nullptr) : QWidget(parent) {}
		virtual ~Widget(){}

	public slots:

	signals:

	protected:
		void paintEvent(QPaintEvent* event);

	private:

	private:
};

#endif //HEADER_WIDGET
