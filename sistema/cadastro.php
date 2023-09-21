<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-light">
    <nav class="navbar bg-black">
        <a class="navbar-brand" href="http://localhost/MeusProjetos/sistema/">
            <img src="recursos/logo_dark.jpg" style="width: 8rem" alt="SEGA">
        </a>
    </nav>

    <div class="container text-center">

        <h2>Cadastro de usuários</h2>

        <?php
        if (!empty($_SESSION["erro"])) {
            echo $_SESSION["erro"];
            unset($_SESSION["erro"]);
        }
        ?>

        <form action="bd.php" method="post">

            <div class="row">
                <div class="col-md-6">
                    <input class="form-control " type="text" name="nome" id="" placeholder="Nome" required>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="text" name="sobrenome" id="" placeholder="Sobrenome" required>
                </div>
            </div class="row">

            <br />

            <div class="row">
                <div class="col-md-6">
                    <input class="form-control " type="email" name="email" id="" placeholder="Email" required>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="password" name="senha" id="" placeholder="Senha" required>
                </div>
            </div class="row">



            <div class="row">
                <div class="col-md-6">
                    <input class="form-control " type="email" name="emailconfirm" id="" placeholder="Confirmar Email"
                        required>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="password" name="senhaconfirm" id="" placeholder="Confirmar Senha"
                        required>
                </div>
            </div class="row">

            <br />

            <div class="col-md-12">
                <select required name="sexo" required id="" required>
                    <option value="">Selecione um</option>
                    <option value="fem">Feminino</option>
                    <option value="mas">Masculino</option>
                    <option value="indefinido">Prefiro não responder</option>
                </select>
            </div>

            <br />


            <div class="row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="endereco" id="" placeholder="Endereço" required>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="text" name="numero" id="" placeholder="N°" required>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="cidade" id="" placeholder="Cidade" required>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="text" name="estado" id="" placeholder="Estado" required>
                </div>
            </div>

            <br />

            <div class="row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="rg" id="" placeholder="RG" required>
                </div>

                <div class="col-md-6">
                    <input class="form-control" type="text" name="cpf" id="" placeholder="CPF" required>
                </div>

                <div class="col-md-12">
                    <input class="form-control" type="date" name="data_nas" id="" placeholder="Data de Nascimento"
                        required>
                </div>
            </div>

            <br />



            <div>
                <input class="btn btn-primary btn-lg" type="submit" value="cadastrar">
            </div>
        </form>



        <footer class="footer py-3 bg-black fixed-bottom">
            <div class="container text-center">
                <h3 class="text-light">Todos os direitos reservados - 2023</h3>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
</body>

</html>