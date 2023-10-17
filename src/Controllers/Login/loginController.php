<?php

namespace DevFashion\Src\Controllers\Login;

/**
 * Class loginController
 * @package DevFashion\Src\Controllers\Login
 * @version 1.0.0
 */
class loginController {

	public function index(): void {
		// TODO: Implementar.
	}

	public function cadastrar(): void {
		require_once "src/Views/Acesso/cadastro.php";
        // TODO: Implementar.

	}

	public function logar(): void {
        require_once "src/Views/Acesso/login.php";
		// TODO: Implementar.
		// Gerar Hash senha: password_hash($sSenha,PASSWORD_BCRYPT, ['cost' => 11])
		// Verificar Hash senha: password_verify($sSenha, $sHash)
	}
}