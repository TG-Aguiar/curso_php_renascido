<?php


//                        Escopo(  {} )

//   Escopo é o bloco de comado de começa com abrir de chaves '{' e fecha '}'.



//                        variavel global   


//São aquelas que pode ser acessada de qualquer do escopo, basta acrescenta o ' global ' antes da variável.


$sobrenome = "Sousa";


function escopo(){

    global $sobrenome ; // Assim pega a variável e o valor antes da função.

}

?>