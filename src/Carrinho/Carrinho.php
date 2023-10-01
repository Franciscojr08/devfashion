<?php

namespace DevFashion\Src\Carrinho;

use DevFashion\Src\Cliente\Cliente;
use DevFashion\Src\Roupa\Roupa;
use DevFashion\Src\Roupa\RoupaList;
use DevFashion\Src\Sistema\Sistema;

/**
 * Class Carrinho
 * @package DevFashion\Src\Carrinho
 * @version 1.0.0
 */
class Carrinho {

	private int $iId;
	private Cliente $oCliente;

	/**
	 * Cria um objeto Carrinho a partir de um array
	 *
	 * @param array $aDados
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return Carrinho
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function createFromArray(array $aDados): Carrinho {
		$oCarrinho = new Carrinho();
		$oCarrinho->iId = $aDados['cro_id'];
		$oCarrinho->oCliente = Sistema::getClienteDAO()->find($aDados['cle_id']);

		return $oCarrinho;
	}

	/**
	 * Retorna o Id do carrinho
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
	 * Retorna as roupas que estão no carrinho
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return RoupaList
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getRoupas(): RoupaList {
		return Sistema::getCarrinhoDAO()->getRoupasNoCarrinho($this);
	}

	/**
	 * Adiciona uma roupa ao carrinho
	 *
	 * @param Roupa $oRoupa
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function adicionarRoupa(Roupa $oRoupa): void {
		Sistema::getCarrinhoDAO()->adicionarRoupa($this,$oRoupa);
	}

	public function removerRoupa(Roupa $oRoupa): void {
		// TODO: Implementar.
	}

	public function excluirRoupa(Roupa $oRoupa): void {
		// TODO: Implementar.
	}

	public function cadastrar(): void {
		// TODO: Implementar.
	}

	public function esvaziarCarrinho(): void {
		// TODO: Implementar.
	}
}