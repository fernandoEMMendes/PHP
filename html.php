<!DOCTYPE html>

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

    <meta name="viewport" content="width=device.width">
</head>

<body style="background-color:lightblue ;">

    <h1 class="h1">Bom dia!</h1> <br />
    <a class="a"> Teste HTML + PHP</a> <br /> <br />
    <button onclick="button1()">Verde Claro</button> <br />
    <button onclick="button2()">Azul</button> <br />
    <button onclick="button3()">Azul Claro</button> <br /> <br />





















    <form action="">
        <label for="">Nome:</label>
        <input type="text" name="Nome" id=""> <br />
        <label for="">Sobrenome:</label>
        <input type="text" name="Sobrenome" id=""> <br />
        <button type="submit" value="enviar dados">botau</button>
    </form>

    <?php
    //$_POST[] = comando para resgatar valores dentro de 1 vetor
    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];

    echo "Nome completo: {$Nome} {$Sobrenome}";
    ?>

</body>