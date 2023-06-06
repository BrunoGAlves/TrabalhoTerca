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


$percp_passiva = $_POST["percepcaoPassiva"];
$bonus_profici = $_POST["bonusProciencia"];
$deslocamento = $_POST["deslocamento"];
$iniciativa = $_POST["iniciativa"];
$classe_armadura = $_POST["classeArmadura"];
$inspiracao = $_POST["inspiracao"];

$vida_maxima = $_POST["vidaMaxima"];
$vida_atual = $_POST["vidaAtual"];
$vida_temporaria = $_POST["vidaTemporaria"];

$armor = $_POST["armor"];
$armas = $_POST["armas"];
$ferramentos = $_POST["ferramentos"];
$linguagens = $_POST["linguagens"];

$historia = $_POST["historia"];
$magias = $_POST["magias"];
$extras = $_POST["extras"];

$per_acrobacia = $_POST["periciaAcrobacia"];
$per_arcanismo = $_POST["periciaArcanismo"];
$per_atletismo = $_POST["periciaAtletismo"];
$per_atuacao = $_POST["periciaAtuacao"];
$per_blefar = $_POST["periciaBlefar"];
$per_furtividade = $_POST["periciaFurtividade"];
$per_historia = $_POST["periciaHistoria"];
$per_intimidacao = $_POST["periciaIntimidacao"];
$per_investigacao = $_POST["periciaInvestigacao"];
$per_lidar_animais = $_POST["periciaLidarAnimais"];
$per_medicina = $_POST["periciaMedicina"];
$per_natureza = $_POST["periciaNatureza"];
$per_persuasao = $_POST["periciaPersuasao"];
$per_prestidigitacao = $_POST["periciaPrestidigitacao"];
$per_religiao = $_POST["periciaReligiao"];
$per_sobrevivencia = $_POST["periciaSobrevivencia"];

$sql = "INSERT INTO `tb_ficha_personagem`
(`nome_jogador`,`nome_personagem`, `raca_personagem`, `antecedente_personagem`, `tendencia_personagem`,
    `atr_forca`, `atr_destreza`, `atr_constituicao`, `atr_inteligencia`, `atr_carisma`, 
    `tdr_forca`, `tdr_destreza`, `tdr_constituicao`, `tdr_inteligencia`, `tdr_carisma`, 
    `percp_passiva`, `bonus_profici`, `deslocamento`, `iniciativa` , `classe_armadura` , `inspiracao`, 
    `vida_maxima`, `vida_atual`, `vida_temporaria`, `armor`, `armas`, `ferramentos`, `linguagens`, `historia`,
    `magias`, `extras`, `per_acrobacia`, `per_arcanismo`, `per_atletismo`, `per_atuacao`, `per_blefar`, `per_furtividade`,
    `per_historia`, `per_intimidacao`, `per_investigacao`, `per_lidar_animais`, `per_medicina`, `per_natureza`, 
    `per_persuasao`, `per_prestidigitacao`, `per_religiao`, `per_sobrevivencia`)
    VALUES('$nome_jogador', '$nome_personagem', '$raca_personagem', '$antecedemte_personagem', 
    '$atr_forca', '$atr_destreza', '$atr_constituicao', '$atr_inteligencia', '$atr_carisma', 
    '$tdr_forca', '$tdr_destreza', '$tdr_constituicao', '$tdr_inteligencia', '$tdr_carisma',  
    '$percp_passiva', '$bonus_profici', '$deslocamento','$iniciativa', '$classe_armadura', '$inspiracao', 
    '$vida_maxima', '$vida_atual', '$vida_temporaria', '$armor', '$armas', '$ferramentos', '$linguagens', 
    '$historia', '$magias', '$extras', '$per_acrobacia', '$per_arcanismo', '$per_atletismo', '$per_atuacao',
    '$per_blefar', '$per_furtividade', '$per_historia', '$per_intimidacao', '$per_investigacao', '$per_lidar_animais',
    '$per_medicina', '$per_natureza ', '$per_persuasao', '$per_prestidigitacao', '$per_religiao', '$per_sobrevivencia')"; 


?>