<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
</head>
<body>
    <?php
    $id=base64_decode(urldecode($_GET['id']));
    ?>
</body>
</html>
<script>
    var result= confirm("do you want to delete this id");
    if(result){
        window.location.href = "deletefile.php?id= <?php echo urlencode(base64_encode($id));?>";
    }
    else{
        alert("Data not Deleted");
        window.location.href="tempshowdata.php";
    }
</script>