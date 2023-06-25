<?php
	include_once "../connectDB.php";
	include_once "InfoAdmin.php";
	include_once "CrudAdmin.php";

	$InfoAdmin = new InfoAdmin();
	$Admin = new Admin();

	$InfoAdmin->setNomeAdmin(filter_input(INPUT_POST, 'nome'));
	$InfoAdmin->setSobrenomeAdmin(filter_input(INPUT_POST, 'sobrenome'));
	$InfoAdmin->setIdadeAdmin(filter_input(INPUT_POST, 'idade'));
	$InfoAdmin->setCpfAdmin(filter_input(INPUT_POST, 'cpf'));
	$InfoAdmin->setCelAdmin(filter_input(INPUT_POST, 'cel'));
	$InfoAdmin->setCepAdmin(filter_input(INPUT_POST, 'cep'));
	$InfoAdmin->setRuaAdmin(filter_input(INPUT_POST, 'rua'));
	$InfoAdmin->setNumeroAdmin(filter_input(INPUT_POST, 'numero'));
	$InfoAdmin->setComplementoAdmin(filter_input(INPUT_POST, 'complemento'));
	$InfoAdmin->setBairroAdmin(filter_input(INPUT_POST, 'bairro'));
	$InfoAdmin->setCidadeAdmin(filter_input(INPUT_POST, 'cidade'));
	$InfoAdmin->setUfAdmin(filter_input(INPUT_POST, 'uf'));
	$InfoAdmin->setEmailAdmin(filter_input(INPUT_POST, 'email'));
	$InfoAdmin->setSenhaAdmin(filter_input(INPUT_POST, 'senha'));
	$InfoAdmin->setSenhaAdmin(md5(filter_input(INPUT_POST, 'senha')));

	if (isset($_POST['testLogin'])) {
		echo $Admin->testLogin($InfoAdmin, $connectDB);
	} elseif(isset($_POST['createAdmin'])) {
		echo $Admin->createAdmin($InfoAdmin, $connectDB);
	} elseif(isset($_POST['deleteAdmin'])) {
		$InfoAdmin->setIdAdmin(filter_input(INPUT_POST, 'deleteAdmin'));
		echo $Admin->deleteAdmin($InfoAdmin, $connectDB);
	}