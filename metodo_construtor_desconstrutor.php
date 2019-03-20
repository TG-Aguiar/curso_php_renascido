<?php

class construtor{


    public function  __construct(){

        return "teste";
    }
}

$construtor = new construtor;

var_dump( $construtor() );

?>