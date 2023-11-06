<?php
session_start();
require("databaseconnect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contato.css">

</head>

<body>
<header>
        <a href="index.php"><img src="css/img/LOGO.png" class="logo"></a>

        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#.php">VOTAR</a></li>
            <li><a href="conteudo2.php">TIMES</a></li>
            <li><a href="descritiva.php">DESCRITIVA</a></li>
            <li><a href="contato.php">CONTATO</a></li>
            <li>
                <?php
                if (isset($_SESSION['logado']) && $_SESSION['logado'] == "s") {
                    //se a sessão existir e conter o valor de "s"
                    echo "Olá ", $_SESSION["usuario"], "<br>";
                    echo "<a href='logout.php'>Desconectar</a>";
                } else {
                ?>
                    <a href="login.php">login</a>
            </li>
        <?php
                }
        ?>
        </ul>
    </header>

<div class="form">
    <form action="conexao.php" method="POST">
        <label for="nome">NOME</label><!-- Nome -->
        <br>
        <input type="text" name="nome" required placeholder="nome"><br />

        <label for="comentario">E-MAIL</label>
        <br>
        <input type="email" name="email" required placeholder="exemplo@gmail.com"><br />

        <label for="comentario">COMENTÁRIO</label>
        <br>
        <textarea type="story" name="comentario" required maxlength="100" placeholder="Maximo de 100"></textarea><br /><!-- comentario -->
        <hr>
        <input type="submit" value="Enviar" class="botao" />
    </form>
</div>
    <?php
    echo 'contato'

    ?>
</body>

</html>