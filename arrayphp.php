<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in php</title>
</head>
<body>
    
</body>
</html>
<?php
        // array example................................

        // 1-D array..............................
        $cars=array("Volvo","BMW","Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

        // associative array.............
        $age=array("Peter"=>35,"Ben"=>37,"Joe"=>58);
        echo "Peter is " . $age['Peter'] . " years old.";
        $arrlength=count($age);
        echo $arrlength;
        foreach($age as $key=>$value){
             echo "<br>".$key."= ".$value;
        }
        // multidimensional....................
        $team=array(
            array("india","pak"),
            array("china","bangla"),
            array(
                array("srilanka","bhutan"),
                array("japan","austria")
            )
            );
            echo "<br>".$team[1][0]." ...".$team[2][1][0];

            /* The array_combine() function creates an array by using the elements from one "keys"
             array and one "values" array.
             Both arrays must have equal number of elements! */
             $a="raghav";
             $b="modanwal";
             $c="varanasi";
             echo $a,$b,$c;
             print_r($a);
             // $_SERVER used to hold info about header(servername, hostname,pagename,ipaddress),path,script location etc.
             echo "<br>".$_SERVER['HTTP_USER_AGENT'];
             echo nl2br("\n");
             echo $_SERVER['PHP_SELF'];  // to see page-name from url
             // $_REQUEST is  used to collect data after submitting an HTML form.
              echo ("<br>next...........................................................");
             // funtion to return array ;
             echo nl2br("\n");
              function returnArray()
             {
                 $country=array("india","china","nepal");
                 return $country;
                
             }
            print_r(returnArray());

            // function to return Object...............
            class ABC{
                public $team=4;
                 
           } 
            function returnObject(){
                $abc=new ABC();
                return $abc;
            }
           
            $addr=returnObject();
            echo "<br> after returning object :".$addr->team;
            echo nl2br("\n....................................................");
            //$ip_address = "192.168.1.1/24";
            $ipaddr= $_SERVER["https://www.w3schools.com/"]; 
            echo "<br>. php self :". $ipaddr;
            $var = preg_split("#/#", $ipaddr); 
            $page=basename("https://www.w3schools.com/");
            echo "<br> page name :".$page;
            
            //print_r($var);
            $len=count($var);
            echo "<br>".$var[$len-1];
            echo nl2br("\n");
            $result = preg_split("/[\s,]+/", "Geeks for Geeks"); 
            print_r($result);
            echo nl2br("\n");
            $string = "!!! (( !!)) 00000000Geeks for Geeks"; 
            
            // The characters '!', '(', ')', ' ' have  
            // been specified to remove from the 
            // beginning of the string 
            echo ltrim($string, "! () 0"); 
          
            $a1=5;
            $a2=6;
            $arr=[$a1,$a2];
            $str="";
            $str=$str.$arr[0];
            echo $str;
            
 ?>
 













