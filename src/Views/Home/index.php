<?php

use DevFashion\Core\Functions;

/** @var array $aDados */
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

<section class="destaques">
    <h2>Produtos em Destaque</h2>
    <h3 class="produtos-container">Moda Masculina</h3>

    <?php foreach ($loRoupasMasculinas as $oRoupa) { ?>
        <div class="produto">
            <p><?php echo $oRoupa->getNome(); ?></p>
            <?php Functions::addImage($oRoupa->getCaminhoImagem(),"jpg","#"); ?>
            <p>Preço: <?php echo $oRoupa->getDescricaoPreco(); ?> </p>
            <button>Detalhes</button>
            <button>Adicionar ao Carrinho</button>
        </div>
    <?php } ?>
</section>

<?php Functions::renderFooter(); ?>
<?php Functions::addScript(); ?>
</body>