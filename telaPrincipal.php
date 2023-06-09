<?php
session_start(); // a sessão precisa ser iniciada em toda a pagina, já que ela sempre retorna 
if (!isset($_SESSION["autenticacao"]) || !isset($_SESSION["jogador"])){ // codigo que valida o os campos de sessão e autiticação.
    header("Location: login.php?erro=2");
}
?>


3<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/buttonNewChar.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/teste.css">
    <link rel="stylesheet" href="js/teste.js">
    <link rel="stylesheet" href="css/style.css">

    <title>tela joão</title>
</head>

<body>


    <!------------------------------------------- Side Bar -------------------------->
    <div class="primary-nav">
        <nav role="navigation" class="menu">
            <a style="text-align: center;" class="logotype"><span>PERSONAGENS</span></a>
            <div class="overflow-container">
                <ul class="menu-dropdown">
                    <li><a href="#">Personagem 1</a><span class="icon"><i class="fa-solid fa-user"></i></span></li>
                    <li><a href="#">Personagem 2</a><span class="icon"><i class="fa-solid fa-user"></i></span></li>
                    <li style="position: absolute; bottom: 0px;">
                        <button class="buttonNewChar" id="formularioShow">Novo Personagem</button>
                    </li>
                </ul>   
            </div>
        </nav>
    </div>
    <!--------------------------------------- Fim Side Bar ------------------------->
    <div style="margin-left: 50px;">
        <!--------------------------------------- Header personagem ------------------------->
        <header>
            <div class="centralizarHeader">
                <div class="userIcon">
                    <p><i class="fa-solid fa-user"></i></p>
                </div>
                <div>
                    <div class="nomePersonagem">
                        <p class="nomePersonagem">Nome do personagem</p>
                    </div>
                    <div class="CharInfo">
                        <p>Gênero</p>
                        <p>Raça</p>
                        <p>Classe</p>
                        <p style="margin-top: -22px; color: rgb(190, 68, 68);">Lvl</p>
                    </div>
                    <div class="lvlChar">
                        <p>Level Lvl</p>
                    </div>
                    
                </div>
            </div>
            <a class="logOutButton">
                <p>Log out</p>
                <i style="padding-left: 10px;" class="fa-solid fa-right-from-bracket"></i>
            </a>
            
        </header>
        <div class="container">
            <main>
                <section class="container">
                    <div class="popup">
                        <div class="fecharBtn">&times;</div>
                        <!-- Formulario -->
                        <form action="#">
                            <div class="form_primario" id="form_primario">
                                <div class="detalhe pessoal">
                                    <span class="titulo"> Informações da Ficha: </span>
                                    <div class="row">
                                        
                                    </div>
                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="Nome">Nome do Personagem:</label>
                                            <input type=" text" placeholder="Digite o nome:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Nome do Jogador: </label>
                                            <input type=" text" placeholder="Digite o nome do jogador:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Classe de personagem: </label>
                                            <input type="text" id="classe" placeholder="Classe do personagem:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Nivel </label>
                                            <input type="number" id="nivel" placeholder="Digite seu nivel:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Raça de personagem: </label>
                                            <input type=" text" placeholder="Raça do personagem:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Antecedentes:</label>
                                            <input type="text" placeholder=" Antecedente do personagem:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Alinhamento </label>
                                            <input type=" text" placeholder="Alinhamento do personagem: " required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Atributos Input -->
                                <div class="detalhe ID">
                                    <span class="titulo">Atributos do Personagem</span>

                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="Nome">Força </label>
                                            <input type="number" class="nivel-forca" placeholder="LVL:"
                                                required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Destreza </label>
                                            <input type="number" class="nivel-forca" placeholder="LVL:"
                                                required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Constituição </label>
                                            <input type="number" class="nivel-forca" placeholder="LVL:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Inteligência </label>
                                            <input type="number" class="nivel-forca" placeholder="LVL:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Sabedoria </label>
                                            <input type="number" class="nivel-forca" placeholder="LVL:"
                                                required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Carisma </label>
                                            <input type="number" class="nivel-forca" placeholder="LVL:"
                                                required>
                                        </div>

                                        <button class="nextBtn" id="next1">
                                            <span class="btnText" id="next1">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="form_segundario" id="form_segundario">
                                <div class="detalhes atributos">
                                    <span class="titulo">Salvaguardas:</span>
                                    <div class="fields">
                                        <div class="input-field-salva">
                                            <ul class="lista-salva">
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Força</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Destreza</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Constituição</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Inteligência"
                                                        required> Inteligência</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Sabedoria"
                                                        required> Sabedoria</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Carisma"
                                                        required> Carisma </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="detalhes pericias">
                                    <span class="titulo">Pericias:</span>
                                    <div class="fields">
                                        <div class="input-field-salva">
                                            <ul class="lista-salva">
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Acrobacia </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Arcanismo </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Atletismo</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Atuação </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Enganação </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Furtividade</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Historia </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Intimidação </li>
                                            </ul>
                                        </div>
                                        <div class="input-field-salva">
                                            <ul class="lista-salva">
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> intuição </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> investigação </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Lidar com animais </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Medicina</li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Natureza </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Percepção </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Força"
                                                        required> Prestigitação </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Destreza"
                                                        required> Religião </li>
                                                <li><input type="number" class="salvaguarda" placeholder="Constituição"
                                                        required> Sobrevivencia </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="buttons">
                                    <div class="backBtn">
                                        <span class="btnText" id="back1">Retorno</span>
                                    </div>
                                    <button class=".nextBtn-1">
                                        <span class="btnText" id="next2">Next</span>
                                    </button>
                                </div>

                            </div>

                            <div class="form_terceiario" id="form_terceiario">
                                <div class="detalhe pessoal">
                                    <span class="titulo"> Informações da Ficha: </span>
                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="Nome">Classe de armadura:</label>
                                            <input type="number" class="mod-combate"
                                                placeholder="Digite o valor da classe:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Iniciativa: </label>
                                            <input type="number" class="mod-combate"
                                                placeholder="Digite o valor de iniciativa:" required>
                                        </div>

                                        <div class="input-field">
                                            <label for="Nome">Deslocamento: </label>
                                            <input type="number" id="classe" class="mod-combate"
                                                placeholder="Deslocamento:" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="detalhe pessoal">
                                    <span class="titulo"> Proficiencias e linguagens: </span>
                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="Nome">Pericias em armaduras: </label>
                                            <input type="text" id="classe" class="mod-area"
                                                placeholder="Pericias em armaduras:">
                                        </div>
                                        <div class="input-field">
                                            <label for="Nome">Pericias em armas: </label>
                                            <input type="text" id="classe" class="mod-area"
                                                placeholder="Pericias em armas:">
                                        </div>
                                        <div class="input-field">
                                            <label for="Nome">Pericias em Ferramentas: </label>
                                            <input type="text" id="classe" class="mod-area"
                                                placeholder="Pericias em Ferramentas:">
                                        </div>
                                        <div class="input-field">
                                            <label for="Nome">Linguagens: </label>
                                            <input type="text" id="classe" class="mod-area"
                                                placeholder="Pericias em Linguagens:">
                                        </div>

                                    </div>
                                    <div class="buttons">
                                        <div class="backBtn">
                                            <span class="btnText" id="back2">Retorno</span>
                                        </div>
                                        <button class=".nextBtn-1">
                                            <span class="btnText" id="next3">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </section>
            </main>
        </div>
        <!--FIM DO FORMULARIO-->
        <div class="row">
            <!-- Main stats -->
            <div style="margin-top: 80px;" class="col-md-6 atributos">
                <div class="row">
                    <ul class="cards">
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">STRENGTH</div>
                                    <p class="contabilizador_atributo">-1</p>
                                    <div class="card_valor_atributo">8</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">DEXTERITY</div>
                                    <p class="contabilizador_atributo">+2</p>
                                    <div class="card_valor_atributo">14</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">CONSTITUTION</div>
                                    <p class="contabilizador_atributo">+1</p>
                                    <div class="card_valor_atributo">13</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">INTELLIGENCE</div>
                                    <p class="contabilizador_atributo">+3</p>
                                    <div class="card_valor_atributo">16</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">WISDOM</div>
                                    <p class="contabilizador_atributo">+1</p>
                                    <div class="card_valor_atributo">12</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">CHARISMA</div>
                                    <p class="contabilizador_atributo">+2</p>
                                    <div class="card_valor_atributo">14</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Phys stats -->
            <div style="margin-top: 80px;" class="col-md-6">
                <div class="row">
                    <ul class="cards">
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">PROFICIENCY</div>
                                    <p class="contabilizador_atributo">+2</p>
                                    <div class="card_valor_atributo">BONUS</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <div class="card">
                                <div class="card__content">
                                    <div class="card_titulo_atributo">WALKING</div>
                                    <p class="contabilizador_atributo">30</p>
                                    <div class="card_valor_atributo">SPEED</div>
                                </div>
                            </div>
                        </li>
                        <li class="cards__item">
                            <ul style=" list-style-type: none; margin-left: -35px;">
                                <li>
                                    <div style="height: 80px; margin-bottom: 1rem;" class="card">
                                        <div class="card__content">
                                            <p style="font-size: 2rem; margin-top: -3px;"
                                                class="contabilizador_atributo"><i class="fa-solid fa-sun"></i></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="card_valor_atributo">INSPIRATION</div>
                                </li>
                            </ul>
                        </li>
                        <li class="cards__item">
                            <div style="width: 340px;" class="card">
                                <div class="card__content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="col card_titulo_atributo">CURA</div>
                                            <p class="col contabilizador_atributo">+2</p>
                                            <div class="col card_titulo_atributo">DANO</div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="col card_titulo_atributo">CURRENT</div>
                                            <p class="col contabilizador_atributo">10</p>
                                        </div>
                                        <div class="col-sm-1 card_barra">
                                            /
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="col card_titulo_atributo">MAX</div>
                                            <p class="col contabilizador_atributo">10</p>
                                        </div>
                                        <div class="col-sm-3">
                                            <div style="font-size: 1rem; font-weight: bold;"
                                                class="col contabilizador_atributo">TEMP</div>
                                            <p style="font-size: 1rem;" class="col card_titulo_atributo">--</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p style="font-size: 1rem; margin-top: -20px; margin-left: -10px;"
                                            class="col contabilizador_atributo">HIT POINTS</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Left side -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Saving Throws -->
                        <li class="cards__item">
                            <div style="width: 420px;" class="card">
                                <div class="card__content">
                                    <table>
                                        <tr>
                                            <td style="padding-top: 10px;">STR</td>
                                            <td style="padding-top: 10px;">-1</td>
                                            <td style="padding-top: 10px;">INT</td>
                                            <td style="padding-top: 10px;">+5</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px;">DEX</td>
                                            <td style="padding-top: 10px;">+2</td>
                                            <td style="padding-top: 10px;">WIS</td>
                                            <td style="padding-top: 10px;">+3</td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px;">CON</td>
                                            <td style="padding-top: 10px;">+1</td>
                                            <td style="padding-top: 10px;">CHA</td>
                                            <td style="padding-top: 10px;">+2</td>
                                        </tr>
                                    </table>
                                    <p style="padding-top: 15px; margin-bottom: -5px;" class="card_valor_atributo">
                                        SAVING
                                        THROWS</p>
                                </div>
                            </div>
                        </li>
                        <!-- Senses -->
                        <li class="cards__item">
                            <div style="width: 420px;" class="card">
                                <div class="card__content">
                                    <table>
                                        <tr>
                                            <td style="padding-top: 10px; text-align: left;">13</td>
                                            <td style="padding-top: 10px; text-align: end;">PASSIVE WIS (PERCEPTION)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px; text-align: left;">13</td>
                                            <td style="padding-top: 10px; text-align: end;">PASSIVE INT (INVESTIGATION)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top: 10px; text-align: left;">13</td>
                                            <td style="padding-top: 10px; text-align: end;">PASSIVE WIS (INSIGHT)</td>
                                        </tr>
                                    </table>
                                    <p style="padding-top: 10px; margin-bottom: -5px;" class="card_valor_atributo">
                                        SENSES
                                    </p>
                                </div>
                            </div>
                        </li>
                        <!-- Proficiencies & languages -->
                        <li class="cards__item">
                            <div style="width: 420px;" class="card">
                                <div style="height: 515px;" class="card__content">
                                    <table>
                                        <tr>
                                            <td style="font-size: 12px; padding-top: 15px; text-align: start; font-weight: normal;"
                                                class="card_titulo_atributo">ARMOR</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: -1px; margin-top: -7px; text-align: start; font-weight: normal;"
                                                class="card_valor_atributo">None</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; padding-top: 15px; text-align: start; font-weight: normal;"
                                                class="card_titulo_atributo">WEAPONS</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: -1px; margin-top: -7px; text-align: start; font-weight: normal;"
                                                class="card_valor_atributo">Crossbow, Light, Dagger, Dart, Quarterstaff,
                                                Sling</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; padding-top: 15px; text-align: start; font-weight: normal;"
                                                class="card_titulo_atributo">TOOLS</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: -1px; margin-top: -7px; text-align: start; font-weight: normal;"
                                                class="card_valor_atributo">Vehicles(Land)</td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 12px; padding-top: 15px; text-align: start; font-weight: normal;"
                                                class="card_titulo_atributo">LANGUAGES</td>
                                        </tr>
                                        <tr>
                                            <td style="margin-bottom: -1px; margin-top: -7px; text-align: start; font-weight: normal;"
                                                class="card_valor_atributo">Common, Elvish, Goblin, Halfling</td>
                                        </tr>
                                    </table>
                                    <p style="padding-top: 205px;" class="card_valor_atributo">PROFICIENCIES & LANGUAGES
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>

                    <!-- Skills -->
                    <div class="col-md-6">
                        <li class="cards__item">
                            <div style="width: 400px;" class="card">
                                <div class="card__content">
                                    <table>
                                        <!--header table-->
                                        <tr>
                                            <td>MOD
                                                <hr>
                                            </td>
                                            <td>SKILL
                                                <hr>
                                            </td>
                                            <td>BONUS
                                                <hr>
                                            </td>
                                        </tr>
                                        <!--fim header table-->
                                        <tr>
                                            <td>DEX
                                                <hr>
                                            </td>
                                            <td>Acrobatics
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS
                                                <hr>
                                            </td>
                                            <td>Animal Handling
                                                <hr>
                                            </td>
                                            <td>+1
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>Arcana
                                                <hr>
                                            </td>
                                            <td>+5
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>STR
                                                <hr>
                                            </td>
                                            <td>Athletics
                                                <hr>
                                            </td>
                                            <td>-1
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CHA
                                                <hr>
                                            </td>
                                            <td>Deception
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>History
                                                <hr>
                                            </td>
                                            <td>+5
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS
                                                <hr>
                                            </td>
                                            <td>Insight
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CHA
                                                <hr>
                                            </td>
                                            <td>Intimidation
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>Investigation
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS
                                                <hr>
                                            </td>
                                            <td>Medicine
                                                <hr>
                                            </td>
                                            <td>+1
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>Nature
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS
                                                <hr>
                                            </td>
                                            <td>Perception
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CHA
                                                <hr>
                                            </td>
                                            <td>Performance
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>CHA
                                                <hr>
                                            </td>
                                            <td>Persuasion
                                                <hr>
                                            </td>
                                            <td>+4
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INT
                                                <hr>
                                            </td>
                                            <td>Religion
                                                <hr>
                                            </td>
                                            <td>+3
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DEX
                                                <hr>
                                            </td>
                                            <td>Sleight of Hand
                                                <hr>
                                            </td>
                                            <td>+4
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DEX
                                                <hr>
                                            </td>
                                            <td>Stealth
                                                <hr>
                                            </td>
                                            <td>+2
                                                <hr>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>WIS</td>
                                            <td>Survival</td>
                                            <td>+1</td>
                                        </tr>
                                    </table>
                                    <p style="font-size: 12px; padding-top: 15px;" class="card_titulo_atributo">
                                        Additional
                                        Skills</p>
                                    <p style="margin-bottom: -1px; margin-top: -7px;" class="card_valor_atributo">SKILLS
                                    </p>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <!-- Right side -->
            <div class="col-lg-6">
                <div class="col-md-12 fis_stats">
                    <div class="row">
                        <ul class="cards">
                            <li class="cards__item">
                                <ul style=" list-style-type: none; margin-left: -35px;">
                                    <li>
                                        <div style=" margin-bottom: 10px;" class="card_valor_atributo">INITIATIVE</div>
                                    </li>
                                    <li>
                                        <div style="height: 80px;" class="card">
                                            <div class="card__content">
                                                <p style="font-size: 2rem; margin-top: -3px;"
                                                    class="contabilizador_atributo">+2</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="cards__item">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="card_titulo_atributo">ARMOR</div>
                                        <p style="padding-top: 5px;" class="contabilizador_atributo">30</p>
                                        <div class="card_titulo_atributo">CLASS</div>
                                    </div>
                                </div>
                            </li>
                            <li class="cards__item">
                                <div style="width: 475px;" class="card">
                                    <div class="card__content">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div style="font-size: 15px; font-weight: bold;"
                                                    class="col contabilizador_atributo">DEFENSES</div>
                                                <p style="font-size: 10px;" class="col card_titulo_atributo">
                                                    Resistances,
                                                    Immunities, or Vulnerabilities</p>
                                            </div>
                                            <div style="margin-left: 35px;" class="col-sm-1 vl"></div>
                                            <div style="margin-left: -35px;" class="col-sm-5">
                                                <div style="font-size: 15px; font-weight: bold;"
                                                    class="col contabilizador_atributo">CONDITIONS</div>
                                                <p style="font-size: 10px;" class="col card_titulo_atributo">Add Active
                                                    Conditions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <li class="cards__item">
                        <div style="width: 865px;" class="card">
                            <div class="card__content">
                                <div style="display: flex; justify-content: space-around; height: 730px;" class="row">
                                    <p>história</p>
                                    <p>magias</p>
                                    <p>extras</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/arquivo.js"></script>

</body>

</html>