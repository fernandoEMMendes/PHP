<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        <?php include "./css/indexP.css" ?>
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac - EMED 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-light">

    <?php
    include "./components/Header.php"
    ?>

    <br />

    <div class="container-fluid px-4">
        <div class="row gx-5">
            <div class="col text-center textCSS">
                <br />
                <button>
                    <a href="./EntrevistaBauru.php"><img src="./imgs/Bauru.jpg" class="imgCSS" href="./EntrevistaBauru.php" /></a>
                </button>
                <a href="./EntrevistaBauru.php">Forms Bauru</a>
            </div>

            <div class="col text-center textCSS">
                <br />
                <img src="./imgs/placeholder.png" class="img-fluid" />
                <a>placeholder</a>
            </div>

            <div class="col text-center textCSS">
                <br />
                <img src="./imgs/placeholder.png" class="img-fluid" />
                <a>placeholder</a>
            </div>
        </div>
    </div>

    <br />

    <div class="container-fluid px-3">
        <div class="row gx-5">
            <div class="col text-center textCSS">
                <br />
                <button>
                    <a href="./EntrevistaHydrotech.php"><img src="./imgs/GoogleForms.png" class="img-fluid" href="./EntrevistaHydrotech.php" /></a>
                </button>
                <a href="./EntrevistaHydrotech.php">Entrevista DAE</a>
            </div>

            <div class="col text-center textCSS">
                <br />
                <img src="./imgs/placeholder.png" class="img-fluid" />
                <a>placeholder</a>
            </div>

            <div class="col text-center textCSS">
                <br />
                <img src="./imgs/placeholder.png" class="img-fluid" />
                <a>placeholder</a>
            </div>
        </div>
    </div>

    <?php
    include "./components/Footer.php"
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>