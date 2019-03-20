<?php


    spl_autoload_register( function($var){ // Procura a classe e armazena.

        $pasta = "class";

        $file_name = $pasta . DIRECTORY_SEPARATOR . $var . ".php";
     
        if(file_exists( $file_name)){

            require ("$file_name");
        }






    });

?>