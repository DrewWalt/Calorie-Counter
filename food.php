<?php

session_start();

print "<P>Food for " . $_SESSION['user'] . "</P>";

print "<P>session: menu = " . $_SESSION['menu'] . "</P>";

?>
