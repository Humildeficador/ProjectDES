<?php
	class Cliente {
		
		//Método de cadastrar o cliente
		public function createCliente ($InfoCliente, $connectDB) {
			try {
				$command = $connectDB->prepare('INSERT INTO users(nome, sobrenome, idade, cpf, cel, cep, rua, numero, complemento, bairro, cidade, uf, email, senha) VALUES (:nome, :sobrenome, :idade, :cpf, :cel, :cep, :rua, :numero, :complemento, :bairro, :cidade, :uf, :email, :senha)');
				
				$command->bindValue(':nome', $InfoCliente->getNomeCliente());
				$command->bindValue(':sobrenome', $InfoCliente->getSobrenomeCliente());
				$command->bindValue(':idade', $InfoCliente->getIdadeCliente());
				$command->bindValue(':cpf', $InfoCliente->getCpfCliente());
				$command->bindValue(':cel', $InfoCliente->getCelCliente());
				$command->bindValue(':cep', $InfoCliente->getCepCliente());
				$command->bindValue(':rua', $InfoCliente->getRuaCliente());
				$command->bindValue(':numero', $InfoCliente->getNumeroCliente());
				$command->bindValue(':complemento', $InfoCliente->getComplementoCliente());
				$command->bindValue(':bairro', $InfoCliente->getBairroCliente());
				$command->bindValue(':cidade', $InfoCliente->getCidadeCliente());
				$command->bindValue(':uf', $InfoCliente->getUfCliente());
				$command->bindValue(':email', $InfoCliente->getEmailCliente());
				$command->bindValue(':senha', $InfoCliente->getSenhaCliente());
				
				if ($command->execute()) {
					echo "<script>
						alert('Cadastrado com sucesso!')
						window.location.href= '../../'
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


		//Método de listar o cliente
		public function listCliente ($connectDB) {
			try {
				$command = $connectDB->prepare('SELECT * FROM users ORDER BY userId ASC');
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


		//Método de deletar o cliente
		public function deleteCliente($InfoCliente, $connectDB) {
			try {
				$command = $connectDB->prepare('DELETE FROM users WHERE userId = :userId');
				$command->bindValue(':userId', $InfoCliente->getIdCliente());

				if($command->execute()) {
					echo "<script>
						alert('Cliente Excluido com sucesso!')
						window.location.href= '../../content/admin-page/painel-adm/'
						</script>";
				}
			} catch (PDOException $e) {
				echo "<script>
					alert('Ocorreu um erro ao excluir um cliente: : {$e->getMessage()}')
					window.history.back()
					</script>";
				return;
			}
		}


		// Método de editar o cliente
		public function editCliente($InfoCliente, $connectDB) {
			try {
				$command = $connectDB->prepare('UPDATE users SET nome = :nome, sobrenome = :sobrenome, idade = :idade, cpf = :cpf, cel = :cel, cep = :cep, rua = :rua, numero = :numero, complemento = :complemento, bairro = :bairro, cidade = :cidade, uf = :uf, email = :email, senha = :senha WHERE userId = :userId');

				$command->bindValue(':nome', $InfoCliente->getNomeCliente());
				$command->bindValue(':sobrenome', $InfoCliente->getSobrenomeCliente());
				$command->bindValue(':idade', $InfoCliente->getIdadeCliente());
				$command->bindValue(':cpf', $InfoCliente->getCpfCliente());
				$command->bindValue(':cel', $InfoCliente->getCelCliente());
				$command->bindValue(':cep', $InfoCliente->getCepCliente());
				$command->bindValue(':rua', $InfoCliente->getRuaCliente());
				$command->bindValue(':numero', $InfoCliente->getNumeroCliente());
				$command->bindValue(':complemento', $InfoCliente->getComplementoCliente());
				$command->bindValue(':bairro', $InfoCliente->getBairroCliente());
				$command->bindValue(':cidade', $InfoCliente->getCidadeCliente());
				$command->bindValue(':uf', $InfoCliente->getUfCliente());
				$command->bindValue(':email', $InfoCliente->getEmailCliente());
				$command->bindValue(':senha', $InfoCliente->getSenhaCliente());
				$command->bindValue(':userId', $InfoCliente->getIdCliente());
				
				if ($command->execute()) {
					echo "<script>
						alert('Cliente editado com sucesso!')
						window.location.href= '../../content/admin-page/painel-adm'
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
	}