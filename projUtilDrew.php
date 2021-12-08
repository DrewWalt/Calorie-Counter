<?php
include_once("db_connect.php");


function addFood($db, $food, $serving, $uid) {

  $str = "INSERT INTO eats (uid, fname, date, servings) "
          . "VALUE($uid , '$food', CURDATE(), $serving);";
  //print "$str\n";
  
  
  $res = $db->query($str);
  if ($res == FALSE) {
  
  	//print"<P>Error adding a new message to the table</P>\n";
  	//print_r($db->errorInfo());
  }
  
  else {
    print "<P>$serving serving of $food added</P>\n";
  }

}

?>
