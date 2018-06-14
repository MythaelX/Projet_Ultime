#include "bdd.hpp"

/* Constructor */
BDD::BDD(bool fatal_error) :
	url(""),
	user(""),
	pass(""),
	database(""),
	driver(nullptr),
	con(nullptr),
	stmt(nullptr),
	res(nullptr),
	connected(false),
	databased(false),
	m_debug(false),
	fatal_error(fatal_error)
{}

/* Destroyer */
BDD::~BDD() {
	try {
		/* Delete the pointers */
		deletePtr(res);
		deletePtr(stmt);
		deletePtr(con);
	} catch(sql::SQLException &e) {
		if(fatal_error){
			error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		} else {
			warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		}
	}
}

/* Reset the object */
void BDD::reset(){
	url = "";
	user = "";
	pass = "";

	try {
		/* Delete the pointers */
		deletePtr(res);
		deletePtr(stmt);
		deletePtr(con);
	} catch(sql::SQLException &e) {
		warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
	}

	connected = false;
	databased = false;
	m_debug = false;
}

/* Connection to a bdd */
bool BDD::connect(std::string url, std::string user, std::string pass){
	mutex.lock();
		this->url = url;
		this->user = user;
		this->pass = pass;
	mutex.unlock();

	mutex.lock();
	try {
		/* Create a connection */
		driver = get_driver_instance();
		con = driver->connect(url, user, pass);
		this->connected = true;
		mutex.unlock();
		return true;
	} catch(sql::SQLException &e) {
		if(fatal_error){
			mutex.unlock();
			error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		} else {
			warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		}
		mutex.unlock();
		return false;
	}
}

/* Try a connection to a bdd */
bool BDD::try_connect(std::string url, std::string user, std::string pass){
	auto fe = this->fatal_error;
	this->fatal_error = false;

	this->connect(url, user, pass);

	this->fatal_error = fe;

	if(!this->connected){
		return false;
	}

	return true;
}

/* Set the database to ask to */
bool BDD::setDatabase(std::string database) {
	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return false;
	}

	try {
		mutex.lock();
			con->setSchema(database);
			stmt = con->createStatement();
			this->databased = true;
			this->database = database;
		mutex.unlock();
		return true;
	} catch(sql::SQLException &e) {
		if(fatal_error){
			error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		} else {
			warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		}
		return false;
	}
}

/* Try to set the database to ask to */
bool BDD::try_database(std::string database){
	auto fe = this->fatal_error;
	this->fatal_error = false;

	this->setDatabase(database);

	this->fatal_error = fe;

	if(!this->databased){
		return false;
	}

	return true;
}

/* Set the table to do the queries */
bool BDD::setTable(std::string table){
	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use !");
		}
		return false;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return false;
	}

	this->table = table;
	return true;
}

/* Query something to the database */
sql::ResultSet* BDD::query(std::string task) {
	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return nullptr;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return nullptr;
	}

	try {
		if(m_debug){ std::cout << "Query : " << task << std::endl; }
		res = stmt->executeQuery(task);
		return res;
	} catch(sql::SQLException &e) {
		if(fatal_error){
			error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		} else {
			warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		}
		return nullptr;
	}
}

/* List all of the content */
ListArray BDD::list(std::string table){
	ListArray out;

	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return out;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return out;
	}

	std::string actTable = table;
	if(actTable == ""){
		actTable = this->table;
	}

	std::string task = "SELECT * FROM `" + actTable + "`";
	auto rep = query(task);

	unsigned length = rep->getMetaData()->getColumnCount();
	if(m_debug){
		std::cout << "There are " << length << " columns." << std::endl;

		for(unsigned i{1}; i < length+1; ++i){
			std::cout << "\tColumn " << i << " : '" << rep->getMetaData()->getColumnLabel(i) << "' (" << rep->getMetaData()->getColumnTypeName(i) << ")" << std::endl;
		}
		std::cout << std::endl;
	}

	while(rep->next()){
		if(m_debug){ std::cout << "\t- "; }

		std::vector<std::string> outLine;

		for(unsigned i{0}; i < length; ++i){
			std::string outString = rep->getString(i+1);

			if(m_debug){
				std::cout << outString;

				if(i + 1 < length){
					std::cout << " : ";
				}
			}

			outLine.push_back(outString);
		}

		out.push_back(outLine);

		if(m_debug){ std::cout << std::endl; }
	}

	return out;
}

