<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/assets/css/global.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/normalize.css">
	</head>
	<body>
		<div class="body">
			<h1>Quebra Cabeças</h1>
			<img class="logo" src="assets/img/logo.jpg" />

			<div class="row">
				<div class="menu">
					<ul>
						<li>
							<a href="app/mostrar.php">Iniciar</a>
						</li>
					</ul>
				</div>
				<div class="form">
					<h2>Atualizar Imagem</h2>
					<form 
						action="app/atualizar_imagem.php"
						method="post"
						enctype="multipart/form-data"
					>
						<input type="file" name="imagem" />
						<br />
						<input type="submit" value="enviar" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>