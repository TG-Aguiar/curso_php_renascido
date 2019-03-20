<?php

function __autoload($var){ // Chama as classe fora do arquivo .

    require_once("$var.php");   // chama as classes fora do arquivo.

    var_dump( $var);

    
}


$Gol = new carro();


$Tiago = new pessoa();

echo $Tiago->Apresentacao("Tiago","29");





?>