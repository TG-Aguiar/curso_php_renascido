<?php




$conect = new PDO("sqlsrv: Database = db_php_7; server=localhost\SQLEXPRESS;ConnectionPooling=0" ,"root", ""); // conectado com sql server

$select = $conect->prepare("SELECT * FROM  tb_usuarios");

$select->execute();

$resultado = $select->fetchAll(PDO::FETCH_ASSOC);

var_dump($resultado);






?>