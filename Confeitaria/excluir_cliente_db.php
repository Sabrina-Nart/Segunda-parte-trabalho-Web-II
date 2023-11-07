<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Locadora - Excluir Clientes</title>
	</head>

	<body>
		<?php
			include('menu.php');
		
			$id = $_GET['id'];
			
			$sql = "DELETE FROM cliente WHERE id = '{$id}'";

			$query = mysqli_query($con, $sql);
  
            echo '<br>';
			if(!$query) {
				echo 'Erro no banco: ' . mysqli_error($con);
			} else {
				echo 'Cliente removido com sucesso! Código removido: ' . $id;
			}
		?>
	</body>

</html>

<?php
	mysqli_close($con);
?>