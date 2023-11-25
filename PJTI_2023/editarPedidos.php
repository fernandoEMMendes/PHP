<?php
session_start();

if (empty($_SESSION['identificador'])) {
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
    echo "<script>alert('Usuário não logado!')</script>";
}

$pdo = new PDO("mysql:host=localhost;dbname=gordaolanches", "root", "");
$sql = $pdo->prepare("SELECT * FROM `pedidos` WHERE id=?");
$sql->execute(array($_GET['id']));
$info = $sql->fetchAll(PDO::FETCH_ASSOC);

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
    <title>Gordão | Funcionalidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark text-white bodyCSS">
    <?php
    include "components/header2.php"
    ?>

    <div class="container text-center">
        <h2 class="mt-2">Modificar Pedidos</h3>

            <br />

            <form action="bdEditar.php" method="post">
                <div class="row">
                    <div class="col-md-1 mt-4">
                        <h3>ID</h3>
                        <input readonly class="form-control" type="text" name="id" id="" placeholder="ID" value="<?php if (isset($info)) {echo $info[0]['id'];}?>">
                    </div>

                    <div class="col-md-12 mt-4">
                        <input required class="form-control" type="text" name="nomeCliente" id="" placeholder="Nome de chamada" value="<?php if (isset($info)) {echo $info[0]['nomeCliente'];}?>">
                    </div>

                    <div class="col-md-6 mt-4">
                        <h3>Delivery?</h3>
                        <select name="tipoEntrega" id="" onchange='on_change(this)' required>
                            <option <?php if ($info[0]['tipoEntrega'] == "presencial") echo "selected"; ?>>Não</option>
                            <option <?php if ($info[0]['tipoEntrega'] == "entrega") echo "selected"; ?>>Sim</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-4">
                        <h3>Lanche</h3>
                        <select required name="lanche" id="">
                            <option <?php if ($info[0]['lanche'] == "hamburger") echo "selected"; ?>>Hamburger</option>
                            <option <?php if ($info[0]['lanche'] == "hotdog") echo "selected"; ?>>Hotdog</option>
                            <option <?php if ($info[0]['lanche'] == "misto quente") echo "selected"; ?>>Misto Quente</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-4">
                        <h3>Bebida</h3>
                        <select name="bebida" id="">
                            <option <?php if ($info[0]['bebida'] == "") echo "selected"; ?>>Nenhum</option>
                            <option <?php if ($info[0]['bebida'] == "cocacola 600ml") echo "selected"; ?>>Coca-Cola 600ml</option>
                            <option <?php if ($info[0]['bebida'] == "pepsi 600ml") echo "selected"; ?>>Pepsi 600ml</option>
                            <option <?php if ($info[0]['bebida'] == "guarana 600ml") echo "selected"; ?>>Guaraná Antarctica 600ml</option>
                        </select>
                    </div>

                    <div class="col-md-6 mt-4">
                        <h3>Acompanhante</h3>
                        <select name="acompanhamento" id="">
                            <option <?php if ($info[0]['acompanhamento'] == "") echo "selected"; ?>>Nenhum</option>
                            <option <?php if ($info[0]['acompanhamento'] == "batata frita") echo "selected"; ?>>Batata Frita</option>
                            <option <?php if ($info[0]['acompanhamento'] == "aneis de cebola") echo "selected"; ?>>Anéis de cebola</option>
                            <option <?php if ($info[0]['acompanhamento'] == "nugget") echo "selected"; ?>>Nuggets</option>
                        </select>
                    </div>

                    <div id="text">
                        <h1 class="mt-5">Para delivery</h1>
                        <h4 class="mt-5">(Caso ouver mudança no delivery para "NÃO", deixar campos EM BRANCO)</h4>

                        <div class="col-md mt-4">
                        <h3>cep</h3>
                            <input class="form-control" type="text" name="cep" id="" value="<?php if (isset($info)) {echo $info[0]['cep'];}?>" placeholder="cep" />
                        </div>

                        <div class="col-md mt-4">
                        <h3>bairro</h3>
                        <input class="form-control" type="text" name="bairro" id="" value="<?php if (isset($info)) {echo $info[0]['bairro'];}?>" placeholder="bairro" />
                        </div>

                        <div class="col-md mt-4">
                            <h3>rua</h3>
                            <input class="form-control" type="text" name="rua" id="" value="<?php if (isset($info)) {echo $info[0]['rua'];}?>" placeholder="rua" />
                        </div>

                        <div class="col-md mt-4">
                            <h3>número da moradia</h3>
                            <input class="form-control" type="text" name="numero" id="" value="<?php if (isset($info)) {echo $info[0]['numero'];}?>" placeholder="número da moradia" />
                        </div>
                    </div>
                </div>

                <div>
                    <input class="btn btn-primary btn-lg mt-5" type="submit" value="Modificar" />
                    <a class="btn btn-lg btn-danger mt-5 text-light" href="mostrarPedidos.php">Cancelar</a>
                </div>
                <br /> <br /> <br /> <br />                
            </form>
    </div>

    <footer class="footer py-3 bg-black fixed-bottom">
        <div class="container text-center">
            <h3 class="text-light">Gordão Lanches - 2023</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>