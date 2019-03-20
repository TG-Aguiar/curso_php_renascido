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
  
   public function questionario(){

       return array(

        "nome"=>$this->nome,
        "sexo"=>$this->sexo,
        "status"=>$this->getStatus(),
        "idade"=>$this->getIdade()


       );

   }


}

$candtidado_01 = new canditado;

$candtidado_01 ->nome = "Tiago";
$candtidado_01->sexo = "Masculino";

$candtidado_01->setStatus("solteiro");
$candtidado_01->setIdade("29");

print_r( $candtidado_01->questionario() );


 ?>