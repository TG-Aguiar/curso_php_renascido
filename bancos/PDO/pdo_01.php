<?php

$conect = new PDO("mysql:dbname=db_php_7; host=localhost" ,"root", "");

$select = $conect->prepare("SELECT * FROM  tb_usuarios");

$select->execute();

$resultado = $select->fetchAll(PDO::FETCH_ASSOC);

var_dump($resultado);



?>