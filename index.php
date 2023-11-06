<?php
session_start();
require("databaseconnect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        td {
            padding: 5px;
        }
    </style>
</head>

<body>

    <!-- if else
		while
		for
		switch case
		session -->

    <header>
        <a href="index.php"><img src="css/img/LOGO.png" class="logo"></a>

        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="conteudo.php">VOTAR</a></li>
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

    <div class="img_topo">

        <div class="img-top-fundo">
            <label class="nome-topo">Ranking dos pilotos Principais</label>
            <br>
            <label class="nome-topo-baixo">Ranking dos mais votadas</label>
        </div>
    </div>

    <div class="container-pai">
        <div class="cointainer-filho">

            <div class="conteiner-info">
                <label>Ranking</label>
                <a href="conteudo.php"><button class="bt_votar">Votar</button></a>

            </div>
            <hr>
            <div class="container-table">
                <Table border="1" cellspacing="0">
                    <tr>
                        <td><b>Classificação</b></td>
                        <td><b>Qtd votos</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Equipe</b></td>
                        <td><b>Pais</b></td>
                        <td><b>Numero</b></td>
                    </tr>
                    <?php
                    //mysqli_fetch_array transforma os campos no array
                    $sql = "select count(fk_piloto) 'QTD votos', nome_piloto 'Piloto', equipe_piloto, pais_piloto,numero_piloto from votos v
        inner join piloto p
        on p.id_pilotos = v.fk_piloto
        group by nome_piloto order by COUNT(fk_piloto) DESC  limit 8;";

                    $obj_consulta = mysqli_query($con, $sql); //puxando as informações perguntando qual  a conexão e o comando!!!1
                    for ($classifi = 1; $reg_consulta = mysqli_fetch_array($obj_consulta); $classifi++) {
                        echo "<tr>";
                        echo "<td><b>" . $classifi . "°" . "</b></td>";
                        echo "<td>" . $reg_consulta["QTD votos"] . "</td>";
                        echo "<td>" . $reg_consulta["Piloto"] . "</td>";
                        echo "<td>" . $reg_consulta["equipe_piloto"] . "</td>";
                        echo "<td>" . $reg_consulta["pais_piloto"] . "</td>";
                        echo "<td>" . $reg_consulta["numero_piloto"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>



        </div><!--cointainer-filho  -->
        <div class="container-melhores">

            <div class="container-end">

                <label class="end-tit">Análise do Ranking dos melhores pilotos</label>

                <label class="end-tit-end">Ranking dos pilotos mais votados. Com base em votos dos usuárias fizemos uma tabela com os favoritos do publico.</label>
                <br>
                <br>
            </div>
            <div class="container-imagens">
                <div class="controle-label">
                    <label class="end-tit-img">As 3 lendas da F1.</label>
                </div>
                <div class="container-imagens-margem">

                    <div class="container-img">
                        <div class="controle-label">
                            <label>Lewis Hamilton</label>
                        </div>
                        <img class="imgimg"></img>
                    </div>
                    <div class="container-img">
                        <div class="controle-label">
                            <label>Lewis Hamilton</label>
                        </div>
                        <img class="imgimg2"></img>
                    </div>
                    <div class="container-img">
                        <div class="controle-label">
                            <label>Lewis Hamilton</label>
                        </div>
                        <img class="imgimg3"></img>
                    </div>

                </div>
            </div>
        </div><!--cointainer-pai  -->
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
    </div>


</body>

</html>