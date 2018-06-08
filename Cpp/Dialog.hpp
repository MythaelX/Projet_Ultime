/*!
*
*	\file		Dialog.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		08 juin 2018
*
*/
#ifndef HEADER_DIALOG
#define HEADER_DIALOG

#include <QtWidgets>

#include "PushButton.hpp"
#include "TitleLabel.hpp"

/*!
* \class	Dialog
* \brief	An implementation of QDialog for the software
*/
class Dialog : public QDialog {
	Q_OBJECT
	public:
		/*! \brief	Create a QDialog */
		Dialog(QWidget* parent = nullptr, Qt::WindowFlags flags = Qt::WindowTitleHint | Qt::WindowSystemMenuHint);
		~Dialog();

		/*!
		* \brief Set the text of the Dialog
		*/
		void setText(std::string text){ this->text = text; }
		/*!
		* \brief Set if the cancel button is shown or hidden
		*/
		void enableCancel(bool enable){ cancelEnable = enable; }

	public slots:
		/*!
		* \brief Overload of the exec slot of QDialog
		*/
		virtual int exec();

	signals:
		

	private:
		void deletions();

	private:
		QVBoxLayout* container;
		std::vector<QHBoxLayout*> lines;
		std::vector<H2TitleLabel*> labels;
		QHBoxLayout* buttons;
		GreenPushButton* ok;
		RedPushButton* cancel;

		bool cancelEnable;
		std::string text;
};

#endif //HEADER_DIALOG
