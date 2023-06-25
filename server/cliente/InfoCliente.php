<?php 
	class InfoCliente {
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
		public function getNomeCliente() {
			return $this->nome;
		}
		public function setNomeCliente($value){
			$this->nome = $value;
		}
		//------------------------------------
		public function getSobrenomeCliente() {
			return $this->sobrenome;
		}
		public function setSobrenomeCliente($value){
			$this->sobrenome = $value;
		}
		//------------------------------------
		public function getIdadeCliente() {
			return $this->idade;
		}
		public function setIdadeCliente($value){
			$this->idade = $value;
		}
		//------------------------------------
		public function getCpfCliente() {
			return $this->cpf;
		}
		public function setCpfCliente($value){
			$this->cpf = $value;
		}
		//------------------------------------
		public function getCelCliente() {
			return $this->cel;
		}
		public function setCelCliente($value){
			$this->cel = $value;
		}
		//------------------------------------
		public function getCepCliente() {
			return $this->cep;
		}
		public function setCepCliente($value){
			$this->cep = $value;
		}
		//------------------------------------
		public function getRuaCliente() {
			return $this->rua;
		}
		public function setRuaCliente($value){
			$this->rua = $value;
		}
		//------------------------------------
		public function getNumeroCliente() {
			return $this->numero;
		}
		public function setNumeroCliente($value){
			$this->numero = $value;
		}
		//------------------------------------
		public function getComplementoCliente() {
			return $this->complemento;
		}
		public function setComplementoCliente($value){
			$this->complemento = $value;
		}
		//------------------------------------
		public function getBairroCliente() {
			return $this->bairro;
		}
		public function setBairroCliente($value){
			$this->bairro = $value;
		}
		//------------------------------------
		public function getCidadeCliente() {
			return $this->cidade;
		}
		public function setCidadeCliente($value){
			$this->cidade = $value;
		}
		//------------------------------------
		public function getUfCliente() {
			return $this->uf;
		}
		public function setUfCliente($value){
			$this->uf = $value;
		}
		//------------------------------------
		public function getEmailCliente() {
			return $this->email;
		}
		public function setEmailCliente($value){
			$this->email = $value;
		}
		//------------------------------------
		public function getSenhaCliente() {
			return $this->senha;
		}
		public function setSenhaCliente($value){
			$this->senha = $value;
		}
		//------------------------------------
		public function getIdCliente() {
			return $this->id;
		}
		public function setIdCliente($value){
			$this->id = $value;
		}
	}