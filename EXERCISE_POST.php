<?php

if(isset($_POST['submit'])){
    echo $_POST['full_name'];

}



?>

<html>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="full_name">
            <input type="submit" name="submit">
            
            
        </form>
    </body>
</html>
