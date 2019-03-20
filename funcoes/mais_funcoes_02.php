<?php


function soma ( int...$valores):string {  // O ' Int...'  espefica tipo de dado entrado.
                                        // O " : " espefica qual o retorno

    return array_sum( $valores) ;
}

echo soma( 3,5);

echo soma( 5,7);
?>