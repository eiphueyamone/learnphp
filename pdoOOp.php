<?php
class Database{
    public function dbconnect(){
try{
    $pdo=new PDO("mysql:host=localhost;dbname=school","root","");
    echo "Database connect successful";
    

}catch(PDOException $e){
    echo "<pre/>";
    die(var_dump($e->getMessage()));
}catch(Exception $e){
    die(var_dump($e->getMessage()));
}
    }
}
$db=new Database();
return $db;
?>