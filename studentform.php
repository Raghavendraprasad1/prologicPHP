<?php #echo phpinfo(); die; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form </title>
</head>
<body>
    <form action="studentform.php" method="POST" enctype="multipart/form-data">
     <table align="center" style="width: 35%">
     <caption align="center" style="font-size: 30px"><u>Student Detail</u></caption>
     <tr>
     <td>Id :</td>
     <td><input type="text" name="id"></td>     
     </tr>
     <tr>
     <td>Name :</td>
     <td><input type="text" name="stuname"></td>
     </tr>
     <tr>
     <td>Email-Id :</td>
     <td><input type="text" name="email"></td>
     </tr>
     <tr>
     <td>Create a password :</td>
     <td><input type="text" name="pwd"></td>
     </tr>
     <tr>
     <td>Contact :</td>
     <td><input type="text" name="contact"></td>
     </tr>
     <tr>
     <td>Date Of Birth :</td>
     <td><input type="date" name="dob"></td>
     </tr>
     <tr>
     <td>Gender :</td>
     <td><input type="radio" name="gender" value="Male" >Male<input type="radio" name="gender" value="Female">Female</td>
     </tr>
     <tr>
     <td>Choose Your Interest :</td>
     <td><input type="checkbox" name="interest1" value="coding">Coding 
         <input type="checkbox" name="interest2" value="music">Music 
         <input type="checkbox" name="interest3" value="study">Study 
         <input type="checkbox" name="interest4" value="sport">sport </td>
     </tr>
     <tr>
     <td>Highest Qualification :</td>
     <td> <select name="qualification">
         <option value="btech">BTECH</option>
         <option value="bca">BCA</option>
         <option value="bcom">BCOM</option>
         <option value="bsc">BSC</option>
     </select> </td>
     </tr>
     <tr>
     <td>City :</td>
     <td><input type="text" name="city"></td>
     </tr>
     <tr>
     <td>State :</td>
     <td><input type="text" name="statename"></td>
     </tr>
     <tr>
     <td>Pin-code :</td>
     <td><input type="text" name="pincode"></td>
     </tr>
     <tr>
     <td>Upload your Photo :</td>
     <td><input type="file" name="photo"></td>
     </tr>
     <tr>
     <td> Upload your MarkSheet :</td>
     <td><input type="file" name="marksheet"></td>
     </tr>
     
     <tr>
     <td><input type="submit" name="submit" value="Submit"></td>
     <td><input type="reset" name="state" value="Reset"></td>
     </tr>

     </table>
    
    </form>
    </body>
</html>
<?php

if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","mohali","collegeproject");
    if($con==false){
        echo "connection failed";
    }
    $id=$_POST['id'];
    $stuname=$_POST['stuname'];
    $email=$_POST['email'];
     $pwd=$_POST['pwd'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    

    $coding=$_POST['interest1'];
    $music=$_POST['interest2'];
    $study=$_POST['interest3'];
    $sport=$_POST['interest4'];

    $interest=$coding.",".$music.",".$study.",".$sport;
    $qualification=$_POST['qualification'];
    $city=$_POST['city'];
    $statename=$_POST['statename'];
    $pincode=$_POST['pincode'];
    // echo "<pre>";
    // print_r($_FILES);
    // die('herre');

    $imagename=$_FILES['photo']['name'];
    $tempname=$_FILES['photo']['tmp_name'];

    //$target_file = 'dataimg/'.  $imagename;
    
    

        if (move_uploaded_file($_FILES["photo"]["tmp_name"], 'dataimg/'.  $imagename)) {
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        

        } 
    
   
    
    //$marksheet=$_POST['marksheet'];
    $marksheet=$_FILES['marksheet']['name'];
	$tempname2=$_FILES['marksheet']['tmp_name'];

	move_uploaded_file($tempname2,"datafile/".$marksheet);
    

    $qry="INSERT INTO student(id, stuname, email, pwd, contact, dob, gender, habit,
     qualification, city, statename, pincode, photo, marksheet) VALUES ('$id','$stuname','$email','$pwd','$contact'
     ,'$dob','$gender','$interest','$qualification','$city','$statename','$pincode','$imagename','$marksheet')";

    

    


  
$run=mysqli_query($con,$qry);
	

if($run){
    
    ?>
    <script type="text/javascript">
        alert('data inserted successfully');
    </script>
    <?php
}
    


}
?>
<!--  script files are here.......................... -->
<script>

</script>

