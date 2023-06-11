<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/resetcss.css" />
    <link rel="stylesheet" href="css/stylesheet1.css" />
    <title>DOIDOS E DADOS</title>
</head>

<body>
    <main>
        <div style="height: 100vh;" class="filtro">
            <img class="logoDD" src="css/pngfind.com-dungeons-and-dragons-png-2663967.png" alt="Dungeons And Dragons 5th Edition Logo@pngkey.com">
            <a class="botaoprincipal" id="botaoprincipal">
                <p class="fontebotao">COMEÇAR A AVENTURA </p>
            </a>

            <section class="loginesenha" id="loginesenha">
                <form action="classes/validaLogin.php" method="post">
                    <h1 class="Login">Login</h1>
                    <input type="text" placeholder="Nome do Jogador" name="nomeLogin" class="campodetexto">
                    <!-- placeholder = para colocar caixa de login no site -->
                    <br><br>
                    <input type="password" placeholder="Senha" name="senhaLogin"  class="campodetexto">
                    <br><br>
                    <button class="botaoentrar" >Entrar</button>
                    <br><br>
                </form>
                <h1 class="conexaocadastro">Não tem cadastro?<a class="corcadastrase" id="corcadastrase"> cadastre-se
                        agora!</a> </h1>
            </section>

            <section class="cadastro" id="cadastro">
                <form action="classes/_loginUserCreate.php" method="post">
                    <h1>Cadastro</h1>
                    <input type="text" placeholder="Nome Completo" name="nome" class="campodetexto" >
                    <!-- placeholder = para colocar caixa de login no site -->
                    <br><br>
                    <input type="text" placeholder="Nome de Jogador" name="jogadorName" class="campodetexto">
                    <br><br>
                    <input type="email" placeholder="E-mail" name="email" class="campodetexto">
                    <br><br>
                    <input type="password" placeholder="Senha" name="senha" class="campodetexto">
                    <br><br>
                    <button class="botaoentrar" id="botaocadastro">Cadastrar-se</button>
                </form>
            </section>
        </div>

    </main>


</body>
<script>
    var botaoprincipal = document.getElementById("botaoprincipal");
    var loginesenha = document.getElementById("loginesenha");
    var cadastro = document.getElementById("cadastro");
    var corcadastrase = document.getElementById("corcadastrase");
    var botaocadastro = document.getElementById("botaocadastro");


    botaoprincipal.onclick = function () {
        loginesenha.style.opacity = "100%";
        loginesenha.style.zIndex = "1";
        botaoprincipal.style.opacity = "0%";
        botaoprincipal.style.zindex = "-1";
    }

    corcadastrase.onclick = function () {
        loginesenha.style.opacity = "0%";
        loginesenha.style.zIndex = "0";
        cadastro.style.opacity = "100%";
        cadastro.style.zIndex = "1";
    }

    botaocadastro.onclick = function () {
        loginesenha.style.opacity = "100%";
        loginesenha.style.zIndex = "1";
        cadastro.style.opacity = "0%";
        cadastro.style.zIndex = "0";
    }

</script>

</html>
