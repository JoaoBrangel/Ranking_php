<?php
$host = 'localhost'; //tipo do local
$usuario = 'root'; //nome do usuario do banco
$senha = '@Dhigo1998'; // senha
$bd ='ranking'; //database
$con = mysqli_connect($host, $usuario, $senha, $bd);
if(mysqli_connect_errno()){
    echo"Falha ao conectar ao mysql" . mysqli_connect_errno();
    exit();
//vai cair na prova
}



//include(); inclusao
//require(); requisito

//include_once(); 1 vez
//require_once(); 1 vez

//mysql conexão antiga
//mysqli versão atual, so funcaiona com o mysql
//pdo so com orientação de objetos perfeito
?>