<?php


function soma ( int...$valores){

    return array_sum( $valores) ;
}

echo soma( 3,5);

echo soma( 5,7);
?>