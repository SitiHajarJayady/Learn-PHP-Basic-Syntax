<?php

/*

give a variable a value of "web coding" name it username
and using if else only check it if it is right or wrong in
if block echo "you are in now to homepage" in else block echo "wrong username"


*/

$username= "web coding";
$user="web coding";

if($user== $username){
    echo " You are in now to homepage";
}
else{
    echo " wrong username";
}

/*
create a variable name it favDay give it a value of "Mon" 
and then write a switch to check for the value

the first case is "Mon"

action echo this out "Mon that is my fav day"

and they break

the second case is "Wen"

action echo out "Wen that is my fav day"

and then break

the third case is "Sat"

action echo out "Sat that is my fav day"

and then break

the fourth is default 

action echo out "I don't have a fa day"

*/


$favDay="Tue";
echo "<br>";

switch($favDay){
    case "Mon":
        echo " Mon that is my fav day";
        break;
    case "Wen":
        echo " Wed that is my fav day";
        break;
    case "Sat":
        echo " Sat that is my fav day";
        break;

    default:
        echo " I dont have a fav day";
}


?>