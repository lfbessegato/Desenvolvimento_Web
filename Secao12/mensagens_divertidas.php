<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		<?php
			//arrays
			$lista_compras[1] = 'feijao';
			$lista_compras[2] = 'Banana';
			$lista_compras[3] = 'Morango';

			$lista_compras1 = array(1 => 'Chocolate', 2 => 'Bolacha');

			var_dump($lista_compras);
			echo '<br />';
			print_r($lista_compras);
			echo '<br />';
			echo $lista_compras[2];

			echo '<br />';
			var_dump($lista_compras1);

		?>
		
		
	</body>
</html>