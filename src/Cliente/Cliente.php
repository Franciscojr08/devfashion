<?php

namespace DevFashion\Src\Cliente;

use DevFashion\Src\Carrinho\Carrinho;
use DevFashion\Src\ListaDesejos\ListaDesejos;
use DevFashion\Src\Pedido\PedidoList;
use DevFashion\Src\Roupa\RoupaList;
use DevFashion\Src\Sistema\Enum\SexoEnum;
use DevFashion\Src\Sistema\Sistema;

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
	private int $iSexo;
	private string $sEmail;
	private string $sTelefone;
	private string $sCEP;
	private string $sLogradouro;
	private string $sBairro;
	private string $sEstado;
	private string $sCidade;
	private string $sComplemento;
	private int $iNumero;
	private \DateTimeImmutable $oDataCadastro;
	private string $sSenha;
	private ListaDesejos $oListaDesejos;

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
	 * Retorna se o cliente possui o id preenchido
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return bool
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function hasId(): bool {
		return !empty($this->iId);
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

	/**
	 * Retorna a descrição do sexo
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getDescricaoSexo(): string {
		return SexoEnum::getDescricaoById($this->iSexo);
	}

	/**
	 * Retorna o Id do sexo no enum de sexo
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return int
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getSexoIdEnum(): int {
		return $this->iSexo;
	}

	/**
	 * Atribui o Sexo
	 *
	 * @param int $iSexo
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setSexo(int $iSexo): void {
		$this->iSexo = $iSexo;
	}

	/**
	 * Retorna o número do endereço
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return int
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getNumeroEndereco(): int {
		return $this->iNumero;
	}

	/**
	 * Atribui o número do endereço
	 *
	 * @param int $iNumero
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setNumeroEndereco(int $iNumero): void {
		$this->iNumero = $iNumero;
	}

	/**
	 * Cadastra o cliente
	 *
	 * @param array $aDados
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function cadastrar(array $aDados): void {
		$this->checarCadastroDuplicado($aDados);

		$this->sNome = $aDados['cle_nome'];
		$this->sCPF = str_replace(".","",str_replace("-","",$aDados['cle_cpf']));
		$this->oDataNascimento = new \DateTimeImmutable($aDados['cle_data_nascimento']);
		$this->iSexo = $aDados['cle_sexo'];
		$this->sEmail = $aDados['cle_email'];
		$this->sTelefone = $aDados['cle_telefone'];
		$this->setSenha($aDados['cle_senha']);
		$this->sCEP = $aDados['cle_cep'];
		$this->sLogradouro = $aDados['cle_logradouro'];
		$this->sBairro = $aDados['cle_bairro'];
		$this->sEstado = $aDados['cle_estado'];
		$this->sCidade = $aDados['cle_cidade'];
		$this->iNumero = $aDados['cle_numero'];
		$this->sComplemento = $aDados['cle_complemento'];
		$this->oDataCadastro = new \DateTimeImmutable("now");

		Sistema::getClienteDAO()->save($this);
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

	/**
	 * Retorna a lista de desejos do cliente
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return ListaDesejos
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getListaDesejos(): ListaDesejos {
		if (empty($this->oListaDesejos)) {
			if (Sistema::getListaDesejosDAO()->hasListaDesejos($this)) {
				$this->oListaDesejos = Sistema::getListaDesejosDAO()->findByCliente($this);
			} else {
				$oListaDesejos = new ListaDesejos();
				$oListaDesejos->cadastrar($this);
				$this->oListaDesejos = $oListaDesejos;
			}
		}

		return $this->oListaDesejos;
	}

	/**
	 * Retorna as roupas da lista de desejos
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return RoupaList
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getRoupasNaListaDesejos(): RoupaList {
		$oListaDesejos = $this->getListaDesejos();

		return $oListaDesejos->getRoupas();
	}

	public function getPedidos(): PedidoList {
		return new PedidoList();
	}

	/**
	 * Verifica se o CPF informado no cadastro já está cadastrado
	 *
	 * @param array $aDados
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	private function checarCadastroDuplicado(array $aDados): void{
		$sCPF = str_replace(".","",str_replace("-","",$aDados['cle_cpf']));

		if (Sistema::getClienteDAO()->hasCPFCadastrado($sCPF)) {
			$sMensagem = "O CPF informado já possui cadastro. Faça o <a href='../login'>login aqui</a>.";
			throw new \Exception($sMensagem);
		}
	}
}