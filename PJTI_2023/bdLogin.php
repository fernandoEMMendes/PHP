<?php
session_start();

if (empty($_POST["email"]) or empty($_POST["senha"])) {
    $_SESSION["erro"] = '
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <div class="toast" style="position: absolute; top: 0; right: 0;">
      <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Dados obrigatórios não preenchidos!
      </div>
    </div>
  </div>
  ';

    //$_SESSION["erro"] = '<div class="alert alert-danger" role="alert"> Dados obrigatórios não preenchidos </div>';
    //echo "<meta http-equiv='refresh' content='0'; URL=index.php'/>";
    sleep(1);
    echo "<meta http-equiv='refresh' content='0'; URL=index.php'/>";
} else {
    $pdo = new PDO("mysql:host=localhost;dbname=gordaolanches", "root", "");

    $sql = $pdo->prepare("SELECT * FROM `user` WHERE email=? AND senha=?");

    $sql->execute(array($_POST["email"], sha1($_POST["senha"])));

    $results = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($results)) {
        $_SESSION["user"] = $_POST["email"];
        echo "<meta http-equiv='refresh' content='3; URL=mostrar_pedidos.php'/>";
    } else {
        $_SESSION["erro"] = '<div class="alert alert-danger" role="alert"> Usuario ou senha não encontrados </div>';
        echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logando. . .</title>
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