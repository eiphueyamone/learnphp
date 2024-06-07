<?php
class People
{
    public $name="Ji Ji";
    public function read(){
    echo "This is Read Method";
    }
    public function play(){
        echo "This is Play Method";
        }
        public function rest(){
            echo "This is Rest Method";
            }

}
class Unistudent extends People{
    
                public function game(){
                    echo "This is game Method";
                    }
}
$student = new People();
echo $student->name;

?>