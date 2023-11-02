<?php
require("databaseconnect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- if else
		while
		for
		switch case
		session -->

    <header>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="conteudo.php">CONTEUDO</a></li>
            <li><a href="descritiva.php">DESCRITIVA</a></li>
            <li><a href="contato.php">CONTATO</a></li>
            <li><a href="login.php">login</a></li>
            
        </ul>
    </header>



<Table border="1" cellspacing="0">
    <tr>
        <td>Classificação</td>
        <td>Nome</td>
        <td>Equipe</td>
</tr>
<?php
//mysqli_fetch_array transforma os campos no array
$sql = "select * from ranking_pilotos;";
$obj_consulta = mysqli_query($con,$sql);//puxando as informações perguntando qual  a conexão e o comando!!!1
while($reg_consulta = mysqli_fetch_array ($obj_consulta)){
    echo "<tr>";
        echo "<td>" . $reg_consulta["votos_piloto"] . "</td>";
        echo "<td>" . $reg_consulta["Nome_piloto"] . "</td>";
        echo "<td>" . $reg_consulta["equipe_piloto"] . "</td>";
    echo "</tr>";
}
?>

    </table>
</body>

</html>