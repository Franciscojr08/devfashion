<?php

namespace DevFashion\Src\Controllers\Shop;

use DevFashion\Src\Sistema\Enum\TipoRoupaEnum;
use DevFashion\Src\Sistema\Sistema;

/**
 * Class shopController
 * @package DevFashion\Src\Controllers\Shop
 * @version 1.0.0
 */
class shopController {
	
	public function masculino(array $aDados): void {
		$loRoupas = Sistema::getRoupaDAO()->getRoupasByTipo(TipoRoupaEnum::MASCULINO);
		require_once "Shop/roupas.php";
	}

	public function feminino(array $aDados): void {
		$loRoupas = Sistema::getRoupaDAO()->getRoupasByTipo(TipoRoupaEnum::FEMININO);
		require_once "Shop/roupas.php";
	}

	public function infantil(array $aDados): void {
		$loRoupas = Sistema::getRoupaDAO()->getRoupasByTipo(TipoRoupaEnum::INFANTIL);
		require_once "Shop/roupas.php";
	}

	public function plus(array $aDados): void {
		$loRoupas = Sistema::getRoupaDAO()->getRoupasByTipo(TipoRoupaEnum::PLUS_SIZE);
		require_once "Shop/roupas.php";
	}

	public function adicionarRoupaCarrinho(): void {
		// TODO: Implementar.
	}

	public function adicionarRoupaListaDesejos(): void {
		// TODO: Implementar.
	}

	public function contarRoupasNoCarrinho(): void {
		// TODO: Implementar.
	}
}