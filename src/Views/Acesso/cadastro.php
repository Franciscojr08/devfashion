<?php

use DevFashion\Core\Functions;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <?php
    Functions::addFavicon();
    Functions::addStyleSheet(["css/style_cadastro.css"]);
    ?>
</head>

<body>
<main>
    <form class="custom-form " name="formC">
        <h1 class="mb-2 text-center"><strong>CADASTRO</strong></h1>
        <div class="">
            <h4>Dados Pessoais</h4>
            <p>(Obrigatório)</p>
        </div>

        <div class="row g-3 mb-2">
            <div class="col">
                <label for="nome" class="form-label mb-1">Nome Completo</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" name="cle_nome" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="cpf" class="form-label mb-1">CPF</label>
                <input type="text" class="form-control"
                       onblur="TestaCPF(numeroCpf.value.replaceAll('.', '').replace('-', '').replace('-', ''))" id="cpf"
                       placeholder="CPF" name="cle_cpf" required
                       maxlength="14">
                <div id="msgCpf"></div>

            </div>
            <div class="col-md-6">
                <label for="telefone" class="form-label mb-1">Número de Telefone</label>
                <input type="tel" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx" name="cle_telefone"
                       required>
            </div>
        </div>
        <div class="mb-2">
            <label for="email" class="form-label mb-1">Email</label>
            <input type="email" class="form-control" id="email" onblur="validacaoEmail(formC.email)" placeholder="Email"
                   name="cle_email"
                   required>
            <div id="msgemail"></div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="senha" class="form-label mb-1">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="cle_senha" required>
            </div>
            <div class="col-md-6">
                <label for="confirmarSenha" class="form-label mb-1">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha"
                       onblur="validarSenha()" required>
            </div>
            <div class="text-center" id="senhaErr"></div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="dataNascimento" class="form-label mb-1">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento" name="cle_data_nascimento" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sexo" class="form-label mb-1">Sexo</label>
                <select id="sexo" class="form-select" name="cle_sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        <div>
                            <h4>Endereço</h4>
                            <p>(Você pode preencher depois)</p>
                        </div>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row g-3 mb-2 align-items-center">
                            <div class="col-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cle_cep" placeholder="CEP">
                                <div id="cepErr"></div>
                            </div>
                            <div class="col-2">
                                <label for="uf" class="form-label">UF</label>
                                <input type="text" class="form-control" id="uf" name="cle_estado" placeholder="UF">
                            </div>
                            <div class="col">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cle_cidade"
                                       placeholder="Cidade">
                            </div>
                        </div>

                        <div class="row g-3 mb-2">
                            <div class="col-md-8">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="cle_logradouro"
                                       placeholder="Logradouro">
                            </div>
                            <div class="col-md-4">
                                <label for="numero" class="form-label">Número</label>
                                <input type="text" class="form-control" id="numero" name="cle_numero"
                                       placeholder="Número">
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="cle_bairro" placeholder="Bairro">
                        </div>

                        <div class="mb-2">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="cle_complemento"
                                   placeholder="Complemento">
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-3 text-center">
                <button type="submit" class="btn btn-dark btn-md">Cadastrar</button>
            </div>
            <p class="text-center mt-2">Já possui uma conta? Faça <a href="login.php">login aqui</a>.</p>
    </form>
</main>

<?php Functions::addScript(["js/script_cadastro.js"]); ?>

</body>
</html>