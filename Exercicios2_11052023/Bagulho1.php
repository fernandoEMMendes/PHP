<!DOCTYPE html>

<head>
</head>

<body>

    <h3>¯\_(ツ)_/¯</h3> 

    <?php

    $Numeros = [1, 2, 3, 4, 5];

    //array_sum para somar um array
    $soma = array_sum($Numeros);

    //indicar qual o maior valor
    $maior = max($Numeros);

    print_r($Numeros);

    echo "<br> Resultado: {$soma}";
    echo "<br> Maior: {$maior}";

    //verificar se um valor esta presente
    if (in_array(4, $Numeros)) {
        echo "<br>O valor ESTA presente.";
    } else {
        echo "<br>O valor NÃO está presente.";
    }

    //remove o ultimo valor do vetor
    array_pop($Numeros);
    echo "<br>";
    print_r($Numeros);


    ?>
</body>