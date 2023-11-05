<?php 
session_start();
include("databaseconnect.php");
//login!!!!!!!!



$usuarioLogin = $_POST['usuarioLogin'];
$senhaLogin = $_POST['senhaLogin'];

$sql_login = "select count(*) as total from usuario where nome = '$usuarioLogin' and senha ='$senhaLogin';";

$result_login = mysqli_query($con, $sql_login);
$row_login = mysqli_fetch_assoc($result_login);

if ($row_login['total'] == 1) {
	
	$_SESSION['logado'] = 's';
	$_SESSION['usuario'] = $usuarioLogin;
	$_SESSION['erro'] = "";
	header('location: index.php');
}else{
$_SESSION['erro'] = "Login ou senha incorretos";
header('location: login.php');
}
$con->close();
exit;
?>