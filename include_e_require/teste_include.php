<?php


//                            include;

include "func_somar.php"; //Faz um conexão com outra página e traz suas propriedades.


$resultado = somar(5, 7);

echo $resultado;



//______________________________________________________________________________________________
 

//                               Requeri

require "func_somar.php"; //Faz um conexão com outra página e traz suas propriedades.


$resultado = somar(5, 7);

echo $resultado;


/* 

    Aparentemente o require e o include são parecido porém o require obriga que o arquivo requerido 
    exista e esteja funcionando corretamente.

*/


/*  

    Podemos usa também 'include_once' e 'require_once' , para caso chamos o mesmo arquivo ou outra página
    com um mesmo contéudo evitando conflito.

*/
?>