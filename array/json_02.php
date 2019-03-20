<?php

$json = '[{"nome":"Tiago","idade":30},{"nome":"Sousa","idade":30}] ';


$data = json_decode( $json ,true); // json_decode transforma um json eum array.

var_dump( $data);

?>