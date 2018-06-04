/*!
* \file MainWindow.hpp
* \author Mathias CABIOCH-DELALANDE
* \date 02 juin 2018
*/
#ifndef HEADER_MAINWINDOW
#define HEADER_MAINWINDOW

#include <QtWidgets>
#include "functions.hpp"
#include "Widgets/QtDefines.hpp"

#include "CheckBox.hpp"
#include "PushButton.hpp"
#include "TitleLabel.hpp"

/*!
* \class MainWindow
* \brief The window that is shown
*/
class MainWindow : public QMainWindow {
	Q_OBJECT
	public:
		/*! \brief Create the window to connect to the database */
		MainWindow(QWidget* parent = NULL);
		~MainWindow();
	
	public slots:
		/*! \brief Try and verify the connection */
		void connections();
		
		/*! \brief Change the active state of a value */
		void changeActive(int state, std::string table, size_t index);
		
		/*! \brief Delete an entry in the bdd */
		void deleteEntry(std::string table, size_t index);
		
		/*! \brief Allow to add an entry to the bdd */
		void addEntry(std::string table, size_t index);
		
	signals:
		
		
	protected:
		/* Connection */
			/*! \brief Create all the connection's widgets */
			void createConnectWidgets();
			/*! \brief Initialize all the connection's widgets */
			void initConnectWidgets();
			/*! \brief Do all the add for these widgets */
			void setContentConnectWidgets();
			/*! \brief Show only the connection's widgets */
			void useConnectWidgets();
		
			/*! \brief Verify the connection to the database */
			void verifyConnection();
		
			/*! \brief Create the connection QDialog message on error */
			void createConnectDialog();
			/*! \brief Initialize all the widgets of the QDialog */
			void initConnectDialog();
			/*! \brief Do all the add for these widgets */
			void setContentConnectDialog();
			/*! \brief Show the QDialog */
			void useConnectDialog();
		/**************/
		/* Since connected */
			/*! \brief Create and initialize the widgets for the administration */
			void createAdminWidgets();
			/*! \brief Do all the add for these widgets */
			void setContentAdminWidgets();
			/*! \brief Set the layout to print the administration's widgets */
			void useAdminWidgets();

			/*! \brief Calls to createAdminWidgets, setContentAdminWidgets and useAdminWidgets */
			void adminWidgets();
		/*******************/
		
		/*! \brief Do all the deletions */
		void deleteAll();
		
	private:
		std::string config_file;

		std::map<std::string, QLabel*> labels;
		std::map<std::string, QLineEdit*> lines;
		std::map<std::string, QHBoxLayout*> hLayouts;
		std::map<std::string, QVBoxLayout*> vLayouts;
		std::map<std::string, QPushButton*> buttons;
		std::map<std::string, QWidget*> tabs;
		std::map<std::string, CheckBox*> checkboxs;
		std::map<std::string, PushButton*> tableButtons;

		QDialog* messageBox;
		QWidget* center;
		QTabWidget* tabWidget;

		ListArray tablesList;
};

#endif //HEADER_MAINWINDOW
