<?php

$suaidade = 30;

$idadecrianca = 12;

$idadeadulto = 20;

$idademelhor = 60;




if( $suaidade < $idadecrianca ){

    echo " criança";
}

elseif ( $suaidade > $idademelhor ){

   echo  " você  está na melhor idade";
}

elseif( $suaidade <=> $idadeadulto ){

    echo " você é um adulto." ;
}


else{

    echo " não é criança";

    echo " neim está na melhor idade" ;
}


// Pode usa também o metódo Tenário.


$a = 10 ;

$b = 5 ;

// (  $a < $b  ) ? "caso a condição for verdadeira vai executar aqui" : "si não vai executar aqui";

// ( ? if) ( : else)


?>