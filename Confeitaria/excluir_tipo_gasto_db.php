<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Confeitaria - Remover Gasto</title>
	</head>

	<body>
		<?php
			include('menu.php');
		
			$id = $_GET['id'];
			
			$sql = "DELETE FROM tipo_gasto WHERE id = '{$id}'";

			$query = mysqli_query($con, $sql);
  
            echo '<br>';
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Gasto removido com sucesso! Código removido: ' . $id;
			}
		?>
	</body>

</html>

<?php
	mysqli_close($con);
?>