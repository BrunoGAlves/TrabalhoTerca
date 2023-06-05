<?php 

include_once 'conexao.php';

$nome_jogador = $_POST['nomeJogador'];
$nome_personagem = $_POST['nomePersonagem'];
$raca_personagem = $_POST['racaPersonagem'];
$antecedemte_personagem = $_POST['antecedentePersonagem'];
$tendencia_personagem = $_POST['tendenciaPersonagem'];

$atr_forca = $_POST['atributoForca'];
$atr_destreza = $_POST['atributoDestreza'];
$atr_constituicao = $_POST['atributoConstituicao'];
$atr_inteligencia = $_POST['atributoSabedoria'];
$atr_carisma = $_POST['atributoCarisma'];

$tdr_forca = $_POST['resistenciaForca'];
$tdr_destreza = $_POST['resistenciaDestreza'];
$tdr_constituicao = $_POST['resistenciaConstituicao'];
$tdr_inteligencia = $_POST['resistenciaSabedoria'];
$tdr_carisma = $_POST['resistenciaCarisma'];


$percp_passiva = $_POST[];
$bonus_profici = $_POST[];
$deslocamento = $_POST[];
$iniciativa = $_POST[];
$classe_armadura = $_POST[];
$inspiracao = $_POST[];

$vida_maxima = $_POST[];
$vida_atual = $_POST[];
$vida_temporaria = $_POST[];

$armor = $_POST[];
$armas = $_POST[];
$ferramentos = $_POST[];
$linguagens = $_POST[];

$historia = $_POST[];
$magias = $_POST[];
$extras = $_POST[];

$per_acrobacia = $_POST[];
$per_arcanismo = $_POST[];
$per_atletismo = $_POST[];
$per_atuacao = $_POST[];
$per_blefar = $_POST[];
$per_furtividade = $_POST[];
$per_historia = $_POST[];
$per_intimidacao = $_POST[];
$per_investigacao = $_POST[];
$per_lidar_animais = $_POST[];
$per_medicina = $_POST[];
$per_natureza = $_POST[];
$per_persuasao = $_POST[];
$per_prestidigitacao = $_POST[];
$per_religiao = $_POST[];
$per_sobrevivencia = $_POST[];



?>