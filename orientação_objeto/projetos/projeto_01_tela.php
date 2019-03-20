<!DOCTYPE html>

<html lang="pt-br">

  <head>

       <meta charset = "utf-8" >

       <meta  content = "width = device-width " >

  </head>

  <body>

      <div id = "formulario2">

                
            <form method="post" action=""  id="formulario" name="formular" > 


                    NOME <input type ="text" name ="nome" >

                    <br> <br>

                    SEXO <label id = "sexo"  id ="sexo" >

                        <input type ="radio"  name = "sexo"  id = "masculino" value ="M" >
                        <input type ="radio"  name = "sexo" id = "femenino"  value = "F" >

                    </label>

                    <br> <br>
                    
                    STATUS
                    <select  id="status">

                        <option value ="solteiro">  Solteiro </option>
                        <option value = "casado"> casado </option>
                        <option value = "separado"> separado </option>
                        <option value = "viúvo" > viúvo</option>

                    </select>
                    
                    <br> <br>

                    Idade <input type ="number" name ="idade" id ="idade" >

                    <input type="submit" name="botao" id="botao" value ="ok">

            </form>      

      </div>



  </body>

</html>

<?php

include  "classes.php";


if( isset( $_POST['botao']) ){

    $pessoa = new canditado() ;

    $pessoa->nome = $_POST['nome'];

    print_r( $pessoa->nome);

    echo "ok";
}

else{

    echo "nada";

}

?>