<?php

function ola( $nome){


    return " ola $nome <br> ";    // Aqui usamos interpolação com uma variável.
}


echo ola("Tiago");    // chamamos com echo e passa a função com string que na função usa variável.

echo ola( "Sousa");

?>