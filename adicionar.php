<?php

	$produto = $_POST['produto'];
	$quantidade = $_POST['quantidade'];
	echo('Recebi '.$quantidade.' do produto '.$produto." foram inseridos<br><br>");
	
	$connect = new mysqli("127.0.0.1", "admin", "Xurumela@19", "Empresa");

	if($connect){
		$query = "INSERT INTO Estoque (produto,quantidade)VALUES('".$produto."','".$quantidade."')";
		$connect->query($query);
		mysqli_close($connect);
	}

	echo('<a href="index.php">Clique aqui para retornar</a>');
?>

