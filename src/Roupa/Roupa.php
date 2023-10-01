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
}