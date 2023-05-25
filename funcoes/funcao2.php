<!DOCTYPE html>
<head>
</head>
<body>


<form method="post">
        <label>Salario:</label>
        <input type="text" name="sal" id="sal">
        <br />
        <button type="submit" value="enviar">Reajustar</button>
    </form>

<?php

function reajuste($sal)
{
    if ($sal == 1300) {
        $conta = $sal * 0.10;
        $resultado = $sal + $conta;
        return $resultado;
    }
    

    if ($sal <= 5199) {
        $conta = $sal * 0.05;
        $resultado = $sal + $conta;
        return $resultado;
    }
    

    if ($sal >= 5200) {
        $conta = $sal * 0.03;
        $resultado = $sal + $conta;
        return $resultado;
    }
}

$dados = reajuste($_POST["sal"]);
echo "O reajuste anual será de: $dados"

?>
</body>