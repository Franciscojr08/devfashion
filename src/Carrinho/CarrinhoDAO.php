<?php

namespace DevFashion\Src\Carrinho;

use DevFashion\Src\Roupa\Roupa;
use DevFashion\Src\Roupa\RoupaList;
use DevFashion\Src\Sistema\Sistema;

/**
 * Class CarrinhoDAO
 * @package DevFashion\Src\Carrinho
 * @version 1.0.0
 */
class CarrinhoDAO {

	/**
	 * Retorna as roupas que estão no carrinho
	 *
	 * @param Carrinho $oCarrinho
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return RoupaList
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function getRoupasNoCarrinho(Carrinho $oCarrinho): RoupaList {
		$sSql = "SELECT
					rpa.*
				FROM
					rpa_roupa rpa
				INNER JOIN cra_carrinho_roupa cra ON rpa.rpa_id = rpa.pra_id
				WHERE
					cra.cro_id = ?";
		$aParam[] = $oCarrinho->getId();

		try {
			$aaRoupas = Sistema::connection()->getArray($sSql,$aParam);
		} catch (\PDOException $oExp) {
			throw new \PDOException("Não foi possível consultar as roupas do carrinho.");
		}

		if (empty($aaRoupas)) {
			return new RoupaList();
		}

		return RoupaList::createFromArray($aaRoupas);
	}

	/**
	 * Adiciona uma roupa ao carrinho
	 *
	 * @param Carrinho $oCarrinho
	 * @param Roupa $oRoupa
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function adicionarRoupa(Carrinho $oCarrinho, Roupa $oRoupa): void {
		$sSql = "INSERT INTO cra_carrinho_roupa (cro_id, rpa_id) VALUES (?,?)";
		$aParams = [$oCarrinho->getId(),$oRoupa->getId()];

		try {
			Sistema::connection()->execute($sSql,$aParams);
		} catch (\PDOException $oExp) {
			throw new \PDOException("Não foi possível adicionar a roupa ao carrinho.");
		}
	}
}