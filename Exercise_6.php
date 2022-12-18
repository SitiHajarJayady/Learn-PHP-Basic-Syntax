<?php

//array (indexed, associative, multide)


/*

associative:

$age = ["ahmed" => 32 , "suraya" => 21 , "hajar"=> 24];

foreach($age as $key => $value){
    echo $key . " is " . $value . " years old <br>";
}


multide:

$multi= array(
    array('php', 'laravel', 'javascript'), 
    array('laravel','symfony', 'nodejs'),
    array('mysql','mongodb','couchdb')



);

//row array

echo $multi[0][0];




*/



/*

Create an indexed array name it arr and
add values ("PHP", "ruby", "JS", "Java") and use the 
count method to count the number of values inside that array and don't forget to of course echo it out


*/

$arr = array("PHP", "ruby", "JS", "Java");
  
echo count($arr) . "<br>";


/*
Create an associative array name it  users

first key is username and second is age

first pair  username => "Rohan" and age  => 33

second  pair username => "Mohamed" and age => 22


*/

$users = ["Rohan"=> 33, "Mohamed"=>22];

foreach($users as $key => $value){
    echo $key . " is " . $value . " years old <br>";
}



?>