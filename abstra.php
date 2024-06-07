<?php

abstract class Student
{
    // public $name="mg mg";
    // public $age=20;
    public abstract function data();
    
    public function greet(){
        echo"test";
    }

}
class StudentInfo extends Student{
    public function data(){
        echo "Hello world";
    }
    public function info()
    {
        // echo $this->name,",",$this->age;
        $this->data();
    }
}
$studentinfo=new StudentInfo();
echo $studentinfo->info();