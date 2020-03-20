<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
       table{
           margin: auto;
       }
    </style>
</head>
<body>
<h2 align="center">Find student detail</h2>
<form action="updatedata.php" method="POST" enctype="multipart/form-data">
<table style="border: 1 solid black">
    <tr>
       <td>Enter ID :</td>
       <td><input type="text" name="id"></td>
       
    </tr>
    <tr><td>OR</td></tr>
    
    <tr>
       <td>Enter Name :</td>
       <td><input type="text" name="stuname"></td>
       <td>&nbsp and City :</td>
       <td><input type="text" name="city"></td>
       <td colspan="2"><input type="submit" name="submit" value="Find Detail"></td>
    </tr>
    </table>
    <!-- second table............ -->
    <table>
        <br><br><br>
    <tr>
                         <th>Id</th><th>Name</th><th>Email-Id</th>
                         
                         <th>Photo</th>
                     </tr>
    <?php
       if(isset($_POST['submit'])){
            $con=mysqli_connect("localhost","root","mohali","collegeproject");
            if($con==false){
                echo "connection failed";
            }
            $id=$_POST['id'];
            $stuname=$_POST['stuname'];
            $city=$_POST['city'];
            $sql="SELECT  * FROM student WHERE id='$id' OR (stuname LIKE '%$stuname%' AND city='$city') ";
            $result=mysqli_query($con,$sql);
            $row=mysqli_num_rows($result);
            $data=mysqli_fetch_assoc($result);
        }
?>
      <tr>
          <td><?php echo $data['id']; ?></td>
          <td><?php echo $data['stuname']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><img src="./dataimg/<?php echo $data['photo']; ?>" style="max-width: 100px;" /> </td>
          <td><a href="updatedetail.php?id=<?php echo $id;?>&name=<?php echo $stuname;?>">Update</a></td>
        <td><a href="deletedetail.php">Delete</a></td>
      </tr>
    <!-- //    if ($row > 0) {
    
    //     while($data =mysqli_fetch_assoc($result))
    //         {
    //             
    //         }
    //     } else{
    //         echo "0 results";
    //     }
    //     $con->close();
    //     }
       -->
    
      
    </table>
</form>
</body>
</html>
