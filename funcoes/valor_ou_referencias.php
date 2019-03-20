<?php

//                                     valores por paramentros ou referências.

$a = 50 ;

//                        Exemplo por paramêtros.


function Parametro( $a ){

    $a = 25;             

    return " $a";
}

echo $a ."<br>" ;  /// Mostrará 25 que é referente a variável $a fora da função.

echo Parametro( $a ) ;  //  /// Mostrará 50 que é referente a variável $a dentro da função.

/////////////////////////////////////////////////////////////////////////////////////////////////


//                           Exemplo por referência.

echo "<br>";

$b = 60 ;

function referencia( &$b){  // Ao coloca o '&' a função irá até o espaço da memoria e busca a variável.

    $b = 30;

    return " $b ";

}

echo referencia( $b);         //Mostrará  30 como dentro da variável.

echo $b;             //Não  mais mostrará 60 e sim 30 pois ao usa o " &" a função buscara ela na memória e mudaram.
                    // mas é preciso excutar a função primeiro.



  


?>