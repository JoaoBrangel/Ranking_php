<?php
session_start();
include("databaseconnect.php");


$voto = $_POST["voto"];

// print($voto);
// echo"<br>";


//fazer um if pra verificar qual id foi selecionado
$usuario = $_SESSION["usuario"];


$sql = "select id_usuario from usuario where nome = '$usuario';";
$sql_consulta_id = mysqli_query($con, $sql);



if ($sql_consulta_id) { //---------------------verificando se a variavel chegou
    if (mysqli_num_rows($sql_consulta_id) > 0) {
        $row = mysqli_fetch_assoc($sql_consulta_id); //pegar o id
        $id_usuario = $row['id_usuario'];
        echo "id do usuario é $id_usuario e o numero escolhido foi $voto";
        header('location: conteudo.php'); //voltando para a pagina
    } else {
        echo "A consulta não retornou resultados.";
    }
} else {
    echo "erro na consulta " . mysqli_errno($con);
}

//verificando se o id ja tem votos!
$sql_consulta_voto = "select count(*) as total from votos where fk_usuario = '$id_usuario';";
$result = mysqli_query($con, $sql_consulta_voto);
$row_veri = mysqli_fetch_assoc($result);

if ($row_veri['total'] >= 1) {
    $_SESSION['votoErro'] = "Você já votou!!";
   

    $con->close();
    header('location: conteudo.php'); //voltando para a pagina
} else {
    $sql_input = "insert into votos (fk_usuario, fk_piloto) values ('$id_usuario',$voto);";
    // $insert_comentario = mysqli_query($con, $sql_input);
}

if ($con->query($sql_input) === true) {
    //se a conexao for verdadeira
    $_SESSION['votos'] = "voto feito!<br>";
} else {

    $_SESSION['votos'] = "faça login para votar!<br> ";
}

header('location: conteudo.php'); //voltando para a pagina

$con->close();
exit;
