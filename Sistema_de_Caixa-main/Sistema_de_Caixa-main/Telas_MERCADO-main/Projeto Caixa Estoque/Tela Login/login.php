<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/telaLogin.css">
    <title>Document</title>
</head>

<body>

    <div class="fudo-login">
        <div class="divisorias1">
            <div class="fundo-logo__main">
                <div class="fundo-logo">
                    <img class="logoMercado" src="./img/logo.png" alt="Logo Do Mercado">
                </div>
            </div>
        </div>
        <div class="divisorias2">
            <div class="separacao-fundo1">


                <p class="txt-Permissao">PERMISSÃO</p>
                <p class="txt-funcao">PERMISSÃO PARA (FUNÇÃO).</p>

                <?php
                if (isset($_GET['mensagem'])) {
                    echo '<h3 class="text-center mb-4">Senha ou usuario incorreto</h3>';
                }

                ?>

            </div>
            <div class="separacao-fundo2"></div>
            <div class="separacao-fundo3">
                <form method="POST" action="vereficalogin.php">
                    <div class="espacamento">

                        <div class="">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="unput txt" id="usuario" name="usuario" placeholder="Digite o Usuario">
                        </div>

                        <div class="">
                            <label for="senha">Senha:</label>
                            <input type="text" class="input txt" id="senha" name="senha" placeholder="Digite a senha">
                        </div>
                    </div>
            </div>
            <div class="separacao-fundo4">
                <div class="botoes">
                    <button type="submit" class="botaoOK txtbt"><b>Login</b></button>

                </div>
            </div>
            </form>
        </div>
    </div>

</body>

</html>