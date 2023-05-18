<?php

$vetDados = [
    'nome' => 'João',
    'idade' => 20,
    'cidade' => 'Bauru',
];

echo "<br>O nome da pessoa é:", $vetDados['nome'], "<br>";
echo "<br>A idade da pessoa é:", $vetDados['idade'], "<br>";
echo "<br>A cidade da pessoa é:", $vetDados['Bauru'], "<br>";

$vetDados['profissao'] = 'professor';
echo "<br>";

if (array_key_exists('profissao', $vetDados)) {
    echo "<br>Empregado.<br>";
} else {
    echo "<br>Vagabundo.<br>";
}

?>