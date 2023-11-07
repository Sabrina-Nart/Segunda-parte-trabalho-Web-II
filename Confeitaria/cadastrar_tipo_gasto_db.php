<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Cadastro de Gastos</title>
	</head>

	<body>
		<?php
			include('menu.php');
		
			$nome = $_POST['nome'];
			
			$sql = "INSERT INTO tipo_gasto (nome) VALUES ('{$nome}')";
			
            $query = mysqli_query($con, $sql);
     
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Gasto cadastrado com sucesso! Código gerado: ' . mysqli_insert_id($con);
			}
		?>
	</body>

</html>

<?php
	mysqli_close($con);
?>