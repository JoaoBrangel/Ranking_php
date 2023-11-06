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
        <div class="logo"></div>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="conteudo.php">CONTEUDO</a></li>
            <li><a href="descritiva.php">DESCRITIVA</a></li>
            <li><a href="#">CONTATO</a></li>
            <li><a href="conexao.php">conexao</a></li>
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