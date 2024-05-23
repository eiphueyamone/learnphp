<?php
// //class
// class Ei
// {
  
//     public function greet(){
//         echo"hello from ei";
//     }
// }
// $Ei=new Ei();//object
// $Ei->greet();

// class John{
//     public function greet(){
//         echo"hello from john";
//     }
// }
// $John=new John();
// $John->greet();
class Student
{
    public $name="John";
    public $age=20;
    public $major="CS";
    public function greet(){
        echo "Hello ";
    }
    public function info(){
        echo "Hello from info";
        echo $this->greet();
        echo $this->name."-".$this->age."-".$this->major;
    }

}
$student=new Student();
echo $student->info();
echo $student->name;
?>
