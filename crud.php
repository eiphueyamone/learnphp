<?php
create();
read();
edit(2);
update();
delete();
function create(){


try{
    $pdo=new PDO("mysql:host=localhost;dbname=school","root","");
    echo "Database connect successful";
    $statement=$pdo->query("insert into `student`(`name`,`email`,`gender`,`dob`,`age`)
    values ('Ei','eiphue@gmail.com','femal','2002-2-23',23),
    ('yamone','yamone@gmail.com','femal','2002-4-23',33),
    ('EiPHue','ei@gmail.com','femal','2002-2-13',100)");
echo "Data Create successful";
}catch(PDOException $e){
    echo "<pre/>";
    die(var_dump($e->getMessage()));
}catch(Exception $e){
    die(var_dump($e->getMessage()));
}
}
function read(){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=school","root","");
        //echo "Database connect successful";
        $statement=$pdo->query("select * from student");
        $students=$statement->fetchAll(PDO::FETCH_ASSOC);

        foreach($students as $student){
            echo"<pre/>";
            echo $student['name']."-".$student['email'];
//for fetch_obj-->
//echo $student->name."-".$student->email;

        }
    echo "Data Create successful";
    }catch(PDOException $e){
        echo "<pre/>";
        die(var_dump($e->getMessage()));
    }catch(Exception $e){
        die(var_dump($e->getMessage()));
    }
   
}
function edit($id){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=school","root","");
        //echo "Database connect successful";
        $statement=$pdo->query("select * from student where 'id'=$id");
        $student=$statement->fetch(PDO::FETCH_ASSOC);
if($student){
    var_dump($student);
    echo "Edit Successful";
}else{
    echo "failed";
}
        
    
    }catch(PDOException $e){
        echo "<pre/>";
        die(var_dump($e->getMessage()));
    }catch(Exception $e){
        die(var_dump($e->getMessage()));
    }
   
}

//update
function update(){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=school","root","");
        //echo "Database connect successful";
        $statement=$pdo->query("update `student` set `email`='mya@gmail.com' where id='2'");
        //$student=$statement->fetch(PDO::FETCH_ASSOC);
if($statement){
    var_dump($statement);
    echo "delect Successful";
}else{
    echo "failed";
}
        
    
    }catch(PDOException $e){
        echo "<pre/>";
        die(var_dump($e->getMessage()));
    }catch(Exception $e){
        die(var_dump($e->getMessage()));
    }
   
}

//delete
function delete(){
    try{
        $pdo=new PDO("mysql:host=localhost;dbname=school","root","");
        //echo "Database connect successful";
        $statement=$pdo->query("delete from `student` where id='3';");
        //$student=$statement->fetch(PDO::FETCH_ASSOC);
if($statement){
    var_dump($statement);
    echo "Update Successful";
}else{
    echo "failed";
}
        
    
    }catch(PDOException $e){
        echo "<pre/>";
        die(var_dump($e->getMessage()));
    }catch(Exception $e){
        die(var_dump($e->getMessage()));
    }
   
}

?>