<?php
   session_start();
  //session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session check</title>
</head>
<body>
    <?php
      echo $_SESSION["stu_name"];
      
      if(!isset($_SESSION['counter'])){
           $_SESSION['counter']=1;
      }
      else{
          $_SESSION['counter']++;
      }
      echo "<br>total no. of page visit : ".$_SESSION['counter'];

      echo "<br>".session_id();
      $_SESSION['ip'];// = getRealIpAddr();
      $_SESSION['time'] = date(DATE_RFC822);
      echo "<br>".$_SESSION['time'];
      echo "<br>";
    
    ?>
    
</body>
</html>