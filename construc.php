<?php
class Teacher
{
    public function __construct()
    {
        echo "This is from constructor";
    }
public function read()
{
    echo "This from read method";
}
}
$student=new Teacher();
$student->read();
?>