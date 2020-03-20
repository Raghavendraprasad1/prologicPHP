
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        table{
            margin: auto;
        }
    </style>
</head>
<body>
    <form action="logincheck.php" method="POST" enctype="multipart/form-data" >
        <table>
            <caption>Admin Panel</caption>
            <tr>
                <td>Enter Username :</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Enter Password :</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
 
    
</body>
</html>