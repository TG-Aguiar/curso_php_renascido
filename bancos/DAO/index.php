<?php

require_once("config.php"); // chama o arquivo que busca as classes.

$sql = new sql();   // Chama a classe encontrada.

$lista = $sql->select("SELECT * FROM  tb_usuarios");

echo json_encode($lista);


?>