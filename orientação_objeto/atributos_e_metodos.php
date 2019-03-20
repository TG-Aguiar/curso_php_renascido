<?php

class carro{

    private $modelo;
    private $motor;
    private $cor;

    public function getModelo(){    //pegar o atributo

       return $this->modelo;

    }

    public function setModelo($modelo){  //modificar o atributo

        $this->modelo=$modelo;

    }


    public function getMotor(){

        return $this->motor;

    }

    public function setMotor($var){

        $this->motor=$var;
    }

    public function getCor(){

        return $this->cor;

    }

    public function setCor( $var2){

        $this->cor = $var2;
    }

    public function exibir(){

        return array(     // Array mostra todas informações das funções.

            "modelo"=>$this->getModelo(), // Atributo $modelo recebe valor da função getModelo;
            "cor"=>$this->getCor(),
            "motor"=>$this->getMotor()
        );

    }


}


$gol = new carro();            //  Instânciando a classe carro e criando objeto $gol.
$gol->setModelo("Gol Gt");     //  A função setModelo recebendo valores.
$gol->setCor("Azul");
$gol->setMotor("1.6");

var_dump( $gol->exibir());



?>