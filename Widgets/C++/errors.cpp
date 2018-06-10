#include "errors.hpp"

/* Reinit the console colors */
	void errors_log(){
		std::cout << Reinit() << std::endl;
		exit(-1);
	}

	void warnings_log(){
		std::cout << Reinit() << std::endl;
	}

	void infos_log(){
		std::cout << Reinit() << std::endl;
	}
/*****************************/
