<?php


//              Manipulando strings.




$nome = "Tiago";

echo strtoupper( $nome); // Deixa tudo maiusculo.

echo strtolower( $nome); // Deixa tudo mninusculo.

echo ucwords( $nome); // Deixa primeira letra de cada palavra maiusculo.

echo ucfirst( $nome); // Deixa somente a primeira letra maiusculo.

//__________________________________________________________________________________________________


//                               str_replace()



$empresa = "Hcode";

$empresa2 = str_replace( "o", "y" , $empresa );  // Subsitui o ' o' por 'y'.

echo $empresa2 ; // Vai mostra Hcyde.

//_______________________________________________________________________________________________________

 
//                                  strpos()


$frase = "Eu nunca darei por convencido";


$q = strpos( $frase , "por");

var_dump( $q); // Mostrará a posição do valor passado.


//_______________________________________________________________________________________________________


//                                   substr()


$frase = "Eu nunca darei por convencido";

$parte = substr( $frase, 0 , 3 ); // Pega os valores da variável passada  de uma posição até outra.

echo $parte; //mostrará 'Eu".

//_____________________________________________________________________________________________________________

//                                    strlen()



//  Conta quantas posição até a variável.
                   





?>