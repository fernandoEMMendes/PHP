<?php



if ($_POST["email"] == $_POST["emailconfirm"] and $_POST["senha"] == $_POST["senhaconfirm"]) {
    $pdo = new PDO("mysql:host=localhost;dbname=aulasphp", "root", "");

    $sql = $pdo->prepare("INSERT INTO `usuario` values (null,?,?,?,?,?,?,?,?,?,?,?,?)");

    $sql->execute(
        array(
            $_POST["nome"],
            $_POST["sobrenome"],
            $_POST["endereco"],
            $_POST["numero"],
            $_POST["cidade"],
            $_POST["estado"],
            $_POST["rg"],
            $_POST["cpf"],
            $_POST["data_nas"],
            sha1($_POST["sexo"]),
        )
    );
} else {
    echo "usuario e senha são diferentes";
}






?>