<?php require 'connect.php';?>
<?php
/* code by x4m3 <https://philippeloctaux.com> */

/******************** check and store stuff from the arduino into php vars */

/* check if the variable has been recieved from the GET of the arduino
 * that's what you put in the arduino program in the url
 */
if (isset($_GET['masse'])) {

  /* save "masse" into php variable */
  $masse = $_GET['masse'];
  /* debug: echo($masse); */
}

  /* save "matiere" into php variable */
if (isset($_GET['matiere'])) {
  switch ($_GET['matiere']) {
    case 1:
      $matiere = 1;
      break;
    case 2:
      $matiere = 2;
      break;
    case 3:
      $matiere = 3;
      break;
  }
  /*if ($_GET['matiere'] == 1) {
    $matiere = 1;
  } */
}

/******************** write stuff to the mysql server */

/* prepare to write into the mysql */
/* $write_command = $bdd->prepare('UPDATE masse SET masse = :masse'); */
$write_command = $bdd->prepare('INSERT INTO masse(masse, time) VALUES (:masse, NOW() )');

/* actually write into the mysql */
$write_command->execute(array('masse' => $masse))


  /********************/

?>
if you see this message that means it <i>should</i> have worked<br>
masse: <b><?php echo $masse;?></b><br>
<br>
back <a href="http://poubelle.online">to the main site</a>
