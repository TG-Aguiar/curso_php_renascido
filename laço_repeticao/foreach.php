<?php


//                           foreach( array, coleção)


?>



 <form>

 Name <input type= "text"  name= "txt">

 Idade <input  type= "number"   name= "idade">  


 <input type= "submit" value="ENVIAR" >     

</form> 

<?php

/*

       Quando o formmulario não espeficica o ' method ' ele é automático 'GET' e quanto não passa a ' action' ele é 
       carregado na mesma página.

*/

     if( isset( $_GET)){            //Isso evitar que quando a página for carregada a primeira vez não mostre nenhum erro.


            foreach( $_GET as $valor){     //  É possivel usa o $_GET sozinho assim ele passa todos os campos preenchido do formulário.

              echo $valor;

            }
//                                        Dessa maneira evitar tempo com varios $_get com formulário muito grande.

     }

?>



