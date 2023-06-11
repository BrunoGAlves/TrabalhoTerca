<?php
    include_once 'conexao.php';

    function personaList($idJogador){
        global $conexao;
        $query = "SELECT * FROM tb_ficha_personagem WHERE cd_usuario = $idJogador";
        $resulta = mysqli_query($conexao, $query);
        return $resulta;
    }

    function personaSelect($idPersonagem){
        global $conexao;
        $query = "SELECT * FROM tb_ficha_personagem WHERE cd_personagem = $idPersonagem";
        $resultaPerson = mysqli_query($conexao, $query);
        return $resultaPerson;
    }

?>