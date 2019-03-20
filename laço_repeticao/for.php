<?php 

  //                          $i vai recebe ele mesmo mais 5.                     
 for( $i = 0; $i < 1000; $i += 5){

    if( $i >= 200 && $i <= 800 ) continue; //  O if dessa maneira não precisa de chaves ,
                                          //  será imprimido antes de 200 e após 800  devido ao ' continue' .
                                          

    if(  $i==900) break;                 // Quando $i chega em antes de 900 o laço irá para

    echo $i ;  

    echo "<br>";
 }

   



?>