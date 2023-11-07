<?php
	include('validar.php');
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Confeitaria - LIstar os Gastos Mensais</title>

		<style type="text/css" rel="stylesheet">
			table {
				border-collapse: collapse;
			}
			th, td {
				border: 1px solid black;
			}
		</style>
	</head>

	<body>

<?php
	include('menu.php');
?>

<br><a href="cadastrar_valor_gasto_mensalmente.php">Cadastro dos Gastos Mensais</a><br>

<!--<a href="json_locacoes_db.php" target="_blank">JSON</a>-->

<?php
	$sql = "SELECT v.id, t.id, v.mes_gasto, v.total
              FROM valor_gasto_mensalmente AS v
            INNER JOIN tipo_gasto AS t ON (v.id = t.id)";
	$query = mysqli_query($con, $sql);

	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {

?><br>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Tipo de Gasto</th>
					<th>Mês do Gasto</th>
					<th>Total</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
		while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
?>
				<tr>
					<td><?php echo $arr['id']; ?></td>
                    <td><?php echo $arr['id']; ?></td>
					<td><?php echo ($arr['mes_gasto']); ?></td>					
					<td><?php echo $arr['total']; ?></td>
					<td>
						<a href="alterar_valor_gasto_mensalmente.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_valor_gasto_mensalmente_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
					</td>
				</tr>
<?php
		}
?>
			</tbody>
		</table><br>
        
		Total: <?php echo mysqli_num_rows($query); ?> gasto(s)

<?php
	}
?>
	</body>
</html>

<?php
	mysqli_close($con);
?>