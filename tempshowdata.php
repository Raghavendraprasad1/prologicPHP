<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table data Show</title>
    <style>
        table,th,td{
            border: 2px solid black;
            margin: auto;
            border-collapse: collapse; }
        h1{
            text-align: center; }
    </style>
</head>
<body>
    <h1>Student Data </h1>
    <a href="temp.php">Add Student</a>
    <?php
    try{
        require('connection.php');
        $con->begin_transaction();
        $qry="SELECT temp.id,fname,email,gender,contact,photo,habit.coding,habit.music,habit.study,habit.sport,habit.java,habit.php,habit.python,habit.javascript From temp  INNER JOIN habit ON temp.id=habit.id; ";
        $result=mysqli_query($con,$qry);
        $row=mysqli_num_rows($result);
        $con->commit();
    }
    catch(Exception $e) {
        $con->rollback();
       echo ' select Message: ' .$e->getMessage();
  }
    ?>
    <table style="border: 1px solid black;">
       <tr>
        <th>ID</th><th>Name</th><th>Email-ID</th><th>Gender</th><th>Contact</th><th>photo</th><th>Interest Area</th><th>Language</th><th colspan="2">Modification</th>
        </tr>
       <?php
       if(!$row<1){
         while($data=mysqli_fetch_assoc($result)){
             $coding=$data['coding'];
             $music=$data['music'];
             $study=$data['study'];
             $sport=$data['sport'];
             $str="";
             if($coding=="coding"){
                 $str=$str.$coding." "; }
             if($music=="music"){
                $str=$str.$music; }
            if($study=="study"){
                $str=$str.$study; }
            if($sport=="sport"){
                $str=$str.$sport; }

        // coding for language drop down.............
            $java=$data['java'];
            $php=$data['php'];
            $python=$data['python'];
            $javascript=$data['javascript'];
            $str2="";
            if($java=="java"){
                $str2=$str2.$java." "; }
            if($php=="php"){
               $str2=$str2.$php." "; }
           if($python=="python"){
               $str2=$str2.$python." "; }
           if($javascript=="javascript"){
               $str2=$str2.$javascript." ";  }
           ?>
           <tr>
               <td><?php echo $data['id']; ?></td>
               <td><?php echo $data['fname']; ?></td>
               <td><?php echo $data['email']; ?></td>
               <td><?php echo $data['gender'];?></td>
               <td><?php echo $data['contact'];?></td>
               <td><img src="./dataimg/<?php echo $data['photo']; ?>" style="max-width: 100px;" /></td>
               <td><?php echo $str; ?></td>
               <td><?php echo $str2; ?></td>
               <td><a href="temp.php?id=<?php 
               echo urlencode(base64_encode($data['id']));?>">Update</a></td>
        <td><a href="confirmdelete.php?id=<?php 
               echo urlencode(base64_encode($data['id']));?>">Delete</a></td>
                </tr>
           <?php
        }
      }
      else{
        echo("Error description in fetch: " . mysqli_error($con));
      }
       ?>
    </table>
</body>
</html>