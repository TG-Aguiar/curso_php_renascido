<?php

$grupo = array(

 array( "A" => 'Vasco, flamengo,Bota-fogo,Fluminense'),

 array("B"=>'Palmeira, Santos , São Paulo, Aldax'),

);

print_r( $grupo);

echo"<br>";

echo json_encode( $grupo, true);


?>