<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Área de Login</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="container">
        <form class="formulario" action="index.php" method="GET">
            <div class="titulo">
                <div class="image">
                    <!-- <img src="imagens/LOGO_GERAÇÃO_VIDA.png" alt="" /> -->
                    <img src="./imagens/profile.png" alt="">
                </div>
                <h1>Bem Vindo</h1>
            </div>

            <div class="campos">
                <input type="text" name="usuario" id="usuario" placeholder="Usuário" required />
                <input type="password" name="senha" id="senha" placeholder="Senha" required />
            </div>

            <div class="buttons">
                <button id="criarConta" type="button">Criar Conta</button>
                <button id="esqueceuSenha" type="button">Esqueceu Senha</button>
            </div>
            <button class="login" id="login-button">Login</button>
        </form>
    </div>

    <script src="motor.js"></script>
</body>

</html>

<?php
$usuario = $_GET["usuario"];
$senha = $_GET["senha"];

function validar()
{
    if (empty($usuario) && empty($senha)) {
        echo "Campos não preenchidos";
    } else {
        echo "<br/>Bem vindo";
    }
}

validar();

?>