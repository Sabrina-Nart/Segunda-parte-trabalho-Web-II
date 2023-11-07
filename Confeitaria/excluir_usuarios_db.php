<?php
	include('validar.php');
	include('conexao.php');

	$id = mysqli_real_escape_string($con, $_GET['id']);
	
	$sql = "DELETE FROM usuario WHERE id = '{$id}'";
	$query = mysqli_query($con, $sql);
	if(!$query) {
		header('Location: listar_usuarios.php?erro=1&msg=' . mysqli_error($con));
	} else {
		header('Location: listar_usuarios.php?ok=3&id=' . $id);
	}

	mysqli_close($con);
?>