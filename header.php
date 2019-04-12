<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/imagens/favicon/safari-pinned-tab.svg" color="#96cb4f">
	<meta name="msapplication-TileColor" content="#fff">
	<meta name="theme-color" content="#222222">

	<?php wp_head(); ?>

	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-5289524139634886",
			enable_page_level_ads: true
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
				<img style="max-width: 100%;" src="<?php bloginfo( 'template_url' ); ?>/imagens/logo-vagalumeria-branco.png" alt="Vagalumeria">
			</a>
		</div>
	</div><!--.container-->
</header>
