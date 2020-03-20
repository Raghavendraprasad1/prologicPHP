<!DOCTYPE html>
<?php
setcookie("username","raghav",time()+(86400*30),"/");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$con=mysqli_connect("localhost","root","mohali","collegeproject");
if($con==false){
    echo "connection failed";
}
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$nam=$_COOKIE["username"];
$qry="SELECT * FROM admin WHERE username='$nam' AND userpass='$pwd'";
$result=mysqli_query($con,$qry);
$row=mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);
// echo $data['username'];
// echo $data['userpass'];

if($row<1){
    ?>
 <script type="text/javascript">
 			alert('username or password not matched');
 			window.open('index.php');
 			
         </script>
        <?php 
}
         else{
            header('location:studentform.php');
         }

?>
</body>
</html>