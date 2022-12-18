<?php

//echo data from Exercise_9_SESSIONS.php
session_start();

echo $_SESSION['USERNAME'];
echo "<br>";
echo $_SESSION['EMAIL'];
echo "<br><br>";


// changing value in session

echo "changing value in session <br><br>";

$_SESSION['USERNAME']='jarejar';
$_SESSION['EMAIL']='sitihajar1998@gmail.com';
$_SESSION['age'] =19;



echo $_SESSION['USERNAME'];
echo "<br>";
echo $_SESSION['EMAIL'];
echo "<br>";
echo $_SESSION['age'];

session_unset();
session_destroy();

echo "<br> session now is destroyed";
?>

<html>
    <body>
        
    </body>
</html>