<?php
$role="user";
try{
if($role == "admin"){
    echo "login successful";

}elseif($role !== "user"){
    throw new Exception("Access Denied!",403);
}else{
    throw new Exception("login failde",404);

}
}catch(Exception $e){
    echo $e->getCode()."Access Denied";

}