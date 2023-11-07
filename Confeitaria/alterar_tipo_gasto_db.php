<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Alteração de Gastos</title>
	</head>
	<body>
		<?php
			include('menu.php');
			$con = mysqli_connect('localhost', 'root', '', 'confeitaria');
		
			$id        = $_POST['id'];
			$nome      = $_POST['nome'];
			
			$sql = "UPDATE tipo_gasto SET nome = '{$nome}' WHERE id = {$id}";
			
            $query = mysqli_query($con, $sql);

			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Gasto alterado com sucesso! Código gerado: ' . $id;
			}
		?>
	</body>
</html>

<?php
	mysqli_close($con);
?>
