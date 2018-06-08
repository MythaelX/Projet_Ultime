/*!
*
*	\file		PushButton.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		04 juin 2018
*
*/
#ifndef HEADER_PUSHBUTTON
#define HEADER_PUSHBUTTON

#include <QtWidgets>

/*!
* \class	PushButton
* \brief	An implementation of QPushButton for the software
*/
class PushButton : public QPushButton {
	Q_OBJECT
	public:
		/*! \brief	Create a QPushButton */
		PushButton(QWidget* parent = nullptr);
	
		/*! \brief	Set the table linked to the button */
		void setTable(std::string table){ this->table = table; }
		/*! \brief	Set the index linked to the button */
		void setIndex(std::string index){ this->index = index; }
	
	public slots:
		/*! \brief Change the active state of a value */
		virtual void click();
		
	signals:
		/*!
		* \brief Overload of the clicked signal
		*	\param[in]		table		The table linked
		*	\param[in]		index		The index linked
		*
		*	\return			void
		*/
		void clicked(std::string table, std::string index);
		
	protected:
		std::string getTable()const { return table; }
		std::string getIndex()const { return index; }
		
	private:
		std::string table;
		std::string index;
};

/*!
* \class	RedPushButton
* \brief	An implementation of PushButton for the software
*/
class RedPushButton : public PushButton {
	Q_OBJECT
	public:
		/*! \brief	Create a PushButton */
		RedPushButton(QWidget* parent = nullptr) : PushButton(parent){}
};

/*!
* \class	GreyPushButton
* \brief	An implementation of PushButton for the software
*/
class GreyPushButton : public PushButton {
	Q_OBJECT
	public:
		/*! \brief	Create a PushButton */
		GreyPushButton(QWidget* parent = nullptr) : PushButton(parent){}
};

/*!
* \class	GreenPushButton
* \brief	An implementation of PushButton for the software
*/
class GreenPushButton : public PushButton {
	Q_OBJECT
	public:
		/*! \brief	Create a PushButton */
		GreenPushButton(QWidget* parent = nullptr) : PushButton(parent){}
};

#endif //HEADER_PUSHBUTTON
