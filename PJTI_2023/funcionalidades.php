<?php
session_start();

if (empty($_SESSION['identificador'])) {
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
    echo "<script>alert('Usuário não logado!')</script>";
}
?>

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
    <title>Gordão | Funcionalidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark text-white bodyCSS">
    <?php
    include "components/header2.php"
        ?>

    <div class="container text-center">
        <h2 class="mt-2">Menus de opções</h3>

            <br />

            <a class="btn btn-lg btn-secondary mt-2" href="criarPedidos.php">Criar Pedidos</a>
            <br /> <br />
            <a class="btn btn-lg btn-secondary mt-2" href="mostrarPedidos.php">Mostrar Pedidos</a>
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