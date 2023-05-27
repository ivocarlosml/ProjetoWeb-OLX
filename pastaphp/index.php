<?php
    require "dados.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Griv - Aqui você encontra de tudo</title>
	<link rel="stylesheet" href="../pastaestilo/estiloprincipal.css">
	<link rel="icon" href="../pastaimagens/Griv.png">
</head>
<body>
		<header id="topo">
				<img src="../pastaimagens/Griv.png">
				<nav>
					<ul>
						<li><a href="index.php">Início</a></li>
						<li><a href="#container">Produtos</a></li>
						<li><a href="sobre.php">Sobre nós</a></li>
					</ul>
				</nav>
				<div class="botoes-topo">
					<a href="login.php" class="botao-r">Entrar</a>
					<a href="login.php" class="botao-l">Desapegar</a>
				</div>
		</header>
		<div class="anuncio">
			<img src="../pastaimagens/anuncio.png">
		</div>
		<div class="anuncio">
			<img src="../pastaimagens/anuncio2.png">
		</div>
		<section class="sessoes">
			<main id="container">
				<div class="nome">
					<h1>Produtos</h1>
				</div>
				<section id="produtos">
					<?php foreach ($produtos as $i => $produto){ ?>
						<div class="produto">
							<a href="index-detalhe.php?i=<?=$i?>" class="comprar-link">
								<img src="<?php echo $produto['foto']; ?>">
								<h3><?php echo $produto['nome']; ?></h3>
								<p>R$ <?php echo number_format($produto['valor'],2,",","."); ?></p>
							</a>
						</div>
					<?php } ?>
				</section>
			</main>
		</section>
		<footer class="rodape">
			<p>© 2023 OLX. Todos os direitos reservados.</p>
		</footer>
</body>
</html>
