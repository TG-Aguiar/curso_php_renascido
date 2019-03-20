<?php


abstract class Animal{

     public function Falar(){

        return"som";

     }

     public function Mover(){

        return"andar";


     }


}

class gato extends Animal{

  

   
}

$felix = new gato();

echo $felix->Falar();

?>