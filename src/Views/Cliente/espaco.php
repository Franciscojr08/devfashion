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


<?php Functions::renderFooter(); ?>
<?php Functions::addScript(["js/sistema/sistema.js"]); ?>
</body>
</html>