/* Insert values in the choosen table */
size_t BDD::insert(std::string values, std::string args, std::string table){
	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return 0;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return 0;
	}

	std::string actTable = table;
	if(actTable == ""){
		actTable = this->table;
	}

	formatValues(values, actTable);

	std::string task = "INSERT INTO `" + actTable + "` VALUES(" + values + ") " + args;
	if(m_debug){ std::cout << "Insertion : " << task << std::endl; }

	try {
		stmt->execute(task);
		return this->lastId();
	} catch(sql::SQLException &e) {
		if(fatal_error){
			error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		} else {
			warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		}
		return 0;
	}
	
}

/* Update values in the choosen table */
bool BDD::update(std::string values, std::string conditions, std::string args, std::string table){
	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return false;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return false;
	}

	std::string actTable = table;
	if(actTable == ""){
		actTable = this->table;
	}

	formatConditions(values, actTable);
	formatConditions(conditions, actTable);

	std::string task = "UPDATE `" + actTable + "` SET " + values + " " + conditions + " " + args;
	if(m_debug){ std::cout << "Update : " << task << std::endl; }

	try {
		stmt->execute(task);
		return true;
	} catch(sql::SQLException &e) {
		if(fatal_error){
			error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		} else {
			warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		}
		return false;
	}
}

/* Update values in the choosen table */
bool BDD::update(std::vector<std::string> values, std::string conditions, std::string args, std::string table){
	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return false;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return false;
	}

	std::string actTable = table;
	if(actTable == ""){
		actTable = this->table;
	}

	auto cols = this->getColumns(table);
	for(size_t i{0}, j{0}; i < cols.size() && j < values.size(); ++i){
		auto col = cols[i];
		auto& val = values[j];

		if(col["autoincrement"] == "1" || col["default"] == "1"){ continue; }

		val = col["name"] + " = " + val;
		j++;
	}

	std::string command = "";

	for(auto value : values){
		if(command != ""){ command += ", "; }
		command += replace(value, ", ", "\\, ");
	}

	return this->update(command, conditions, args, table);
}

/* Delete values in the choosen table */
bool BDD::remove(std::string condition, std::string args, std::string table){
	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return false;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return false;
	}

	std::string actTable = table;
	if(actTable == ""){
		actTable = this->table;
	}

	formatConditions(condition, actTable);

	std::string task = "DELETE FROM `" + actTable + "` " + condition + " " + args;
	if(m_debug){ std::cout << "Deletion : " << task << std::endl; }

	try {
		stmt->execute(task);
		return true;
	} catch(sql::SQLException &e) {
		if(fatal_error){
			error_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		} else {
			warning_log(line_number, "SQLException", e.what(), " (MySQL error code: ", e.getErrorCode(), ", SQLState: ", e.getSQLState(), " )");
		}
		return false;
	}
}

/* Verify if something exist in the bdd */
bool BDD::exists(std::string task){
	this->setFatal(false);
	auto res = this->query(task);
	this->setFatal(true);

	if(res == nullptr){
		return false;
	}
	return true;
}

