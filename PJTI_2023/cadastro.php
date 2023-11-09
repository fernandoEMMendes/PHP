<?php
session_start()
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark text-white bodyCSS">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="./index.php"><img src="imgs/hamburger.png" class="w-25" /></a>
    </nav>

    <div class="container text-center">
        <h2>Formulário de cadastro</h2>

        <?php
        if (!empty($_SESSION["erro"])) {
            echo $_SESSION["erro"];
            unset($_SESSION["erro"]);
        }
        ?>

        <form action="bdCadastrar.php" method="post">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <input class="form-control" type="text" name="nome" id="" placeholder="Nome" required />
                </div>

                <div class="col-md-6 mt-4">
                    <input class="form-control" type="email" name="email" id="" placeholder="E-mail" required />
                </div>

                <div class="col-md-6 mt-4">
                    <input class="form-control" type="password" name="senha" id="" placeholder="Senha" required />
                </div>

                <div class="col-md-6 mt-4">
                    <input class="form-control" type="password" name="senhaconfirm" id="" placeholder="Confirmar Senha"
                        required />
                </div>

                <div class="mt-5">
                    <input class="btn btn-primary btn-lg" type="submit" value="cadastrar" />
                </div>
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
    </div>
</body>