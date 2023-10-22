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
            <li><a href="conteudo.php">CONTEUDO</a></li>
            <li><a href="descritiva.php">DESCRITIVA</a></li>
            <li><a href="#">CONTATO</a></li>
            <li><a href="conexao.php">conexao</a></li>
        </ul>
    </header>

    <form action="conexao.php" method="POST">
        <label for="nome">Número inicial</label><!-- Nome -->
        <input type="text" name="nome" required placeholder="nome"><br />

        <label for="comentario">E-MAIL</label>
        <input type="email" name="email" required placeholder="exemplo@gmail.com"><br />

        <label for="comentario">comentario</label>
        <textarea type="story" name="comentario" required maxlength="100" placeholder="Maximo de 100"></textarea><br /><!-- comentario -->

        <input type="submit" value="Enviar" />
    </form>
    <?php
    echo 'contato'

    ?>
</body>

</html>