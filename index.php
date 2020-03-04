<!DOCTYPE HTML>
<HTML>
	<BODY>
		<H1>ESTOQUE</h1>
		<H3>Inserir</h3>
		<form method="POST" action="adicionar.php">
			<label for='produto'>Produto:</label>
			<input id="produto" name="produto" type='text'>
			<label for='quantidade'>Quantidade:</label>
			<input id="quantidade"  name="quantidade" type='text'>		
			<input type="submit" value="Inserir"/>
		</form>
		<H3>Presentes</h3>
			<?php
				$connect = new mysqli("127.0.0.1", "admin", "Xurumela@19", "Empresa");
			
					if($connect){
						$query = "Select id, produto, quantidade from Estoque";
						$resultset = $connect->query($query);
						
						if($resultset->num_rows == 0){
						
						}else{
							echo("<table border=1>");
								echo("<tr>");
									echo("<th>Produto</th>");
									echo("<th>Quantidade</th>");
									echo("<th>Ações</th>");
								echo("</tr>");
							while($rs = $resultset->fetch_assoc()){
								echo("<tr>");
									echo("<td>");
										echo($rs['produto']);	
									echo("</td>");
									echo("<td>");
										echo($rs['quantidade']);	
									echo("</td>");	
									echo("<td>");
										echo("<form method='POST' action='excluir.php'><input id='id' name='id' type='hidden' value='".$rs['id']."'>"."<input type='submit' value='Excluir'/></form>");
										echo("<form method='POST' action='alterar.php'><input id='id' name='id' type='hidden' value='".$rs['id']."'>"."<input type='submit' value='Alterar'/></form>");								
									echo("</td>");
								echo("</tr>");
							}
						mysqli_close($connect);
						echo("</table>");
					}	
					}
			?>
		
	</BODY>
</HTML>



