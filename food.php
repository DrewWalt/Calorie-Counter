<HTML>
<?php
include_once("db_connect.php");
include_once("projUtilDrew.php");
//include_once("projUtilDrew.php");
session_start();

//print "<P>Food for " . $_SESSION['user'] . "</P>";

//print "<P>session: menu = " . $_SESSION['menu'] . "</P>";

?>
<FORM name="addFood" method="POST" action="landingPage.php?menu=food">
<B>Food</B>
<SELECT name="ddlfood">
<?php
$str = "SELECT * FROM food;";
$res = $db -> query($str);

while($row = $res->fetch()) {
	$name = $row['name'];
	
	$tRow = "<OPTION value='$name'>$name</OPTION>\n";
	print$tRow;

}
?>
</SELECT>
<B>Servings</B>
<INPUT type="number" step="0.5" name = "serving" size="5"/>

<INPUT type="submit" class="button" value="Add"/>
</FORM>

<?php
  if($_GET['menu']=='food')
  {
    addFood($db, $_POST['ddlfood'], $_POST['serving'], $_SESSION['user']);
  } 
?>

</HTML>
