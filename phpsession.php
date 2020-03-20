<?php
   session_start();
   setcookie("username2","raghav2",time()+(86400*30),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
</head>
<body>
    <?php
    $_SESSION["stu_name"]="raghavendra";
    $_SESSION["age"]="23";
    $nam=$_COOKIE["username2"];
    $ages=$_COOKIE["age"];
    $_SESSION["userage"]=$ages;
    echo "session variables are set";

    if(isset($_SESSION["age"])){
       // header('location:phpsession2.php');
         echo "<br>".$_SESSION["userage"]."<br>";
        // print_r($_SESSION);
        
    }
    ?>
   

</body>
</html>