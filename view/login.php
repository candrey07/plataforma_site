<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <!-- compatibilidade -->
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale-1">

        <title>Plataforma - Login</title>
        <!-- CSS e Bootstrap -->
        <link href="./view/assets/css/bootstrap.css" rel="stylesheet">
        <link href="./view/assets/css/signin.css" rel="stylesheet">

    </head>
    <body class="bg-info">
        <div class="container">
            <div class="form-signin" style="background: #2e66ab;">
                <h2 class="text-center">Bem vindo a Plataforma</h2>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>

                <form method="post" action="./controller/valida.php">
                    <!-- <label>Usuário</label> -->
                    <input type="text" name="usuario" placeholder="Digite seu usuário" class="form-control"><br>

                    <!-- <label>Senha</label> -->
                    <input type="password" name="senha" placeholder="Digite sua senha" class="form-control"><br>

                    <input type="submit" name="btnLogin" value="Acessar" class="btn-block">

                    <div class="row text-center" style="margin-top: 20px;">
                        <h4>Ainda não posui uma conta ?</h4>
                        <a href="./view/cadastrar.php" style="color: #000"> Crie grátis</a>
                    </div>                    
                </form>
            </div>
        </div>
        <a href="./view/main.php">TESTEEEE</a><br>
        <a href="./view/localizar.php">TESTEEEE222</a><br>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="./view/assets/js/bootstrap.min.js"></script>        
    </body>
</html>
