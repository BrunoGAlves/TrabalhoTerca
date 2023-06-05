<?php 

include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$sql = "INSERT INTO `tb_usuarios`(`usuario_login`, `usuario_senha`)VALUES('$usuario', '$senha')";

?>