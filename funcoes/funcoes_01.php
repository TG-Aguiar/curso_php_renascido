<?php

//                         Funções.

//    Funções com " return" ela é propriamente dita, quando não tem ela é uma sub-rotina.

/*

                   Exemplo de uma função sub-rotina.


    
function ola(){


    echo " olá mundo!!! " ;
}


ola();
ola();

//////////////////////////////////////////////////////////////////////////////////////////////////////

*/


//                            Exemplo fr função propriamente dita

function ola(){


    return " olá mundo!!! " ;
} 


 //echo ola();

//Principal diferença entre função com " return " e que assim podemos chama a função sem mostra na tela deixando abstrato.

$frase = ola();

echo strlen( $frase );    // Funções com " return " podemos fazer coias ou seja assim ganhamos libertade.
                        // Aqui colocamos informações da função dentro de uma variável ,e depois contamos quantos caracter ela possui.

?>




