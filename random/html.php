<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <style>
        .a {
            font-size: 15
        }

        .h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>

    <script>
        function button1() {
            document.body.style.backgroundColor = "lightgreen"
        }
    </script>

    <script>
        function button2() {
            document.body.style.backgroundColor = "blue"
        }
    </script>

    <script>
        function button3() {
            document.body.style.backgroundColor = "lightblue"
        }
    </script>

    <script>
        function button4() {
            document.body.style.backgroundColor = "Black"
        }
    </script>

    <meta name="viewport" content="width=device.width">
    <meta http-equiv="x-UA-compatible" content="">




    <title> CornHub </title>
</head>

<body style="background-color:lightblue ;">

    <h1 class="h1">Bom dia!</h1> <br />
    <a class="a"> Teste HTML + PHP</a> <br /> <br />
    <button onclick="button1()">Verde Claro</button> <br />
    <button onclick="button2()">Azul</button> <br />
    <button onclick="button3()">Azul Claro</button> <br />
    <button onclick="button4()">Preto</button> <br /> <br />




















    <form action="" method="post">
        <label for="">Nome:</label>
        <input type="text" name="Nome" id="Nome"> <br />

        <label for="">Sobrenome:</label>
        <input type="text" name="Sobrenome" id="Sobrenome"> <br />

        <label for="">Estado Civil:</label>
        <input type="text" name="EstadoCivil" id=""> <br />

        <label for="">Registro Geral:</label>
        <input type="text" name="RG" id=""> <br />

        <label for="">CPF:</label>
        <input type="text" name="CPF" id=""> <br />

        <label for="">Cidade:</label>
        <input type="text" name="Endereco" id=""> <br />

        <label for="">Rua:</label>
        <input type="text" name="Rua" id=""> <br />

        <label for="">Bairro:</label>
        <input type="text" name="Bairro" id=""> <br />

        <label for="">N°:</label>
        <input type="text" name="N" id=""> <br />

        <label for="">CEP:</label>
        <input type="text" name="CEP" id=""> <br />

        <label for="">Telefone:</label>
        <input type="text" name="Telefone" id=""> <br />

        <label for="">E-mail:</label>
        <input type="email" name="Email" id=""> <br />

        <label for="">Senha:</label>
        <input type="password" name="Senha" id=""> <br />


        <button type="submit" value="enviar dados">botau</button>
    </form>

    <?php
    //$_POST[] = comando para resgatar valores dentro de 1 vetor
    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $EstadoCivil = $_POST['EstadoCivil'];

    $Endereco = $_POST['Endereco'];
    $Rua = $_POST['Rua'];
    $Bairro = $_POST['Bairro'];
    $N = $_POST['N'];
    $CEP = $_POST['CEP'];

    $RG = $_POST['RG'];
    $CPF = $_POST['CPF'];
    $Telefone = $_POST['Telefone'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];

    echo "Nome completo: {$Nome} {$Sobrenome}<br />";
    echo "Endereço: {$Endereco} {$Rua} {$Bairro} {$N} {$CEP}<br />";
    echo "Informações Pessoais: {$EstadoCivil} {$RG} {$CPF} {$Telefone} {$Email} {$Senha}<br />";
    ?>

</body>