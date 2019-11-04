<?php
	require_once("config.php");
	
	$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	// carrega um usuário
	$usuario = new Usuario();
	$usuario->loadById(3);
	echo $usuario;

	//lista de usuários
	echo "<br /><br />";
	$lista = Usuario::getList();
	echo json_encode($lista);

	echo "<br /><br />";

	//carrega uma lista de usuários buscando pelo login
	$search = Usuario::search("jo");
	echo json_encode($search);

	echo "<br /><br />";

	//carrega o usuário usando o login e senha
	$usuario = new Usuario();
	$usuario->login("root","!@#$");
	echo $usuario;

	echo "<br /><br />";

	$usuario->login("root","123");
	echo $usuario;
?>
