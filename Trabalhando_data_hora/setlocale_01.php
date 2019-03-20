<?php

setlocale(LC_ALL ,"pt_BR" ,"pt_BR.UTF-8", "portuquese");// 

//o parametro " LC_ALL" significa mude todas as configurações.
// Os demais parametros tem a mesma função de mudar a liguagem para portuquês mas cada uma com uma variação para sistema.

echo strftime( "%D %B"); // strftime pega a função e joga em string para mostra na tela.
                        // " %A " mostra o dia da semana, " %B" mostra o mês.



                        $data = date("H:i:s");

                        echo $data;
?>