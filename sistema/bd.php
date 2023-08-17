<?php



if ($_POST["email"] == $_POST["emailconfirm"] and $_POST["senha"] == $_POST["senhaconfirm"]) {
    echo "usuario e senha são iguais";
} else {
    echo "usuario e senha são diferentes";
}






?>