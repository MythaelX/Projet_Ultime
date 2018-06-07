/*!
*
*	\file		CheckBox.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		06 juin 2018
*
*/
#ifndef HEADER_CHECKBOX
#define HEADER_CHECKBOX

#include <QtWidgets>

/*!
* \class	CheckBox
* \brief	An implementation of QCheckBox for the software
*/
class CheckBox : public QCheckBox {
	Q_OBJECT
	public:
		/*! \brief	Create a QCheckBox */
		CheckBox(QWidget* parent = nullptr);
	
		/*! \brief	Set the table linked to the checkbox */
		void setTable(std::string table){ this->table = table; }
		/*! \brief	Set the index linked to the checkbox */
		void setIndex(size_t index){ this->index = index; }

		/*! \brief	Return the table */
		std::string getTable()const { return table; }
		/*! \brief	Return the index */
		size_t getIndex()const { return index; }

	public slots:
		/*! \brief Change the active state of a value */
		void changeActive(int state);
		
	signals:
		/*!
		* \brief Overload of the stateChanged signal
		*	\param[in]		state		The new state of the checkbox
		*	\param[in]		table		The table linked
		*	\param[in]		index		The index linked
		*
		*	\return			void
		*/
		void stateChanged(int state, std::string table, size_t index);
		
	private:
		std::string table;
		size_t index;
};

#endif //HEADER_CHECKBOX
