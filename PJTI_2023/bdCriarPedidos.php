<?php

session_start();

if (empty($_SESSION['identificador'])) {
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
    echo "<script>alert('Usuário não logado!')</script>";
}

$pdo = new PDO("mysql:host=localhost;dbname=gordaolanches", "root", "");

$sql = $pdo->prepare("INSERT INTO `pedidos` values (null,?,?,?,?,?,?,?,?,?)");

$sql->execute(
    array(
        $_POST["nomeCliente"],
        $_POST["tipoEntrega"],
        $_POST["lanche"],
        $_POST["bebida"], //pode ser NULL
        $_POST["acompanhamento"], //pode ser NULL
        $_POST["cep"], //pode ser NULL
        $_POST["bairro"], //pode ser NULL
        $_POST["rua"], //pode ser NULL
        $_POST["numero"], //pode ser NULL
    )
);

echo "<meta http-equiv='refresh' content='3; URL=funcionalidades.php'/>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando pedido. . .</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark text-white bodyCSS">

    <div>
        <h1>Processando. . .</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>