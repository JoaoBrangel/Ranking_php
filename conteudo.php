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
</head>

<body>
    <header>
        <div class="logo"></div>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="conteudo.php">CONTEUDO</a></li>
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

    <form action="config_votos.php" method="POST">
        <?php
        if (isset($_SESSION['votos'])) { //se existir a variavel
            echo $_SESSION['votos']; // apresente ela
            unset($_SESSION['votos']); //dps destrua 
        }

        if (isset($_SESSION['votoErro'])) { //se existir a variavel
            echo $_SESSION['votoErro']; // apresente ela
            unset($_SESSION['votoErro']); //dps destrua 
        }
        ?>

        <input type='submit' name='voto' value='1' />

        <input type='submit' name='voto' value='2' />

        <input type='submit' name='voto' value='3' />

        <input type='submit' name='voto' value='4' />

        <input type='submit' name='voto' value='5' />

        <input type='submit' name='voto' value='6' />

        <input type='submit' name='voto' value='7' />

        <input type='submit' name='voto' value='8' />

        <input type='submit' name='voto' value='9' />

    </form>





    <!-- Comentarios! ======================================================== -->
    <form action="config_comentario.php" method="POST">
        <?php
        if (isset($_SESSION['logado']) && $_SESSION['logado'] == "s") { //verificando se esta logado!
            //se a sessão existir e conter o valor de "s"
            echo " <label for='comentario'>Deixe seu comentario</label>";
            echo "<input type='text'name='comentario_conteudo'>";
            echo "<input type='submit' value='Enviar' /><br>";
        } else {
            echo "<p>Logue para deixar um comentario!</p>";
        }
        ?>
    </form>
    <?php

    //Visualisando comentario na pagina!
    $sql_comentario = "select Nome, comentario from v_comentario v
    inner join usuario u
    on  v.fk_usuario = u.id_usuario;";
    $obj_consulta_comentario = mysqli_query($con, $sql_comentario);


    while ($comentario_consulta = mysqli_fetch_array($obj_consulta_comentario)) {
        echo "<label style='color:red'>" . $comentario_consulta["Nome"] . "</label><br>";
        echo "<label>" . $comentario_consulta["comentario"] . "</label><br>";
    }

    ?>


</body>

</html>