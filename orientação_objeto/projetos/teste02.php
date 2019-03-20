<?php
   


   class pessoas{



            public $nome;
            public $idade;

            private $status;


            public function getStatus(){

                return $this->status;

            }

            public function setStatus( $var_status){

                $this->status=$var_status;

            }


            public function messangem(){


                return array(
                     
                    "nome"=>$this->nome,
                    "status"=>$this->getStatus()

                );
            }


}


$pessoa01 = new pessoas;

$pessoa01->nome="Tiago";

$pessoa01->idade=29;

$pessoa01->setStatus("solyteiro");


print_r($pessoa01->messangem()  );

?>