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
            <li><a href="#">HOME</a></li>
            <li><a href="conteudo.php">CONTEUDO</a></li>
            <li><a href="descritiva.php">DESCRITIVA</a></li>
            <li><a href="contato.php">CONTATO</a></li>
            <li>
            <?php
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == "s"){
                //se a sessão existir e conter o valor de "s"
                echo"Olá ", $_SESSION["usuario"], "<br>";
                echo"<a href='logout.php'>Desconectar</a>";
                }else{
                    ?>
                    <a href="login.php">login</a></li>
                    <?php
                }
            ?>
        </ul>
    </header>

    <div class="img_topo">
                    <a>Ranking dos pilotos Principais</a>
                
                
                <img src="css/img/f_index.png">

    </div>

    <?php
    echo 'descritiva';

    ?>
</body>

</html>