<?php

$escolha = "par";
$valorUsuario = 9;
$valorNPC = 5;


if ($escolha == "par" or $escolha == "impar" or $escolha == "ímpar") {
} else {
    echo "invalido";
} {

    if (is_numeric($valorUsuario) and $valorUsuario >= 0 and $valorUsuario <= 10)

        $valorNPC = random_int(0, 10);

    $resultaldo = $valorNPC + $valorUsuario;

    echo ("$valorUsuario + $valorNPC = $resultado");
    echo "Escolha do usuario = $escolha";



    if (($resultado % 2) == 0)

        if ($valorUsuario == "par") {
            echo "ganhou!";
        } else {
            echo "perdeu!";
        }


    if (($resultado % 2) == 0)

        if ($valorUsuario == "impar" or $valorUsuario = "ímpar") {
            echo "ganhou!";
        } else {
            echo "perdeu!";
        }

}



;







?>