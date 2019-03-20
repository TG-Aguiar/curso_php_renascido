<?php


//                        Id de sessão.

//  Identificação única com o servidor.

session_start();

echo  session_id();

//session_regenerate_id(); gera um novo id.

//Caso queira recupera um sessão anterior peque um id e coloca dentro de ' session_id( )' antes de iniciar uma sessão.

?>