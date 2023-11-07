<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Cadastro de Confeiteiro</title>
	</head>

	<body>
        
<?php
	include('menu.php');
?>
		<form action="cadastrar_confeiteiro_db.php" method="post">

			<label for="nome">Nome</label><br>
			<input type="text" name="nome" id="nome" maxlength="100"><br><br>
			
			<label for="especialidade">Especialidade</label><br>
			<select name="especialidade" id="especialidade">
				<option value="B">Bolos</option>
				<option value="D">Docinhos</option>
                <option value="S">Salgados</option>
			</select><br><br>

			<label for="data_contratacao">Data de Contratacao</label><br>
			<input type="date" name="data_contratacao" id="data_contratacao"><br><br>

			<button type="submit">Cadastrar</button>
		</form>
	</body>
</html>









