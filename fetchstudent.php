<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 align="center">Find student detail</h2>
<form action="fetchstudent.php" method="POST" enctype="multipart/form-data">
<table align="center" border="1">
    <tr>
       <td>Enter Name :</td>
       <td><input type="text" name="stuname"></td>
       <td>Enter City :</td>
       <td><input type="text" name="city"></td>
       <td colspan="2"><input type="submit" name="submit" value="Find Detail"></td>
    </tr>
    </table>
    <!-- second table............ -->
    <table>
        <br><br><br>
    <tr>
                         <th>Id</th><th>Name</th><th>Email-Id</th><th>Password</th><th>Contact</th><th>Date of birth</th>
                         <th>Gender</th><th>Habit</th><th>Qualification</th><th>City</th><th>State</th><th>Pin-Code</th>
                         <th>Photo</th><th>Marksheet</th>
                     </tr>
    <?php
       if(isset($_POST['submit'])){
            $con=mysqli_connect("localhost","root","mohali","collegeproject");
            if($con==false){
                echo "connection failed";
            }
            $stuname=$_POST['stuname'];
            $city=$_POST['city'];
            $sql="SELECT  * FROM student WHERE stuname='$stuname' AND city='$city' ";
            $result=mysqli_query($con,$sql);
            $row=mysqli_num_rows($result);
            

       if ($row > 0) {
    
        while($data =mysqli_fetch_assoc($result))
            {
                ?>
                     <tr>
                         <td><?php echo $data['id']; ?></td><td><?php echo $data['stuname']; ?></td>
                         <td><?php echo $data['email']; ?></td><td><?php echo $data['pwd']; ?></td>
                         <td><?php echo $data['contact']; ?></td><td><?php echo $data['dob']; ?></td>
                         <td><?php echo $data['gender']; ?></td><td><?php echo $data['habit']; ?></td>
                         <td><?php echo $data['qualification']; ?></td><td><?php echo $data['city']; ?></td>
                         <td><?php echo $data['statename']; ?></td><td><?php echo $data['pincode']; ?></td>
                         <td><?php echo $data['photo']; ?></td><td><?php echo $data['marksheet']; ?></td>

                     </tr>
                <?php 
            }
        } else{
            echo "0 results";
        }
        $con->close();
        }
    ?>
    
    </table>
</form>
</body>
</html>