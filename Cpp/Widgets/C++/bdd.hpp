/*!
*
*	\file		bdd.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		10 juin 2018
*
*/
#ifndef HEADER_BDD
#define HEADER_BDD

#include <cppconn/driver.h>
#include <cppconn/exception.h>
#include <cppconn/resultset.h>
#include <cppconn/statement.h>

#include <string>
#include <mutex>
#include <functional>

#include "types.hpp"
#include "errors.hpp"
#include "pointers.hpp"
#include "string.hpp"
#include "array.hpp"

/*! \brief	The type of the array that contains the columns */
using ColsArray = std::vector<std::map<std::string, std::string>>;
/*! \brief	The type of the array that contains the list of something */
using ListArray = std::vector<std::vector<std::string>>;

/*!
* \class	BDD
* \brief	A class to connect to a BDD
* \details	- Usefull commands with a query answer\n
*			- sql::ResultSet* rep = stmt->executeQuery(...);\n
*			- auto meta = rep->getMetaData() : return the answer's meta-datas\n
*				- meta->getColumnCount() : return the answer's column's number\n
*			- rep->next() : return the next datas (to get something after a query you must use next() at least once\n
*			- For each answers' lines,\n
*				- meta->getColumnLabel(numLine) : return the column's name\n
*				- meta->getColumnName(numLine) : return the column's name\n
*				- meta->getColumnType(numLine)\n
*				- meta->getColumnTypeName(numLine) : return the column's type in capital\n
*				- meta->isAutoIncrement(numLine) : return true if the column is autoincrement, false either\n
*/
class BDD {
	public:
		/* Constructor et Destroyer */
		/*! \brief	Constructor of the class */
		BDD(bool fatal_error = true);
		~BDD();

		/* Setters */
			/*!
			* \brief	Connection to the database
			*		\param[in]		database	The database to connect to
			*
			*		\return			\b true or \b false
			*/
			bool setDatabase(std::string database);
			/*!
			* \brief	Try a connection to the database
			*		\param[in]		database	The database to connect to
			*
			*		\return			\b true or \b false
			*/
			bool try_database(std::string database);
			/*!
			* \brief	Choose the table to simplify the others functions
			*		\param[in]		table		The table in which to do the actions
			*
			*		\return			\b true or \b false
			*/
			bool setTable(std::string table);

		/* Others */
			/*!
			* \brief	Query the task to the database
			*		\param[in]		task		The task to query
			*
			*		\return			Return the result of the query
			*/
			sql::ResultSet* query(std::string task);

			/*!
			* \brief	List the content of the given table
			*		\param[in]		table		The table in which to do the action
			*
			*		\return			Return a vector of a vector of the content in strings
			*/
			ListArray list(std::string table = "");
			/*!
			* \brief	Use of the INSERT in SQL
			*		\param[in]		values		The values to insert in the database
			*		\param[in]		args		Other arguments
			*		\param[in]		table		The table in which to do the action
			*
			*		\return			The new created index or 0
			*/
			size_t insert(std::string values, std::string args = "", std::string table = "");
			/*!
			* \brief	Use of the UPDATE in SQL
			*		\param[in]		values		The new values of the datas
			*		\param[in]		conditions	The conditions to update datas
			*		\param[in]		args		Other arguments
			*		\param[in]		table		The table in which to do the action
			*
			*		\return			\b true or \b false
			*/
			bool update(std::string values, std::string conditions, std::string args = "", std::string table = "");
			/*!
			* \brief	Use of the UPDATE in SQL
			*		\param[in]		values		The new values of the datas
			*		\param[in]		conditions	The conditions to update datas
			*		\param[in]		args		Other arguments
			*		\param[in]		table		The table in which to do the action
			*
			*		\return			\b true or \b false
			*/
			bool update(std::vector<std::string> values, std::string conditions, std::string args = "", std::string table = "");
			/*!
			* \brief	Use of the DELETE in SQL
			*		\param[in]		condition	The condition to delete datas
			*		\param[in]		args		Other arguments
			*		\param[in]		table		The table in which to do the action
			*
			*		\return			\b true or \b false
			*/
			bool remove(std::string condition, std::string args = "", std::string table = "");

			/*!
			* \todo
			* \brief	Verify if something exist in the bdd
			*		\param[in]		task		The task to verify
			*		\param[in]		table		The table in which to do the action
			*
			*		\return			\b true or \b false
			*/
			bool exists(std::string task, std::string table = "");

			/*!
			* \brief	Connection to a bdd
			*		\param[in]		url			The url to connect to the database
			*		\param[in]		user		The user for the database
			*		\param[in]		pass		The password for this user
			*
			*		\return			\b true or \b false
			*/
			bool connect(std::string url, std::string user, std::string pass);

