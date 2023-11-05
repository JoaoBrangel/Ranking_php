<?php
session_start();
include("databaseconnect.php");


$comentario = $_POST["comentario_conteudo"];
$usuario = $_SESSION["usuario"];



$sql = "select id_usuario from usuario where nome = '$usuario';";

$sql_consulta_id = mysqli_query($con, $sql);

if ($sql_consulta_id) { //---------------------verificando se a variavel chegou
    if (mysqli_num_rows($sql_consulta_id) > 0) {
        $row = mysqli_fetch_assoc($sql_consulta_id); //pegar o id
        $id_usuario = $row['id_usuario'];
        echo "id do usuario é $id_usuario";
    } else {
        echo "A consulta não retornou resultados.";
    }
} else {
    echo "erro na consulta " . mysqli_errno($con);
}
// printf($comentario);

$sql_input = "insert into v_comentario (comentario, fk_usuario) values ('$comentario',$id_usuario);";
$insert_comentario = mysqli_query($con, $sql_input);

// if($insert_comentario){---------------------verificando se a variavel chegou
//     echo"Sucesso";
// }else{
//     echo "erro na inserção " . mysqli_errno($con);
// }

header('location: conteudo.php');//voltando para a pagina

$con->close();
exit;
