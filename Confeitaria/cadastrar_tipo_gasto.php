
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Cadastro de Gastos</title>
	</head>

    <style>
        
    </style>

	<body>
        
<?php
	include('menu.php');
?>
		<form action="cadastrar_tipo_gasto_db.php" method="post">

			<label for="nome">Tipo do Gasto</label><br>
			<input type="text" name="nome" id="nome" maxlength="50"><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
	</body>
</html>









