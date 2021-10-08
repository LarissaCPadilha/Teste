<?php

$titulo=$_POST["titulo"];
$descricao=$_POST["descricao"];

$conexao = mysqli_connect("localhost","root","","lojaIFSP");
$comando= "INSERT INTO tarefas(titulo, descricao) values ('$titulo', '$descricao')";
$resultado = mysqli_query($conexao, $comando);


if($resultado == true ){
    echo "<h2>Tarefa inserida com sucesso!</h2><br>";
}else{
    die ("Erro ao inserir tarefa.". mysqli_error($conexao));
}
?>

<a href="index.php"><h3>Voltar à página inicial</h3></a>