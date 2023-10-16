<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        h4 {
            margin-bottom: auto;
        }

        label {
            margin-bottom: 0px;
        }

        .custom-form {
            max-width: 500px;
            margin: auto;
        }
    </style>
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
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" name="cle_nome" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" onblur="TestaCPF(numeroCpf.value.replaceAll('.', '').replace('-', '').replace('-', ''))" id="cpf" placeholder="CPF" name="cle_cpf" required
                       maxlength="14">
                <div id="msgCpf"></div>

            </div>
            <div class="col-md-6">
                <label for="telefone" class="form-label">Número de Telefone</label>
                <input type="tel" class="form-control" id="telefone" placeholder="(xx) xxxxx-xxxx" name="cle_telefone" required>
            </div>
        </div>
        <div class="mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" onblur="validacaoEmail(formC.email)" placeholder="Email" name="cle_email"
                   required>
            <div id="msgemail"></div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="cle_senha" required>
            </div>
            <div class="col-md-6">
                <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
                <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha"
                       onblur="validarSenha()" required>
            </div>
            <div class="text-center" id="senhaErr"></div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento" name="cle_data_nascimento" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sexo" class="form-label">Sexo</label>
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
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
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
                            <div class="col-md-auto d-flex align-self-end invisible" id="loading">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                            <div class="col-2">
                                <label for="uf" class="form-label">UF</label>
                                <input type="text" class="form-control" id="uf" name="cle_estado" placeholder="UF">
                            </div>
                            <div class="col">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cle_cidade" placeholder="Cidade">
                            </div>
                        </div>

                        <div class="row g-3 mb-2">
                            <div class="col-md-6">
                                <label for="logradouro" class="form-label">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="cle_logradouro" placeholder="Logradouro">
                            </div>
                            <div class="col-md-6">
                                <label for="numero" class="form-label">Número</label>
                                <input type="text" class="form-control" id="numero" name="cle_numero" placeholder="Número">
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="cle_bairro" placeholder="Bairro">
                        </div>

                        <div class="mb-2">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="cle_complemento" placeholder="Complemento">
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-3 text-center">
                <button type="submit" class="btn btn-dark btn-md">Cadastrar</button>
            </div>
            <p class="text-center mt-2">Já possui uma conta? Faça <a href="login.html">login aqui</a>.</p>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
    $("#cep").blur(function () {
        loading.classList.remove('invisible')
        var cep = this.value.replace(/[^0-9]/, "");

        if (cep.length != 8) {
            document.getElementById("cepErr").innerHTML = "<font color='red'>CEP inválido </font>";
        }

        var url = "https://viacep.com.br/ws/" + cep + "/json/";

        $.getJSON(url, function (dadosRetorno) {
            try {
                $("#logradouro").val(dadosRetorno.logradouro);
                $("#bairro").val(dadosRetorno.bairro);
                $("#cidade").val(dadosRetorno.localidade);
                $("#uf").val(dadosRetorno.uf);
            } catch (ex) { }
        });

    });
</script>
<script>
    const nome = document.getElementById('nome')
    const cpf = document.getElementById('cpf').value
    const email = document.getElementById('email').value
    const senha = document.getElementById('senha').value
    const confirmarSenha = document.getElementById('confirmarSenha').value
    const dataNascimento = document.getElementById('dataNascimento').value
    const sexo = document.getElementById('sexo').value
    const cep = document.getElementById('cep').value
    const logradouro = document.getElementById('logradouro').value
    const numero = document.getElementById('numero').value
    const bairro = document.getElementById('bairro').value
    const uf = document.getElementById('uf').value
    const complemento = document.getElementById('complemento').value
    const telefone = document.getElementById('telefone').value
    let numeroCpf = document.getElementById('cpf')
    let loading = document.getElementById('loading')


    const inputCpf = document.getElementById('cpf')
    inputCpf.addEventListener('keypress', () => {
        let inputLenght = inputCpf.value.length
        if (inputLenght === 3 || inputLenght === 7) {
            inputCpf.value += '.'
        } else if (inputLenght === 11) {
            inputCpf.value += '-'
        }
    })

    let emailCorreto = false
    function validacaoEmail(field) {
        usuario = field.value.substring(0, field.value.indexOf("@"));
        dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

        if ((usuario.length >= 1) &&
            (dominio.length >= 3) &&
            (usuario.search("@") == -1) &&
            (dominio.search("@") == -1) &&
            (usuario.search(" ") == -1) &&
            (dominio.search(" ") == -1) &&
            (dominio.search(".") != -1) &&
            (dominio.indexOf(".") >= 1) &&
            (dominio.lastIndexOf(".") < dominio.length - 1)) {
            emailCorreto = true
        }
        else {
            document.getElementById("msgemail").innerHTML = "<font color='red'>E-mail inválido </font>";
        }
    }

    function validarSenha() {
        if (document.getElementById("senha").value != document.getElementById("confirmarSenha").value) {
            document.getElementById("senhaErr").innerHTML = "<font color='red'>Senhas incoerentes</font>"
            return false
        } else {
            document.getElementById("senhaErr").innerHTML = ""
        }
    }
    function TestaCPF(cpf) {
      var Soma;
      var Resto;
      Soma = 0;
      if (cpf == "00000000000" ||
          cpf == "11111111111" ||
          cpf == "22222222222" ||
          cpf == "33333333333" ||
          cpf == "44444444444" ||
          cpf == "55555555555" ||
          cpf == "66666666666" ||
          cpf == "77777777777" ||
          cpf == "88888888888" ||
          cpf == "99999999999" )
          {
       document.getElementById("msgCpf").innerHTML = "<font color='red'>CPF inválido </font>"
       return false;
      }

      for (i = 1; i <= 9; i++) Soma = Soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
      Resto = (Soma * 10) % 11;

      if ((Resto == 10) || (Resto == 11)) Resto = 0;
      if (Resto != parseInt(cpf.substring(9, 10))){
        document.getElementById("msgCpf").innerHTML = "<font color='red'>CPF inválido </font>"
         return false;
      }

      Soma = 0;
      for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i - 1, i)) * (12 - i);
      Resto = (Soma * 10) % 11;

      if ((Resto == 10) || (Resto == 11)) Resto = 0;
      if (Resto != parseInt(cpf.substring(10, 11))){
        document.getElementById("msgCpf").innerHTML = "<font color='red'>CPF inválido </font>"
        return false;
      }

      console.log(true)
      document.getElementById("msgCpf").innerHTML = "";
      return true;

    }



</script>
</body>


</html>