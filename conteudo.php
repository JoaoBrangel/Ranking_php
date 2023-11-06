<?php
session_start();
require("databaseconnect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conteudo.css">
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


    <div class="img_topo1">

        <div class="img-top-fundo">
            <label class="nome-topo">faça o seu voto</label>
        </div>
    </div>

    <div class="img-top-fundo">
        <div class="desc-conteudo">
            <div class="desc-descritiva">
                <p>Qual o seu palpite para o próximo campeão?. Vote no seu piloto favorito e acompanhe as estatísticas.</p>
            </div>
        </div>
    </div>



    <form action="config_votos.php" method="POST">




        <?php
        if (isset($_SESSION['votos'])) { //se existir a variavel
        ?>
            <div class="card-bom">
                <?php
                echo $_SESSION['votos']; // apresente ela
                unset($_SESSION['votos']); //dps destrua 
                ?>
            </div>
        <?php
        }

        if (isset($_SESSION['votoErro'])) { //se existir a variavel
        ?>
            <div class="card-erro">
                <?php
                echo $_SESSION['votoErro']; // apresente ela
                unset($_SESSION['votoErro']); //dps destrua 
                ?>
            </div>
        <?php
        }
        ?>

        <div class="container-perfil-pai">
            <div class="perfilcor">
                <div class="container-camada1">

                    <div class="card">
                        <img src="css/img/maxvestappen.jpg">
                        <input type='submit' name='voto' value='1' />
                    </div>
                    <div class="card">
                        <img src="css/img/sergioperez.jpg">
                        <input type='submit' name='voto' value='2' />
                    </div>
                    <div class="card">
                        <img src="css/img/lewis.jpg">
                        <input type='submit' name='voto' value='3' />
                    </div>

                </div>

                <div class="container-camada1">

                    <div class="card">
                        <img src="css/img/fernando alonzo.jpg">
                        <input type='submit' name='voto' value='4' />
                    </div>
                    <div class="card">
                        <img src="css/img/charlez lec.jpg">
                        <input type='submit' name='voto' value='5' />
                    </div>
                    <div class="card">
                        <img src="css/img/lando norriz.jpg">
                        <input type='submit' name='voto' value='6' />
                    </div>

                </div>

                <div class="container-camada1">

                    <div class="card">
                        <img src="css/img/pirre gasly.jpg">
                        <input type='submit' name='voto' value='7' />
                    </div>
                    <div class="card">
                        <img src="css/img/geoge russel.jpg">
                        <input type='submit' name='voto' value='8' />
                    </div>
                    <div class="card">
                        <img src="css/img/carlos sainz.jpg">
                        <input type='submit' name='voto' value='9' />
                    </div>

                </div>
            </div>

        </div>
    </form>


    <div class="containercomentario">

        <!-- Comentarios! ======================================================== -->
        <form action="config_comentario.php" method="POST">
            <?php
            if (isset($_SESSION['logado']) && $_SESSION['logado'] == "s") { //verificando se esta logado!
                //se a sessão existir e conter o valor de "s"
                echo "<div class='card-comentario'>
                    <div class='comentario-tit'>";

                echo " <label for='comentario'>Deixe seu comentario</label> 
                    </div>";
                echo "<div class='input-comentario'> <input class='comdig' type='text'name='comentario_conteudo' placeholder='Digite aqui:''>";
                echo "<input class='enviardig' type='submit' value='Enviar' /> 
                    </div>
                    </div>";
            } else {
            ?>

                <?php
                echo "<div class='card-Logue'><p>Logue para deixar um comentario!</p></div>";
                ?>

            <?php
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
        ?>
            <div class="comentario-card">
                <div class="comentario-card-marge">
                <?php
                echo "<a>Usuario: </a><label style='color:red'> " . $comentario_consulta["Nome"] . "</label><br>";
                echo "<a>Comentario: </a><label>" . $comentario_consulta["comentario"] . "</label><br>";

                ?>
                </div>
            </div>
        <?php
        }

        ?>
    </div>
    </div>
    <footer>
        <div class="forter-controler-main">
            <div class="forter-controler">
                <div class="footer1">
                    <img src="css/img/LOGO.png" class="icon-logo">
                </div>
                <div class="footer2">
                    <div class="p1">
                        <label><b>Quem somos</b></label>
                        <br>
                        <br>
                        <a>Site desenvolvido para amantes de fórmula 1. Fiquei por dentro de notícias, estatísticas e entretenimento do mundo do automobilismo.</a>
                    </div>
                    <div class="p2">
                        <a href="conteudo.php">Ranking</a>
                    </div>
                    <div class="p3">
                        <a href="conteudo.php">Fale conosco</a>
                    </div>
                </div>
                <div class="footer3">
                    <div class="icon">
                        <a href="#"><img src="css/img/logo github.png" class="icon-git"></a>
                        <a href="#"><img src="css/img/LinkedIn_logo_initials.png" class="icon-link"></a>
                    </div>
                </div>
            </div>
            <div class="direitos">
                <Label>© 2023 - 2023 - http://localhost/ranking_php/index.php - TODOS OS DIREITOS RESERVADOS.</Label>
            </div>
        </div>
    </footer>
</body>

</html>