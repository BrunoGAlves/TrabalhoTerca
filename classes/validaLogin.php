<?php

include 'conexao.php';

   
    $email_login = $_POST['nomeLogin'];
    $senha_login = $_POST['senhaLogin'];


    $select = "SELECT * FROM tb_usuarios WHERE usuario_email = '$email_login' && usuario_senha = '$senha_login'";

    $resultado = mysqli_query($conexao, $select);

    if(mysqli_num_rows($resultado) > 0){
        
    $row = mysqli_fetch_array($resultado);

    session_start();
    $_SESSION["jogador"] = $row['usuario_email'];
    $_SESSION["autenticacao"] = true;
        header('location:../telaPrincipal.php');

 }else{
    header('location:../index.php');
 }
 
?>