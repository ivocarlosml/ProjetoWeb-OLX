<?php
    require "dados.php";
if(!isset($_GET["i"])){
    echo "Erro! Nenhum Produto foi passado!";
    header("location: index.php");
    die; 
}
$indice = $_GET["i"];
if(isset($produtos[$indice])){
    $f = $produtos[$indice];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../pastaestilo/estilo-detalhe.css">
	<link rel="icon" href="../pastaimagens/Griv.png">
    <title>Griv - Aqui você encontra de tudo </title>
</head>
<body>
<header id="topo">
				<img src="../pastaimagens/Griv.png">
				<nav>
					<ul>
						<li><a href="index.php">Início</a></li>
						<li><a href="index.php#container">Produtos</a></li>
						<li><a href="sobre.php">Sobre nós</a></li>
					</ul>
				</nav>
				<div class="botoes-topo">
					<a href="login.php" class="botao-r">Entrar</a>
					<a href="login.php" class="botao-l">Desapegar</a>
				</div>
		</header>
	<main class="container">
    <section id="produtos">
    <?php
            if(isset($f)){
           ?>
		   <div class="foto">
				<img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
				<h1><?=$f["nome"]?></h1>
				<p> R$ <?=number_format($f["valor"],2,",","")?> </p>
				<a href="login.php" class="comprar">Comprar</a>
			</div>
			<div class="detalhes">
				<div id="texto">
					<h2>Anunciante:</h2>
					<h3><?=$f["anunciante"]?></h3>
				</div>
				<div id="texto">
					<h2>Estado do Produto:</h2>
					<h3><?=$f["estado"]?></h3>
				</div>
				<div id="texto">
					<h2>Lugar:</h2>
					<h3><?=$f["lugar"]?></h3>
				</div>
				<div id="texto">
					<h2>Fabricante:</h2>
					<h3><?=$f["fabricante"]?></h3>
				</div>
				<div id="descricao">
					<h2>Descrição:</h2>
					<p><?=$f["descricao"]?></p>
				</div>
			</div>
            <?php }else{
                echo "<h3>Produto não Encontrado</h3>";
            } ?>
    </section>
			<div class="anuncio">
			</div>
	</main>
		<footer class="rodape">
		<p>© 2023 OLX. Todos os direitos reservados.</p>
		</footer>
</body>
</html>