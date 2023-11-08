<?php

use DevFashion\Core\Functions;
use DevFashion\Src\Cliente\Cliente;
use DevFashion\Src\Pedido\PedidoList;
/**
 * @var array $aDados
 * @var Cliente $oCliente
 * @var PedidoList $loPedidos
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
<body >
<?php Functions::renderMenu($aDados); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3" >
            <ul class="list-group">
                <li class="list-group-item list-group-item-action active" data-bs-toggle="tab" data-bs-target="#dadosPessoais">Dados Pessoais</li>
                <li class="list-group-item list-group-item-action" data-bs-toggle="tab" data-bs-target="#endereco">Endereço</li>
                <li class="list-group-item list-group-item-action mb-5" data-bs-toggle="tab" data-bs-target="#meusPedidos">Meus Pedidos</li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content" >
                <div class="tab-pane fade show active mb-3" id="dadosPessoais">
                    <!-- Formulário de Dados Pessoais -->
                   <form id="formulario" name="formulario" type="post" action="../cliente/atualizarCliente">
                        <div class="row g-3 mb-2">
                            <div class="col">
                                <label for="nome" class="form-label mb-1">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome" maxlength="100" name="cle_nome" value="<?php echo $oCliente->getNome();?>" required>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="cpf" class="form-label mb-1">CPF</label>
                                <input type="text" class="form-control text-bg-light" id="cpf" placeholder="CPF" name="cle_cpf" required  maxlength="14" value="<?php echo $oCliente->getCPF();?>" Readonly>
                                <div id="msgCpf"></div>
                            </div>

                            <div class="col-md-6">
                                <label for="telefone" class="form-label mb-1">Número de Telefone</label>
                                <input type="tel" class="form-control" id="telefone" maxlength="11" placeholder="(xx) xxxxx-xxxx" name="cle_telefone"  value="<?php echo $oCliente->getTelefone();?>" required>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label mb-1">Email</label>
                            <input type="email" class="form-control text-bg-light" id="email" placeholder="Email" maxlength="50" name="cle_email" value="<?php echo $oCliente->getEmail();?>" required readonly>
                            <div id="msgemail"></div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="senha" class="form-label mb-1">Senha</label>
                                <input type="password" class="form-control" id="senha" placeholder="Senha" onblur="validarSenha()" maxlength="50" name="cle_senha" required>
                            </div>

                            <div class="col-md-6">
                                <label for="confirmarSenha" class="form-label mb-1">Confirmar Senha</label>
                                <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha" maxlength="50" onblur="validarSenha()" required>
                            </div>
                            <div class="text-center" id="senhaErr"></div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="dataNascimento" class="form-label mb-1">Data de Nascimento</label>
                                <input type="date" class="form-control" id="dataNascimento" name="cle_data_nascimento" value="<?php echo date_format($oCliente->getDataNascimento(), 'Y-m-d');?>" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="sexo" class="form-label mb-1">Sexo</label>
                                <select id="sexo" class="form-select" name="cle_sexo"  required>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                    <option value="3">Outro</option>
                                </select>
                            </div>
                        </div>
                       <div class="form-group mt-3 text-center d-grid gap-2 mx-auto">
                           <button type="submit"  onclick="return atualizarDados()" class="btn btn-dark btn-md btn-block">Atualizar Dados</button>
                       </div>
                    </div>
                    <div class="tab-pane fade mb-3" id="endereco">
                        <!-- Formulário de Endereço -->
                        <div class="row g-3 mb-2 align-items-center">
                            <div class="col-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cep" maxlength="8" name="cle_cep" placeholder="CEP" value="<?php echo $oCliente->getCepEndereco();?>" required>
                                <div id="cepErr"></div>
                            </div>

                            <div class="col-2">
                                <label for="uf" class="form-label">UF</label>
                                <input type="text" class="form-control" id="uf" maxlength="50" name="cle_estado" placeholder="UF" value="<?php echo $oCliente->getEstado();?>" required>
                            </div>

                            <div class="col">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" maxlength="50" name="cle_cidade" placeholder="Cidade" value="<?php echo $oCliente->getCidade();?>" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-2">
                            <div class="col-md-8">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" maxlength="100" name="cle_logradouro" placeholder="Logradouro" value="<?php echo $oCliente->getLogradouro();?>" required>
                            </div>

                            <div class="col-md-4">
                                <label for="numero" class="form-label">Número</label>
                                <input type="text" class="form-control" id="numero" maxlength="50" name="cle_numero" placeholder="Número" value="<?php echo $oCliente->getNumeroEndereco()?>" required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" maxlength="50" name="cle_bairro" placeholder="Bairro" value="<?php echo $oCliente->getBairro();?>" required>
                        </div>

                        <div class="mb-2">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="complemento" maxlength="100" name="cle_complemento" placeholder="Complemento" value=" <?php echo $oCliente->getComplemento() == "nenhum" ? '': $oCliente->getComplemento() ;?>">
                        </div>
                        <div class="form-group mt-3 text-center d-grid gap-2 mx-auto">
                            <button type="submit"  onclick="return atualizarDados()" class="btn btn-dark btn-md btn-block">Atualizar Endereço</button>
                        </div>
                    </div>
                <div class="tab-pane fade" id="meusPedidos">
                    <!-- Lista de Pedidos -->
                    <h2>Meus Pedidos</h2>
                    <div class="card mb-3" style="max-width: 540px; ">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/public/assets/img/roupas/feminino/fem_02.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7"><h5 class="card-title">NB1564890</h5></div>
                                        <div class="col"> <small> Data: 06-11-2023</small></div>
                                    </div>
                                    <div class="col"> <small>Descrição do(s) Produto(s):</small></div>
                                    <div class="row">
                                        <div class="col-10">Cropped Preto Manga Longa</div>
                                        <div class="col"> x1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">Entrega:</div>
                                        <div class="col" style="color: green;"> <small>Grátis</small></div>
                                        <div class="col-9">Valor Total:</div>
                                        <div class="col"> <small> R$59,90</small></div>

                                    </div>
                                    <p class="card-text"><small class="text-body-secondary"></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/public/assets/img/roupas/feminino/fem_01.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7"><h5 class="card-title">NB1564890</h5></div>
                                        <div class="col"> <small> Data: 06-11-2023</small></div>
                                    </div>
                                    <div class=""> <small>Descrição do(s) Produto(s):</small></div>
                                    <div class="row">
                                        <div class="col-10">Calça Wide Cintura Alta</div>
                                        <div class="col"> x1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">Entrega:</div>
                                        <div class="col" style="color: green;"> <small>Grátis</small></div>
                                        <div class="col-9">Valor Total:</div>
                                        <div class="col"> <small>R$89,90</small></div>
                                    </div>
                                    <p class="card-text"><small class="text-body-secondary"></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/public/assets/img/roupas/feminino/fem_03.jpg" class="img-fluid rounded-start" alt="..." >
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7"><h5 class="card-title">NB1564890</h5></div>
                                        <div class="col"> <small> Data: 07-11-2023</small></div>
                                    </div>
                                    <div class=""> <small>Descrição do(s) Produto(s):</small></div>
                                    <div class="row">
                                        <div class="col-10">Blusa Duna Branca Lisa</div>
                                        <div class="col"> x1</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">Entrega:</div>
                                        <div class="col" style="color: green;"> <small>Grátis</small></div>
                                        <div class="col-9">Valor Total:</div>
                                        <div class="col"> <small> R$59,90</small></div>

                                        <p class="card-text"><small class="text-body-secondary"></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('sexo').value = "<?php echo $oCliente->getSexoIdEnum(); ?>"

</script>
<?php Functions::renderFooter(); ?>
<?php Functions::addScript(["js/Login/script_cadastro.js"]); ?>

</body>
<script>

    //function validarSenha(){
	//    <?php //$senha = "<script>document.getElementById('senha').value</script>";
	//    ?>
    //    if (<?php //echo password_verify($senha, $oCliente->getSenha())?"TRUE":"FALSE";?>// === "TRUE"){
    //        alert("aa")
    //        document.getElementById("senhaErr").innerHTML = ""
    //        document.getElementById('formulario').submit()
    //        return true
    //    }else{
    //        document.getElementById("senhaErr").innerHTML = "<font color='red'>Senhas incoerentes</font>"
    //        alert("INSIRA SUA SENHA PARA ALTERAR SEUS DADOS")
    //        return false
    //    }
    //}

</script>
<style>

</style>
</html>