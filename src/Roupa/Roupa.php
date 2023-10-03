<?php

namespace DevFashion\Src\Roupa;

/**
 * Class Roupa
 * @package DevFashion\Src\Roupa
 * @version 1.0.0
 */
class Roupa {

	private int $iId;
	private string $sNome;
	private float $fPreco;
	private int $iTipo;
	private string $sCaminhoImagem;

	/**
	 * Cria um objeto Roupa a partir de um array
	 *
	 * @param array $aRoupa
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return Roupa
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function createFromArray(array $aRoupa): Roupa {
		$oRoupa = new Roupa();
		$oRoupa->iId = $aRoupa['rpa_id'];
		$oRoupa->sNome = $aRoupa['rpa_nome'];
		$oRoupa->fPreco = doubleval($aRoupa['rpa_preco']);
		$oRoupa->iTipo = $aRoupa['rpa_tipo'];
		$oRoupa->sCaminhoImagem = $aRoupa['rpa_caminho_imagem'];

		return $oRoupa;
	}

	/**
	 * Retorna o Id da roupa
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
	 * Retorna o nome da roupa
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
	 * Retorna o preço
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return float
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getPreco(): float {
		return $this->fPreco;
	}

	/**
	 * Retorna a descrição do preço
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getDescricaoPreco(): string {
		return "R$ " . number_format($this->fPreco,2,",",".");
	}

	/**
	 * Atribui o preço
	 *
	 * @param float $fPreco
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setPreco(float $fPreco): void {
		$this->fPreco = $fPreco;
	}

	/**
	 * Retorna o caminho da roupa
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return int
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getTipo(): int {
		return $this->iTipo;
	}
	
	/**
	 * Atribui o tipo da roupa
	 *
	 * @param int $iTipo
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setTipo(int $iTipo): void {
		$this->iTipo = $iTipo;
	}

	/**
	 * Retorna o caminho da imagem
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return string
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getCaminhoImagem(): string {
		return $this->sCaminhoImagem;
	}

	/**
	 * Atribui o caminho da imagem
	 *
	 * @param string $sCaminhoImagem
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function setCaminhoImagem(string $sCaminhoImagem): void {
		$this->sCaminhoImagem = $sCaminhoImagem;
	}
}