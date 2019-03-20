<?php

//           Operadores de atribuição


$nome = "Tiago";    // Quando tem um sinal de ' = ' na frente da variável siginica recebendo um valor.

$nome.= "Sousa";    // Significa mantém valor anterio mas o que recebe no  momento.



//////////////////////////////////////////////////////////////////////////////////////////////////////////


//              Operadores aritmédicos



//                   Adição ' +' .

$a = 2;
$b = 3;

$c = $a + $b ;  

// A variável $c vale 5.

//_____________________________________________________________________________________________________

//                   Subtração ' - ' .
$a = 5;
$b = 3;

$c = $a - $b ;  

// A variável $c vale 2 .

//_____________________________________________________________________________________________________

//                   Multiplicação ' * ' .
$a = 5;
$b = 3;

$c = $a * $b ;  

// A variável $c vale 15 .

//_____________________________________________________________________________________________________



//                   Divisão ' / ' .
$a = 6;
$b = 3;

$c = $a / $b ;  

// A variável $c vale 2 .

//_____________________________________________________________________________________________________


////////////////////////////////////////////////////////////////////////////////////////////////////////


//                    Operadores de comparação


$a = 6;
$b = 3;

     $a > $b;    //   A variável $a é maior que $b.




$a = 6;
$b = 3;

   $a < $b;    //   A variável $b é maior que $a.


$a = 4;
$b = 6;

  $a = $b;   //     A variável $a recebera o valor  que  está $b.


$a = 4;
$b = 6;


    $a == $b;   //     A variável $a  $b  possui o mesmo valor.

    $a === $b ; //     Esse modo mostra que são identicos no valor e no tipo.

    $a != $b ;   //    Mostra que $a e diferente de $b no valor.

    $a !== $b ;   //    Mostra que $a e diferente de $b no valor e tipo.


    /////////////////////////////////////////////////////////////////////////////////////////////////////

    //                   SpaceChip ( <=>)


    $a = 50;
    $b = 60;

    //         1   0   -1
     var_dump( $a <=> $b );

    /*
    
    Compara com os resultado ( 1, 0, -1), pergunta quem é maior? ai compara a função , si $a for maior
    o resultado é 1 mas si for $b é -1 mas si for igual o resultado é 0.
    

    */
    

    /////////////////////////////////////////////////////////////////////////////////////////////////////


    //                        null coalescing

$a = null ;
$b = null ;
$c = 10 ;

echo $a ?? $b ?? $c ;

//Será imprimido 10.

// Funciona assim o php vai procura um valor e onde encontra vazio e passa para o próximo nesse
// caso o $c .


///////////////////////////////////////////////////////////////////////////////////////////////////////////

//                              Bolleano( treu , false)


$a = 10;
$b = 12 ;

echo $a < $b;

//   Mostrará true "verdadeiro" pois $b é maior que $a.


//______________________________________________________________________________________________________


$a = 20;
$b = 12 ;

echo $a < $b;

//   Mostrará false "falso" pois $b é menor que $a.

$a = 10;
$b = 10 ;

echo $a == $b;

//   Mostrará true "verdadeiro" pois $b e $a tem o mesmo valor .


//______________________________________________________________________________________________________



$a = 10;
$b = 10 ;

echo $a != $b;

//   Mostrará false "falso" pois $b  $a tem o mesmo valor.


//______________________________________________________________________________________________________








?>


