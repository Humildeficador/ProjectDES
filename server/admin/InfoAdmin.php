<?php 
	class InfoAdmin {
		private $nome;
		private $sobrenome;
		private $idade;
		private $cpf;
		private $cel;
		private $cep;
		private $rua;
		private $numero;
		private $complemento;
		private $bairro;
		private $cidade;
		private $uf;
		private $email;
		private $senha;
		private $id;

		//------------------------------------
		public function getNomeAdmin() {
			return $this->nome;
		}
		public function setNomeAdmin($value){
			$this->nome = $value;
		}
		//------------------------------------
		public function getSobrenomeAdmin() {
			return $this->sobrenome;
		}
		public function setSobrenomeAdmin($value){
			$this->sobrenome = $value;
		}
		//------------------------------------
		public function getIdadeAdmin() {
			return $this->idade;
		}
		public function setIdadeAdmin($value){
			$this->idade = $value;
		}
		//------------------------------------
		public function getCpfAdmin() {
			return $this->cpf;
		}
		public function setCpfAdmin($value){
			$this->cpf = $value;
		}
		//------------------------------------
		public function getCelAdmin() {
			return $this->cel;
		}
		public function setCelAdmin($value){
			$this->cel = $value;
		}
		//------------------------------------
		public function getCepAdmin() {
			return $this->cep;
		}
		public function setCepAdmin($value){
			$this->cep = $value;
		}
		//------------------------------------
		public function getRuaAdmin() {
			return $this->rua;
		}
		public function setRuaAdmin($value){
			$this->rua = $value;
		}
		//------------------------------------
		public function getNumeroAdmin() {
			return $this->numero;
		}
		public function setNumeroAdmin($value){
			$this->numero = $value;
		}
		//------------------------------------
		public function getComplementoAdmin() {
			return $this->complemento;
		}
		public function setComplementoAdmin($value){
			$this->complemento = $value;
		}
		//------------------------------------
		public function getBairroAdmin() {
			return $this->bairro;
		}
		public function setBairroAdmin($value){
			$this->bairro = $value;
		}
		//------------------------------------
		public function getCidadeAdmin() {
			return $this->cidade;
		}
		public function setCidadeAdmin($value){
			$this->cidade = $value;
		}
		//------------------------------------
		public function getUfAdmin() {
			return $this->uf;
		}
		public function setUfAdmin($value){
			$this->uf = $value;
		}
		//------------------------------------
		public function getEmailAdmin() {
			return $this->email;
		}
		public function setEmailAdmin($value){
			$this->email = $value;
		}
		//------------------------------------
		public function getSenhaAdmin() {
			return $this->senha;
		}
		public function setSenhaAdmin($value){
			$this->senha = $value;
		}
		//------------------------------------
		public function getIdAdmin() {
			return $this->id;
		}
		public function setIdAdmin($value){
			$this->id = $value;
		}
	}