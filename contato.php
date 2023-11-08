<?php
session_start();
require("databaseconnect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conato</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contato1.css">

</head>

<body>
    <header>
        <a href="index.php"><img src="css/img/LOGO.png" class="logo"></a>

        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="conteudo.php">VOTAR</a></li>
            <li><a href="conteudo2.php">TIMES</a></li>
            <li><a href="descritiva.php">DESCRITIVA</a></li>
            <li><a href="#.php">CONTATO</a></li>
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
    <div class="div-conrole">
        <div class="conteiner-tit">

            <h1>Como posso ajudar?</h1>
            <div class="tit-sobre">
                <span>Você tem alguma pergunta ou está interessado em trabalhar com minha equipe?</span>
                <span>é só preencher os campos do formulario abaixo.</span>
            </div>
        </div>

            <!-- para trocar a chegada do formulario, troque o email a baixo.
            o formsubmit é o site que vai ser redirecionado o email para a caixa de mensagem.  -->

        <form class="controle-form" action="https://formsubmit.co/jaum2003luiz@gmail.com" method="POST" class="form">

            <div class="form-input">
                <div class="di">
                    <label for="name">Nome</label>
                    <input class="inputs" type="text" name="name" id="name" required placeholder="Nome" />
                </div>
                <div class="di">
                    <label for="email">E-mail</label>
                    <input class="inputs" type="email" name="email" id="email" required placeholder="E-mail" />
                </div>
            </div>
            <div class="mensagem-form">
                <label for="message">Mensagem</label>
                <textarea name="message" id="message" required placeholder="Digite aqui sua mensagem"></textarea>
                <input type="hidden" name="_captcha" value="false" />
                <input type="hidden" name="_next" value="http://localhost/ranking_php/contato.php" />
                <div class="marge-bt">
                    <button type="submit">Enviar</button>
                </div>
            </div>
        </form>

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
<!-- formsubit vai mandar para esse site e em seguida vai mandar para o destinatario! -->

</html>