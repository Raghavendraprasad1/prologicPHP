<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Information</title>
</head>
<body>
    <?php
    $id=$_POST['id'];
    $stuname=$_POST['stuname'];
    $email=$_POST['email'];
    
    
    $imagename= "./dataimg/". $_FILES['photo']['name'];
    $tempname=$_FILES['photo']['tmp_name'];
    
    // echo "<pre>";
    // print_r($_FILES);
    // $_FILES["photo"]["tmp_name"]
    if(move_uploaded_file($tempname, $imagename)){
        echo"<br>Succesfully uploaded";
    }else{echo"<br>Unsuccesful";}
    echo "<img src='$imagename' height='200px' > ";

    // showing the radio button......
    $interest=$_POST['interest'];
     
        echo "<br> Interested In :";
    $length=count($interest);
       for ($i=0; $i<$length ;$i++) { 
           echo $interest[$i];
           if($i==$length-1){
               echo ".";
           break;
           }
           echo ",";
       }
       $str ="";
       foreach($interest as $value){
                 $str=$str.$value.",";
       }
        
       echo "<br>";
       echo rtrim($str,",");
// showing the value of radio button
        if(isset($_POST['gender']))
{
echo "You have selected :".$_POST['gender']; 
}

    ?>
</body>
</html>