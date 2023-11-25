<?php
session_start();

if (empty($_SESSION['identificador'])) {
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
    echo "<script>alert('Usuário não logado!')</script>";
}

$pdo = new PDO("mysql:host=localhost;dbname=gordaolanches", "root", "");
$sql = $pdo->prepare("SELECT * FROM `pedidos` WHERE id=?");
$sql->execute(array($_POST['id']));
$info = $sql->fetchAll(PDO::FETCH_ASSOC);

if ($sql->execute(array(
    $_POST["tipoEntrega"] == "presencial"
))) {
    $sql = $pdo->prepare("UPDATE `pedidos` SET nomecliente=?, tipoEntrega=?, lanche=?, bebida=?, acompanhamento=?, cep=null, bairro=null, rua=null, numero=null WHERE id=?");
$sql->execute(array(
    $_POST['nomeCliente'],
    $_POST['tipoEntrega'],
    $_POST['lanche'],
    $_POST['bebida'],
    $_POST['acompanhamento'],
    $_POST['id']
));
}

$sql = $pdo->prepare("UPDATE `pedidos` SET nomecliente=?, tipoEntrega=?, lanche=?, bebida=?, acompanhamento=?, cep=?, bairro=?, rua=?, numero=? WHERE id=?");
$sql->execute(array(
    $_POST['nomeCliente'],
    $_POST['tipoEntrega'],
    $_POST['lanche'],
    $_POST['bebida'],
    $_POST['acompanhamento'],
    $_POST['cep'],
    $_POST['bairro'],
    $_POST['rua'],
    $_POST['numero'],
    $_POST['id']
));

echo "<meta http-equiv='refresh' content='3; URL=mostrarPedidos.php'/>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificando pedido. . .</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark text-white bodyCSS">

    <div>
        <h1>Processando. . .</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>