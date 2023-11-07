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
		
			$id          	   = $_POST['id'];
			$nome              = $_POST['nome'];
            $especialidade     = $_POST['especialidade'];
            $data_contratacao  = $_POST['data_contratacao'];
			
			$sql = "UPDATE confeiteiro SET nome = '{$nome}', especialidade = '{$especialidade}', data_contratacao = '{$data_contratacao}' WHERE id = {$id}";
			
            $query = mysqli_query($con, $sql);

			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Colaborador alterado com sucesso! Código alterado: ' . $id;
			}
		?>

	</body>

</html>

<?php
	mysqli_close($con);
?>