<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        a:link,
        a:visited {
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center mt-5">
        <div class="dropdown-center">
            <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="recursos/logo.png" alt="SEGA">
            </a>
            <ul class="dropdown-menu">
                <li>
                    <p>A Sega Corporation (株式会社セガ Kabushiki Gaisha Sega?) é uma desenvolvedora e publicadora japonesa de
                        jogos
                        eletrônicos sediada em Tóquio possuindo ramos internacionais sediados em Irvine nos Estados
                        Unidos e
                        em
                        Londres no Reino Unido. Foi fundada em 1960 pelo norte-americano Martin Bromley, originalmente
                        como
                        duas
                        companhias separadas chamadas Nihon Goraku Bussan e Nihon Kikai Seizō, que tinham a intenção de
                        assumir
                        os
                        negócios da antiga Service Games of Japan, uma empresa especializada em máquinas caça-níqueis
                        para
                        bases
                        militares. As duas companhias acabaram se fundindo não muito depois e compraram a Rosen
                        Enterprises
                        em
                        1965,
                        passando então a operar com o nome de Sega Enterprises. <br /> <br />
                    </p>
                    <a href="https://pt.wikipedia.org/wiki/Sega" class="text-dark">Referência</a>
                </li>
                <ul>
        </div>
    </div>
    <br />
    <div class="container text-center">
        <h1>Login</h1>
    </div>

    <div class="container text-center">
        <form action="login.php" method="post">
            <label for="email">E-mail</label><br />
            <input type="email" name="user" id="usuario"><br />

            <label for="senha">Senha</label><br />
            <input type="password" name="senha" id="senha"><br /><br />

            <input class="btn btn-primary btn-lg" type="submit" value="verificar"><br />
            <a class="btn btn-danger btn-lg" href="cadastro.php">Cadastre-se<a><br />
        </form>
        
        <?php
        if (!empty($_SESSION["erro"])) {
            echo $_SESSION["erro"];
            unset($_SESSION["erro"]);
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>