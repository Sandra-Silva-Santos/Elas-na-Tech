<?php 

include 'db.php';

$id_aluno = $_POST['escolha_aluno'];
$id_curso = $_POST['escolha_curso'];

$query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) VALUES($id_aluno, $id_curso)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
