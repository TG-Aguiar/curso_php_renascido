<?php


$conect = new PDO("mysql:dbname=db_php_7; host = localhost", "root","");

//$conect->beginTransaction();

$delete = $conect->prepare("DELETE FROM tb_usuarios  WHERE deslogin = 'USER4'");

 
 

$delete->execute();

//$conect->rollback();


?>