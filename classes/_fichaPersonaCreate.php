<?php 

session_start(); // a sessão precisa ser iniciada em toda a pagina, já que ela sempre retorna 
if (!isset($_SESSION["autenticacao"]) || !isset($_SESSION["jogador"])){ // codigo que valida o os campos de sessão e autiticação.
    header("Location: login.php?erro=2");
}

include_once 'conexao.php';

$codJogador = $_SESSION["jogador"];
$nome_personagem = $_POST['nomePersonagem'];
$nome_jogador = $_POST['nomeJogador'];
$classe_personagem = $_POST['classePersonagem'];
$nivel_personagem = $_POST['nivel'];
$raca_personagem = $_POST['racaPersonagem'];
$antecedente_personagem = $_POST['antecedentePersonagem'];
$tendencia_personagem = $_POST['alinhamentoPersonagem'];

/*echo $nome_jogador, $classe_perspnagem,$nivel_personagem, 
$raca_personagem,$antecedente_personagem,$tendencia_personagem;*/

$atr_forca = $_POST['atributoForca'];
$atr_destreza = $_POST['atributoDestreza'];
$atr_constituicao = $_POST['atributoConstituicao'];
$atr_inteligencia = $_POST['atributoInteligencia'];
$atr_sabedoria = $_POST['atributoSabedoria'];
$atr_carisma = $_POST['atributoCarisma'];
/*
echo $atr_forca, $atr_destreza, $atr_constituicao, $atr_inteligencia, 
$atr_sabedoria, $atr_carisma;*/

$tdr_forca = $_POST['resistenciaForca'];
$tdr_destreza = $_POST['resistenciaDestreza'];
$tdr_constituicao = $_POST['resistenciaConstituicao'];
$tdr_inteligencia = $_POST['resistenciaInteligencia'];
$tdr_sabedoria = $_POST['resistenciaSabedoria'];
$tdr_carisma = $_POST['resistenciaCarisma'];

/* echo $tdr_forca, $tdr_destreza, $tdr_constituicao, $tdr_inteligencia,
$tdr_sabedoria, $tdr_carisma;*/

$per_acrobacia = $_POST["periciaAcrobacia"];
$per_arcanismo = $_POST["periciaArcanismo"];
$per_atletismo = $_POST["periciaAtletismo"];
$per_atuacao = $_POST["periciaAtuacao"];
$per_blefar = $_POST["periciaBlefar"];
$per_furtividade = $_POST["periciaFurtividade"];
$per_historia = $_POST["periciaHistoria"];
$per_intimidacao = $_POST["periciaIntimidacao"];
$per_intuicao = $_POST["periciaIntuicao"];
$per_investigacao = $_POST["periciaInvestigacao"];
$per_lidar_animais = $_POST["periciaLidarAnimais"];
$per_medicina = $_POST["periciaMedicina"];
$per_natureza = $_POST["periciaNatureza"];
$per_percepcao = $_POST["periciaPercepcao"];
$per_persuasao = $_POST["periciaPersuasao"];
$per_prestidigitacao = $_POST["periciaPrestidigitacao"];
$per_religiao = $_POST["periciaReligiao"];
$per_sobrevivencia = $_POST["periciaSobrevivencia"];


echo $per_acrobacia;

/* echo $per_acrobacia, $per_arcanismo, $per_atletismo, $per_atuacao, $per_blefar,
$per_furtividade, $per_historia, $per_intimidacao, $per_intuicao, $per_investigacao,
$per_lidar_animais, $per_medicina, $per_natureza, $per_persuasao, $per_prestidigitacao,
$per_religiao, $per_sobrevivencia; */


$percp_passiva = $_POST["periciaPercepcao"]+10;
$inves_passiva = $_POST["periciaInvestigacao"]+10;
$intui_passiva = $_POST["periciaIntuicao"]+10;



$bonus_profici = $_POST["bonusProciencia"];
$deslocamento = $_POST["deslocamento"];
$iniciativa = $_POST["iniciativa"];
$classe_armadura = $_POST["classeArmadura"];
$inspiracao = 0;


$vida_maxima = $_POST["vidaMaxima"];
$vida_atual = $_POST["vidaMaxima"];
$vida_temporaria = 0;

$armor = $_POST["armor"];
$armas = $_POST["armas"];
$ferramentas = $_POST["ferramentas"];
$linguagens = $_POST["linguagens"];


$sql = "INSERT INTO `tb_ficha_personagem`(`cd_usuario`, `nome_jogador`, `nome_personagem`, `raca_personagem`,`nivel_personagem`,`classe_personagem`,
`antecedente_personagem`, `tendencia_personagem`,`atr_forca`,`atr_destreza`, `atr_constituicao`, `atr_inteligencia`, `atr_sabedoria`, `atr_carisma`,
`tdr_forca`,`tdr_destreza`, `tdr_constituicao`, `tdr_inteligencia`, `tdr_sabedoria`, `tdr_carisma`,`percp_passiva`, `inves_passiva`, `intui_passiva`, `bonus_profici`,
`deslocamento`,`iniciativa`,`classe_armadura`,`inspiracao`,`vida_maxima`, `vida_atual`, `per_acrobacia`, `per_arcanismo`, `per_atletismo`, 
`per_atuacao`, `per_blefar`, `per_furtividade`,`per_historia`, `per_intimidacao`, `per_intuicao`, `per_investigacao`, `per_lidar_animais`, `per_medicina`, 
`per_natureza`, `per_percepcao`, `per_persuasao`, `per_prestidigitacao`,`per_religiao`,`per_sobrevivencia`,`armor`, `armas`, `ferramentas`, `linguagens`)
 VALUES('$codJogador', '$nome_jogador' , '$nome_personagem', '$raca_personagem', '$nivel_personagem','$classe_personagem',
    '$antecedente_personagem', '$tendencia_personagem','$atr_forca','$atr_destreza', '$atr_constituicao', 
    '$atr_inteligencia', '$atr_sabedoria', '$atr_carisma','$tdr_forca', '$tdr_destreza',
    '$tdr_constituicao','$tdr_inteligencia', '$tdr_sabedoria', '$tdr_carisma', '$percp_passiva', '$inves_passiva', '$intui_passiva',
    '$bonus_profici', '$deslocamento', '$iniciativa', '$classe_armadura','$inspiracao', '$vida_maxima','$vida_atual',
    '$per_acrobacia', '$per_arcanismo', '$per_atletismo', '$per_atuacao', '$per_blefar', '$per_intuicao', '$per_furtividade','$per_historia', '$per_intimidacao', 
    '$per_investigacao','$per_lidar_animais', '$per_medicina', '$per_natureza', '$per_percepcao', '$per_persuasao', 
    '$per_prestidigitacao', '$per_religiao', '$per_sobrevivencia', '$armor', '$armas', '$ferramentas', '$linguagens')";

    $inserir = mysqli_query($conexao, $sql);
    header("location:../telaPrincipal.php" );


?>
