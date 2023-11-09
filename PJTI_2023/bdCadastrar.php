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
    $_SESSION["error"] = '
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <div class="toast" style="position: absolute; top: 0; right: 0;">
      <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Gordão Lanches</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Logado com sucesso!
      </div>
    </div>
  </div>
  ';
  sleep(1);
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
} else {
    session_start();
    $_SESSION["error"] = '
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <div class="toast" style="position: absolute; top: 0; right: 0;">
      <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">Gordão Lanches</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        Erro de login!
      </div>
    </div>
  </div>
  ';
  sleep(1);
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
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