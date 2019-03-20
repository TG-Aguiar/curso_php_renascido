<?php

 class canditado{

   public $nome;
   public $sexo;

   private $status;
   private $idade;


   public function getStatus(){

       return $this->status;
   }

   public function setStatus( $valor_status){

       $this->status = $valor_status;


   }

   public function getIdade(){

       return $this->idade;

   }

   public function setIdade( $valor_idade){

       $this->idade = $valor_idade;

   }

}

?>