<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // program for sum of  digits of a number.......
        function sum_of_digit(){
            $num1=15752;
        $sum1=0;
        while($num1!=0){
            $r1=$num1%10;
            $sum1=$sum1+$r1;
            $num1=$num1/10;
         
        }
        echo $sum1;
        }
        sum_of_digit();
        
        
        // Palindrome Number program.......
      function palindrome(){
        $num=121;
        $x=$num;
        $sum=0;
        while($num>0){
            $r=(int)$num%10; // for getting last digit of number
            $sum=$sum*10+$r;
            $num=intval($num/10);
        }
        
        if($sum==$x)
            echo '<br>number is palindrome';
        else{
            echo '<br>number is not a palindrome';
        }
      
      }
      palindrome();

      // Palindrome Number program.............................................
        function armstrong()
        {
            $armstrong_number=153;
        $copy_of_number=$armstrong_number;
        $sum_of_number=0;
        while($armstrong_number!=0){
            $last_digit=(int)$armstrong_number%10;
            $sum_of_number+=($last_digit*$last_digit*$last_digit);
            $armstrong_number=(int)$armstrong_number/10;
        }
        if($sum_of_number==$copy_of_number)
            echo '<br>number is armstrong';
        else
            echo '<br>not armstrong number';
        
        }
        armstrong();

        // program to find prime number...................
         function primeNumber($num)
        {
            $flag=0;
            for($i=2;$i<(int)$num/2;$i++){
                if($num%$i==0){
                    $flag=1;
                }
            }
            if($flag==0){
                echo "<br> Number is Prime";
            }
            else
            echo '<br> number is not prime';
        }
        primeNumber(19);

        // program to reverse a string...................
          function stringReverse()
         {
            $string="raghav";
            $arr1=str_split($string);
            print_r ($arr1);
            echo nl2br("\n");
            for ($i=5; $i>=0 ; $i--) { 
                echo $arr1[$i];
            }
         }
         stringReverse();
          function leapYear(){
              $year=1700;
              if(($year%4==0&&$year%100!=0)|| $year%400==0){
                  echo "<br> It's a leap year";
              }
              else
              echo "<br>not a leap year"; 
          }
         leapYear();
          function trianglePattern($row)
         { 
             echo "<br>";
             for($i=1;$i<=$row;$i++){
                 for($j=$i;$j<=$row;$j++){
                     echo "&nbsp";
                 }
                 for ($k=1; $k <=$i ; $k++) { 
                     echo "*";
                 }
                 echo nl2br("\n");
             }
         }
         trianglePattern(6);
          function trianglePatternReverse($n)
         {
            for ($i=1; $i<=$n ; $i++) { 
                
                for ($j=1; $j<=$i ; $j++) { 
                    echo "&nbsp";
                }
                for ($k=$n; $k>=$i ; $k--) { 
                   echo "*";
                }
                echo nl2br("\n");
            } 
        }
        trianglePatternReverse(6);
         // separating odd and even element from array.............
         function evenOddArray()
        {
            $arr=array(1,2,3,4,5,6,7,8,9);
            $arr1;$k=0;
            $arr2;$m=0;
            $len=sizeof($arr);
            echo $len;
            // printing array element.........only
            for ($i=0; $i<$len;$i++) { 
                echo $arr[$i]."<br>";
            }
             for ($i=0; $i<$len;$i++) { 
                if($arr[$i]%2==0){
                   $arr1[$k]=$arr[$i];
                }
                else{
                    $arr2[$m]=$arr[$i];
                }
                $k++;
                $m++;
             }
             echo "Even Array :<br>";
            print_r($arr1);
            echo "<br>Odd Array :<br>";
            print_r($arr2);
        }
        evenOddArray();
        echo "<br>";
        // difference between single and double quoted string.........
        $str='hii this is raghav';
        echo $str;
        echo '<br>Intro :$str';  // single quote does't process special characters.
        echo "<br>Intro :$str";
        echo "<br>string lenhth is :".strlen($str);
        echo nl2br("\n");
        $length=strlen($str);
        echo "string length is :".$length;
        echo "<br>".strrev($str)."<br>";
        echo str_replace("hii this ","my name ","hii this is raghav");
        ?>
    </body>
</html>
<!-- SELECT COUNT(d8) FROM `Attendance` WHERE d8='P' -->