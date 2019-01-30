<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Curso de PHP</title>
	</head>
	<body>
	<?php 
		//string
		$nome = 'Lino Veloso';

		//int
		$idade = '25';
		//float
		$peso = 71.5;
		//boolean
		$fumante_sn = false; //(true = 1) or (false = vazio)

	 ?>

	 <h1>Ficha Cadastral</h1>
	 <br>
	 <p> Nome: <?= $nome ?> </p>
	 <p> Idade:<?= $idade ?> </p>
	 <p> Peso: <?= $peso ?> </p>
	 <p> Fumante: <?= $fumante_sn ?> </p>

	</body>
</html>