<?php

namespace DevFashion\Core;

/**
 * Class Session
 * @package DevFashion\Core
 * @version 1.0.0
 */
class Session {

	/**
	 * Session Construtor
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function __construct() {
		self::iniciar();
	}

	/**
	 * Verifica se a sessão foi iniciada, se não foi é iniciada uma sessão
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function iniciar(): void {
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}
	}
}