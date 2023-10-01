<?php

namespace DevFashion\Src\Cliente;

use DevFashion\Src\Sistema\Sistema;

/**
 * Class ClienteDAO
 * @package DevFashion\Src\Cliente
 * @version 1.0.0
 */
class ClienteDAO {

	/**
	 * Consulta o cliente com base no id
	 *
	 * @param int $iCleId
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return Cliente
	 * @throws \PDOException|\Exception
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function find(int $iCleId): Cliente {
		$sSql = "SELECT * FROM cle_cliente WHERE cle_id = ?";
		$aParam[] = $iCleId;

		try {
			$aCliente = Sistema::connection()->getRow($sSql,$aParam);
		} catch (\PDOException) {
			throw new \PDOException("Não foi possível consultar o cliente.");
		}

		if (empty($aCliente)) {
			throw new \LogicException("Nenhum cliente encontrado.");
		}

		return Cliente::createFromArray($aCliente);
	}
}