/* Format the values */
void BDD::formatValues(std::string& values, std::string table){
	/* Get all the arguments */
		if(m_debug){ std::cout << "Start 1 : \"" << values << "\"" << std::endl; }
		values = replace(values, "\\\\,", "-_-_-_-_-");
		if(m_debug){ std::cout << "Start 2 : \"" << values << "\"" << std::endl; }
		auto args = explode(values, ", ");
	/*************************/

	if(values.find("=") == std::string::npos){
		/* Verify with the columns */
		auto columns = getColumns(table);

		for(size_t i{0}; i < columns.size(); ++i){
			auto column = columns[i];

			if(column["autoincrement"] == "1"){
				args.insert(args.begin()+i, "NULL");
			} else if(column["default"] == "1"){
				args.insert(args.begin()+i, column["default value"]);
			} else if(column["null"] == "1" && i >= args.size()){
				args.insert(args.begin()+i, "NULL");
			}
		}
	}

	formatBdd(args);

	/* Put the arguments in a string */
		values = implode(args, ", ");
		if(m_debug){ std::cout << "End 1 : \"" << values << "\"" << std::endl; }
		values = replace(values, "-_-_-_-_-", ",");
		if(m_debug){ std::cout << "End 2 : \"" << values << "\"" << std::endl; }
	/*********************************/
}
/* Format the values */
void BDD::formatConditions(std::string& conditions, std::string){
	/* Get all the arguments */
		if(m_debug){ std::cout << "Start 1 : \"" << conditions << "\"" << std::endl; }
		conditions = replace(conditions, "\\\\,", "-_-_-_-_-");
		if(m_debug){ std::cout << "Start 2 : \"" << conditions << "\"" << std::endl; }
		auto args = explode(conditions, ", ");
	/*************************/

	formatBdd(args);

	/* Put the arguments in a string */
		conditions = implode(args, ", ");
		if(m_debug){ std::cout << "End 1 : \"" << conditions << "\"" << std::endl; }
		conditions = replace(conditions, "-_-_-_-_-", ",");
		if(m_debug){ std::cout << "End 2 : \"" << conditions << "\"" << std::endl; }
	/*********************************/
}
/* Format the values */
void BDD::formatBdd(std::vector<std::string>& args){
	/* For each arguments */
	for(auto& arg : args){
		if(m_debug){ std::cout << "Args start : \"" << arg << "\"" << std::endl; }

		arg = replace(replace(arg, " = ", "="), "=", " = ");

		if(m_debug){ std::cout << "Args 1 : \"" << arg << "\"" << std::endl; }
		
		if(arg.find(" = ") != std::string::npos){
			auto parts = explode(arg, " = ");
			size_t i{0};

			for(auto& part : parts){
				if(i % 2 == 0){
					if(part.find("WHERE ") != std::string::npos){
						part = explode(part, "WHERE ")[1];

						part = "WHERE `" + part + "`";
					} else {
						part = "`" + part + "`";
					}
				} else {
					part = "'" + replace(part, "'", "\\'") + "'";
				}

				i++;
			}

			arg = implode(parts, " = ");
		} else {
			if(arg != "NULL" && arg != "NOW()"){
				arg = "'" + replace(arg, "'", "\\'") + "'";
			}
		}

		if(m_debug){ std::cout << "Args end : \"" << arg << "\"" << std::endl; }
	}
}

