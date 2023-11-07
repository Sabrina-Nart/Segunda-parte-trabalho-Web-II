<?php
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Listagem dos Gastos</title>

		<style type="text/css" rel="stylesheet">
			table {
				border-collapse: collapse;
			}
			th, td {
                text-align: center;
				border: 2px solid black;
                padding: 5px;
			}
		</style>
	</head>

	<body>
<?php
	include('menu.php');
?>
    <br>

<a href="cadastrar_tipo_gasto.php">Cadastro de gastos referentes a confeitaria</a><br>

<?php
	$sql = "SELECT id, nome FROM tipo_gasto";

	$query = mysqli_query($con, $sql);

	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {
?>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Tipo de Gasto</th>
					<th></th>
				</tr>
			</thead>
            
			<tbody>
				<?php while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) { ?>
				<tr>
                    <br>
					<td><?php echo isset($arr['id']) ? $arr['id'] : ''; ?></td>
					<td><?php echo isset($arr['nome']) ? $arr['nome'] : ''; ?></td>
					
                    <td>
						<a href="alterar_tipo_gasto.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_tipo_gasto_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
    
		</table>

        <br><br>
        
		<strong>Total de gastos cadastrados </strong><?php echo mysqli_num_rows($query); ?> 
<?php
	}
?>

	</body>
</html>

<?php
	mysqli_close($con);
?>