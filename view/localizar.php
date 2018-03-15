<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
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
            <h2 class="text-center">Selecione o serviço que quer localizar</h2><br>
            <div>
                <!--Botão técnico e link -->
                <a href="./main.php"><input type="submit" name="tec" value="Técnico em Informática" class="btn-primary"></a>
                <a href="./main.php"><input type="submit" name="gas" value="Pontos de Gás" class="btn-primary"></a>
                <a href="./main.php"><input type="submit" name="h2o" value="Água Mineral" class="btn-primary"></a>
                <a href="./main.php"><input type="submit" name="pet" value="Petshop" class="btn-primary"></a>
                <a href="./main.php"><input type="submit" name="Pedreiro" value="Pedreiro" class="btn-primary"></a>
                <a href="./main.php"><input type="submit" name="cabelereiro" value="Cabelereiro" class="btn-primary"></a>
                <a href="./main.php"><input type="submit" name="Manicure" value="Manicure" class="btn-primary"></a>                
            </div>
        </div>    
        <?php
        // put your code here
        ?>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
    </body>
</html>
