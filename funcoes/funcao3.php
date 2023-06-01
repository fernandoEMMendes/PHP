<!DOCTYPE html>

<head>
</head>

<body>

    <form method="post">
        <label>Nome</label>
        <input type="text" name="nome" id="nome"> <br>
        <label>Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome"> <br>


        <label>Ano de Nascimento</label>
        <input type="text" name="datanas" id="datanas"> <br>
        <label>Ano Atual</label>
        <input type="text" name="data" id="data"> <br>


        <label>Qual sua fruta favorita?</label>
        <select name="frutafav" id="frutafav">
            <option name="nada" id="nada">Selecione uma</option>
            <option name="banana" id="banana">Banana</option>
            <option name="morango" id="morango">Morango</option>
            <option name="caju" id="caju">Caju</option>
        </select>
        <br>

        <label>O céu é amarelo?</label>
        <input type="checkbox" name="check" id="check">
        <br>
        <input type="submit" name="enviar">
    </form>

    <?php
    function recuperar($nome, $sobrenome)
    {

        echo "<br> <br> $nome<br>";
        echo " $sobrenome<br>";

    }

    function conta($valor1, $valor2)
    {

        $resultado = $valor1 - $valor2;

        echo "idade: $resultado<br>";
    }

    function frutafav($fav)
    {

        echo "Sua fruta favorita é: $fav<br>";
    }

    function ceu($check)
    {
        if ($check = true) {
            echo "Você é daltonico<br>";
        } else {
            echo "Você NÃO é daltonico<br>";
        }
    }

    $dados = recuperar($_POST["nome"], $_POST["sobrenome"]);
    $dados2 = conta($_POST["data"], $_POST["datanas"]);
    $dados3 = frutafav("frutafav");
    $dados4 = ceu($_POST["check"]);

    ?>
</body>