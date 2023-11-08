<?php

namespace DevFashion\Src\Pedido;

use DevFashion\Src\Cliente\Cliente;
use DevFashion\Src\Sistema\Sistema;

/**
 * Class PedidoDAO
 * @package DevFashion\Src\Pedido
 * @version 1.0.0
 */
class PedidoDAO {
	
	/**
	 * Cadastra um pedido
	 *
	 * @param Pedido $oPedido
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 * @throws \Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function cadastrar(Pedido $oPedido): void {
		$oConnection = Sistema::connection();
		$sSQL = "insert into pdo_pedido (pdo_valor, pdo_data_pedido, cle_id) values (?,?,?)";
		$aParams = [
			$oPedido->getValorPedido(),
			$oPedido->getDataPedido()->format("Y-m-d"),
			$oPedido->getCliente()->getId()
		];

		try {
			$oConnection->execute($sSQL,$aParams);
			$oPedido->setId($oConnection->getLasInsertId());
		} catch (\PDOException $oExp) {
			throw new \Exception("Não foi possível cadastrar o pedido.");
		}

		foreach ($oPedido->getRoupas() as $oRoupa) {
			$sSQL = "insert into rpo_roupa_pedido (rpa_id, pdo_id) values (?,?)";
			$aParams = [$oRoupa->getId(),$oPedido->getId()];

			try {
				$oConnection->execute($sSQL,$aParams);
			} catch (\PDOException $oExp) {
				throw new \Exception("Não foi possível cadastrar o pedido.");
			}
		}
	}
}