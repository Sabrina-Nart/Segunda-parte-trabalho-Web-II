<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<title>Confeitaria - Alterar Clientes</title>
	</head>

	<body>
		<?php
			include('menu.php');
		
			$id          = $_POST['id'];
			$nome        = $_POST['nome'];
            $cpf         = $_POST['cpf'];
            $telefone    = $_POST['telefone'];
			$endereco    = $_POST['endereco'];
			$sexo        = $_POST['sexo'];
			$complemento = $_POST['complemento'];
			
			$sql = "UPDATE cliente SET nome = '{$nome}', cpf = '{$cpf}', telefone = '{$telefone}', endereco = '{$endereco}', sexo = '{$sexo}', complemento = '{$complemento}'";
			
            $query = mysqli_query($con, $sql);

			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Cliente alterado com sucesso! Cliente código: ' . $id;
			}
		?>

	</body>

</html>

<?php
	mysqli_close($con);
?>