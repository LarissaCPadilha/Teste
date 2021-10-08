<?php

$id_tarefa=$_GET["id"];

$conexao = mysqli_connect("localhost","root","","lojaIFSP");
$comando = "SELECT * FROM tarefas WHERE tarefa_id = '$id_tarefa'";
$resultado = mysqli_query($conexao, $comando);
$linha= mysqli_fetch_assoc($resultado);

$titulo= $linha['titulo'];
$descricao= $linha['descricao'];

echo "<h2>$titulo</h2>";
echo "<p>$descricao</p>";

?>

<a href="index.php"><h3>Voltar à página inicial</h3></a>