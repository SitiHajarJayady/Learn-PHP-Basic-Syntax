<?php

//server
//request
//post
//get
//sessions
//cookies

if(isset($_POST['submit'])){
    if($_POST['username'] == "" OR $_POST['email']== ""){
        echo "some inputs are empty";
    }
   else{
        $Name=$_POST['username'];
        $Email=$_POST['email'];
        echo $Name . " and " . $Email . "<br>";
   }

}





?>

<html>
    <body>
        <form method="POST" action="Exercise_7.php">
            <h3>Name:</h3><input type="text" name= "username"><br><br>
            <h3>Email:</h3><input type="text" name="email"><br><br>
            <input type="submit" name="submit">

        </form>
    </body>
</html>