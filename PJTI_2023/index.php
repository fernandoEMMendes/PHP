<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        <?php
        include "css/body.css"
            ?>
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark text-white bodyCSS">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand"><img src="imgs/hamburger.png" class="w-25" /></a>
    </nav>

    <h1 class="text-center">
        <img src="imgs/gordaoLanches.png" alt="Gordão Lanches!" class="w-25" />
    </h1>

    <div class="container text-center">
        <form action="login.php" method="post">
            <label>Email:</label> <br />
            <input type="text" placeholder="insira email" class="text-center" /> <br /> <br />
            <label>Senha:</label> <br />
            <input type="password" placeholder="insira senha" class="text-center" /> <br />

            <br />

            <input class="btn btn-secondary btn-lg" type="submit" value="verificar">
            <a class="btn btn-secondary btn-lg" href="cadastro.php">Cadastro<a>
        </form>
    </div>


    <footer class="footer py-3 bg-black fixed-bottom">
        <div class="container text-center">
            <h3 class="text-light">Gordão Lanches - 2023</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>