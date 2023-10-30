<?php


$hostname = "localhost";
$bancodedados = "teste";
$usuario = "root";
$senha = "Cleide111";

//Create connection

$mysql = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysql->connect_errno){

    echo"falha ao conectar (" . $mysql->connect_errno .") " . $mysql->connect_errno;
}
echo"oi calica";



// $conn = mysqli_connect($servename, $username, $password, $database);

// // confirmando conexão!

// if(!$conn){
//     die("connectoin failed: ". mysqli_connect_errno());
// }echo "Connected com sucesso";
// mysqli_close($conn);
// ?>