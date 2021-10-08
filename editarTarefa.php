<?php

$id_tarefa=$_GET["id"];

$conexao = mysqli_connect("localhost","root","","lojaIFSP");
$comando = "SELECT * FROM tarefas WHERE tarefa_id = '$id_tarefa'";
$resultado = mysqli_query($conexao, $comando);
$linha= mysqli_fetch_assoc($resultado);

$titulo= $linha['titulo'];
$descricao= $linha['descricao'];

?>

<h1>Atualizar tarefa</h1>

<form action="atualizarTarefa.php" method="post">

    <input type="hidden" name="id" value="<?php echo $id_tarefa?>">

    <label for="titulo">Título:</label>
    <input id="titulo" type="text" name="titulo" value="<?php echo $titulo?>">
    <br>
    <br>
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" value="<?php echo $descricao?>"><?=$descricao?></textarea>

    <button type="submit">Salvar</button> 

</form>