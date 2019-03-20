<?php

session_start();

echo $_SESSION['nome'] ;

// Para apagar , unset ou session_unset( '$_SESSION['nome'] );

// ou pode usa o session_detroy();

// Que destroi a sessão e expulsa o usuario da sessão.


?>