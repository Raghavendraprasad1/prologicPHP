
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Class Example</title>
    </head>
    <body>
  <h1></h1>      
    </body>
    </html>
    <?php

    // class in php................(constructor)
    class Example{
        public $name;
        public  $city;
        
        public function __construct($name, $city)
        {      $this->name=$name;
               $this->city=$city;
        }
        public function get_Name()
        {
            return $this->name."".$this->city;
        }
        public function get_City()
        {
           return  $this->city;
        }
        // public function __destruct()
        // {
        //     echo "hii this is destructor";
        // }
        
    }
    $obj=new Example("raghav","varanasi");
    echo "<br> Name :".$obj->get_Name();
    echo "<br> City :".$obj->get_City();
    var_dump($obj instanceof Example);
   // new class..........................................
    class Employee {    
    Public $name;
    Public $position; 
  
    function __construct($name,$position) { 
        // This is initializing the class properties 
        $this->name=$name; 
        $this->position=$position;
    }      
    function show_details() 
    { 
        echo $this->name." : "; 
        echo "Your position is ".$this->position."\n"; 
    } 
}     
$employee_obj= new Employee("Rakesh","developer"); 
 $employee_obj->show_details(); 
      
// Access Modifier in php...............................................................
 $n1=3;
    class A1{
         public $n1=3;
         protected $n2=4;
         private $n3=5;
        function inside(){
            echo "<br>inside the class n1= :".$this->n1."  n2= :".$this->n2."  n3 =: ".$this->n3;
         }
    }
   
    class A2 extends A1{
        public function hm(){
            echo "<br> Inside the subclass n1= :".$this->n1."  n2= :".$this->n2."  n3 =: ".$this->n3;
        }
    }
    $a2=new A2();
    $a2->inside();
    $a2->hm();
    

    //  class A3{
         
    //      function fin(){
    //         echo "<br> outside the class n1= :".$n1;
           
    //     }
    // }
    // $a3=new A3();
    // $a3->fin();

    // alert box using php...................
     function alertFun($msg)
    {
        echo "<script> alert('$msg'); </script>";
    }
    alertFun("welcome to <br>this site");

    // to check optional parameter...........
    function optparameter($a,$b=0)
    {
        $c=$a+$b;
        return $c;
    }
     echo "<br> opt parameter :".optparameter(3);

    
    
   
?>