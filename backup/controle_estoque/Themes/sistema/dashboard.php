<?php 
	include_once 'includes/config.php';
	$pages = 'dashboard';
?>
		<section class="content_left">
			<!-- Chama o menu da página-->
			<?php require 'includes/left.php';?>
		</section>
		
		<section class="content_right">
			<!-- Chama o cabeçalho da página-->
			<?php require 'includes/header.php';?>
	
			<article class="bgcolor-white">
				<img src="<?= $configBase ?><?= $themePathSite ?>/images/logo.png" alt="Logo da Empresa" title="Logo da Empresa">
				
				<div class="divisor3 cards bgcolor-blue">
					<p class="color-white font-text-min text-center">Clientes</p>
					<p class="color-white text-center font-weight-max title">0001</p>
				</div>
				
				<div class="divisor3 cards bgcolor-red">
					<p class="color-white font-text-min text-center">Fornecedores</p>
					<p class="color-white text-center font-weight-max title">0001</p>
				</div>
				
				<div class="divisor3 cards bgcolor-green-light">
					<p class="color-white font-text-min text-center">Usuários</p>
					<p class="color-white text-center font-weight-max title">0001</p>
				</div>
				
				<div class="divisor3 cards bgcolor-orange">
					<p class="color-white font-text-min text-center">Produtos</p>
					<p class="color-white text-center font-weight-max title">0001</p>
				</div>
				
				<div class="divisor3 cards bgcolor-green-dark">
					<p class="color-white font-text-min text-center">Pedidos</p>
					<p class="color-white text-center font-weight-max title">0001</p>
				</div>
				
				<div class="divisor3 cards bgcolor-blue-dark">
					<p class="color-white font-text-min text-center">Despachados</p>
					<p class="color-white text-center font-weight-max title">0001</p>
				</div>
				
				<div class="clear"></div>
			</article>
			
			<div class="clear"></div>
			<div class="espaco-min"></div>
		</section>
	<div class="clear"></div>