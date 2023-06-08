<?php
include 'conexao.php';

$nome = $_POST['nome'];
$nomeJogador = $_POST['jogadorName'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if(empty($_POST['nome']) || empty( $_POST['jogadorName']) 
|| empty( $_POST['email']) || empty($_POST['senha']) ){
    header("Location: ../index.php?erro=1");
}else{ 

    $select = "SELECT * FROM tb_usuarios WHERE usuario_email = '$email' && usuario_senha = '$senha'";
    $result - mysqli_query($conexao, $select);

    if(mysqli_num_rows($result) > 0){
        header("Location: ../index.php?erro=2");
    }
    $sql = " INSERT INTO `tb_usuarios` (`usuario_email`, `usuario_senha`, `usuario_nome`, `usuario_apelido`) 
    VALUES ( '$email', '$senha', '$nome', '$nomeJogador')";
    $inserir = mysqli_query($conexao, $sql);
    
    header("location:../index.php" );

}


?>

