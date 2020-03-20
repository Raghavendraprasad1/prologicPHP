<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Detail</title>
</head>
<body>
    <?php
     $id=$_GET["id"];
     echo $id;
     $name=$_GET["name"];
     echo $name;

     $con=mysqli_connect("localhost","root","mohali","collegeproject");
    if($con==false){
        echo "connection failed";
    }
    
    $qry="SELECT * FROM student WHERE id='$id' AND stuname='$name'";
    $result=mysqli_query($con,$qry);
    $data=mysqli_fetch_assoc($result);
    ?>

<form action="updatedetail.php" method="POST" enctype="multipart/form-data">
     <table align="center" style="width: 35%">
     
     <tr>
     <td>Id :</td>
     <td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>     
     </tr>
     <tr>
     <td>Name :</td>
     <td><input type="text" name="stuname" value="<?php echo $data['stuname']; ?>"></td>
     </tr>
     <tr>
     <td>Email-Id :</td>
     <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
     </tr>
     <tr>
     <td>Create a password :</td>
     <td><input type="text" name="pwd" value="<?php echo $data['pwd']; ?>"></td>
     </tr>
     <tr>
     <td>Contact :</td>
     <td><input type="text" name="contact" value="<?php echo $data['contact']; ?>"></td>
     </tr>
     <tr>
     <td>Date Of Birth :</td>
     <td><input type="date" name="dob" value="<?php echo $data['dob']; ?>"></td>
     </tr>
     <tr>
     <td>Gender :</td>
     <td><input type="date" name="dob" value="<?php echo $data['gender']; ?>"></td>
     </tr>
     <tr>
         <td>Habit :</td>
     <td><input type="date" name="dob" value="<?php echo $data['habit']; ?>"></td>
     </tr>
     <tr>
         <td>Qualification :</td>
     <td><input type="date" name="dob" value="<?php echo $data['qualification']; ?>"></td>
     </tr>
     <tr>
     <td>City :</td>
     <td><input type="text" name="city" value="<?php echo $data['city']; ?>"></td>
     </tr>
     <tr>
     <td>State :</td>
     <td><input type="text" name="statename" value="<?php echo $data['statename']; ?>"></td>
     </tr>
     <tr>
     <td>Pin-code :</td>
     <td><input type="text" name="pincode" value="<?php echo $data['pincode']; ?>"></td>
     </tr>
     <tr>
     <td>Upload your Photo :</td>
     <td><img src="./dataimg/<?php echo $data['photo']; ?>" style="max-width: 100px;" /></td>
     </tr>
     <tr>
     <td> Upload your MarkSheet :</td>
     <td><input type="file" name="marksheet" value="<?php echo $data['marksheet']; ?>"></td>
     </tr>
     
     <tr>
     <td><input type="submit" name="submit" value="Submit"></td>
     <td><input type="reset" name="state" value="Reset"></td>
     </tr>

     </table>
    
    </form>
</body>
</html>