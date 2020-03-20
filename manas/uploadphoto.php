<?php
  if (isset($_POST["submit"])){
         
    $imagename= "./imagesave/". $_FILES['photo']['name'];
    $tempname=$_FILES['photo']['tmp_name'];
    
    if(move_uploaded_file($tempname, $imagename)){
        echo"<br>Succesfully uploaded";
    }
    else{
        echo"<br>Unsuccesful";
    }
    echo "<img src='$imagename' height='200px' > ";


  }
?>

<html>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="photo">
<input type="submit"  value="save" name="submit">
<input type="file" name="photo">
<input type="submit"  value="save" name="submit">

</form> 
</body>
</html>