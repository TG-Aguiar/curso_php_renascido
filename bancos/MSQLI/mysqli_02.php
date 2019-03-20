<?php


$conect = new mysqli("localhost","root","","db_php_7");

if($conect->connect_error){  //Verificar si existe algum erro na conexão.

    echo "ERRO".$conect->connect_error;
}

else {

$consulta = $conect->query("SELECT * FROM tb_usuarios ORDER BY  deslogin");   //  Pega as informações de uma tabela do banco.


   while( $linhas = $consulta->fetch_array()){       // Pega as informações quem do banco de dados e joga em um variavel.
       
    //                              ou
   //               fetch_assoc() o parametro nos paresteses traz informações sem os indices.

    var_dump($linhas);

   } 

}


?>



