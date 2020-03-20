<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
<?php
function error($err){
    throw new Exception("Error Description :".$err);
}

$id=base64_decode(urldecode($_GET['id']));
try{
   require("connection.php");

   mysqli_autocommit($con,FALSE);
   mysqli_begin_transaction($con);

   $qry="DELETE FROM temp where id=$id";
   $qry2="DELETE FROM habit where id=$id";

   mysqli_query($con,$qry) or error(mysqli_error($con));
   mysqli_query($con,$qry2) or error(mysqli_error($con));
   
   mysqli_commit($con);
   echo "data deleted successfully";
}
   catch(Exception $e){
       mysqli_rollback($con);
     echo $e->getMessage();
}
require("tempshowdata.php");
?>

</body>
</html>