<?php

session_start();

print "<P>Settings for " . $_SESSION['user'] . "</P>";

print "<P>session: menu = " . $_SESSION['menu'] . "</P>";

?>
