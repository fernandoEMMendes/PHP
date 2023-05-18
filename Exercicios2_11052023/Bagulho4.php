<?php

$vetDados = [
    [
        "Nome" => "Nome<br>",
        "Endereço" => "Endereço<br>",
        "Cidade" => "Cidade<br>",
        "Estado" => "Endereço<br>",
        "Bairro" => "Bairro<br>",
        "Escolaridade" => "Ensino Médio Completo<br>",
    ],
    [
        "Nome" => "Nome2<br>",
        "Endereço" => "Endereço2<br>",
        "Cidade" => "Cidade2<br>",
        "Estado" => "Endereço2<br>",
        "Bairro" => "Bairro2<br>",
        "Escolaridade" => "Ensino Médio Não Completo<br>",
    ],
    [
        "Nome" => "Nome3<br>",
        "Endereço" => "Endereço3<br>",
        "Cidade" => "Cidade3<br>",
        "Estado" => "Endereço3<br>",
        "Bairro" => "Bairro3<br>",
        "Escolaridade" => "Ensino Básico Completo<br>",
    ],
    [
        "Nome" => "Nome4<br>",
        "Endereço" => "Endereço4<br>",
        "Cidade" => "Cidade4<br>",
        "Estado" => "Endereço4<br>",
        "Bairro" => "Bairro4<br>",
        "Escolaridade" => "Ensino Superior Completo<br>",
    ],

];

foreach ($vetDados as $key => $value) {
    echo "<br>---------------------------------------------------------<br>";
    foreach ($vetDados[$key] as $key2 => $value2) {
        echo "$key2 = $value2";
    }
    ;
}
;

?>