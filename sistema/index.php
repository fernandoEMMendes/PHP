<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        body {
            background-color: white
        }

        a:link ,a:visited {
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="container text-center mt-5">
        <img src="recursos/logo.png" alt="SEGA">
        <p>SEGA Enterprises, Ltd. (株式会社セガ・エンタープライゼズ Kabushiki-gaisha Sega Entāpuraizezu) was the company that
            resulted from the merger of Nihon Goraku Bussan and Rosen Enterprises. This company was acquired by
            Gulf+Western in 1969, put under the control of Sega Enterprises, Inc. in 1974, and then sold to CSK in 1984.
            It also acquired Esco Boueki. While owned by CSK, Sega Enterprises established an American subsidiary still
            in operation. Sega Enterprises would change its name to Sega Corporation on November 1, 2000[2].</p>
    </div>
    <br />
    <div class="container text-center">
        <h1>Login</h1>
    </div>

    <div class="container text-center">
        <form action="" method="post">
            <label for="email">E-mail</label><br />
            <input type="email" name="email" id="email"><br />

            <label  for="senha">Senha</label><br />
            <input type="password" name="senha" id="senha"><br /><br />

            <input class="btn btn-primary btn-lg" type="submit" value="verificar"><br />
            <a class="btn btn-danger btn-lg" href="cadastro.php">Cadastre-se<a><br />
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>