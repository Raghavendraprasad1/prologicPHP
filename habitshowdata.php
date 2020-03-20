<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habit table data</title>
    <style>
        table,th,td{
            border: 2px solid black;
            margin: auto;
            border-collapse: collapse;
            
           
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Student Detail</h1>
    
<?php
   $id=base64_decode(urldecode($_GET['id']));
   
    try{
        require('connection.php');

         $qry="SELECT id,coding,music,study,sport,java,php,python,javascript From habit  where id='$id' ";
         $result=mysqli_query($con,$qry);
         $row=mysqli_num_rows($result);
         
    }

    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
  }
        $con->close();
    ?>
    <table cellpadding="5" cellspacing="5">
       <tr>
        <th>ID</th><th>Coding</th><th>Music</th><th>Study</th><th>Sport</th><th>Java</th><th>php</th>
        <th>Python</th><th>JavaScript</th><th colspan="2">Modification</th>
       </tr>
       <?php
       if(!$row<1){
         while($data=mysqli_fetch_assoc($result)){
           ?>
           <tr>
               <td><?php echo $data['id']; ?></td>
               <td><?php echo $data['coding']; ?></td>
               <td><?php echo $data['music']; ?></td>
               <td><?php echo $data['study'];?></td>
               <td><?php echo $data['sport'];?></td>
               <td><?php echo $data['java']; ?></td>
               <td><?php echo $data['php']; ?></td>
               <td><?php echo $data['python'];?></td>
               <td><?php echo $data['javascript'];?></td>
              
               <td><a href="temp.php?id=<?php 
               echo urlencode(base64_encode($data['id']));?>">Update</a></td>
        <td><a href="deletefile.php?id=<?php 
               echo urlencode(base64_encode($data['id']));?>">Delete</a></td>
               
               
           </tr>
           <?php
        }
      }
       ?>
      
    </table>
    
</body>
</html>