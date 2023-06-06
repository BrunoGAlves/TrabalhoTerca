<?php 
$servename = "localhost";
$database = "bd_doido_e_dados";
$username = "root";
$password = "";

$conexao = mysqli_connect($servename, $username, $password, $database);

if(mysqli_connect_errno($conexao)){
    echo "Erro de conexão";
    close($conexao);
}

?>