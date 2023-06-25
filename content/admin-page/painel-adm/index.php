<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['senha'])) {
	header('Location: ../');
}
include_once '../../../server/cliente/CrudCliente.php';
include_once '../../../server/admin/CrudAdmin.php';
include_once '../../../server/connectDB.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Camisetas Mil Grau</title>
	<link rel="stylesheet" href="../../../assets/css/painel-admin-style.css">
</head>

<body>
	<div class="container">
		<header>
			<a href="../../promocao.html" class="link-promocao">
				<img src="../../../assets/img/banner_promocao.png" alt="banner" class="banner">
			</a>
			<nav class="menu">
				<a href="#" class="menu-items" data-form="users">
					<li>Usuários</li>
				</a>
				<a href="#" class="menu-items" data-form="prod">
					<li>Produtos</li>
				</a>
				<a href="#" class="menu-items" data-form="admins">
					<li>Administradores</li>
				</a>
			</nav>
		</header>
		<main>
			<form action="../../../server/cliente/setCliente.php" method="POST" class="forms" id="users">
				<table>
					<thead>
						<tr>
							<th>UserId</th>
							<th>Nome</th>
							<th>Sobrenome</th>
							<th>Idade</th>
							<th>Cpf</th>
							<th>Cel</th>
							<th>Cep</th>
							<th>Rua</th>
							<th>Numero</th>
							<th>Complemento</th>
							<th>Bairro</th>
							<th>Cidade</th>
							<th>UF</th>
							<th>Email</th>
							<th>Senha</th>
							<th>...</th>
							
						</tr>
					</thead>
					
					<tbody>
						<?php
						$Cliente = new Cliente();
						$result = $Cliente->listCliente($connectDB);
						foreach ($result as $cliente) {
							echo "<tr>";
							echo "<th id= '$cliente->userId'>$cliente->userId</th>";
							echo "<th>$cliente->nome</th>";
							echo "<th>$cliente->sobrenome</th>";
							echo "<th>$cliente->idade</th>";
							echo "<th>$cliente->cpf</th>";
							echo "<th>$cliente->cel</th>";
							echo "<th>$cliente->cep</th>";
							echo "<th>$cliente->rua</th>";
							echo "<th>$cliente->numero</th>";
							echo "<th>$cliente->complemento</th>";
							echo "<th>$cliente->bairro</th>";
							echo "<th>$cliente->cidade</th>";
							echo "<th>$cliente->uf</th>";
							echo "<th>$cliente->email</th>";
							echo "<th>$cliente->senha</th>";
							echo "<th>
								<div class='remove-edit-buttons'>
									<button type='submit' class='deleteButton' name='deleteCliente' data-verify='user' value='{$cliente->userId}'><i class='bx bxs-trash-alt'></i></button>
									<a data-verify='user' data-value='{$cliente->userId}' class='edit' name='editCliente'><i class='bx bxs-edit-alt'></i></a>
								</div>
							</th>";
						}
						?>
					</tbody>
				</table>
			</form>
			<form action="#" class="forms" id="prod">
				<div class="prod-all-content">
					<div class="prod-menu">

					</div>
					<div class="prod-content">
						<div class="prod-list"></div>
						<div class="prod-register"></div>
						<div class="prod-edit"></div>
					</div>
				</div>
			</form>
			<form action="../../../server/admin/setAdmin.php" method="POST" class="forms" id="admins">
				<div class="admin-all-content">
					<div class="admin-menu">
						<a class="admin-register-button">Registrar</a>
					</div>
					<div class="admin-list">
					<table>
					<thead>
						<tr>
							<th>UserId</th>
							<th>Nome</th>
							<th>Sobrenome</th>
							<th>Idade</th>
							<th>Cpf</th>
							<th>Cel</th>
							<th>Cep</th>
							<th>Rua</th>
							<th>Numero</th>
							<th>Complemento</th>
							<th>Bairro</th>
							<th>Cidade</th>
							<th>UF</th>
							<th>Email</th>
							<th>Senha</th>
							<th>...</th>
							
						</tr>
					</thead>
					
					<tbody>
						<?php
						$Admin = new Admin();
						$result = $Admin->listAdmin($connectDB);
						foreach ($result as $admin) {
							echo "<tr>";
							echo "<th id='$admin->adminId'>$admin->adminId</th>";
							echo "<th>$admin->nome</th>";
							echo "<th>$admin->sobrenome</th>";
							echo "<th>$admin->idade</th>";
							echo "<th>$admin->cpf</th>";
							echo "<th>$admin->cel</th>";
							echo "<th>$admin->cep</th>";
							echo "<th>$admin->rua</th>";
							echo "<th>$admin->numero</th>";
							echo "<th>$admin->complemento</th>";
							echo "<th>$admin->bairro</th>";
							echo "<th>$admin->cidade</th>";
							echo "<th>$admin->uf</th>";
							echo "<th>$admin->email</th>";
							echo "<th>$admin->senha</th>";
							echo "<th class='remove-edit'>
								<div class='remove-edit-buttons'>
									<button type='submit' class='deleteButton' name='deleteAdmin' data-verify='admin' value='{$admin->adminId}'><i class='bx bxs-trash-alt'></i></button>
									<a data-verify='admin' data-value='{$admin->adminId}' class='edit' name='editCliente'><i class='bx bxs-edit-alt'></i></a>
								</div>
							</th>";
						}
						?>
					</tbody>
				</table>
					</div>
				</div>
			</form>
			<form method="POST" class="edit-wrapper">
				<div class="title"><h1 class="title-wrapper-cliente">Editar</h1></div>
				<div class="box-info-endereco">
					<div class="box-user-info">
						<div class="input-box">
							<label for="nome">Nome</label>
							<input type="text" name="nome" id="nome">
						</div>
						<div class="input-box">
							<label for="sobrenome">Sobrenome</label>
							<input type="text" name="sobrenome" id="sobrenome">
						</div>
						<div class="input-box">
							<label for="idade">Idade</label>
							<input type="text" name="idade" id="idade">
						</div>
						<div class="input-box">
							<label for="cpf">CPF</label>
							<input type="text" name="cpf" id="cpf">
						</div>
						<div class="input-box">
							<label for="cel">Celular</label>
							<input type="text" name="cel" id="cel">
						</div>
					</div>
					<div class="box-user-endereco">
						<div class="input-box">
							<label for="cep">CEP</label>
							<input type="text" name="cep" id="cep">
						</div>
						<div class="input-box">
							<label for="rua">Rua</label>
							<input type="text" name="rua" id="rua">
						</div>
						<div class="input-box">
							<label for="numero">Número</label>
							<input type="text" name="numero" id="numero">
						</div>
						<div class="input-box">
							<label for="complemento">Complemento</label>
							<input type="text" name="complemento" id="complemento">
						</div>
						<div class="input-box">
							<label for="bairro">Bairro</label>
							<input type="text" name="bairro" id="bairro">
						</div>
						<div class="input-box">
							<label for="cidade">Cidade</label>
							<input type="text" name="cidade" id="cidade">
						</div>
						<div class="input-box">
							<label for="uf">UF</label>
							<input type="text" name="uf" id="uf">
						</div>
					</div>
				</div>
				<div class="box-user-login">
					<div class="input-box">
						<label for="email"><i class='bx bxs-user'></i> Email</label>
						<input type="text" name="email" id="email">
					</div>
					<div class="input-box">
						<label for="senha"><i class='bx bxs-lock' ></i> Senha</label>
						<input type="password" name="senha" id="senha">
					</div>
				</div>
				<div class="button-box">
					<button type="submit" id="wrapper-edit-button">Editar</button>
					<a class="close-register-wrapper">Cancelar</a>
				</div>
			</form>
		</main>
		<footer>&copy; Camisetas Mil Graul LTDA <br> 2023</footer>
	</div>
</body>

</html>

<script src="../../../assets/js/painel-adm-script.js"></script>