<?php
session_start();

include_once('db_connectProj.php');

// print "<P>Settings for " . $_SESSION['user'] . "</P>";
// print "<P>session: menu = " . $_SESSION['menu'] . "</P>";
?>

<form  action="settings.php" method="post">

<figure>
  <IMG src="theIcon.jpg" width="100">
  <figcaption><button type="button">Change Profile Picture</button></figcaption>
</figure>

</form>

<?php
$user=$_SESSION['user'];

$str1="SELECT * FROM user WHERE uid=$user;";
$res1=$db->query($str1);
$row=$res1->fetch();
//print $res1->rowCount();

//while($row=$res1->fetch()) {
  
  $id= $row['uid'];
  $name= $row['fname'] . " " . $row['lname'];
  $bday= $row['bdate'];
  $height= $row['height'];

  $rowId="<td>" . $id . "</td>";
  $rowName="<td>" . $name . "</td>";
  $rowBday="<td>" . $bday . "</td>";
  $rowHeight="<td>" . $height . "</td>";
//}

//prints users table
print "<H1>User Information:</H1>
<table border='10' cellpadding='15px' id='userTable'>
<tr><td><b>ID</td>" . $rowId . "</tr>
<tr><td><b>Name</td>" . $rowName . "</tr>
<tr><td><b>Birthday</td>" . $rowBday . "</tr>
<tr><td><b>Height</td>" . $rowHeight . "</tr>
</table>";

print "</tbody>";
print "</table>";                           


function changeSettings($db, $user) {

  $settingButton = "<input type='button' value='Edit User Settings' onclick=\"location='settings.php'\" />";
?> 
                                         /*HTML*/
    <form action="settings.php" method="post">
    
    <p>Change Name: <input type="text" name="Name" /></p>
    <p>Change Photo: <input type="image" name="Photo" /></p>  
    <p>Change Password: <input type="password" name="Password" /></p>
    <p>Change Weight: <input type="text" name="Weight" /></p>
    <p>Change Height: <input type="text" name="Height" /></p>
    // Once all changes have been completed
    <p><input type="submit" value="Save Changes"></p>
    </form>
                                         /*PHP*/   
<?php 
}

?>
