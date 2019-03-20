<?php

   $conect = new PDO("mysql:dbname=db_php_7; host = localhost", "root","");

   $insert = $conect->prepare("UPDATE  tb_usuarios SET deslogin = :deslogin WHERE deslogin = 'banco'");

   $deslogin = "USER01";
   $dessenha = "PASS";

   $insert->bindparam(":deslogin",$deslogin);
   //$insert->bindparam(":dessenha",$dessenha);

   $insert->execute();

?>