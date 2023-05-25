<!DOCTYPE html>

<head>
</head>

<body>


    <form method="post">
        <label>Valor1:</label>
        <input type="text" name="valor1" id="valor1">
        <br />
        <label>Valor2:</label>
        <input type="text" name="valor2" id="valor2">
        <br />
        <label>Operação:</label>
        <input type="text" name="op" id="op">
        <br>
        <button type="submit" value="enviar">botau</button>
    </form>



    <?php
    function calcular($v1, $v2, $op)
    {

        if ($op == "somar") {
            $resultado = $v1 + $v2;
            return $resultado;
        }
        ;

        if ($op == "subtrair") {
            $resultado = $v1 - $v2;
            return $resultado;
        }
        ;

        if ($op == "multiplicar") {
            $resultado = $v1 * $v2;
            return $resultado;
        }
        ;

        if ($op == "dividir") {
            $resultado = $v1 / $v2;
            return $resultado;
        }
        ;

    }
    ;

    $dados = calcular($_POST["valor1"], $_POST["valor2"], $_POST["op"]);
    echo "Resultado =  $dados"
        ?>

</body>