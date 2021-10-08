<h1>Todas as tarefas</h1>

<a href="novaTarefa.php">Inserir nova tarefa</a>
<br>
<br>
<table border='1'>
    <tr>
    <th>Título</th>
    <th>Exibir</th>
    <th>Editar</th>
    <th>Deletar</th>
    </tr>
<?php

$conexao = mysqli_connect("localhost","root","","lojaIFSP");
$comando = "SELECT * FROM tarefas";
$resultado = mysqli_query($conexao, $comando);

while($linha = mysqli_fetch_assoc($resultado)){
    ?>

    <tr>
    <td><?= $linha ['titulo']?></td>
    <td><a href="exibirTarefa.php?id=<?=$linha['tarefa_id']?>">exibir</a></td>
    <td><a href="editarTarefa.php?id=<?=$linha['tarefa_id']?>">editar</a></td>
    <td><a href="deletarTarefa.php?id=<?=$linha['tarefa_id']?>">deletar</a></td>
    </tr>
    
<?php
}; 
?>
</table>