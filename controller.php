<?php

class Database 
{
    public function connect(){
        try{
            $pdo=new PDO("mysql:host=localhost;dbname=school","root","");
         return $pdo;
        }catch(PDOException $e){
            echo "<pre/>";
            die(var_dump($e->getMessage()));
        }catch(Exception $e){
            die(var_dump($e->getMessage()));
        }
    }
    public function create($name , $email , $gender , $dob,$age)
    {
        $pdo=$this->connect();
        $newstudent=$pdo->query("insert into `student`(`name`,`email`,`gender`,`dob`,`age`)
    values ('Ei','eiphue@gmail.com','femal','2002-2-23',23),
    ('yamone','yamone@gmail.com','femal','2002-4-23',33),
    ('$name','$email','$gender','$dob',$age)");
    if($newstudent){
        echo "new student create successful";
    }
    }
    public function read()
    {
        $pdo=$this->connect();
        $statement=$pdo->query("select * from student");
        $students=$statement->fetchAll(PDO::FETCH_OBJ);
        

        foreach($students as $student){
            echo"<pre/>";
            echo $student->name ." ".$student->email." ".$student->gender." ".$student->dob." ".$student->age."<br>";

      
    }
    
//     foreach($students as $student){
//         echo"<pre/>";
//         echo $student['name']."-".$student['email'];
// //for fetch_obj-->
// //echo $student->name."-".$student->email;

//     }
}
public function edit($id)
{
    $pdo=$this->connect();
    $statement=$pdo->query("select * from student where 'id'=$id");
    $student=$statement->fetch(PDO::FETCH_OBJ);
die (var_dump($student));
//echo $student->id." ". $student->name ." ".$student->email." ".$student->gender." ".$student->dob." ".$student->age."<br>";
}
public function update($id,$name,$email)
{
    $pdo=$this->connect(); 
    $statement=$pdo->query("update `student` set`name`='$name', `email`='$email' where id=$id");
        //$student=$statement->fetch(PDO::FETCH_ASSOC);
if($statement){
   
    echo "update Successful";
}else{
    echo "failed";
} 
}
public function delete($id)
{
    $pdo=$this->connect(); 
    $statement=$pdo->query("delete from `student` where id=$id");
    //$student=$statement->fetch(PDO::FETCH_ASSOC);
if($statement){

echo "delete Successful";
}

}
}