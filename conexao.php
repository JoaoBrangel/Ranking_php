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
            <li><a href="#">CONTEUDO</a></li>
            <li><a href="descritiva.php">DESCRITIVA</a></li>
            <li><a href="contato.php">CONTATO</a></li>
            <li><a href="conexao.php">CONEXAO</a></li>
        </ul>
    </header>


    <?php
    // $nome = $_GET['nome'];
    // $tamanho = $_GET['tamanho'];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $comentario = $_POST["comentario"];

    echo "$nome<br>";
    echo "$email<br>";
    echo "$comentario <br>";
    ?>
</body>

</html>