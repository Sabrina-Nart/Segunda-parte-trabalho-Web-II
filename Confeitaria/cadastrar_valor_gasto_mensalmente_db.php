<?php
	//include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<title>Confeitaria - Cadastros dos gastos mensais</title>
	</head>
	<body>
		<?php
			include('menu.php');
			
			$id_tipo_gasto                = $_POST['id_tipo_gasto'];
			$mes_gasto                    = $_POST['mes_gasto'];
			$total                        = $_POST['total'];
			
			$sql = "INSERT INTO valor_gasto_mensalmente VALUES (null, '{$id_tipo_gasto}', '{$mes_gasto}', '{$total}')";
			$query = mysqli_query($con, $sql);
			
            if(!$query) {

				echo 'Erro no banco: ' . mysqli_error($con);

			} else {
                
				if(!$query) {

					echo 'Erro no banco: ' . mysqli_error($con);

				} else {

					echo 'Locação cadastrado com sucesso! Nova locação código: ' . $id_tipo_gasto;
				}
			}
		?>

	</body>

</html>

<?php
	mysqli_close($con);
?>