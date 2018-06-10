/*!
*
*	\file		cryptage.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		10 juin 2018
*
*/
#ifndef HEADER_CRYPTAGE
#define HEADER_CRYPTAGE

#include "defines.hpp"

/*!
* \class	Crypto
* \brief	A class to be the parent for every crypt class
*/
class Crypto {
	public:
		/* Constructor */
		Crypto();

		/* Getters */

		/* Setters */

		/* Others */
		/*!
		* \details		Pur virtual function to disallow you to use the class alone
		*
		*		\return		void
		*/
		virtual void crypt() = 0;

	protected:

};

/*!
* \class	Cesar
* \brief	A class to use the cesar algorithm for encryption
*/
class Cesar : public Crypto {
	public:
		/* Constructor */
		Cesar(){}

		/* Getters */

		/* Setters */

		/* Others */
		/*!
		* \brief	Overload of the crypt Crypto's method
		*		\param[in]		message		The message to encrypt
		*		\param[in]		decal		The shift to crypt the message
		*
		*		\return			Return the crypted message
		*/
		std::string crypt(std::string message, int decal = 0);
		/*!
		* \brief	Overload of the decrypt Crypto's method
		*		\param[in]		message		The message to decrypt
		*		\param[in]		decal		The shift to decrypt the message
		*
		*		\return			Return the decrypted message
		*/
		std::string decrypt(std::string message, int decal = 0);

		/*!
		* \details	Rewrite the pur virtual method crypt of the parent Crypto
		* 
		* \return			void
		*/
		virtual void crypt(){}

	protected:

};

/*!
* \class	RSA
* \brief	A class to use the RSA algorithm for encryption
* \todo		Create the class
*/
class RSA : public Crypto {
	public:
		/* Constructor */
		RSA();

		/* Getters */
		/*!
		* \brief	Get the public key
		*		\return			Return the public key of the object
		*/
		std::string getPublic();
		/*!
		* \brief	Get the private key
		*		\return			Return the private key of the object
		*/
		std::string getPrivate();

		/* Setters */
		/*!
		* \brief	Set the public key
		*		\param[in]		key			The key
		*
		*		\return			void
		*/
		void setPublic(std::string key="");
		/*!
		* \brief	Set the private key
		*		\param[in]		key			The key
		*
		*		\return			void
		*/
		void setPrivate(std::string key="");

		/* Others */
		/*!
		* \brief	Overload of the crypt Crypto's method
		*		\param[in]		message			The message to encrypt
		*
		*		\return			Return the encrypted message
		*/
		std::string crypt(std::string message);
		/*!
		* \brief	Overload of the decrypt Crypto's method
		*		\param[in]		message			The message to decrypt
		*
		*		\return			Return the decrypted message
		*/
		std::string decrypt(std::string message);

		/*!
		* \details	Rewrite the pur virtual method crypt of the parent Crypto
		* 
		* \return			void
		*/
		virtual void crypt(){}
	protected:
		std::string publicK;
		std::string privateK;
};

/*!
* \brief	A global cesar variable to crypt and decrypt message
*/
extern Cesar cesar;

#endif //HEADER_CRYPTAGE
