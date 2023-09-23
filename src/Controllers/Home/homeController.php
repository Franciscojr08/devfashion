<?php

namespace DevFashion\Src\Controllers\Home;

/**
 * Class homeController
 * @package DevFashion\Src\Controllers\Home
 * @version 1.0.0
 */
class homeController {

	/**
	 * Renderiza a home page
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function index(): void {
		require_once "Home/index.php";
	}
}