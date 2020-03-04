<!DOCTYPE HTML>
<HTML>
	<BODY>		
			<?php 
				$connect = mysqli_connect("127.0.0.1", "admin", "Xurumela@19", "Empresa");
					if($connect){
						$query = "Select id, produto, quantidade from Estoque where id = '".$_POST['id']."'";
						$resultset = $connect->query($query);
						while($rs = $resultset->fetch_assoc()){
							$produto = $rs['produto'];
							$id = $rs['id'];
							$quantidade = $rs['quantidade'];
						}
						mysqli_close($connect);
					}
					
			echo("<h1> Atualize seus valores: </h1><br>");
			echo("<form action='atualizar_finalizar.php' method='POST'>");		
			echo("<label for='produto'>Produto:</label>");
			echo("<input id='produto' name='produto' type='text' value='".$produto."'>");
			echo("<label for='quantidade'>Quantidade:</label>");
			echo("<input id='quantidade'  name='quantidade' type='text'  value='".$quantidade."'>");
			echo("<input id='id'  name='id' type='hidden'  value='".$id."'>");			
			echo("<input type='submit' value='Atualizar'/>");
			echo("</form>");
			?>

	</BODY>
</HTML>
