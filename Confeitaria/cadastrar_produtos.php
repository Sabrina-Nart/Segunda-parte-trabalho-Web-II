<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Cadastro de Produtos</title>
	</head>

    <style>
        
    </style>

	<body>
        
<?php
	include('menu.php');
?>
		<form action="cadastrar_produtos_db.php" method="post">

			<label for="descricao">Descrição do Produto</label><br>
			<input type="text" name="descricao" id="descricao" maxlength="100"><br><br>
			
			<label for="status">Classificação do Produto</label><br>
			<select name="tipo" id="tipo">
				<option value="C">Cereais e Farináceos</option>
                <option value="P">Padaria</option>
				<option value="E">Enlatados</option>
                <option value="L">Laticínios</option>
                <option value="B">Bebidas</option>
                <option value="F">Frios</option>
                <option value="H">Hortifrúti </option>
                <option value="I">Bebidas</option>
                <option value="G">Congelados</option>
                <option value="U">Utensílios para cozinha</option>
			</select><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
	</body>
</html>









