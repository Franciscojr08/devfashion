<?php

use DevFashion\Core\Functions;

?>

<html>
<head>

    <?php
        Functions::addFavicon();
        Functions::addStyleSheet();
    ?>
</head>
<body>
<?php Functions::renderMenu(); ?>

<?php require_once "Home/include/carrousel.php"; ?>

<?php Functions::renderFooter(); ?>
<?php Functions::addScript(); ?>
</body>
</html>