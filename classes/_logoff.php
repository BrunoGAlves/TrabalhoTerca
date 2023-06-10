<?php

session_start();

if (isset($_SESSION["autenticacao"]) && isset($_SESSION["jogador"]) ) {
    unset($_SESSION["autenticacao"]);
    unset($_SESSION["usuario"]);
}
header("Location: ../index.php");

?>