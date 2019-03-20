
<?php

class Pessoa{

  public $nome; // atributo

  public function falar(){

    return "Qual seu nome".$this->nome ;   /*" O return mostra um função propriamente dita ,
                                            o (.) concatenar a string com ( $this-> ) que
                                            chama a atributo ( $nome ) sem o ( $ ) */
             
      
  }

}

$tiago = new Pessoa(); // Instânciado a classe Pessoa e criamos um objeto com nome Tiago . 

$tiago->nome = "Tiago Sousa Aguiar"; //o atributo $nome e preechendo com  valor .

echo $tiago->falar();



?>