<?php
/* code by x4m3 <https://philippeloctaux.com> */

/* host; database name; user; password; */
try {
  $bdd = new PDO('mysql:host=localhost;dbname=poubelle', 'user', 'password');
}

/* if there's an error, show an error message */
catch(PDOException $e) {
  echo $e->getMessage();
  die("can't connect!");
}

/* select the table */
$reponse = $bdd->query('SELECT * FROM masse ORDER BY id DESC LIMIT 0, 1');

/* organize stuff */
$donnees = $reponse->fetch();

/* save stuff from database to the php vars */
$id = $donnees['id'];
$matiere = $donnees['matiere'];
$masse = $donnees['masse'];
$time = $donnees['time'];

/* close the mysql connection */
$reponse->closeCursor();
?>
