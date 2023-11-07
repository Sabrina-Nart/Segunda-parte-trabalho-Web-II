<?php
	include('conexao.php');
?>


<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Listagem dos Produtos</title>

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

<a href="cadastrar_produtos.php">Cadastrar um novo Produto no Estoque</a>

<?php
	$sql = "SELECT id, descricao, tipo FROM produtos";

	$query = mysqli_query($con, $sql);

	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {
?>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Descrição do Produto</th>
                    <th>Classificação do Produto</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) { ?>
				<tr>
                    <br>
					<td><?php echo isset($arr['id']) ? $arr['id'] : ''; ?></td>
					<td><?php echo isset($arr['descricao']) ? $arr['descricao'] : ''; ?></td>
                    <td><?php echo isset($arr['tipo']) ? $arr['tipo'] : ''; ?></td>
					
                    <td>
						<a href="alterar_produtos.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_produto_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
    
		</table>

        <br><br>
        
		<strong>Total de Produtos Cadastrados: </strong><?php echo mysqli_num_rows($query); ?> 
<?php
	}
?>

	</body>
</html>

<?php
	mysqli_close($con);
?>