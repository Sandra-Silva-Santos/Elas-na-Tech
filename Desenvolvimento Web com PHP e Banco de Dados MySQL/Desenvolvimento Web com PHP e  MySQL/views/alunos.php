<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Data nascimento</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td >'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
			?>

			<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">
				<i class="fas fa-user-edit"></i>
			</a></td>
			<td><a href="deleta_aluno.php?id_curso=<?php echo $linha['id_aluno']; ?>"><i class="fas fa-user-times"></i></a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>
