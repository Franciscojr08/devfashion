<?php

use DevFashion\Core\Functions;

/**
 * @var array $aDados
 * @var string $sMensagem
 * @var int $iCodeExeption
 */
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>DevFashion</title>
    <?php
    Functions::addFavicon();
    Functions::addStyleSheet(["css/style.css"]);
    ?>
</head>
<body>
<form class="custom-form ">
        <h2 class="mb-4">Cadastro</h2>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome">
            </div>
            <div class="col-md-6">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="CPF">
            </div>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" placeholder="CEP">
        </div>
        <div class="mb-3">
            <label for="logradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="logradouro" placeholder="Logradouro">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" placeholder="Bairro">
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" placeholder="Estado">
        </div>
        <div class="mb-3">
            <label for "cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" placeholder="Cidade">
        </div>
        <div class="mb-3">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" placeholder="Complemento">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Senha">
        </div>
        <div class="mb-3">
            <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
            <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha">
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento">
            </div>
            <div class="col-md-6">
                <label for="sexo" class="form-label">Sexo</label>
                <select id="sexo" class="form-select">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Número de Telefone</label>
            <input type="tel" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx">
        </div>
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-dark btn-md">Cadastrar</button>
        </div>
        <p class="text-center mt-2">Já possui uma conta? Faça <a href="login.html">login aqui</a>.</p>
    </form>
<?php Functions::addScript(); ?>