<?php

	echo('Produto alterado!');
	
	$connect = new mysqli("127.0.0.1", "admin", "Xurumela@19", "Empresa");

	if($connect){
		$query = "Update Estoque set produto = '".$_POST['produto']."', quantidade = '".$_POST['quantidade']."' where id ='".$_POST['id']."'";

		
		$connect->query($query);
		mysqli_close($connect);
	}
	

	echo('<a href="index.php">Clique aqui para retornar</a>');
?>