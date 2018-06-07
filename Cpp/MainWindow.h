/*!
* \file MainWindow.hpp
* \author Mathias CABIOCH-DELALANDE
* \date 05 juin 2018
*/
#ifndef HEADER_MAINWINDOW
#define HEADER_MAINWINDOW

#include <QtWidgets>
#include "functions.hpp"
#include "Widgets/Qt.hpp"

#include "CheckBox.hpp"
#include "PushButton.hpp"
#include "TitleLabel.hpp"

/*!
* \class MainWindow
* \brief The window that is shown
*/
class MainWindow : public Window {
	Q_OBJECT
	public:
		/*! \brief Create the window to connect to the database */
		MainWindow(QWidget* parent = nullptr);
		~MainWindow();

		void createAddingWidgets(std::string table,
								 std::map<std::string, std::string> col,
								 size_t index);
		std::string createWidgetsLabels();

	public slots:
		/*! \brief Try and verify the connection */
		void connections();

		/*! \brief Change the active state of a value */
		void changeActive(int state, std::string table, size_t index);

		/*! \brief Show all the widgets for adding something */
		void addingWidgets(std::string table, size_t index);

		/*! \brief Delete an entry in the bdd */
		void deleteEntry(std::string table, size_t index);

		/*! \brief Update an entry in the bdd */
		void updateEntry(std::string table, size_t index);
		/*! \brief Update an entry in the bdd */
		void updEntry(std::string table, size_t index);

		/*! \brief Allow to add an entry to the bdd */
		void addEntry(std::string table, size_t index);

		/*! \brief Quit the application */
		void quit();

		/*! \brief Recreate administration */
		void toAdmin(std::string table = "", size_t index = 0);

	signals:
		

	protected:
		/*!
		* \brief Overload of the drawBackground function
		*		\param[in]		cache		The cache Pixmap containning the window size
		*		\return			void
		*/
		void drawBackground(QPixmap* cache);

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
			void adminWidgets(std::string table = "");
		/*******************/

		/*! \brief Do all the deletions */
		void deleteAll();
		
		/*! \brief Return an array that contains the choices */
		std::vector<std::pair<std::string, std::string>> getCheckedChoices();

	private:
		std::string config_file;

		std::map<std::string, QLabel*> labels;
		std::map<std::string, QLineEdit*> lines;
		std::map<std::string, QHBoxLayout*> hLayouts;
		std::map<std::string, QVBoxLayout*> vLayouts;
		std::map<std::string, QPushButton*> buttons;
		std::map<std::string, QWidget*> tabs;
		std::map<std::string, CheckBox*> checkboxs;
		std::map<std::string, CheckBox*> choiceboxs;
		std::map<std::string, PushButton*> tableButtons;
		std::map<std::string, WindowButton*> closes;
		std::map<std::string, QComboBox*> combos;

		QDialog* messageBox;
		QWidget* center;
		QTabWidget* tabWidget;

		ListArray tablesList;

		QPixmap* background;
		std::string imgPath;

		int closeBtnSize;
		int closeBtnX;
		int closeBtnY;
};

#endif //HEADER_MAINWINDOW
