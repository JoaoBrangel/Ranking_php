<?php
require("databaseconnect.php");
?>

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
            <li><a href="login.php">LOGIN</a></li>
        </ul>
    </header>

    <?php
    session_start();
    // error_reporting(0);

    if (isset($_SESSION['logado']) && $_SESSION['logado'] == "s") {
        //se a sessão existir e conter o valor de "s"
        echo "Olá ", $_SESSION["usuario"], "<br>";
        echo "<a href='logout.php'>Desconectar</a>";
    } else {
        //se a sessão não existir ou o valo rdela nao for "s"
        echo "Session não definida <br>";

        if (isset($_SESSION["erro"]) && $_SESSION["erro"] != "") {

            echo $_SESSION["erro"] . "<br>";
        }
    }
    ?>

    <form action="conteudo.php" method="POST">
        <label for="comentario">comentario</label>

        <!-- <textarea type="story" name="comentario" required maxlength="100" placeholder="Maximo de 100"></textarea><br />comentario -->

        <input type="submit" id="1" value="Enviar" />
        <?php
        ?>
    </form>





    <?php
    $usuario = $_SESSION["usuario"];
    $comentario = $_POST["comentario"];





    // $listadecomentarios = array();


    // // array_push($listadecomentarios, array("$usuario", "$comentario"));
    // print_r($listadecomentarios);

    // // foreach ($listadecomentarios as $comentario => $usuario) {
    // // echo 'Usuario: ' . $usuario . "<br>";
    // // echo 'Comentario: ' . $comentario . "<br>";
    // // }


    //como puxar o historco de comentarios


    ?>


</body>

</html>