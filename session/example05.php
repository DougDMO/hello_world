<?php

require_once "config.php";

echo session_save_path();
echo "<br>";

switch (session_status()){

    case PHP_SESSION_DISABLED:
        echo "Sessão desabilitada";
        break;
    case PHP_SESSION_NONE:
        echo "Sessão vazia";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Sessão ativa";


}