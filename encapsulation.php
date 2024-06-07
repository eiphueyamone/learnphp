<?php
class Doctor{
    private $age=32;
    private $name="John Doe";
    // public function __construct($name,$age)
    // {
    //     $this->name=$name;
    //     $this->age=$age;
    // }
    public function getName()
    {
    return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
    public function setName($name)
    {
    return $this->name=$name;
    }

}
// $student=new Doctor();
// $student->name="mg mg";
// $student->age=20;
// echo $student->name;
// echo $student->age;
$student=new Doctor();
$result=$student ->setName("Phue");
echo $result;

$age=$student ->getAge();
echo $age;
// var_dump($student);
// $student->name="hta hta";
// echo $student->name;
?>