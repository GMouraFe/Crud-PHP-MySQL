<?php

	echo('Produto excluido!');
	
	$connect = new mysqli("127.0.0.1", "admin", "Xurumela@19", "Empresa");

	if($connect){
		$query = "Delete from Estoque where id ='".$_POST['id']."'";
		$connect->query($query);
		mysqli_close($connect);
	}
	

	echo('<a href="index.php">Clique aqui para retornar</a>');
?>