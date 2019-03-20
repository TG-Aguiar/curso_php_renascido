<?php

class sql extends PDO{   // A classe sql vai henda tudo que tive no PDO que é nativa do PHP.

    private $con;

    public function __construct(){     // Assim acontecera automatico a conexão com o banco.

         $this->con = new PDO("mysql:dbname=db_php_7;host=localhost","root","");
          

    }

    public function setParams( $statment, $parameters = array()){

        foreach( $parameters as $key => $value){

             $this->setParam($key,$value);

        }

    }

    
    public function setParam( $statment, $key,$value){

        $statment ->bindParam($key,$value);

        
    }

    public function query( $rawQuery,$params = array()){

        $stmt = $this->con->prepare($rawQuery);

        $this->setParams($stmt,$params);

        $stmt->EXECUTE();

        return $stmt;

    }


    
    public function select($rawQuery,$params = array()){
    

        $stmt = $this->QUERY($rawQuery,$params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>