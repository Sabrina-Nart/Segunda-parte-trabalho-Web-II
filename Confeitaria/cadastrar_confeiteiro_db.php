
<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Cadastro de Funcionários</title>
	</head>

	<body>
		<?php
			include('menu.php');
		
			$nome              = $_POST['nome'];
            $especialidade     = $_POST['especialidade'];
            $data_contratacao  = $_POST['data_contratacao'];
			
			$sql = "INSERT INTO confeiteiro VALUES (null, '{$nome}', '{$especialidade}', '{$data_contratacao}')";
			
            $query = mysqli_query($con, $sql);

			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Novo colaborador cadastrado com sucesso! Código gerado: ' . mysqli_insert_id($con);
			}
		?>
	</body>

</html>

<?php
	mysqli_close($con);
?>