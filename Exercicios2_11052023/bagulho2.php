<?php

$Nome1 = ["João"];
$Nome2 = ["Anton"];
$Nome3 = ["Marcelo"];

$Nome4 = ["Gabriel"];
$Nome5 = ["Maria"];

if (empty($Nome1)) {
    echo "Nome1 Ta vazio";
} else {
    echo "Nome1 Tem valor";
}

if (empty($Nome2)) {
    echo "<br>Nome2 Ta vazio";
} else {
    echo "<br>Nome2 Tem valor";
}

if (empty($Nome3)) {
    echo "<br>Nome3 Ta vazio";
} else {
    echo "<br>Nome3 Tem valor";
}



if (empty($Nome4)) {
    echo "<br>Nome4 Ta vazio";
} else {
    echo "<br>Nome4 Tem valor";
}

if (empty($Nome5)) {
    echo "<br>Nome5 Ta vazio";
} else {
    echo "<br>Nome5 Tem valor";
}

echo "<br>";

//junta arrays
$Nomes = array_merge($Nome1, $Nome2, $Nome3, $Nome4, $Nome5);
echo "<br>";
print_r($Nomes);

//tira ao ultimo valor
array_pop($Nomes);
echo "<br>";
print_r($Nomes);

//organiza em ordem alfabetica
sort($Nomes);
echo "<br>";
print_r($Nomes)

    ?>