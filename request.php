<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Atividade de fixação - Request</title>
</head>
<body>
	
	<?php 
	$idade = 18;
	$peso = 50;

	$podeDoar_sn = ($idade>=16 && $idade<=69) && ($peso>=50) ? 'Atende os requisitos' : 'Não atende os requisitos';
	?>

	<h1>VOCÊ PODE OU NÃO DOAR SANGUE? <br> <?=$podeDoar_sn?></h1>
	<br>

</body>
</html>