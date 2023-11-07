<?php
	include('validar.php');
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Locadora - Listar Usuários</title>
		<style type="text/css" rel="stylesheet">
			table {
				border-collapse: collapse;
			}
			th, td {
				border: 1px solid black;
			}
			.erro {
				color: red;
			}
			.ok {
				color: green;
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
		echo "<p class=\"ok\">Usuário cadastrado com sucesso! Novo usuário código: {$id}</p>";
	} else if ($ok == 2) {
		echo "<p class=\"ok\">Usuário alterado com sucesso! Usuário código: {$id}</p>";
	} else if ($ok == 3) {
		echo "<p class=\"ok\">Usuário excluido com sucesso! Usuário código: {$id}</p>";
	}
?>

<a href="cadastrar_usuarios.php">Cadastrar</a> 

<?php
	$sql = "SELECT id, nome, email FROM usuario";
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
					<th>E-mail</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
		while($arr = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
?>
				<tr>
					<td><?php echo $arr['id']; ?></td>
					<td><?php echo $arr['nome']; ?></td>
					<td><?php echo $arr['email']; ?></td>
					<td>
						<a href="alterar_usuarios.php?id=<?php echo $arr['id']; ?>">Alterar</a>
						
						<a href="excluir_usuarios_db.php?id=<?php echo $arr['id']; ?>">Excluir</a>
					</td>
				</tr>
<?php
		}
?>
			</tbody>
		</table>

		Total: <?php echo mysqli_num_rows($query); ?> usuários
<?php
	}
?>
	</body>
</html>
<?php
	mysqli_close($con);
?>