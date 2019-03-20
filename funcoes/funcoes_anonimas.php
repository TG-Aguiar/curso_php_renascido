<?php


//              Funções anônimas

//    Não tem " nome" neim  " return".


function teste( $callback){


    $callback();

}

teste( function (){    // Ao chama só chamamos a função principal , mas e que está dentro escopo nãp precisa passa o nome.

    echo " mensagem";
    
});


?>