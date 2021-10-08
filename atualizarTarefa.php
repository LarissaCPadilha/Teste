<?php

$novo_titulo= $_POST["titulo"];
$nova_descricao= $_POST["descricao"];
$id= $_POST["id"];

$conexao = mysqli_connect("localhost","root","","lojaIFSP");
$comando= "UPDATE tarefas SET titulo = '$novo_titulo', descricao = '$nova_descricao' WHERE tarefa_id = '$id'";
$resultado = mysqli_query($conexao, $comando);


if($resultado == true ){
    echo "<h2>Tarefa atualizada com sucesso!</h2><br>";
}else{
    die ("Erro ao atualizar tarefa.". mysqli_error($conexao));
}
?>

<a href="index.php"><h3>Voltar à página inicial</h3></a>