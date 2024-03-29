<?php
if ($_POST["senha"] == $_POST["senhaconfirm"]) {
    $pdo = new PDO("mysql:host=localhost;dbname=gordaolanches", "root", "");

    $sql = $pdo->prepare("INSERT INTO `user` values (null,?,?,?)");

    $sql->execute(
        array(
            $_POST["nome"],
            $_POST["email"],
            sha1($_POST["senha"]),
        )
    );

    session_start();
    $_SESSION["error"] =
        '<div class="alert alert-success" role="alert">Cadastrado com sucesso</div>';
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
} else {
    session_start();
    $_SESSION["error"] =
        '<div class="alert alert-danger" role="alert">Erro</div>';
    echo "<meta http-equiv='refresh' content='3; URL=cadastro.php'/>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando. . .</title>
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