/* Get all the columns of a given table */
ColsArray BDD::getColumns(std::string table){
	ColsArray out;

	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return out;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return out;
	}

	std::string actTable = table;
	if(actTable == ""){
		actTable = this->table;
	}

	std::string task = "SELECT * FROM `" + actTable + "`";
	auto rep = query(task);

	/* Get the default value of columns */
		auto cols = query("SELECT COLUMN_NAME AS columnname, COLUMN_DEFAULT AS defaultvalue FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" + database + "' AND TABLE_NAME = '" + actTable + "' AND COLUMN_DEFAULT IS NOT NULL");
		std::map<std::string, std::string> convertedCols;
	
		while(cols->next()){
			convertedCols[cols->getString(1)] = cols->getString(2);
		}
	/************************************/

	unsigned length = rep->getMetaData()->getColumnCount();

	if(m_debug){ std::cout << "There are " << length << " columns." << std::endl; }

	std::map<std::string, std::string> outLine;
	for(unsigned i{1}; i < length+1; ++i){
		if(m_debug){ std::cout << "\tColumn " << i << " ;" << std::endl; }

		outLine["name"] = rep->getMetaData()->getColumnLabel(i);
		if(m_debug){ std::cout << "\t- Name : '" << rep->getMetaData()->getColumnLabel(i) << "'" << std::endl; }

		outLine["type"] = rep->getMetaData()->getColumnTypeName(i);
		if(m_debug){ std::cout << "\t- Type : '" << rep->getMetaData()->getColumnTypeName(i) << "'" << std::endl; }

		if(rep->getMetaData()->isAutoIncrement(i)){
			outLine["autoincrement"] = "1";
		} else {
			outLine["autoincrement"] = "0";
		}
		if(m_debug){ std::cout << "\t- AutoIncrement : '" << rep->getMetaData()->isAutoIncrement(i) << "'" << std::endl; }
		if(rep->getMetaData()->isNullable(i)){
			outLine["null"] = "1";
		} else {
			outLine["null"] = "0";
		}
		if(m_debug){ std::cout << "\t- Nullable : '" << rep->getMetaData()->isNullable(i) << "'" << std::endl; }
		if(rep->getMetaData()->isNumeric(i)){
			outLine["numeric"] = "1";
		} else {
			outLine["numeric"] = "0";
		}
		if(m_debug){ std::cout << "\t- Numeric : '" << rep->getMetaData()->isNumeric(i) << "'" << std::endl; }
		outLine["default"] = "0";
		for(auto& col : convertedCols){
			if(col.first == rep->getMetaData()->getColumnLabel(i)){
				outLine["default"] = "1";
				outLine["default value"] = col.second;
			}
		}
		if(m_debug){
			std::cout << "\t- Default : '" << outLine["default"] << "'" << std::endl;
			if(outLine["default"] == "1"){
				std::cout << "\t- Value : '" << outLine["default value"] << "'" << std::endl;
			}
		}
		

		out.push_back(outLine);
	}

	if(m_debug){ std::cout << std::endl; }

	return out;
}

/* Verify if a table contains an autoincremented column */
bool BDD::hasAutoincrement(std::string table){
	auto cols = this->getColumns(table);

	for(auto& col : cols){
		if(col["autoincrement"] == "1"){ return true; }
	}

	return false;
}

/* Return the columns count */
size_t BDD::getCount(std::string table, std::string conditions){
	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return 0;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return 0;
	}

	std::string actTable = table;
	if(actTable == ""){
		actTable = this->table;
	}

	std::string task = "SELECT COUNT(*) AS count FROM `" + actTable + "` " + conditions;
	auto rep = query(task);
	if(rep == nullptr){ return 0; }

	rep->next();
	
	return tost(rep->getString(1));
}

/* Get all the tables */
ListArray BDD::tables(){
	ListArray out;

	if(!this->connected){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		} else {
			warning_log(line_number, "BDDException", "Please connect to a database with connect(url, user, password) before try to use it !");
		}
		return out;
	}
	if(!this->databased){
		if(fatal_error){
			error_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		} else {
			warning_log(line_number, "BDDException", "Please select a database with setDatabase(database) before try to use !");
		}
		return out;
	}

	std::string task = "SHOW TABLES";
	auto rep = query(task);

	unsigned length = rep->getMetaData()->getColumnCount();

	while(rep->next()){
		if(m_debug){ std::cout << "\t- "; }

		std::vector<std::string> outLine;

		for(unsigned i{0}; i < length; ++i){
			std::string outString = rep->getString(i+1);

			if(m_debug){
				std::cout << outString;

				if(i + 1 < length){
					std::cout << " : ";
				}
			}

			outLine.push_back(outString);
		}

		out.push_back(outLine);

		if(m_debug){ std::cout << std::endl; }
	}

	return out;
}

/*! \brief	Return the last created id with "SELECT LAST_INSERT_ID() AS id" */
size_t BDD::lastId(){
	std::string task = "SELECT LAST_INSERT_ID() AS id";
	auto rep = query(task);
	if(rep == nullptr){ return 0; }

	rep->next();
	auto id = rep->getString(1);
	
	return tost(id);
}

/* Return the formatted name */
std::string BDD::formatColumn(std::string name){
	return replace(name, "_", " ");
}
