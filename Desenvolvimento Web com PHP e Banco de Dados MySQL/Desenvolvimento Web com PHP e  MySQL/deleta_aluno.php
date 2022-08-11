<?php 

include 'db.php';

$id_aluno = $_GET['id_aluno'];

$query = "DELETE FROM ALUNOS WHERE ID_ALUNO = $id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
