<?php

$conect = new mysqli("localhost","root","","db_php_7");

if($conect->connect_error){  //Verificar si existe algum erro na conexão.

    echo "ERRO".$conect->connect_error;
}

else {

    $insert = $conect->prepare("insert into  tb_usuarios  (deslogin,dessenha) values(?,?)");

     $user = "BD";
     $senha = "1234";

    $insert->bind_param("ss",$user,$senha);

    $insert->execute();


    $user = "banco";  // irá adicionar novos valores no banco de dados.
    $senha = "1234";

    $insert->execute();

} 


?>