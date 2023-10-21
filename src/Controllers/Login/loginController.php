<?php

namespace DevFashion\Src\Controllers\Login;

/**
 * Class loginController
 * @package DevFashion\Src\Controllers\Login
 * @version 1.0.0
 */
class loginController {

	/**
	 * Renderiza a view de login
	 *
	 * @param array $aDados
	 * @author Francisco Santos franciscosantos@moobitech.com.br
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function index(array $aDados): void {
		require_once "Login/login.php";
	}

	/**
	 * Renderiza a view de cadastro
	 *
	 * @param array $aDados
	 * @author Francisco Santos franciscosantos@moobitech.com.br
	 * @return void
	 *
	 * @since 1.0.0 - Definição do versionamento da classe
	 */
	public function cadastro(array $aDados): void {
		require_once "Login/cadastro.php";
	}

	public function logar(array $aDados): void {
		if (empty($aDados['cle_email']) || empty($aDados['cle_senha']) ) {
			header("location: ../login");
		}

		// TODO: Implementar.
		// Gerar Hash senha: password_hash($sSenha,PASSWORD_BCRYPT, ['cost' => 11])
		// Verificar Hash senha: password_verify($sSenha, $sHash)
	}

	public function cadastrar(array $aDados): void {
		// TODO: Implementar.
	}
}