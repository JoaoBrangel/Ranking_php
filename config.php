
<?php
session_start();
include("databaseconnect.php");

// cadadastro ============================

$nomeCadastro = $_POST['nomeCadastro'];
$senhaCadastro = $_POST['senhaCadastro'];

if($nomeCadastro == ""){
	$_SESSION['status'] = "Não deixe campos vazio!";
	header('location: login.php');
}else{

$sql = "select count(*) as total from usuario where nome = '$nomeCadastro';";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);
//consultando
if($row['total'] == 1){
	$_SESSION['status'] = "usuario ja existe!";
	header('location: login.php');
}
//inserindo no banco
$sql = "insert into usuario (nome, senha) values ('$nomeCadastro', '$senhaCadastro')";

if($con->query($sql) === true){
	//se a conexao for verdadeira
	$_SESSION['status-cadastro'] = "usuario cadastrado!";
}

header('location: login.php');//voltando para a pagina login
}
$con->close();
exit;

?>
