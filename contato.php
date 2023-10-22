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
        </ul>
    </header>

    <form action="conteudo.php" method="POST">
							<label for="nome">Número inicial</label>
							<input type="text" name="nome"><br/>
							
							<label for="comentario">comentario</label>
							<input type="text" name="comentario"><br/>
							
							<input type="submit" value="Enviar"/>
			</form>
    <?php
    echo 'contato'

    ?>
</body>

</html>