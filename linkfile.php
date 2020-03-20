<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link File</title>
</head>
<body>
<?php
function error($err){
    throw new Exception("Error Description :".$err);
}

if(isset($_POST['save'])){
    try{
        require('connection.php');

            $fname=$_POST['fname'];
            $email=$_POST['email'];
            $gender=$_POST['gender'];
            $contact=$_POST['contact'];
            /* kjhdfdkjhdkjhkjd.....................*/ 
            $coding=$_POST['coding'];
            $music=$_POST['music'];
            $study=$_POST['study'];
            $sport=$_POST['sport'];
           
            /* drop down values...........*/

            $lang=$_POST['lang'];
            $len=count($lang);
            for($i=0;$i<$len;$i++){
                 if($lang[$i]=="java"){
                    $javavalue="java";
                 }
                else if($lang[$i]=="php"){
                    $phpvalue="php";
                 }
                else if($lang[$i]=="python"){
                    $pythonvalue="python";
                 }
                 else{
                    $javascriptvalue="javascript";
                 }
            }   
        
            $photoname=$_FILES['photo']['name'];
            $tempname=$_FILES['photo']['tmp_name'];
            move_uploaded_file($tempname,'dataimg/'.$photoname);

            mysqli_autocommit($con,FALSE);
            mysqli_begin_transaction($con);
            
           
            $qry="INSERT INTO temp (fname, email,gender, contact,photo) VALUES ('$fname','$email','$gender','$contact','$photoname')";
            $run=mysqli_query($con,$qry) or error(mysqli_error($con));
            $last_id = $con->insert_id;
            $qry2="INSERT INTO habit (id,coding,music,study,sport,java,php,python,javascript) VALUES ('$last_id','$coding','$music','$study','$sport','$javavalue','$phpvalue','$pythonvalue','$javascriptvalue')";
            $run2=mysqli_query($con,$qry2) or error(mysqli_error($con));

            // if(($run && $run2)){
            //     echo "data inserted successfully"; 
            //     require("tempshowdata.php"); 
            // }
            // else{
            //      throw new Exception("database Error");
            //     //echo("Error description In Insert : " .  mysqli_error($con));
            // }
            $con->commit();
            echo "data inserted successfully"; 
        }
        catch(Exception $e) {
            mysqli_rollback($con);
            echo ' Insertion Message: ' .$e->getMessage();
          }
         finally{
            mysqli_close($con);
            
         }
         require("temp.php");
}

   else if(isset($_POST['update'])){
        $id=base64_decode(urldecode($_GET['id']));
    try{
        require('connection.php');
        
            $fname1=$_POST['fname'];
            $email1=$_POST['email'];
            $gender1=$_POST['gender'];
            $contact1=$_POST['contact'];

            $photoname=$_FILES['photo']['name'];
            $tempname=$_FILES['photo']['tmp_name'];
            move_uploaded_file($tempname,'dataimg/'.$photoname);

            $coding1=$_POST['coding'];
            $music1=$_POST['music'];
            $study1=$_POST['study'];
            $sport1=$_POST['sport'];
         // Drap and down language .....................
            $lang1=$_POST['lang'];

            $len=count($lang1);
            for($i=0;$i<$len;$i++){
                 if($lang1[$i]=="java"){
                    $javavalue1="java";
                 }
                 else if($lang1[$i]=="php"){
                    $phpvalue1="php";
                 }
                 else if($lang1[$i]=="python"){
                    $pythonvalue1="python";
                 }
                 else{
                    $javascriptvalue1="javascript";
                 }
            }
            mysqli_autocommit($con,FALSE);
            mysqli_begin_transaction($con);
            
            if($photoname==""){
                $qry="UPDATE temp  SET fname='$fname1',email='$email1',gender='$gender1',contact='$contact1' WHERE temp.id=$id ";
            }
            else{
                $qry="UPDATE temp SET fname='$fname1',email='$email1',gender='$gender1',contact='$contact1',photo='$photoname' WHERE temp.id=$id ";
            }
            $qry2="UPDATE habit SET coding='$coding1',music='$music1',study='$study1',sport='$sport1',java='$javavalue1',php='$phpvalue1',python='$pythonvalue1',javascript='$javascriptvalue1' WHERE habit.id=$id ";
            
            $result=mysqli_query($con,$qry) or error(mysqli_error($con));
            $result2=mysqli_query($con,$qry2) or error(mysqli_error($con));

            mysqli_commit($con);
        }
        catch(Exception $e) {
            
            echo ' Update Message: ' .$e->getMessage();
            mysqli_rollback($con);
          }
          finally {    
           mysqli_close($con); 
          }
          require("tempshowdata.php");
          
}
 else{
    try{
        require('connection.php');
        $id=base64_decode(urldecode($_GET['id']));

         $qry="SELECT temp.fname,temp.email,temp.gender,temp.contact,temp.photo,habit.coding,habit.music,habit.study,habit.sport,habit.java,habit.php,habit.python,habit.javascript From temp  INNER JOIN habit ON temp.id='$id' AND habit.id='$id' ";
        $result=mysqli_query($con,$qry) or error(mysqli_error($con)) ;
        $data=mysqli_fetch_assoc($result);
    
        $fname=$data['fname'];
        $email=$data['email'];
        $gender=$data['gender'];
        $contact=$data['contact'];
        $photo=$data['photo'];

        if($gender == "male"){
            $malegender = "checked";
        }
        if($gender == "female"){
            $femalegender="checked";
        }
        $coding=$data['coding'];
        $music=$data['music'];
        $study=$data['study'];
        $sport=$data['sport'];
        if($coding=="coding"){
            $codingshow="checked";
        }
        if($music=="music"){
            $musicshow="checked";
        }
        if($study=="study"){
            $studyshow="checked";
        }
        if($sport=="sport")
        {
            $sportshow="checked";
        }
        // gdhjasgdhjasgdhjagdhjgdhjdgfshjdgsfhjdgs..........................
        $java=$data['java'];
        $php=$data['php'];
        $python=$data['python'];
        $javascript=$data['javascript'];
        if($java=="java"){
            $javashow="selected";
        }
        if($php=="php"){
            $phpshow="selected";
        }
        if($python=="python"){
            $pythonshow="selected";
        }
        if($javascript=="javascript")
        {
            $javascriptshow="selected";
        }

}
    catch(Exception $e) {
        echo ' fetch Message: ' .$e->getMessage();
    }
       
       finally{
           mysqli_close($con);
        }
 }


?>
</body>
</html>