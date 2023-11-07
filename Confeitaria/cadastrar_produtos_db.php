<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Cadastro de Produtos</title>
	</head>

	<body>
		<?php
			include('menu.php');
		
			$descricao = $_POST['descricao'];
            $tipo      = $_POST['tipo'];
			
			$sql = "INSERT INTO produtos (descricao, tipo) VALUES ('{$descricao}', '{$tipo}')";
			
            $query = mysqli_query($con, $sql);

			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Produto cadastrado com sucesso! Código gerado: ' . mysqli_insert_id($con);
			}
		?>
	</body>

</html>

<?php
	mysqli_close($con);
?>