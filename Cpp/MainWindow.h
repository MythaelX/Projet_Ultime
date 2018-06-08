/*!
* \file MainWindow.hpp
* \author Mathias CABIOCH-DELALANDE
* \date 07 juin 2018
*/
#ifndef HEADER_MAINWINDOW
#define HEADER_MAINWINDOW

#include <QtWidgets>
#include "functions.hpp"
#include "Widgets/Qt.hpp"

#include "CheckBox.hpp"
#include "Dialog.hpp"
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

		/*!
		* \brief Create the widgets for adding some informations
		*		\param[in]		table		The table to read
		*		\param[in]		col			The column infos
		*		\param[in]		index		The index of the column in the database
		*		\return			void
		*/
		void createAddingWidgets(std::string table,
								 std::map<std::string, std::string> col,
								 size_t index);
		/*!
		* \brief Create the labels for the adding widgets
		*		\param[in]		table		The table to read
		*		\param[in]		col			The column infos
		*		\param[in]		index		The index of the column in the database
		*		\param[in]		out			An array to put the labels
		*		\return			void
		*/
		void createWidgetsLabels(std::string table,
								 std::map<std::string, std::string> col,
								 size_t index,
								 std::vector<std::string>& out);
		/*!
		* \brief Fill the widgets for an update information
		*		\param[in]		table		The table to read
		*		\param[in]		col			The column infos
		*		\param[in]		index		The index of the column in the database
		*		\param[in]		lineId		The id of the line
		*		\return			void
		*/
		void fillWidgets(std::string table,
						 std::map<std::string, std::string> col,
						 size_t index,
						 std::string lineId);

	public slots:
		/*! \brief Try and verify the connection */
		void connections();

		/*! \brief Change the active state of a value */
		void changeActive(int state, std::string table, std::string index);

		/*! \brief Show all the widgets for adding something */
		void addingWidgets(std::string table, std::string index);

		/*! \brief Delete an entry in the bdd */
		void deleteEntry(std::string table, std::string index);

		/*! \brief Update an entry in the bdd */
		void updateEntry(std::string table, std::string index);
		/*! \brief Update an entry in the bdd */
		void updEntry(std::string table, std::string index);

		/*! \brief Allow to add an entry to the bdd */
		void addEntry(std::string table, std::string index);

		/*! \brief Quit the application */
		void quit();

		/*! \brief Recreate administration */
		void toAdmin(std::string table = "", std::string index = "");

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

		/*!
		* \brief Create the label for a widget depending on the bdd type
		*		\param[in]		col			The column for typping
		*		\param[in]		index		The index of the column
		*/
		std::string createWidgetsLabel(std::map<std::string, std::string> col, std::string index);

		/*! \brief Put the accents for all the texts that need it */
		void putAccents(std::string& text);

		/*!
		* \brief Create the values' table for an update ask
		*		\param[in]		table		The table to read
		*		\param[out]		values		The values to get
		*		\return			void
		*/
		void createValues(std::string table, std::vector<std::string>& values);

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
		std::map<std::string, TableWidget*> tLayouts;

		Dialog* messageBox;
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
