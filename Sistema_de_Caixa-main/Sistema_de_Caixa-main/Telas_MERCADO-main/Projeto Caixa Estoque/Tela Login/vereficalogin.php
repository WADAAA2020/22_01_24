<?php
echo '<h2>Você tem acesso</h2>';
    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];
    function validarLogin($usuario, $senha){
        $conexao = new PDO("mysql:host=localhost;dbname=login_caixa", "root", "");
    
        // $script = "SELECT * FROM usuarios WHERE usuarios ='" . $usuario . "' AND senha ='" . $senha . "' ";
        $script = "SELECT * FROM usuarios WHERE usuario ='" . $usuario . "' AND senha ='" . $senha . "' ";

    
        $resultado = $conexao->query($script);
        $lista = $resultado->fetchAll();
    
        if(empty($lista)){
            // echo '<h2>Você NÃO tem acesso</h2>';
            header('Location:login.php?mensagem=1');
        } else {
            // echo '<h2>Você tem acesso</h2>';
            header('Location:../caixa/caixa.php');
        }
    }
    
    validarLogin($usuario, $senha);
    ?>