<?php
	include_once "../connectDB.php";
	include_once "InfoCliente.php";
	include_once "CrudCliente.php";

	$InfoCliente = new InfoCliente();
	$Cliente = new Cliente();

	$InfoCliente->setNomeCliente(filter_input(INPUT_POST, 'nome'));
	$InfoCliente->setSobrenomeCliente(filter_input(INPUT_POST, 'sobrenome'));
	$InfoCliente->setIdadeCliente(filter_input(INPUT_POST, 'idade'));
	$InfoCliente->setCpfCliente(filter_input(INPUT_POST, 'cpf'));
	$InfoCliente->setCelCliente(filter_input(INPUT_POST, 'cel'));
	$InfoCliente->setCepCliente(filter_input(INPUT_POST, 'cep'));
	$InfoCliente->setRuaCliente(filter_input(INPUT_POST, 'rua'));
	$InfoCliente->setNumeroCliente(filter_input(INPUT_POST, 'numero'));
	$InfoCliente->setComplementoCliente(filter_input(INPUT_POST, 'complemento'));
	$InfoCliente->setBairroCliente(filter_input(INPUT_POST, 'bairro'));
	$InfoCliente->setCidadeCliente(filter_input(INPUT_POST, 'cidade'));
	$InfoCliente->setUfCliente(filter_input(INPUT_POST, 'uf'));
	$InfoCliente->setEmailCliente(filter_input(INPUT_POST, 'email'));
	$InfoCliente->setSenhaCliente(md5(filter_input(INPUT_POST, 'senha')));

	if (isset($_POST['createCliente'])) {
		echo $Cliente->createCliente($InfoCliente, $connectDB);
	} elseif (isset($_POST['deleteCliente'])) {
		$InfoCliente->setIdCliente(filter_input(INPUT_POST, 'deleteCliente'));
		echo $Cliente->deleteCliente($InfoCliente, $connectDB);
	} elseif (isset($_POST['editCliente'])) {
		$InfoCliente->setIdCliente(filter_input(INPUT_POST, 'editCliente'));
		echo $Cliente->editCliente($InfoCliente, $connectDB);
	}