<?php

//usuários do sistema 
$usuarios_app = array(
	array('email' => 'adm@teste.com.br', 'senha' => '123456'),
	array('email' =>'user@teste.com.br', 'senha'=>'abcd'),
	array('email' => 'linoc.veloso@gmail.com', 'senha'=> '438597'),
);

/*
	echo '<pre>';
	print_r($usuarios_app);
	echo '</pre>';

	print_r($_GET);
	echo "<br/>";
	echo $_GET['email'];
	echo "<br/>";
	echo $_GET['senha'];
*/
//variavem que verifica se a autenticação foi autenticada.
$user_autenticado = false;

echo '<pre>';
foreach ($usuarios_app as $user) {
//apenas um estudo de como concatenar
/*
	echo 'Usuário app: '. $user['email'] . ' / '  . $user['senha'];
	echo '<br>';
	echo 'Usuario Form: ' . $_POST['email'] .' / ' . $_POST['senha'];
	echo '<hr>';
*/
	if ($user['email'] == $_POST['email'] && $user['senha']==$_POST['senha']) {
		$user_autenticado = true;
	} 
}

if ($user_autenticado) {
	echo "Usuário autenticado com sucesso";
} else {
	header('Location: index.php?login=erro');
//	echo "Erro na autenticação do usuário";
}

echo '</pre>';

//teste de como capturar informação do post
/*
	print_r($_POST);
	echo "<br/>";
	echo $_POST['email'];
	echo "<br/>";
	echo $_POST['senha'];
*/

?>