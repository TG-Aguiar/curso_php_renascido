<?php


class pessoa{

    public $nome;

    private $status;



    public function getStatus(){

        return $this->status;
    }

    public function setStatus( $var_status){


         $this->status=$var_status;


    }

    public static function chama($a){

        
      return  "ola  ".$a;
              
               
       

    }


}

print_r( pessoa::chama("sousa") );


?>