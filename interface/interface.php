<?php

interface veiculo{



    public function Acelerar($a);
    public function Freiar($a);
    public function TrocaMarchar($m);
}

class Gol implements veiculo{

  
    
    public function Acelerar($a){
 
         if( $a>0){

            echo"Acelerando";
         }

         else{

            echo "parado";

         }
     

    }

    public function Freiar($a){


    }

    public function TrocaMarchar($m){

        if($m=0){

            $m = 10;


        }

        else if($m)



    }


}

$Gol_2018 = new Gol();

var_dump($Gol_2018->Acelerar(0));


?>