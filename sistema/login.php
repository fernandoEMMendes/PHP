<?php
session_start();


if (empty($_POST["user"]) or empty($_POST["senha"])) {

    $_SESSION["erro"] = '<div class="alert alert-danger" role="alert"> Dados obrigatórios não preenchidos </div>';
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
} else {
    
    $pdo = new PDO("mysql:host=localhost;dbname=aulasphp", "root", "");

    $sql = $pdo->prepare("SELECT * FROM `usuario` WHERE email=? AND senha=?");

    $sql->execute(array($_POST["user"], sha1($_POST["senha"])));

    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($resultado)) {
        echo "Usuario valido";
    } else {
        $_SESSION["erro"] = '<div class="alert alert-danger" role="alert"> Usuario o    u senha não encontrados </div>';
        echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
    }
}

?>