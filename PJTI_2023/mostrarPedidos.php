<?php
session_start();

if (empty($_SESSION['identificador'])) {
    echo "<script>alert('Usuário não logado!'</script>";
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
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
    <title>Gordão | Mostrar Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark text-white bodyCSS">
    <?php
    include "components/header2.php"
    ?>

    <div class="container text-center">
        <h1>Mostrar Pedidos</h1>
    </div>

    <br />

    <div class="container text-center">
        <table class="table table-hover mt-2">
            <thead>
                <thead>
                    <th class="col">Id</th>
                    <th class="col">Nome</th>
                    <th class="col">Delivery?</th>
                    <th class="col">Lanche</th>
                    <th class="col">Bebida</th>
                    <th class="col">acompanhamento</th>
                    <th class="col">Cep</th>
                    <th class="col">Bairro</th>
                    <th class="col">Rua</th>
                    <th class="col">Numero</th>
                    <th class="col">Opções</th>
                </thead>
            </thead>
            <tbody>
                <?php
                $pdo = new PDO("mysql:host=localhost;dbname=gordaolanches", "root", "");

                $sql = $pdo->prepare("SELECT id, nomeCliente, tipoEntrega, lanche, bebida, acompanhamento, cep, bairro, rua, numero FROM `pedidos`");

                $sql->execute(array());

                $info = $sql->fetchAll(PDO::FETCH_ASSOC);


                foreach ($info as $key => $value) {

                    echo "<tr>";
                    echo "<th scope='row'>" . $info[$key]['id'] . "</th>";
                    echo "<td>" . $info[$key]['nomeCliente'] . "</td>";
                    echo "<td>" . $info[$key]['tipoEntrega'] . "</td>";
                    echo "<td>" . $info[$key]['lanche'] . "</td>";
                    echo "<td>" . $info[$key]['bebida'] . "</td>";
                    echo "<td>" . $info[$key]['acompanhamento'] . "</td>";
                    echo "<td>" . $info[$key]['cep'] . "</td>";
                    echo "<td>" . $info[$key]['bairro'] . "</td>";
                    echo "<td>" . $info[$key]['rua'] . "</td>";
                    echo "<td>" . $info[$key]['numero'] . "</td>";
                    echo "<td>
                            <a class='btn btn-dark btn-lg' href='editarPedidos.php?id=" . $info[$key]['id'] . "'>Edit</a> 
                            <a class='btn btn-warning btn-lg' href='bdDeletar.php?id=" . $info[$key]['id'] . "'>Del</a>
                        </td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

    <br /> <br /><br /><br /><br /><br /><br /> <br /> <br /><br /><br /><br /><br /><br />

    <footer class="footer py-3 bg-black mt-5">
        <div class="container text-center">
            <h3 class="text-light">Gordão Lanches - 2023</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>