			/*!
			* \brief	Try a connection to a bdd
			*		\param[in]		url			The url to connect to the database
			*		\param[in]		user		The user for the database
			*		\param[in]		pass		The password for this user
			*
			*		\return			\b true or \b false
			*/
			bool try_connect(std::string url, std::string user, std::string pass);

			/*! \brief	Reset the object */
			void reset();

			/*! \brief	Start the debug for the class */
			void debug(){ m_debug = true; }
			/*! \brief	Stop the debug for the class */
			void undebug(){ m_debug = false; }

			/*!
			* \brief	Get all the columns of a table with their attributes
			*		\param[in]		table		The table where to search
			*
			*		\return			Return a vector containing the attributes
			*
			* \details	- Each column contains the listed fields\n
			*				- name : The column name\n
			*				- type : The column type in uppercase\n
			*				- autoincrement : 1 if the column is autoincremented, 0 otherwise\n
			*				- null : 1 if the column can be set to NULL, 0 otherwise\n
			*				- numeric : 1 if the column type is a numeric type, 0 otherwise\n
			*				- default : 1 if the column has a default value, 0 otherwise\n
			*				- default value (only if \b default = 1) : The default value of the column\n
			*/
			ColsArray getColumns(std::string table = "");

			/*!
			* \brief	Verify if a table contains an autoincremented column
			*		\param[in]		table		The table where to search
			*
			*		\return			\b true or \b false
			*/
			bool hasAutoincrement(std::string table = "");

			/*!
			* \brief	Get the number of lines with the conditions
			*		\param[in]		table		The table where to search
			*		\param[in]		conditions	The conditions for the search
			*
			*		\return			Return the number of lines
			*/
			size_t getCount(std::string table = "", std::string conditions = "");

			/*!
			* \brief	Get all the tables of the database
			*		\param[in]		table		The table where to search
			*
			*		\return			Return all the tables
			*/
			ListArray tables();

			/*! \brief	Get the last created id in the table */
			size_t lastId();

			/*!
			* \brief Format a column name for text
			*		\param[in]		name		The column name
			*		\return			Return the formatted name
			*/
			static std::string formatColumn(std::string name);

			/*!
			* \brief Set if an error is fatal or just like a warning
			*		\param[in]		state		\b true or \b false
			*		\return			void
			*/
			void setFatal(bool state){ fatal_error = state; }

			/*!
			* \brief Run an object method for each column of the \a table
			*		\param[in]		f			The function to use
			*		\param[in]		obj			The object on which to use the method
			*		\param[in]		table		The table name
			*		\param[in]		args		The other arguments
			*		\return			void
			*/
			template<typename Func, class C, typename... Args>
			void applyForEach(Func&& f, C obj, std::string table, Args&&... args){
				auto cols = this->getColumns(table);
				auto func = std::mem_fn(f);

				size_t index = 0;
				for(auto& col : cols){
					func(obj, table, col, index, args...);
					index++;
				}
			}

			/*!
			* \brief Run a function for each column of the \a table
			*		\param[in]		f			The function to use
			*		\param[in]		obj			The object on which to use the method
			*		\param[in]		table		The table name
			*		\param[in]		args		The other arguments
			*		\return			void
			*/
			template<typename Func, typename... Args>
			void applyForEach(Func&& f, std::string table, Args&&... args){
				auto cols = this->getColumns(table);

				size_t index = 0;
				for(auto& col : cols){
					f(table, col, index, args...);
					index++;
				}
			}

	protected:
		/*!
		* \brief	Format the values string
		*		\param[in,out]		values		The values to send
		*		\param[in]			table		The table where are the values
		*
		*		\return			void
		*/
		void formatValues(std::string& values, std::string table);
		/*!
		* \brief	Format the conditions string
		*		\param[in,out]		conditions	The conditions to use
		*		\param[in]			table		The table where are the values
		*
		*		\return			void
		*/
		void formatConditions(std::string& conditions, std::string table);
		/*!
		* \brief	Format values for the bdd
		*		\param[in,out]		args		The arguments to format
		*
		*		\return			void
		*/
		void formatBdd(std::vector<std::string>& args);
	private:
		std::string url;
		std::string user;
		std::string pass;
		std::string database;

		sql::Driver *driver;
		sql::Connection *con;
		sql::Statement *stmt;
		sql::ResultSet *res;

		std::string table;

		bool connected;
		bool databased;

		std::mutex mutex;

		bool m_debug;
		bool fatal_error;
};

/*!
* \brief	A global bdd variable to connect to a database
*/
extern BDD bdd;

#endif //HEADER_BDD
