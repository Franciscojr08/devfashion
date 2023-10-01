<?php

namespace DevFashion\Src\Roupa;

/**
 * Class RoupaList
 * @package DevFashion\Src\Roupa
 * @version 1.0.0
 */
class RoupaList extends \SplObjectStorage {

	/**
	 * Cria uma lista de roupa a partir de um array
	 *
	 * @param array $aaRoupas
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return RoupaList
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function createFromArray(array $aaRoupas): RoupaList {
		$loRoupaList = new RoupaList();

		foreach ($aaRoupas as $aRoupa) {
			$oRoupa = Roupa::createFromArray($aRoupa);
			$loRoupaList->attach($oRoupa);
		}

		return $loRoupaList;
	}
}