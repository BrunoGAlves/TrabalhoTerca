<?php 

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `tb_ficha_personagem` WHERE cd_personagem = $id";

$deletar = mysqli_query($conexao,$sql);
?>
