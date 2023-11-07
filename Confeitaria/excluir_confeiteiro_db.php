<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Locadora - Remover colaborador</title>
	</head>

	<body>
		<?php
			include('menu.php');
		
			$id = $_GET['id'];
			
			$sql = "DELETE FROM confeiteiro WHERE id = '{$id}'";

			$query = mysqli_query($con, $sql);
  
            echo '<br>';
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Confeiteiro removido com sucesso! Código removido: ' . $id;
			}
		?>
	</body>

</html>

<?php
	mysqli_close($con);
?>