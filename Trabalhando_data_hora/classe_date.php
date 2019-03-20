<?php

setlocale( LC_ALL , "pt_BR");

$data = new DateTime();

echo $data->format( "M" );

echo "<br>";

echo date("d/M/Y");

echo "<br>";

echo strftime("%A %B");

?>