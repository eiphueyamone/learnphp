<?php
 require_once "controller.php";

 $db=new Database();
 $db->connect();
//  $db->create("psk","psk@gamil.com","male","1999-01-01",27);
// $db->read();
 //$db->edit(16);
 //$db->update(26,"Admin","admin@gmail.com");
 $db->delete(25);
  ?>