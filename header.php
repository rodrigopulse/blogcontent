<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#333333">
	<?php wp_head(); ?>
	<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
	<script>
		var googletag = googletag || {};
		googletag.cmd = googletag.cmd || [];
	</script>

	<script>
		googletag.cmd.push(function() {
			googletag.defineSlot('/94567276/super_desktop_post', [728, 90], 'div-gpt-ad-1555327585248-0').addService(googletag.pubads());
			googletag.pubads().enableSingleRequest();
			googletag.enableServices();
		});
	</script>
</head>
<body <?php body_class(); ?>>
<header class="header-principal">
	<div class="container">
		<div class="header-principal__hamburguer">
			<nav role="navigation">
			<div id="menuToggle">
				<input type="checkbox" />
				<span></span>
				<span></span>
				<span></span>
				<?php wp_nav_menu( array( 
					'theme_location' 	=> 'header-menu',
					'container'			=> 'ul',
					'menu_id'		=> 'menu'
				) ); ?>
			</div>
			</nav>
		</div>
		<div class="header-principal__logo">
			<a href="<?php bloginfo('url'); ?>">
				<img style="max-width: 100%;" src="<?php bloginfo( 'template_url' ); ?>/imagens/logo-pulse.png" alt="Pulse Maker">
			</a>
		</div>
	</div><!--.container-->
</header>
