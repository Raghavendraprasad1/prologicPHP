
<!DOCTYPE html>
<?php 
      /* program to print ip address */

      if (!empty($_SERVER['HTTP_CLIENT_IP']))   
      {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
      }
      //whether ip is from proxy
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
      {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
      //whether ip is from remote address
      else
      {
        $ip_address = $_SERVER['REMOTE_ADDR'];
      }
      echo $ip_address;

      /** pogram to set cookies..........................................**/
      $cookie_name="user";
      $cookie_value="raghu";
      
      setcookie($cookie_name,$cookie_value, time() + (86400 * 30),"/");
      setcookie("age","36",time()+3600,"/","",0);
      // setcookie("ipaddress",$ip_address,time()+3600,"/","",0);
      setcookie("ipaddress","",time()-3600,"/","",0);     // delete ip address from cookies



      /** program to delete cookie.......................................... **/
      //setcookie("user", "raghav", time() - 3600);
      ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
<?php
  

      if(!isset($_COOKIE[$cookie_name])){
        echo "cookie is not set";
      }
      else {
          
            echo "cookie :".$cookie_name."is set ! <br>";
            echo "value is :".$_COOKIE[$cookie_name];
      }
    echo "<br>".$_COOKIE["age"];
    //echo "<br>".$_COOKIE["ipaddress"];

    //echo "Cookie 'user' is deleted.";

    /** program to check whether cookie is enabled or not **/
    if(count($_COOKIE)>0){
        echo "cookie is enabled";
    }
    else{
        echo "cookie is disabled";
    }
?>
    
</body>
</html>