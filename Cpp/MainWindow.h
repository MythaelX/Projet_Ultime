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
		
			/*! \todo
			* \brief Create the page after a connection
			*/
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
			void createAdminWidgets();
			void initAdminWidgets();
			/*! \brief Do all the add for these widgets */
			void setContentAdminWidgets();
			void useAdminWidgets();

			void adminWidgets();
		/*******************/
		
	private:
		std::string config_file;

		std::map<std::string, QLabel*> labels;
		std::map<std::string, QLineEdit*> lines;
		std::map<std::string, QHBoxLayout*> hLayouts;
		std::map<std::string, QVBoxLayout*> vLayouts;
		std::map<std::string, QPushButton*> buttons;
		std::map<std::string, QWidget*> tabs;

		QDialog* messageBox;
		QWidget* center;
		QTabWidget* tabWidget;

		ListArray tablesList;
};

#endif //HEADER_MAINWINDOW
