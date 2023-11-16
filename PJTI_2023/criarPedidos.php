<?php
session_start();

if (!isset($_SESSION['identificador'])) {
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
    <title>Gordão | Criar Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark text-white bodyCSS">
    <?php
    include "components/header2.php"
        ?>

    <h1 class="text-center">
        <img src="imgs/logo.png" alt="Gordão Lanches!" class="w-25" />
    </h1>

    <div class="container text-center">
        <h2>Criar Pedidos</h2>

        <form action="bdCriarPedidos.php" method="post">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <input class="form-control" type="text" name="nomeCliente" id="" value=""
                        placeholder="Nome de chamada" required />
                </div>

                <div class="col-md-6 mt-4">
                    <h3>entrega</h3>
                    <select name="tipoEntrega" id="" required>
                        <option value="">Selecione um</option>
                        <option value="presencial">Comer no estabelecimento</option>
                        <option value="entrega">Entrega por delivery</option>
                    </select>
                </div>

                <div class="col-md-6 mt-4">
                    <h3>Lanche</h3>
                    <select name="lanche" id="">
                        <option value="">Nenhum</option>
                        <option value="hamburger">Hamburger</option>
                        <option value="hotdog">Hotdog</option>
                        <option value="misto quente">Misto Quente</option>
                    </select>
                </div>

                <div class="col-md-6 mt-4">
                    <h3>Bebida</h3>
                    <select name="bebida" id="">
                        <option value="">Nenhum</option>
                        <option value="cocacola600ml">Coca-Cola 600ml</option>
                        <option value="pepsi600ml">Pepsi 600ml</option>
                        <option value="guarana600ml">Guaraná Antarctica 600ml</option>
                    </select>
                </div>

                <div class="col-md-6 mt-4">
                    <h3>Acompanhante</h3>
                    <select name="acompanhamento" id="">
                        <option value="">Nenhum</option>
                        <option value="batata frita">Batata Frita</option>
                        <option value="aneis de cebola">Anéis de cebola</option>
                        <option value="nugget">Nuggets</option>
                    </select>
                </div>


                <h1 class="mt-5">Para delivery</h1>

                <div class="col-md-6 mt-4">
                    <input class="form-control" type="text" name="cep" id="" value="" placeholder="cep" required />
                </div>

                <div class="col-md-6 mt-4">
                    <input class="form-control" type="text" name="bairro" id="" value="" placeholder="bairro"
                        required />
                </div>

                <div class="col-md-6 mt-4">
                    <input class="form-control" type="text" name="rua" id="" value="" placeholder="rua" required />
                </div>

                <div class="col-md-6 mt-4">
                    <input class="form-control" type="text" name="numero" id="" value="" placeholder="número da moradia"
                        required />
                </div>
            </div>


            <div>
                <input class="btn btn-primary btn-lg mt-5" type="submit" value="criar" />
            </div>
        </form>
    </div>

    <footer class="footer py-3 bg-black mt-5">
        <div class="container text-center">
            <h3 class="text-light">Gordão Lanches - 2023</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>