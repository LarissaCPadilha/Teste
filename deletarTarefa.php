<?php

$id_tarefa=$_GET["id"];

$conexao = mysqli_connect("localhost","root","","lojaIFSP");
$comando = "DELETE FROM tarefas WHERE tarefa_id = '$id_tarefa'";
$resultado = mysqli_query($conexao, $comando);

if($resultado) {
    echo "<h2>Tarefa deletada com sucesso!</h2>";
} else {
    echo "Ocorreu algum erro ao deletar a tarefa";
    echo mysqli_error($conexao);
}

?>

<a href="index.php"><h3>Voltar à página inicial</h3></a>