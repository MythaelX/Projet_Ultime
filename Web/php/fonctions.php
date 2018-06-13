<?php
/*!
*	\file	fonctions
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/
require_once("bases/_functions.php");

/*!
*	\brief    Send datas in JSON format.
*		\param[in]		message   The data to send
*   \param[in]    h         The header to add
*
*		\return  Return the data encoded to send.
*/
function sendJsonData($message, $h){
    header($h);
    header('Content-Type: text/plain; charset=utf-8');
    header('Cache-control: no-store, no-cache, must-revalidate');
    header('Pragma: no-cache');
    echo json_encode($message);
}

/*!
*	\brief    Authenticates the user
*		\param[in]		bdd  The database
*
*		\return  token
*
*	\details    Authenticates the user if he enters the correct password and username.
* Moreover,he create and send token or send HTTP error if he enters the bad password and username.
*/
function authentification($bdd){
    $pseudo = $_SERVER['PHP_AUTH_USER'];
    $mdp = $_SERVER['PHP_AUTH_PW'];
    $statue = $bdd->query("select * from utilisateurs where pseudo='$pseudo' and password=SHA1('".$mdp."')");
    if(!$statue){
        header('HTTP/1.1 401 Identifiants incorrects');
        exit;
    }
    $token = createId(20);
    $bdd->query("UPDATE utilisateurs SET token='".$token."' WHERE pseudo='".$pseudo."'");
    header('Content-Type: text/plain; charset=utf-8');
    header('Cache-control: no-store, no-cache, must-revalidate');
    header('Pragma: no-cache');


    echo $token;
    exit;
}

/*!
*	\brief  check the user's token
*		\param[in]		bdd  The database
*
*		\return  false or true if the token is good
*
*	\details Check if the user's token is good thanks to the database with the cookie "pseudo".
* He remove cookie "token" and "pseudo" if the cookie "token" and the database "token" does not match and send false otherwise he send true.
*/
function verifieToken($bdd){
  if(isset($_COOKIE['token'])) {
      $token=$_COOKIE['token'];
      $pseudo = $bdd->query("SELECT pseudo FROM utilisateurs WHERE token='".$token."'")[0]['pseudo'];
      if(isset($pseudo)){
          return true;
      }
      unset($_COOKIE['token']);
      setcookie('token', null, -1, '/');
  }
  if(isset($_COOKIE['pseudo'])) {
    unset($_COOKIE['pseudo']);
    setcookie('pseudo', null, -1, '/');
  }
  return false;
}

/*!
*	\brief    Create a Game
*		\param[in]		bdd The database
*   \param[in]    tabQuestions The questions table
*
*	\Firstly he gets back in a table "tabquestion", via the database the questions randomly
* with the themes he chose before on the site. Secondly, he recover the date and create a game in the database.
* Thirdly, he recover from the difficulty chose before on the site, the number of questions in the array "tabquestion"
* then he send id of the questions and id of the game in the table "contient".
*/
function creationPartie($bdd){ //insertion d'une partie dans la bdd
  $themes=explode(",",$_POST['themes']);
  $themesSQL="(";
  for ($i=0; $i <sizeof($themes)-1 ; $i++) {
    $themesSQL=$themesSQL."c.nom_categorie='".$themes[$i]."' OR ";
  }
  $themesSQL=$themesSQL."c.nom_categorie='".$themes[$i]."') AND ";

  $tabQuestions=$bdd->query("SELECT q.id_question FROM question AS q,categorie AS c WHERE ".$themesSQL." c.id_categorie=q.id_categorie ORDER BY RAND()");
  $difficulte=$_POST['difficulte'];
  $date=date("Y-m-d");
  $bdd->insert("partie", "NULL,'".$date."' , '0', '1', '".$difficulte."'");
  $id_partie=$bdd->getId();
  $nbQuestions=$bdd->query("SELECT nb_questions FROM difficulte WHERE id_difficulte=1")[0]['nb_questions'];
  for ($i=0; $i <$nbQuestions; $i++) {
    $id_question=$tabQuestions[$i]['id_question'];
    $bdd->insert("contient", "'".$id_question."','".$id_partie."'");
  }
}

