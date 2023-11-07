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
?>

		<form action="cadastrar_valor_gasto_mensalmente_db.php" method="post"><br>

			<label for="id_tipo_gasto">Tipo de Gasto</label><br>
			<select name="id_tipo_gasto" id="id_tipo_gasto">

				<?php
					$sql = "SELECT id, nome FROM tipo_gasto"; // WHERE status = 'A'"

					$query = mysqli_query($con, $sql);

					if($query) {
						while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>

				<option value="<?php echo $arr['id']; ?>"><?php echo $arr['nome']; ?></option>

				<?php
						}
					}
				?>

			</select><br><br>

			<label for="mes_gasto">Mês do Gasto</label><br>
			<input type="datetime-local" name="mes_gasto" id="mes_gasto"><br><br>

			<label for="total">Total</label><br>
			<input type="text" name="total" id="total" maxlength="10"><br><br>
			
			<button type="submit">Cadastrar</button>
		</form>
	</body>

</html>

<?php
	mysqli_close($con);
?>








