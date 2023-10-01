<?php

use DevFashion\Core\Functions;

/** @var string $sPaginaAtual */

$sIdPagAtual = "id=\"nav-project-list-selected\"";
$sIdIconAtual = "id=\"nav-project-icon-atual\"";
?>

<nav class="nav-project navbar navbar-expand-lg">
	<div class="nav-project-img">
		<?php Functions::addImage("logo","png","../home"); ?>
	</div>

	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse nav-project-list" id="navbarSupportedContent">
		<div>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../home" <?php echo $sPaginaAtual == "index" ? $sIdPagAtual : "";?>>
						HOME
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../shop/masculino" <?php echo $sPaginaAtual == "masculino" ? $sIdPagAtual : "";?>>
						MASCULINO
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../shop/feminino" <?php echo $sPaginaAtual == "feminino" ? $sIdPagAtual : "";?>>
						FEMININO
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../shop/infantil" <?php echo $sPaginaAtual == "infantil" ? $sIdPagAtual : "";?>>
						INFANTIL
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../shop/plus" <?php echo $sPaginaAtual == "plus" ? $sIdPagAtual : "";?>>
						PLUS-SIZE
					</a>
				</li>
			</ul>
		</div>

		<div class="d-flex">
			<a href="../cliente/lista" title="Lista de desejos"  <?php echo $sPaginaAtual == "lista" ? $sIdIconAtual : "";?> class="nav-project-icons">
				<i class="fa-regular fa-heart fa-xl" style="margin-right: 5px"></i>
			</a>

			<a href="../cliente/espaco" title="Meu Espaço"   <?php echo $sPaginaAtual == "espaco" ? $sIdIconAtual : "";?> class="nav-project-icons">
				<i class="fa-regular fa-user fa-xl" style="margin-right: 5px"></i>
			</a>

			<a href="../cliente/carrinho" title="Carrinho"  <?php echo $sPaginaAtual == "carrinho" ? $sIdIconAtual : "";?> class="nav-project-icons">
				<i class="fa-solid fa-cart-shopping fa-xl" style="margin-right: 5px"></i>
			</a>
			<span id="contador_itens_carrinho">0</span>
		</div>
	</div>
</nav>