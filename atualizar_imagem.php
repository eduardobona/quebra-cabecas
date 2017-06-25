<?php
	if (isset($_POST)) {
		// script para atualizar imagem...
	}
?>
<html>
	<head>
		<title>Atualizar Imagem</title>
	</head>
	<body>
		<form action="atualizar_imagem_quebra_cabeca.php" action="POST">
			Enviar nova imagem para atualizar (Tamanho válido 800x600):
			<br />
			<input name="imagem" type="file" />
			<br />
			<input type="submit" />
		</form>
	</body>
</html>