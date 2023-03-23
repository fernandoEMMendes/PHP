<?php
//Validar a inserção de notas para o cálculo de média

$n1 = 10;
$n2 = 8;
$n3 = 3;
$n4 = 6;

$n5 = 4;

if ($n1 <= 10) {
    echo "N1 Validado";
    if ($n2 <= 10) {
        echo "N2 Validado";
        if ($n3 <= 10) {
            echo "N3 Validado";
            if ($n4 <= 10) {

                $media = ($n1 + $n2 + $n3 = $n4) / $n5;
                echo " O resultado da média é: ($media)";

            }
        }
    }
}

//Operador Lógico

if($n1 <= 10 and $n2 <= 10 and $n3 <= 10 and $n4 <= 10) {
    $media = ($n1 + $n2 + $n3 = $n4) / $n5;
    echo " O resultado da média é: ($media)";
} else { 
    echo " Calculo invalido malandro";
}

?>