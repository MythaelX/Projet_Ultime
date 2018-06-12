<?php
require_once("bases/_functions.php");

function sendJsonData($message, $h){
    header($h);
    header('Content-Type: text/plain; charset=utf-8');
    header('Cache-control: no-store, no-cache, must-revalidate');
    header('Pragma: no-cache');
    echo json_encode($message);
}

function authentification($bdd){
    $pseudo = $_SERVER['PHP_AUTH_USER'];
    $mdp = $_SERVER['PHP_AUTH_PW'];
    $statue = $bdd->query("select * from utilisateurs where pseudo='$pseudo' and password='$mdp'"); //sha1('$mdp')
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

function creationPartie($bdd,$tabQuestions){ //insertion d'une partie dans la bdd
  $difficulte=$_POST['difficulte'];
  $date=date("Y-m-d");
  $bdd->insert("partie", "NULL,'".$date."' , '1', ".$difficulte."");
  $id_partie=$bdd->getId();
  $nbQuestions=$bdd->query("SELECT nb_questions FROM difficulte WHERE id_difficulte=1")[0]['nb_questions'];
  for ($i=0; $i <$nbQuestions; $i++) {
    $id_question=$tabQuestions[$i]['id_question'];
    $bdd->insert("contient", "'".$id_question."','".$id_partie."'");
  }
}

function score($bdd){
  //calcul du scores à partir de 5 sec il perd 0.5 point par seconde
  $scoreTotal=0;
  $tempsTotal=0;
  $temps=json_decode($_POST['temps']);
  $reponses=json_decode($_POST['reponses']);
  for ($j=0; $j < sizeof($reponses) ; $j++) { //nombres de questions
    for ($i=0; $i < sizeof($temps[0]); $i++) { //nombres de propositions
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
  //envoie du score dans la bdd;
  $scoreTotal=intval($scoreTotal);
  $date=date("Y-m-d");
  $tempsTotal=intval($tempsTotal/1000); // traduire en H:Min:Sec
  $tempsTotal=date('H:i:s', $tempsTotal-3600);
  $pseudo=$_POST['pseudo'];
  $mail=$bdd->query("SELECT mail from utilisateurs WHERE pseudo='".$pseudo."'")[0]['mail']; //recuperer le token
  $id_partie=$_POST['id_partie'];
  $data=$bdd->select("joue_a","valeur_score","WHERE id_partie=".$id_partie."");
  $ancienScore=$data[0]['valeur_score'];
  if(isset($ancienScore)){ //verification si a deja joué a la partie
    if($ancienScore<$scoreTotal){ //comparaisson du nouveau et ancien score pour garder le meilleurs
      $bdd->delete("joue_a","id_partie=".$id_partie."");
      $bdd->insert("joue_a","'".$id_partie."','".$mail."','".$scoreTotal."','".$tempsTotal."','".$date."'");
    }
  }else{
    $bdd->insert("joue_a","'".$id_partie."','".$mail."','".$scoreTotal."','".$tempsTotal."','".$date."'");
  }
  $data=["score" => $scoreTotal,"temps" => $tempsTotal,];
  sendJsonData($data,'HTTP/1.1 200 OK');
}

?>
