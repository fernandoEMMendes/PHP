<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "<script>alert('Usuário não logado!'</script>";
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-black">
        <a class="navbar-brand" href="http://localhost/MeusProjetos/sistema/">
            <img src="recursos/logo_dark.jpg" style="width: 8rem" alt="SEGA">
            <a class="btn btn-lg btn-light mt-2" href="logout.php"><img src="recursos/logout.png"
                    style="width: 2rem; color: light" /></a>
        </a>
    </nav>

    <br />

    <div class="container text-center">
        <table class="table table-hover mt-2">
            <thead>
                <thead>
                    <th class="col">Id</th>
                    <th class="col">Nome</th>
                    <th class="col">E-mail</th>
                    <th class="col">Opções</th>
                </thead>
            </thead>
            <tbody>
                <?php
                $pdo = new PDO("mysql:host=localhost;dbname=aulasphp", "root", "");

                $sql = $pdo->prepare("SELECT id, nome, email FROM 'usuarios'");

                $sql->execute(array())
                    ?>
            </tbody>
        </table>
    </div>




    <footer class="footer py-3 bg-black fixed-bottom">
        <div class="container text-center">
            <h3 class="text-light" href="">Todos os direitos reservados - 2023</h3>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>