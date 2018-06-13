#include "cryptage.hpp"

/* Defined differents crypt variables */
	Cesar cesar;
/**************************************/

Crypto::Crypto(){

}

std::string Cesar::crypt(std::string message, int decal){
	std::string out{""};
	int retour{26};

	decal = decal % retour;

	for(size_t i{0}; i < message.size(); ++i){
		char c = message[i];
		int car = static_cast<int>(c) + decal;

		out += (c > 64 && c < 91)?(car >= 91)?static_cast<char>(car - retour):static_cast<char>(car):(c > 96 && c < 123)?(car >= 123)?static_cast<char>(car - retour):static_cast<char>(car):c;
	}

	return out;
}

std::string Cesar::decrypt(std::string message, int decal){
	std::string out{""};
	int retour{26};

	decal = decal % retour;

	for(size_t i{0}; i < message.size(); ++i){
		char c = message[i];
		int car = static_cast<int>(c) - decal;

		out += (c > 64 && c < 91)?(car <= 64)?static_cast<char>(car + retour):static_cast<char>(car):(c > 96 && c < 123)?(car <= 96)?static_cast<char>(car + retour):static_cast<char>(car):c;
	}

	return out;
}

std::string Cesar::decrypt(std::string message){
	std::string out{""};

	auto lowerStr = lowercase(message, message.begin(), message.end());
	lowerStr = replace(lowerStr, " ", "");

	size_t maxi = 0;
	char c = 'a';

	for(auto car : lowerStr){
		auto temp = maxi;
		maxi = max(maxi, count(lowerStr, car));
		if(maxi != temp){
			c = car;
		}
	}

	return this->decrypt(message, c-'e');
}

RSA::RSA(){
	#if BIG_ENABLED
		/* Déclaration des variables */
			Big p;
			Big q;

			Big n;
			Big phi;

			Big e;
			Big d;
		/*****************************/

		/* Initailisation des variables */
			p = 503;
			q = 563;

			n = p*q;
			phi = (p-1)*(q-1);

			for(e = MAX(p, q)+1; pgcd(phi, e) != 1 && e < phi; e++){
				std::cout << "e = " << e << std::endl;
			}
			//d = eucl(e, phi);

			std::cout << "p = " << p << "\n"
					  << "q = " << q << "\n"
					  << "n = " << n << "\n"
					  << "phi = " << phi << "\n"
					  << "e = " << e << "\n"
					  << "d = " << d << "\n"
					  << std::endl;
		/********************************/

		/* Initialisation des clés */
			publicK = e.getVal()+"-"+n.getVal();
			privateK = d.getVal()+"-"+n.getVal();
		/***************************/
	#endif
}

std::string RSA::crypt(std::string message){
	std::string out{""};

	#if BIG_ENABLED
		std::vector<std::string> caracts;

		auto params = explode(publicK, "-");
		std::string e = params[0];
		std::string n = params[1];

		for(auto c : message){
			std::string tmp{""};
			if(c < 10){
				tmp += "0";
			}
			if(c < 100){
				tmp += "0";
			}
			tmp += tos(static_cast<int>(c));
			caracts.push_back(tmp);
		}

		for(auto& c : caracts){
			Big E(e);
			Big N(n);
			Big C(tos(c));

			std::cout << C << "^" << E << " = " << power(C, E) << std::endl;
			std::cout << power(C, E) << "%" << N << " = " << (power(C, E) % N) << std::endl;
		}
		std::cout << std::endl;
	#else
		out = message;
	#endif

	return out;
}

std::string RSA::decrypt(std::string message){
	std::string out{""};

	out = message;

	return out;
}

std::string RSA::getPublic(){
	return publicK;
}

std::string RSA::getPrivate(){
	return privateK;
}
