<?php

use DevFashion\Core\Functions;
use DevFashion\Src\Cliente\Cliente;

/**
 * @var array $aDados
 * @var Cliente $oCliente
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
<?php Functions::renderMenu($aDados); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-auto"
            <p><a href="#">Dados Pessoais</a></p>
            <p><a href="#">Endereço</a></p>
            <p><a href="#">Meus Pedidos</a></p>

        </div>
        <div class="col d-flex justify-content-center" id="info">
            <div>a</div>
        </div>
    </div>
</div>

</div>


<script>
    $(document).ready( function(){
        $('#info').load('dadosPessoais.php');
        refresh();
    });
</script>
<?php Functions::renderFooter(); ?>
<?php Functions::addScript(); ?>
</body>
<style>
    p{
        margin-bottom: 5px;
    }
    a { color: inherit; }
</style>
</html>