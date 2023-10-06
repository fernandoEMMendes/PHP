<?php
session_start();


if (empty($_POST["user"]) or empty($_POST["senha"])) {

    $_SESSION["erro"] = '<div class="alert alert-danger" role="alert"> Dados obrigatórios não preenchidos </div>';
    echo "<meta http-equiv='refresh' content='0'; URL=index.php'/>";
} else {

    $pdo = new PDO("mysql:host=localhost;dbname=aulasphp", "root", "");

    $sql = $pdo->prepare("SELECT * FROM `usuario` WHERE email=? AND senha=?");

    $sql->execute(array($_POST["user"], sha1($_POST["senha"])));

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($resultado)) {
        $_SESSION['usuario'] = $_POST['user'];
        echo "<meta http-equiv='refresh' content='3; URL=principal.php'/>";
    } else {
        $_SESSION["erro"] = '<div class="alert alert-danger" role="alert"> Usuario ou senha não encontrados </div>';
        echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>