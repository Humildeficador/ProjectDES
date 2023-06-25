<?php
	class Admin {
		
		public function testLogin ($InfoAdmin, $connectDB) {
			$command = $connectDB->prepare("SELECT * FROM admin WHERE email = ? and senha = ?");

			$command->bindValue(1, $InfoAdmin->getEmailAdmin());
			$command->bindValue(2, $InfoAdmin->getSenhaAdmin());

			$command->execute();
			$result = $command->rowCount();

			if($result < 1) {
				unset($_SESSION['email']);
				unset($_SESSION['senha']);
				header('Location: ../../content/admin-page/');
			} else {
				session_start();
				$_SESSION['email'] = $InfoAdmin->getEmailAdmin();
				$_SESSION['senha'] = $InfoAdmin->getSenhaAdmin();
				header('Location: ../../content/admin-page/painel-adm/');
			}
		}

		public function createAdmin ($InfoAdmin, $connectDB) {
			try {
				$command = $connectDB->prepare('INSERT INTO admin(nome, sobrenome, idade, cpf, cel, cep, rua, numero, complemento, bairro, cidade, uf, email, senha) VALUES (:nome, :sobrenome, :idade, :cpf, :cel, :cep, :rua, :numero, :complemento, :bairro, :cidade, :uf, :email, :senha)');
				
				$command->bindValue(':nome', $InfoAdmin->getNomeAdmin());
				$command->bindValue(':sobrenome', $InfoAdmin->getSobrenomeAdmin());
				$command->bindValue(':idade', $InfoAdmin->getIdadeAdmin());
				$command->bindValue(':cpf', $InfoAdmin->getCpfAdmin());
				$command->bindValue(':cel', $InfoAdmin->getCelAdmin());
				$command->bindValue(':cep', $InfoAdmin->getCepAdmin());
				$command->bindValue(':rua', $InfoAdmin->getRuaAdmin());
				$command->bindValue(':numero', $InfoAdmin->getNumeroAdmin());
				$command->bindValue(':complemento', $InfoAdmin->getComplementoAdmin());
				$command->bindValue(':bairro', $InfoAdmin->getBairroAdmin());
				$command->bindValue(':cidade', $InfoAdmin->getCidadeAdmin());
				$command->bindValue(':uf', $InfoAdmin->getUfAdmin());
				$command->bindValue(':email', $InfoAdmin->getEmailAdmin());
				$command->bindValue(':senha', $InfoAdmin->getSenhaAdmin());
				
				if ($command->execute()) {
					echo "<script>
						alert('Cadastrado com sucesso!')
						window.location.href= '../../content/admin-page/painel-adm/'
					</script>";
					return;
				}
			} catch (PDOException $e) {
				echo "<script>
					alert('Ocorreu um erro ao se cadastrar: : {$e->getMessage()}')
					window.history.back()
					</script>";
				return;
			}
		}


		// Método de listar os administradores
		public function listAdmin ($connectDB) {
			try {
				$command = $connectDB->prepare('SELECT * FROM admin ORDER BY adminId ASC');
				$command->execute();
				$result = $command->fetchAll(PDO::FETCH_OBJ);
				return $result;
			} catch (PDOException $e) {
				echo "<script>
					alert('Ocorreu um erro ao listar os usuários: {$e->getMessage()}')
					window.history.back()
					</script>";
					return;
			}
		}


		// Método de deletar o admin
		public function deleteAdmin($InfoAdmin, $connectDB) {
			try {
				$command = $connectDB->prepare('DELETE FROM admin WHERE adminId = :adminId');
				$command->bindValue(':adminId', $InfoAdmin->getIdAdmin());

				if($command->execute()) {
					echo "<script>
						alert('Administrador excluido com sucesso!')
						window.location.href= '../../content/admin-page/painel-adm/'
						</script>";
				}
			} catch (PDOException $e) {
				echo "<script>
					alert('Ocorreu um erro ao excluir um administrador: : {$e->getMessage()}')
					window.history.back()
					</script>";
				return;
			}
		}
	}