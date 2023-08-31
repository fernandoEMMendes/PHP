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
            $_POST["sexo"],
            $_POST["email"],
            sha1($_POST["senha"]),
        )
    );

    echo "Dados gravados corretamente!";
    echo "<meta http-equiv='refresh' content='3; URL=index.php'/>";
} else {
    echo "usuario e senha são diferentes";
}






?>