<?php

$escolhausuario = "par";
$valorUsuario = 5;
$valorNPC = 5;

echo "Jogo Par ou Impar";

if ($escolhausuario == "par" or $escolhausuario == "impar" or $escolhausuario == "impar")


{    
} else {
    echo "Número Invalido";
}

if (is_numeric(($valorUsuario)) and $valorUsuario >= 0 and $valorUsuario <= 10)

$valorNPC = random_int(0, 10);
$resultado = $valorUsuario + $valorNPC;
echo "$valorUsuario + $valorNPC = $resultado";
echo "Escolha do usuario = $escolhausuario <br/>";

if (($resultado % 2) == 0)

if($escolhausuario == "par") {
    echo "ganhou";
} else {
    echo "perdeu";
}

if ($escolhausuario == "impar" or $escolhausuario =="ímpar") {
    echo "ganhou";
} else {
    echo "perdeu";
}











?>