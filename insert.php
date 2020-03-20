<?php
$con=mysqli_connect("localhost","root","mohali","collegeproject");
            if($con==false){
                echo "connection failed";
            }
        
            $fname=$_POST['fname'];
            $email=$_POST['email'];
            $contact=$_POST['contact'];
            
            $qry="INSERT INTO temp ( fname, email, contact) VALUES ('$fname','$email','$contact')";

            $run=mysqli_query($con,$qry);
            

            if($run){
                
                echo "data inserted successfully"; 
            

                
            }
            
            


    ?>