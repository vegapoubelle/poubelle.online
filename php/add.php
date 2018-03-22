<?php require 'connect.php';?>
<?php
/* code by x4m3 <https://philippeloctaux.com> */

/******************** check and store stuff from the arduino into php vars */

/* check if the variable has been recieved from the GET of the arduino
 * that's what you put in the arduino program in the url
 */
if (isset($_GET['masse'])) {

  /* save that into a php variable */
  $masse = $_GET['masse'];
  /* debug: echo($masse); */
}

/******************** write stuff to the mysql server */

/* prepare to write into the mysql */
$write_command = $bdd->prepare('UPDATE masse SET masse = :masse');

/* actually write into the mysql */
$write_command->execute(array('masse' => $masse))


  /********************/

?>
if you see this message that means it <i>should</i> have worked<br>
masse: <b><?php echo $masse;?></b><br>
<br>
back <a href="http://poubelle.online">to the main site</a>
