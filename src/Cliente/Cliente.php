<?php

namespace DevFashion\Src\Cliente;

use DevFashion\Src\Carrinho\Carrinho;
use DevFashion\Src\ListaDesejos\ListaDesejos;
use DevFashion\Src\Pedido\PedidoList;

/**
 * Class Cliente
 * @package DevFashion\Src\Cliente
 * @version 1.0.0
 */
class Cliente {

	private int $iId;
	private string $sNome;
	private string $sCPF;
	private \DateTimeImmutable $oDataNascimento;
	private string $sEmail;
	private string $sTelefone;
	private string $sCEP;
	private string $sLogradouro;
	private string $sBairro;
	private string $sEstado;
	private string $sCidade;
	private string $sComplemento;
	private \DateTimeImmutable $oDataCadastro;
	private string $sSenha;

	/**
	 * Cria um objeto Cliente a partir de um array
	 *
	 * @param array $aDados
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return Cliente
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function createFromArray(array $aDados): Cliente {
		$oCliente = new Cliente();
		$oCliente->iId = $aDados['cle_id'];
		$oCliente->sNome = $aDados['cle_nome'];
		$oCliente->sCPF = $aDados['cle_cpf'];
		$oCliente->oDataNascimento = new \DateTimeImmutable($aDados['cle_data_nascimento']);
		$oCliente->sEmail = $aDados['cle_email'];
		$oCliente->sTelefone = $aDados['cle_telefone'];
		$oCliente->sCEP = $aDados['cle_cep'];
		$oCliente->sLogradouro = $aDados['cle_logradouro'];
		$oCliente->sBairro = $aDados['cle_bairro'];
		$oCliente->sEstado = $aDados['cle_estado'];
		$oCliente->sCidade = $aDados['cle_cidade'];
		$oCliente->sComplemento = $aDados['cle_complemento'];
		$oCliente->oDataCadastro = new \DateTimeImmutable($aDados['cle_data_cadastro']);
		$oCliente->sSenha = $aDados['cle_senha'];

		return $oCliente;
	}

	/**
	 * Retorna o Id
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return int
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getId(): int {
		return $this->iId;
	}

	/**
	 * Atribui o Id
	 *
	 * @param int $iId
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setId(int $iId): void {
		$this->iId = $iId;
	}

	/**
	 * Retorna o nome
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getNome(): string {
		return $this->sNome;
	}

	/**
	 * Atribui o nome
	 *
	 * @param string $sNome
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setNome(string $sNome): void {
		$this->sNome = $sNome;
	}
	
	/**
	 * Retorna o CPF
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getCPF(): string {
		return $this->sCPF;
	}

	/**
	 * Atribui o CPF
	 *
	 * @param string $sCPF
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setCPF(string $sCPF): void {
		$this->sCPF = $sCPF;
	}

	/**
	 * Retorna a data de nascimento
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return \DateTimeImmutable
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getDataNascimento(): \DateTimeImmutable {
		return $this->oDataNascimento;
	}

	/**
	 * Atribui a data de nascimento
	 *
	 * @param \DateTimeImmutable $oDataNascimento
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setDataNascimento(\DateTimeImmutable $oDataNascimento): void {
		$this->oDataNascimento = $oDataNascimento;
	}

	/**
	 * Retorna o e-mail
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getEmail(): string {
		return $this->sEmail;
	}

	/**
	 * Atribui o e-mail
	 *
	 * @param string $sEmail
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setEmail(string $sEmail): void {
		$this->sEmail = $sEmail;
	}

	/**
	 * Retorna o telefone
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getTelefone(): string {
		return $this->sTelefone;
	}

	/**
	 * Atribui o telefone
	 *
	 * @param string $sTelefone
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setTelefone(string $sTelefone): void {
		$this->sTelefone = $sTelefone;
	}

	/**
	 * Retorna o CEP
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getCepEndereco(): string {
		return $this->sCEP;
	}

	/**
	 * Atribui o CEP
	 *
	 * @param string $sCEP
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setCepEndereco(string $sCEP): void {
		$this->sCEP = $sCEP;
	}

	/**
	 * Retorna o logradouro
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getLogradouro(): string {
		return $this->sLogradouro;
	}

	/**
	 * Atribui o logradouro
	 *
	 * @param string $sLogradouro
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setLogradouro(string $sLogradouro): void {
		$this->sLogradouro = $sLogradouro;
	}

	/**
	 * Retorna o bairro
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getBairro(): string {
		return $this->sBairro;
	}

	/**
	 * Atribui o bairro
	 *
	 * @param string $sBairro
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setBairro(string $sBairro): void {
		$this->sBairro = $sBairro;
	}

	/**
	 * Retorna o estado
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getEstado(): string {
		return $this->sEstado;
	}

	/**
	 * Atribui o estado
	 *
	 * @param string $sEstado
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setEstado(string $sEstado): void {
		$this->sEstado = $sEstado;
	}

	/**
	 * Retorna a cidade
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getCidade(): string {
		return $this->sCidade;
	}

	/**
	 * Atribui a cidade
	 *
	 * @param string $sCidade
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setCidade(string $sCidade): void {
		$this->sCidade = $sCidade;
	}

	/**
	 * Retorna o complemento
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getComplemento(): string {
		return $this->sComplemento;
	}

	/**
	 * Atribui o complemento
	 *
	 * @param string $sComplemento
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setComplemento(string $sComplemento): void {
		$this->sComplemento = $sComplemento;
	}

	/**
	 * Retorna a data de cadastro
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return \DateTimeImmutable
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getDataCadastro(): \DateTimeImmutable {
		return $this->oDataCadastro;
	}

	/**
	 * Atribui a data de cadastro
	 *
	 * @param \DateTimeImmutable $oDataCadastro
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setDataCadastro(\DateTimeImmutable $oDataCadastro): void {
		$this->oDataCadastro = $oDataCadastro;
	}

	/**
	 * Retorna a senha
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getSenha(): string {
		return $this->sSenha;
	}

	/**
	 * Atribui a senha
	 *
	 * @param string $sSenha
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setSenha(string $sSenha): void {
		$sSenha = password_hash($sSenha,PASSWORD_BCRYPT, ['cost' => 11]);
		$this->sSenha = $sSenha;
	}

	public function cadastrar(): void {
		// TODO: Implementar.
	}

	public function atualizar(): void {
		// TODO: Implementar.
	}

	public function excluirCadastro(): void {
		// TODO: Implementar.
	}

	public function getCarrinho(): Carrinho	{
		// TODO: Implementar.
	}

	public function getListaDesejos(): ListaDesejos {
		// TODO: Implementar.
	}

	public function getPedidos(): PedidoList {
		// TODO: Implementar.
	}
}