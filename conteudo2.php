<?php
session_start();
require("databaseconnect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conteudo02.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="css/img/LOGO.png" class="logo"></a>

        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="conteudo.php">VOTAR</a></li>
            <li><a href="#.php">TIMES</a></li>
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



    <div class="img_topo4">

        <div class="img-top-fundo">
            <label class="nome-topo">EQUIPES PARTICIPANTES</label>
        </div>
    </div>
    
        <div class="divpai">
            <div class="foto">
                <div class="time">
                    <img src="css/img/red_bull.jpeg">
                </div>
            </div>
            <div class="desc">
                <h2>RED BULL RACING</h2>
                <br>
                <p>
                    A equipe de Fórmula 1 Red Bull Racing é uma das principais equipes da categoria e é conhecida por
                    seu desempenho competitivo. A equipe é propriedade da Red Bull, uma empresa de bebidas energéticas,
                    e competiu na Fórmula 1 desde 2005. Ao longo dos anos, eles conquistaram vários campeonatos de
                    pilotos e construtores, com destaque para. Max Verstappen, que se tornou um dos pilotos mais
                    jovens a vencer uma corrida na Fórmula 1. A Red Bull Racing é conhecida por sua abordagem
                    inovadora, incluindo o desenvolvimento de tecnologias e estratégias únicas. Eles são um competidor
                    constante nas corridas de Fórmula 1 e têm uma grande base de fãs em todo o mundo.
                </p>
            </div>
        </div>


        <div class="divpai">
            <div class="desc">
                <h2>MERCEDES-AMG</h2>
                <br>
                <p>
                    A equipe de Fórmula 1 Mercedes-AMG Petronas Formula One Team, comumente conhecida como Mercedes F1,
                    é uma das equipes mais dominantes na história da Fórmula 1. A equipe faz parte da montadora alemã
                    Mercedes-Benz e tem sido um concorrente de destaque na categoria desde sua entrada em 2010.
                    Sob a liderança de Toto Wolff, a equipe Mercedes F1 conquistou numerosos campeonatos de pilotos e
                    construtores na década de 2010 e início de 2020. Lewis Hamilton, um dos pilotos mais bem-sucedidos
                    da história da Fórmula 1, tem sido uma parte fundamental dessa jornada, conquistando múltiplos
                    títulos de pilotos com a equipe. A equipe Mercedes é conhecida por sua excelência técnica e
                    inovação, desenvolvendo carros altamente competitivos e motores poderosos. Eles também investiram
                    em tecnologias híbridas e de eficiência de combustível, o que foi um fator chave em seu sucesso.
                    Em resumo, a equipe Mercedes F1 é uma das equipes mais bem-sucedidas e influentes na história da
                    Fórmula 1, tanto em termos de desempenho nas pistas quanto em seu impacto fora dela.
                </p>
            </div>
            <div class="foto">
                <div class="img">
                    <img src="css/img/mercedes.jpeg">
                </div>
            </div>
        </div>


        <div class="divpai">
            <div class="foto">
                <div class="time">
                    <img src="css/img/ferrari1.jpg">
                </div>
            </div>
            <div class="desc">
                <h2>FERRARI</h2>
                <br>
                <p>
                    A Scuderia Ferrari é uma das equipes mais icônicas e bem-sucedidas da Fórmula 1. Com sede na Itália,
                    a Ferrari é a equipe mais antiga da categoria e tem uma rica história que remonta à primeira
                    temporada do campeonato de Fórmula 1 em 1950. O logotipo icônico da Ferrari é um dos mais
                    reconhecíveis na indústria automobilística, e o carro vermelho característico é sinônimo de
                    alta performance.A Ferrari conquistou inúmeros campeonatos de pilotos e construtores ao longo
                    de sua história, com lendas como Michael Schumacher, Niki Lauda e Alberto Ascari guiando seus
                    carros para vitórias.Embora tenha passado por altos e baixos ao longo dos anos, a Ferrari continua
                    sendo uma das equipes mais respeitadas e populares da Fórmula 1, com uma forte rivalidade com
                    outras equipes, como a Mercedes e a Red Bull. A busca incessante da Ferrari por sucesso e inovação
                    a torna uma figura central no mundo do automobilismo e uma das equipes mais emblemáticas da Fórmula
                    1.
                </p>
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