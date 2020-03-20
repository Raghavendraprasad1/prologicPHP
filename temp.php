
 <?php  require('linkfile.php'); 
 $id=base64_decode(urldecode($_GET['id']));
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All operation</title>
    <style>
        table{
            margin: auto;}
    </style>
    
</head>
<body>
<form  method="POST" enctype="multipart/form-data" action="linkfile.php?id=<?php 
               echo urlencode(base64_encode($id));?>" >
     <table style="width: 35%">
        <?php
            
            if(!empty($_GET['id'])){
                ?>
                <caption  style="font-size: 30px"><u>Update Detail</u></caption>
                <?php
            }
            else{
                ?>
                <caption  style="font-size: 30px"><u>Insert Detail</u></caption>
                <?php
            }
        ?>
        <tr>
        <td>Name :</td>
        <td><input type="text" name="fname" value="<?php echo $fname; ?>"></td> </tr>
        <tr>
        <td>Email-Id :</td>
        <td><input type="text" name="email" value="<?php echo $email; ?>"></td> </tr>
        <tr>
        <td>Select your gender :</td>
        <td><input type="radio" name="gender" value="male" <?php echo $malegender; ?>> Male

        <input type="radio" name="gender" value="female" <?php echo $femalegender; ?> > Female</td> </tr>
        <tr>
        <td>Contact :</td>
        <td><input type="text" name="contact" minlength="10" value="<?php echo $contact; ?>"></td> </tr>
        <tr>
        <td>Choose Your Interest :</td>
           <td><input type="checkbox" name="coding" value="coding" <?php echo $codingshow; ?> >Coding 
            <input type="checkbox" name="music" value="music" <?php echo $musicshow; ?> >Music 
            <input type="checkbox" name="study" value="study" <?php echo $studyshow; ?> >Study 
            <input type="checkbox" name="sport" value="sport" <?php echo $sportshow; ?> >sport </td> 
        </tr>
        <tr>
            <td>Known Language :</td>
            <td> <select name="lang[]" multiple >
                <option value="java" <?php echo $javashow; ?> >JAVA</option>
                <option value="php" <?php echo $phpshow; ?> >PHP</option>
                <option value="python" <?php echo $pythonshow; ?> >PYTHON</option>
                <option value="javascript" <?php echo $javascriptshow; ?> >JAVASCRIPT</option>
            </select> </td> 
        </tr>
            <tr>
        <td>Upload Your Photo :</td>
        <td><input type="file" name="photo"></td>
        <td><img src="./dataimg/<?php echo $photo;?>" style="max-width: 100px;"  /></td> </tr>
        <tr>
        <td><input type="submit" name="<?php
        
        if(!empty($_GET['id'])){
            echo "update";
        }
        else{
            echo "save"; 
            
                }
        ?>" value="<?php
        
        if(!empty($_GET['id'])){
            echo "update";
        }
        else{
            echo "save"; 
                }
        ?>
        "></td> </tr>
     </table>
</form>
</body>
</html>

            
   