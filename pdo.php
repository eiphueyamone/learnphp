<?php
//php.ini
//phpinfo();
//host
//database
//user
//password
//die(var_dump("hello world"));
//dd();
try{
    $pdo=new PDO("mysql:host=localhost;dbname=school","root","");
    echo "Database connect successful";
    die(var_dump($pdo));

}catch(PDOException $e){
    echo "<pre/>";
    var_dump($e->getMessage());
}catch(Exception $e){
    var_dump($e->getMessage());
}
//mysql select * form student;
//die
?>