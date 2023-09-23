<?php

namespace DevFashion\Src\Controllers\Sistema;

/**
 * Class errorController
 * @package DevFashion\Src\Controllers\Sistema
 * @version 1.0.0
 */
class errorController {

	/**
	 * Renderiza a view de página não encontrada
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function paginaNaoEncontrada(): void {
		echo "Página não encontrada";
	}

	/**
	 * Renderiza a view de erros lançados por exceção
	 *
	 * @param string $sMensagem
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function errorExeption(string $sMensagem): void {
		echo "Error: {$sMensagem}";
	}
}