<?php


//                     Tipos primitivos.

$nome = "Tiago" ;//String.

$idade = 29 ; //inteiro.

$salario = 0.0 ; //float .

$solteiro = true ; //booreana.

//////////////////////////////////////////////////////////////////////////////////

//                        Tipos Composto.

$frutas = array("banana","maça","laranja");

//var_dump( $frutas);

/////////////////////////////////////////////////////////////////////////////////

//                       Tipo objeto.


$objeto = new DateTime();

//echo $objeto;

//var_dump($objeto);

//                        Tipo resource

$arquivo = fopen("exemplo_01.php" , "r");

//var_dump( $arquivo );


///////////////////////////////////////////////////////////////////////////////////

//                         Tipo nulo.


$vacuo = NULL;   // Não ocupa espaço na memória.

$oxigenio = "" ; // Ocupa uma espaço vazio na memória mas não tem valor.


///////////////////////////////////////////////////////////////////////////////////////


//                       variávies pré-definidas.

// São variáveis que já vem com funções do próprio PHP.

$nome = $_GET['nome'];
                         
$_SERVER['REMOTE_ADDR']



//                        variavel global   


//São aquelas que pode ser acessada de qualquer do arquivo, basta acrescenta o ' global ' antes da variável.


Global $nome = "Tiago";


//    ou 



$sobrenome = "Sousa";

function escopo(){

    global $sobrenome ; // Assim pega a variável e o valor antes da função.
}








   

?>