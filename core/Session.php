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

	/**
	 * Retorna o Id do cliente logado
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return int
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function getClienteId(): int {
		self::iniciar();
		return $_SESSION['cle_id'];
	}

	/**
	 * Retorna se possui cliente logado
	 *
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return bool
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function hasClienteLogado(): bool {
		self::iniciar();
		return !empty($_SESSION['cle_id']);
	}

	/**
	 * Atribui o Id do cliente na sessão
	 *
	 * @param int $iCleId
	 * @author Francisco Santos franciscojuniordh@gmail.com
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public static function setClienteId(int $iCleId): void {
		self::iniciar();
		$_SESSION['cle_id'] = $iCleId;
	}
}