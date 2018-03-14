<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Plataforma - Cadastrar</title>
        
        <!-- CSS e Bootstrap -->
        <link href="./assets/css/bootstrap.css" rel="stylesheet">
        <link href="./assets/css/signin.css" rel="stylesheet">
        
    </head>
    <body class="bg-info">
        <div class="container">
            <div class="form-signin" style="background: #2e66ab;">
                <h2>Cadastro de usuário</h2>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form method="POST" action="">
                    <!--<label>Nome</label>-->
                    <input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class="form-control"><br>

                    <!--<label>E-mail</label>-->
                    <input type="text" name="email" placeholder="Digite o seu e-mail" class="form-control"><br>

                    <!--<label>Usuário</label>-->
                    <input type="text" name="contato" placeholder="Digite seu contato" class="form-control"><br>

                    <!--<label>Senha</label>-->
                    <input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>

                    <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn-block"><br><br>

                    <div class="row text-center" style="margin-top: 20px;"> 
                        Voltar ? <a href="../index.php" style="color: #000">Clique aqui</a> para logar
                    </div>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
    </body>
</html>