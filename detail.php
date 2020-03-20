<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <?php
    
    $con=mysqli_connect("localhost","root","mohali","collegeproject");
    if($con==false){
        echo "connection failed";
    }
    $stuname=$_POST['stuname'];
    $city=$_POST['city'];
    $qry="SELECT  stuname,city FROM student   WHERE stuname='$stuname' AND city='$city' ";
    $run=mysqli_query($con,$qry);
    $data=mysqli_fetch_assoc($run);

     echo $data['stuname']; 
     echo $data['city']; 
    ?>
    
</body>
</html>