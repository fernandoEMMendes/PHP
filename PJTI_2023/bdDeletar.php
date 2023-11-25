<?php
session_start();

if (empty($_SESSION['identificador'])) {
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
    echo "<script>alert('Usuário não logado!')</script>";
}

$pdo = new PDO("mysql:host=localhost;dbname=gordaolanches", "root", "");

$sql = $pdo->prepare("DELETE FROM `pedidos` WHERE id=?");
$sql->execute(array($_GET['id']));

echo "<meta http-equiv= 'refresh' content='0; URL=mostrarPedidos.php'/>";
