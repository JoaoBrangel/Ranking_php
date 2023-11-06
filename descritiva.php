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
    <link rel="stylesheet" href="css/descritiva.css">
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

    <div class="img_topo">

        <div class="img-top-fundo">
            <label class="nome-topo">Participantes</label>
        </div>
    </div>

        <div class="nome">JOÃO LUIZ</div>

        <div class="divpai">
            <div class="foto">
                <div class="img">
                    <img src="css/img/joao.jpeg">

                    <div class="linkedin">
                        <a target="_black" href="https://www.linkedin.com/in/jo%C3%A3o-luiz-analista?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img src="css/img/LinkedIn_logo_initials.png" class="logo"></a>
                    </div>
                    <div class="git">
                        <a target="_black" href="https://github.com/JoaoBrangel"><img src="css/img/logo github.png" class="logo"></a>
                    </div>

                </div>
            </div>
            <div class="desc">
                
                <h1>20 anos</h1>
                
                <h1>Aluno da Universidade Cidade de São Paulo, cursando segundo semestre de Análise 
                e Desenvolvimento de sistemas.</h1>
            
                <h1>RGM : 33593329.</h1> 
                
                <h1>Responsável pela parte de script mysql, PHP e estilização em front-end.</h1>
            </div>
        </div>

        <div class="nome">RODRIGO MACIEL</div>

        <div class="divpai">
            <div class="desc">
                <h1>25 anos</h1>
                
                <h1> Aluno da Universidade Cidade de São Paulo, cursando segundo semestre de Análise e Desenvolvimento de sistemas.</h1>
            
                <h1>RGM : 33604568.</h1> 
                
                <h1>Responsável por realizar scripts em PHP, mysql e estilização em front-end.</h1>
            </div>
            <div class="foto">
                <div class="img">
                    <img src="css/img/digo.jpeg">

                    <div class="linkedin">
                        <a target="_black" href="https://www.linkedin.com/in/rodrigo-maciel-364470275/"><img src="css/img/LinkedIn_logo_initials.png" class="logo"></a>
                    </div>
                    <div class="git">
                        <a target="_black" href="https://github.com/Dhigoo"><img src="css/img/logo github.png" class="logo"></a>
                    </div>

                    
                </div>
            </div>
        </div>
        
        <div class="nome">MARIA EDUARDA</div>

        <div class="divpai">
            <div class="foto">
                <div class="img">
                    <img src="css/img/duda.jpeg">

                    <div class="linkedin">
                        <a target="_black" href="https://www.linkedin.com/in/maria-eduarda-rodrigues-alves-12803b205?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img src="css/img/LinkedIn_logo_initials.png" class="logo"></a>
                    </div>
                    <div class="git">
                        <a target="_black" href="https://github.com/Dudarodrigues1"><img src="css/img/logo github.png" class="logo"></a>
                    </div>

                    
                </div>
            </div>
            <div class="desc">
                <h1>18 anos</h1>
                
                <h1>Aluna da Universidade Cidade de São Paulo, cursando segundo semestre de Análise e Desenvolvimento de sistemas.</h1>
            
                <h1>RGM : 33604550.</h1> 
                
                <h1>Responsável por modelagem do site, script em PHP e mysql.</h1>
            </div>
        </div>

        <div class="nome">GEOVANA VIRGINIA</div>

        <div class="divpai">
            <div class="desc">
                <h1>19 anos</h1>
                
                <h1>Aluna da Universidade Cidade de São Paulo, cursando segundo semestre de Análise e Desenvolvimento de sistemas.</h1>
            
                <h1>RGM : 33482756.</h1> 
                
                <h1>Responsável por programar scripts PHP, mysql, estilização da página.</h1>
            </div>
            <div class="foto">
                <div class="img">
                    <img src="CSS/img/gi.jpg">

                    <div class="linkedin">
                        <a target="_black" href="https://www.linkedin.com/in/geovana-virginia-martins-da-m%C3%A1rio-a1457a191?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><img src="css/img/LinkedIn_logo_initials.png" class="logo"></a>
                    </div>
                    <div class="git">
                        <a target="_black" href="https://github.com/geovanaS2"><img src="css/img/logo github.png" class="logo"></a>
                    </div>

                    
                </div>
            </div>
        </div>
        
</body>

</html>