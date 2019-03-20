<?php


$pessoas = array();

array_push( $pessoas , array(
    
    'nome'=> 'Tiago',
    'idade'=>30

));

array_push( $pessoas , array(

    'nome'=> 'Sousa',
    'idade'=> 30

)) ; 

echo json_encode( $pessoas); // json_encode 

?>