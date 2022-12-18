<?php

session_start();

$_SESSION['USERNAME']= $_GET['username'];
$_SESSION['EMAIL']= $_GET['email'];


echo $_SESSION['USERNAME'];
echo "<br>";
echo $_SESSION['EMAIL'];

?>