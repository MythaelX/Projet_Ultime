/*!
*
*	\file		Player.hpp
*	\author		Mathias CABIOCH-DELALANDE
*	\date		07 juin 2018
*
*/
#ifndef HEADER_PLAYER
#define HEADER_PLAYER

#include "Entities.hpp"

/*!
* \class	Player
* \brief	A player that can be a child from any class
*/
template<class PlayerParent>
class Player : public PlayerParent {
	public:
		/* Constructor & Destroyer */
			/*!
			* \brief	Constructor of the class
			*		\param[in]		map			The map where it is
			*		\param[in]		pt			The position in the map
			*		\param[in]		attr		The attributes of the object(width, height, angle)
			*/
			Player(Map* map = nullptr, Point pt = {0, 0, 0}, ContraptionAttr attr = {0, 0, 0}) :
				PlayerParent(map, pt, attr),
				init(false),
				paused(false),
				losted(false),
				mail(""),
				username(""),
				password(""),
				experience(0),
				experienceMax(0)
			{}
			/*! \brief	Virtual destructor */
			virtual ~Player(){}

		/* Setters */
			/*!
			* \brief	Set the Player's mail
			*		\param[in]		mail				The new mail
			*
			*		\return			void
			*/
			void setMail(const std::string mail){ this->mail = mail; }
			/*!
			* \brief	Set the Player's username
			*		\param[in]		username			The new username
			*
			*		\return			void
			*/
			void setUsername(std::string username){ this->username = username; }
			/*!
			* \brief	Set the Player's password
			*		\param[in]		password			The new password
			*
			*		\return			void
			*/
			void setPassword(std::string password){ this->password = password; }

			/*!
			* \brief	Set the Player's experience
			*		\param[in]		experience			The new experience
			*
			*		\return			void
			*/
			void setExperience(const double experience){ this->experience = experience; }
			/*!
			* \brief	Set the Player's max experience
			*		\param[in]		experienceMax		The new experience max
			*
			*		\return			void
			*/
			void setExperienceMax(const double experienceMax){ this->experienceMax = experienceMax; }

			/*!
			* \brief	Set the Player's id
			*		\param[in]		id					The new id
			*
			*		\return			void
			*/
			void setId(size_t id){ this->id = id; }

		/* Getters */
			/*! \return			Return the mail */
			std::string getMail()const { return mail; }
			/*! \return			Return the username */
			std::string getUsername()const { return username; }
			/*! \return			Return the password */
			std::string getPassword()const { return password; }

			/*! \return			Return the experience */
			double getExperience()const { return experience; }
			/*! \return			Return the maximum experience */
			double getExperienceMax()const { return experienceMax; }

			/*! \return			Return the id */
			virtual size_t getId()const { return id; }

		/* Friends */

		/* Others */
			/*!
			* \brief	Print the infos in the instance of the class in \a stream
			*		\param[in]		stream		The output stream
			*
			*		\return			void
			*/
			virtual void printInfos(std::ostream& stream)const {
				PlayerParent::printInfos(stream);
				stream << "\tPlayer attributes ;" << std::endl;
					stream << "\t\t- username : '" << username << "'" << std::endl;
					stream << "\t\t- password : '";
						if(password != ""){
							stream << "****";
						}
					stream << "'" << std::endl;
					stream << "\t\t- experience : " << experience << "/" << experienceMax << std::endl;
			}

			/*!
			* \brief	Pause the player
			*		\return			void
			*/
			void pause(){ paused = true; }
			/*!
			* \brief	Resume the player
			*		\return			void
			*/
			void resume(){ paused = false; }
			/*!
			* \brief	Verify if the player is paused
			*		\return			\b true or \b false
			*/
			bool isPaused()const { return paused; }

			/*!
			* \brief	Lost the focus
			*		\return			void
			*/
			void lost(){ losted = true; }
			/*!
			* \brief	Regain the focus
			*		\return			void
			*/
			void retreive(){ losted = false; }
			/*!
			* \brief	Verify if it has the focus
			*		\return			\b true or \b false
			*/
			bool isLost()const { return losted; }

			/*!
			* \brief	Verify if the player is initialized
			*		\return			\b true or \b false
			*/
			bool isInit()const { return init; }

	protected:
		bool init;
		bool paused;
		bool losted;

	private:
		std::string mail;
		std::string username;
		std::string password;

		double experience;
		double experienceMax;

		size_t id;
};

#endif //HEADER_PLAYER
