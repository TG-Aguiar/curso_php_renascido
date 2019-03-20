<?php

class construtor{

    private $nome;
    private $idade;
    private $sexo;

     
    public function  __construct($n,$i,$s){

       
        $this->nome=$n;
        $this->idade=$i;
        $this->sexo=$s;
    }

    public function __toString(){ //Metodo transforma os dados pra usa como string.
        return $this->nome;
    }
}

$construtor = new construtor("Tiago",29,"M"); // Devido ao metodo construtor.

var_dump( $construtor );   // Devido ao metodo construtor.

echo $construtor; // Devido ao toString.

?>