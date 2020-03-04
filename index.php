<?php
	echo'<marquee>Site Generico</marquee>';
?>
<!DOCTYPE HTML>
<HTML>
	<BODY>
		<form method="POST" action="adicionar.php">
			<label for='produto'>Produto:</label>
			<input id="produto" name="produto" type='text'>
			<label for='quantidade'>Quantidade:</label>
			<input id="quantidade"  name="quantidade" type='text'>		
			<input type="submit" value="Inserir"/>
		</form>
	</BODY>
</HTML>
