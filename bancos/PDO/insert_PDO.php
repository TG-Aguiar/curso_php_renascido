<?php

   $conect = new PDO("mysql:dbname=db_php_7; host = localhost", "root","");

   $insert = $conect->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values (:deslogin,:dessenha)");

   $deslogin = "USER4";
   $dessenha = "PASS";

   $insert->bindparam(":deslogin",$deslogin);
   $insert->bindparam(":dessenha",$dessenha);

   $insert->execute();

?>