<?php

use DevFashion\Core\Functions;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
    Functions::addFavicon();
    Functions::addStyleSheet(["css/style_login.css"]);
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<main>
    <form class="custom-form">
        <h2 class="mb-4 text-center">Login</h2>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu Email">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Digite sua Senha">
        </div>
        <div class="form-group mt-3 text-center d-grid gap-2  mx-auto">
            <button type="submit" class="btn btn-dark btn-md btn-block">Login</button>
            <p class="mt-2 text-center">Não possui uma conta? <br><a href="<?php ?>">Cadastre-se aqui</a>.</p>

        </div>
    </form>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>