/*!
*	\brief    score calculation
*		\param[in]		bdd The database
*
*		\return    data The array that contains the time and the score of the game
*
*	\details Thanks to the information of the time and the answers, it put 0 point
* by bad answer or 10 points if it answered well before 5 sec then he lose 0,5 point
* every second until 1 point.if he made a better score or plays for the first time the
* score is save with the time of the game. then the time of the game and the score are send
*/
function score($bdd){

  $scoreTotal=0;
  $tempsTotal=0;
  $temps=json_decode($_POST['temps']);
  $reponses=json_decode($_POST['reponses']);
  for ($j=0; $j < sizeof($reponses); $j++) { //number of questions
    for ($i=0; $i < sizeof($reponses[$j]); $i++) { //number of propositions
      if($reponses[$j][$i]==true){
        $score=10;
        $tempsTotal+=$temps[$j][$i];
        $temps[$j][$i]-=5000;
        if($temps[$j][$i]>=0 && $temps[$j][$i]<18000){
          $score-=($temps[$j][$i]/2)/1000;
        }else if($temps[$j][$i]>18000){
          $score=1;
        }
      }else{
        $score=0;
      }
      $scoreTotal+=$score;
    }
  }
  //send score in the database;
  $scoreTotal=intval($scoreTotal);
  $date=date("Y-m-d");
  $tempsTotal=intval($tempsTotal/1000); //H:Min:Sec
  $tempsTotal=date('H:i:s', $tempsTotal-3600);
  $pseudo=$_POST['pseudo'];
  $mail=$bdd->query("SELECT mail from utilisateurs WHERE pseudo='".$pseudo."'")[0]['mail'];
  $id_partie=$_POST['id_partie'];
  $data=$bdd->select("joue_a","valeur_score","WHERE id_partie=".$id_partie." AND mail=".$mail."");
  $ancienScore=$data;
  if(isset($ancienScore[0]['valeur_score'])){ //verification s'il a deja joué a la partie
    if($ancienScore<$scoreTotal){ //comparaisson du nouveau et ancien score pour garder le meilleurs
      $bdd->delete("joue_a","id_partie=".$id_partie."","pseudo=".$pseudo."");
      $bdd->insert("joue_a","'".$id_partie."','".$mail."','".$scoreTotal."','".$tempsTotal."','".$date."'");
    }
  }else{
    $bdd->insert("joue_a","'".$id_partie."','".$mail."','".$scoreTotal."','".$tempsTotal."','".$date."'");
  }
  $bdd->update("partie","nb_jouees=nb_jouees+1", "WHERE id_partie=".$id_partie."");
  $data=["score" => $scoreTotal,"temps" => $tempsTotal];
  sendJsonData($data,'HTTP/1.1 200 OK');
  exit;
}

/*!
*	\brief    check if he has answered correctly
*		\param[in]		bdd The database
*
*		\return array data (true or false)
*
*	\details    He recover the value that the user has chosen and check if had answered correctly or not.
*/
function verifReponse($bdd){
  $texte_proposition=$_GET['texte_proposition'];
  $reponse=$_GET['reponse'];
  $id_question=$_GET['id_question'];
  $bdd->DEBUG(true);
  $solution=$bdd->select("proposition","solution_proposition","WHERE texte_proposition=".$texte_proposition." AND id_question=".$id_question."")[0]['solution_proposition'];
  if(strtolower($reponse)!=strtolower($solution)){
    $data=["verification" => false];
  }else{
    $data=["verification" => true];
  }
  sendJsonData($data,'HTTP/1.1 200 OK');
  exit;
}
?>
