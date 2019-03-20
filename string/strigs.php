<?php

//                        Diferença entre aspas simples ( ' ') e dupla ( " ");


$nome = " Tiago" ;


//Exemplo com aspas simples.


echo ' Meu nome é $nome ' ; 

// Vai mostra : Meu nome é $nome . 

//Pois com aspas simples é preciso usa o ( . ) com a variável pra concatenar ( .$nome).

//_________________________________________________________________________________________________________


echo " Meu nome é $nome " ; 

// Vai mostra : Meu nome é Tiago . 
//Pois com aspas dupla não é preciso usa o ( . ) com a variável pra concatenar .
// Isso si chama Interpolação de variáveis que o PHP possuí.


/////////////////////////////////////////////////////////////////////////////////////////////////////////







?>