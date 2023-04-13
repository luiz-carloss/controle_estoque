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
				<img src="<?= $configBase ?><?= $themePathSite ?>/images/logo1.png" alt="Logo da Empresa" title="Logo da Empresa">

				<?php
				$Read = $pdo -> prepare("SELECT cliente_id, cliente_status FROM SI_CLIENTES WHERE cliente_status = :cliente_status");
				$Read -> bindValue(':cliente_status',1);
				$Read -> execute();

				$Lines = $Read -> rowCount();

				if($Lines < 10){
					$Count = '000'.$Lines;
				}
				elseif($Lines > 10 && $Lines < 100){
					$Count ='00'.$Lines;
				}elseif($Lines > 100 && $Lines < 1000){
					$Count ='0'.$Lines;
				}
				else{
					$Count = $Lines;
				}
				?>

				<div class="divisor3 cards bgcolor-blue">
					<p class="color-white font-text-min text-center">Clientes</p>
					<p class="color-white text-center font-weight-max title"><?= $Count ?></p>
				</div>

				<?php
				$Read = $pdo -> prepare("SELECT fornecedor_id, fornecedor_status FROM SI_FORNECEDORES WHERE fornecedor_status = :fornecedor_status");
				$Read -> bindValue(':fornecedor_status',1);
				$Read -> execute();

				$Lines = $Read -> rowCount();

				if($Lines < 10){
					$Count = '000'.$Lines;
				}
				elseif($Lines > 10 && $Lines < 100){
					$Count ='00'.$Lines;
				}elseif($Lines > 100 && $Lines < 1000){
					$Count ='0'.$Lines;
				}
				else{
					$Count = $Lines;
				}
				?>

				<div class="divisor3 cards bgcolor-red">
					<p class="color-white font-text-min text-center">Fornecedores</p>
					<p class="color-white text-center font-weight-max title"><?= $Count ?></p>
				</div>

				<?php
				$Read = $pdo -> prepare("SELECT usuarios_id, usuarios_status FROM SI_USUARIOS WHERE usuarios_status = :usuarios_status");
				$Read -> bindValue(':usuarios_status',1);
				$Read -> execute();

				$Lines = $Read -> rowCount();

				if($Lines < 10){
					$Count = '000'.$Lines;
				}
				elseif($Lines > 10 && $Lines < 100){
					$Count ='00'.$Lines;
				}elseif($Lines > 100 && $Lines < 1000){
					$Count ='0'.$Lines;
				}
				else{
					$Count = $Lines;
				}
				?>

				<div class="divisor3 cards bgcolor-green-light">
					<p class="color-white font-text-min text-center">Usuários</p>
					<p class="color-white text-center font-weight-max title"><?= $Count ?></p>
				</div>

				<?php
				$Read = $pdo -> prepare("SELECT produto_id, produto_status FROM SI_PRODUTOS WHERE produto_status = :produto_status");
				$Read -> bindValue(':produto_status',1);
				$Read -> execute();

				$Lines = $Read -> rowCount();

				if($Lines < 10){
					$Count = '000'.$Lines;
				}
				elseif($Lines > 10 && $Lines < 100){
					$Count ='00'.$Lines;
				}elseif($Lines > 100 && $Lines < 1000){
					$Count ='0'.$Lines;
				}
				else{
					$Count = $Lines;
				}
				?>

				<div class="divisor3 cards bgcolor-orange">
					<p class="color-white font-text-min text-center">Produtos</p>
					<p class="color-white text-center font-weight-max title"><?= $Count ?></p>
				</div>

				<?php
				$Read = $pdo -> prepare("SELECT pedido_id, pedido_status FROM SI_PEDIDOS WHERE pedido_status = :pedido_status");
				$Read -> bindValue(':pedido_status',1);
				$Read -> execute();

				$Lines = $Read -> rowCount();

				if($Lines < 10){
					$Count = '000'.$Lines;
				}
				elseif($Lines > 10 && $Lines < 100){
					$Count ='00'.$Lines;
				}elseif($Lines > 100 && $Lines < 1000){
					$Count ='0'.$Lines;
				}
				else{
					$Count = $Lines;
				}
				?>

				<div class="divisor3 cards bgcolor-green-dark">
					<p class="color-white font-text-min text-center">Pedidos</p>
					<p class="color-white text-center font-weight-max title"><?= $Count ?></p>
				</div>

				<?php
				$Read = $pdo -> prepare("SELECT pedido_id, pedido_concluido, pedido_status FROM SI_PEDIDOS WHERE pedido_status = :pedido_status AND pedido_concluido = :pedido_concluido");
				$Read -> bindValue(':pedido_status',1);
				$Read -> bindValue(':pedido_concluido',1);
				$Read -> execute();

				$Lines = $Read -> rowCount();

				if($Lines < 10){
					$Count = '000'.$Lines;
				}
				elseif($Lines > 10 && $Lines < 100){
					$Count ='00'.$Lines;
				}elseif($Lines > 100 && $Lines < 1000){
					$Count ='0'.$Lines;
				}
				else{
					$Count = $Lines;
				}
				?>

				<div class="divisor3 cards bgcolor-blue-dark">
					<p class="color-white font-text-min text-center">Concluídos</p>
					<p class="color-white text-center font-weight-max title"><?= $Count ?></p>
				</div>
				
				<div class="clear"></div>
			</article>
			
			<div class="clear"></div>
			<div class="espaco-min"></div>
		</section>
	<div class="clear"></div>