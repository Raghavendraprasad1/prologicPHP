<html>
<body>
     
 <?php
          if( $_POST["fname"]=="")
          {
          	echo "Error";
          } 
          else{
      echo $_POST["fname"];
      } ?><br>
 <?php echo $_POST["lname"]; ?><br>
 <?php echo $_POST["email"]; ?><br>
 <?php echo $_POST["contact"]; ?><br>
 <?php echo $_POST["date"]; ?>

</body>
</html>