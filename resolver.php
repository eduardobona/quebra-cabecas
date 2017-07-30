<html>
	<head>
		<style>
			*{padding:0; margin:0; border:0;}
			table {border:0; border-spacing: 10px;}
			table tr td{padding:0; margin:0}
		</style>
	</head>
	<body>
		<table>
			<?php for($linha=1; $linha<=6; $linha++) : ?>
			<tr>
				<?php for($coluna=1; $coluna<=8; $coluna++) : ?>
				<td><img src="imagens/<?php echo ($linha*8)-8+$coluna ?>.jpg" /></td>
				<?php endfor; ?>
			</tr>
			<?php endfor; ?>
		</table>
	</body>
</html>
