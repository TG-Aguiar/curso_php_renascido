<?php


    spl_autoload_register( function($var){ // Procura a classe e armazena.

        $file_name = $var . ".php";
     
        if(file_exists( $file_name)){

            require ("$file_name");
        }






    });

?>