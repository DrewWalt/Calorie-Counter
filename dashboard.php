<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Dashboard</TITLE>

<?php 

include('bootstrap.php'); 
include_once('db_connect.php');
include('hw5util.php');

?>

<STYLE>
.column {
    border: 1px solid gray;
    padding: 10px;
    background-color: honeydew;
    text-align: center;
}

.column:hover {
    background-color: lavender;
}

</STYLE>

</HEAD>

<BODY>

<?php
 $op = $_GET['op'];

 $user = 10;
   // ... showInbox?user=10
   if($_GET['user'] != '') {
	   $user = $_GET['user'];
   }	
	 print "<P>Operation: $op $user</P>\n";
?>

<DIV class="container">
    <DIV class="row">
        <DIV class="col-md-12">
          <H1> 
        
<?php        
 // Withdrawing name from DB and store
 $str1 = "SELECT name FROM titan1 WHERE id=$user;";
 $res1 = $db->query($str1);
       
 // Retrieve and print specified name using specified ID
 if($res1 != FALSE && $res1->rowCount() > 0) {
   $row = $res1->fetch();
   $name = $row['name'];
   print welcomeMsg($name); 
 }
 else {       	
   //Print Robin if no user is specified
   print welcomeMsg("Robin"); 
 }
?>
         
         </H1>
    </DIV>
</DIV>


<DIV id="divMain" style="padding: 60px;">
  <DIV id="divMenu">

    <DIV class="row">
       <DIV class="col-md-2 column">
         <A href='dashboard.php?op=inbox&user=<?php print $user; ?>'>Inbox</A>
       </DIV>
          
       <DIV class="col-md-2 column">
         <A href='dashboard.php?op=sent&user=<?php print $user; ?>'>Sent</A>
       </DIV>
          
       <DIV class="col-md-2 column">
         <A href='dashboard.php?op=message&user=<?php print $user; ?>'>Message</A>
       </DIV>
    </DIV>

  </DIV>
    
    
  <DIV>
    <?php
  	if($op == 'inbox') {
	  	print "<P>call viewInbox method</P>\n";
      viewInbox($db, $user);
  	}
  	else if($op == 'sent') {
  		print "<P>call viewSent method</P>\n";
      viewSent($db, $user, $userName);
  	}
    else if ($op == 'message') {
  		print "<P>call viewMessage method</P>\n";
      viewMessage($db, $msgID, $user);
    }
    ?>
  </DIV>
    
</DIV>


 
</BODY>
</HTML>

