<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo curso</h1>
<form method="post" action="processa_curso.php">
	<br>
	<label class="badge badge-secondary">Nome curso:</label><br>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
	<br><br>
	<label class="badge badge-secondary">Carga horária</label><br>
	<input class="form-control"  type="text" name="carga_horaria" placeholder="Insira a carga horária"><br><br>
	<input type="submit" class="btn btn-success" value="Inserir curso">
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['id_curso'] == $_GET['editar']){ ?>

			<h1>Editar curso</h1>
			<form method="post" action="edita_curso.php">
				<input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
				<br>
				<label class="badge badge-secondary">Nome curso:</label><br>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
				<br><br>
				<label class="badge badge-secondary">Carga horária</label><br>
				<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária"  value="<?php echo $linha['carga_horaria']; ?>"><br><br>
				<input class="btn btn-success" type="submit" value="Editar curso">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
