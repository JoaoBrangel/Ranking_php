<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">CONTEUDO</a></li>
            <li><a href="descritiva.php">DESCRITIVA</a></li>
            <li><a href="contato.php">CONTATO</a></li>
        </ul>
    </header>

    <?php
    session_start();
    error_reporting(0);
    
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == "s") {
        //se a sessão existir e conter o valor de "s"
        echo "Olá " , $_SESSION["usuario"], "<br>";
        echo "<a href='logout.php'>Desconectar</a>";
    } else {
        //se a sessão não existir ou o valo rdela nao for "s"
        echo "Session não definida <br>";

        if (isset($_SESSION["erro"]) && $_SESSION["erro"] != "") {

            echo $_SESSION["erro"] . "<br>";
        }

    ?>
        <form action="login.php" method="POST">

            <label for="comentario">comentario</label>
            <textarea type="story" name="comentario" required maxlength="100" placeholder="Maximo de 100"></textarea><br /><!-- comentario -->

            <input id="enviar" type="submit" value="Enviar" />

        <?php
    }
        ?>

<form action="conteudo.php" method="POST">
        <label for="comentario">comentario</label>
        <textarea type="story" name="comentario" required maxlength="100" placeholder="Maximo de 100"></textarea><br /><!-- comentario -->

        <input type="submit" value="Enviar" />
    </form>
    
    
    <?php

        // error_reporting(0);		


        // $nome = $_GET['nome'];
        // $tamanho = $_GET['tamanho'];
        $usuario = $_SESSION["usuario"];
        $comentario = $_POST["comentario"];

        echo "$usuario<br>";
        echo "$comentario";

        //como puxar o histrico de comentarios


    ?>


</body>

</html>