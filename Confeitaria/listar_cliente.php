<?php
	//include('validar.php');
	include('conexao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Confeitaria - Listar Clientes</title>

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
	$erro = @$_GET['erro'];
	$msg  = @$_GET['msg'];
	$ok   = @$_GET['ok'];
	$id   = @$_GET['id'];
	if($erro == 1) {
		echo "<p class=\"erro\">Erro no banco: {$msg}</p>";
	}
	if($ok == 1) {
		echo "<p class=\"ok\">Cliente cadastrado com sucesso! Novo cliente código: {$id}</p>";
	} else if ($ok == 2) {
		echo "<p class=\"ok\">Cliente alterado com sucesso! Cliente código: {$id}</p>";
	} else if ($ok == 3) {
		echo "<p class=\"ok\">Cliente excluido com sucesso! Cliente código: {$id}</p>";
	}
?>
<a href="cadastrar_cliente.php">Cadastrar um novo Cliente</a> 
<a href="json_clientes_db.php" target="_blank">JSON</a>
<?php
	$sql = "SELECT id, nome, cpf, telefone, endereco, complemento FROM cliente";

	$query = mysqli_query($con, $sql);

	if(!$query) {
		echo 'Erro no banco: ' . mysqli_error($con);
	} else {
?>
		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
					<th>Complemento</th>
					<th></th>
				</tr>
			</thead>
			<tbody>

<?php
		while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
?>

				<tr>
                    <br>
					<td><?php echo $arr['id']; ?></td>
					<td><?php echo $arr['nome']; ?></td>
                    <td><?php echo $arr['cpf']; ?></td>
                    <td><?php echo $arr['telefone']; ?></td>
                    <td><?php echo $arr['endereco']; ?></td>
                    <td><?php echo $arr['complemento']; ?></td>
					
                    <td>
						<a href="alterar_cliente.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_cliente_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
					</td> 

				</tr>
<?php
		}
?>
			</tbody>
    
		</table>

        <br><br>
        
		<strong>Total de Clientes Cadastrados: </strong><?php echo mysqli_num_rows($query); ?> 
<?php
	}
?>

	</body>
</html>

<?php
	mysqli_close($con);
?>