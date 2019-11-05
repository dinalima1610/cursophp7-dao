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

	//$usuario->login("root","123");
	//echo $usuario;

	// 05/11/19
	//inserindo novos usuários
	/*
	echo "<br /><br />";
	
	$aluno = new Usuario();
	$aluno->setDeslogin("aluninho");
	$aluno->setDessenha("@luninh0");
	$aluno->insert();
	echo $aluno;
	
	echo "<br /><br />";

	$aluno = new Usuario();
	$aluno = new Usuario("aluna","@lun@");
	$aluno->insert();
	echo $aluno;
	*/

	//alterando usuários
	$usuario = new Usuario();
	$usuario->loadById(8);
	$usuario->update("professor","!@#$%¨&*");
	echo $usuario;

	echo "<br /><br />";

	$usuario->loadById(10);
	$usuario->update("aluninho","@luninh0");
	echo $usuario;
?>
