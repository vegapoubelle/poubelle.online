<?php require 'connect.php';?>
<?php
/* code by x4m3 <https://philippeloctaux.com> */

/******************** check and store stuff from the arduino into php vars */

/* save "masse" into php variable */
if (isset($_GET['masse'])) {
  $masse = $_GET['masse'];
}

/* save "matiere" into php variable */
if (isset($_GET['matiere'])) {
  switch ($_GET['matiere']) {
    case 1:
      $matiere = "metal";
      break;
    case 2:
      $matiere = "verre";
      break;
    case 3:
      $matiere = "plastique";
      break;
    case 4:
      $matiere = "autre";
      break;
  }
}

/******************** write stuff to the mysql server */

/* prepare to write into the mysql */
/* $write_command = $bdd->prepare('UPDATE masse SET masse = :masse'); */
$write_command = $bdd->prepare("INSERT INTO masse(masse, matiere, time) VALUES (:masse, '$matiere', NOW() )");

/* actually write into the mysql */
$write_command->execute(array('masse' => $masse))
?>

if you see this message that means it <i>should</i> have worked<br>
masse: <b><?php echo $masse;?></b><br>
matiere: <b><?php echo $matiere;?></b><br>
<br>
back <a href="http://poubelle.online">to the main site</a>
