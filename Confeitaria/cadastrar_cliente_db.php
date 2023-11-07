
<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Cadastrar Clientes</title>
	</head>

	<body>
		<?php
			include('menu.php');
		
			$nome        = $_POST['nome'];
            $cpf         = $_POST['cpf'];
            $telefone    = $_POST['telefone'];
			$endereco    = $_POST['endereco'];
			$sexo        = $_POST['sexo'];
			$complemento = $_POST['complemento'];
			
			$sql = "INSERT INTO cliente VALUES (null, '{$nome}', '{$cpf}', '{$telefone}', '{$endereco}', '{$sexo}', '{$complemento}')";
			
            $query = mysqli_query($con, $sql);

			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Cliente foi cadastrado com sucesso! Código gerado: ' . mysqli_insert_id($con);
			}
		?>
	</body>

</html>

<?php
	mysqli_close($con);
?>