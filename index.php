<?php
session_start();
require("databaseconnect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <style>
        td{
            padding:5px;
        }
    </style>
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

            
            <li>
            <?php
            if(isset($_SESSION['logado']) && $_SESSION['logado'] == "s"){
                //se a sessão existir e conter o valor de "s"
                echo"Olá ", $_SESSION["usuario"], "<br>";
                echo"<a href='logout.php'>Desconectar</a>";
                }else{
                    ?>
                    <a href="login.php">login</a></li>
                    <?php
                }
        
            ?>
            
            
            
        </ul>
    </header>



<Table border="1" cellspacing="0">
    <tr>
        <td>Classificação</td>
        <td>QTD VOTOS</td>
        <td>Nome</td>
</tr>
<?php
//mysqli_fetch_array transforma os campos no array
$sql = "select count(fk_piloto) 'QTD votos', nome_piloto 'Piloto' from votos v
inner join piloto p
on p.id_pilotos = v.fk_piloto
group by nome_piloto order by COUNT(fk_piloto) DESC  limit 10;";

$obj_consulta = mysqli_query($con,$sql);//puxando as informações perguntando qual  a conexão e o comando!!!1
for($classifi= 1 ; $reg_consulta = mysqli_fetch_array ($obj_consulta) ; $classifi++){
    echo "<tr>";
        echo "<td>" .$classifi . "°" . "</td>";
        echo "<td>" . $reg_consulta["QTD votos"] . "</td>";
        echo "<td>" . $reg_consulta["Piloto"] . "</td>";
    echo "</tr>";

}

?>

    </table>
</body>

</html>