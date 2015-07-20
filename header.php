<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="author" content=“Marquinhus Goncalves“>
	<meta name="description" content=“Mundo S/A”>
	<meta name="keywords" content=““>
	<meta name="robots" content="index, follow">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" >

	<link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.ico">

	
	<?php wp_head(); ?>
</head>

<body>
	<div>
		<header>
			<nav class = "nav navbar-default">
				<div id = "navigation" class="container">
					<a href = "<?php echo esc_url( home_url( '/' ) ); ?>" title = '<?php bloginfo( 'name' ); ?>' rel="home">
						<img id="logo" alt="Logo Mundo S A" src = "<?php bloginfo('stylesheet_directory');?>/img/logo.png" />
					</a>
					<!-- Brand and toggle get grouped for better mobile display --> 
					<div class = "navbar-header"> 
						<button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = ".navbar-ex-collapse"> 
							<span class = "sr-only">Toggle navigation</span> 
							<span class = "icon-bar"></span> 
							<span class = "icon-bar"></span> 
							<span class = "icon-bar"></span> 
						</button> 
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling --> 
					<div class = "collapse navbar-collapse navbar-right navbar-ex-collapse">
					<div class="social">
						<a class="btn btn-social-icon btn-facebook">
							<img src = "<?php bloginfo('stylesheet_directory');?>/img/iconface.png" />
						</a>
						<a class="btn btn-social-icon btn-twitter">
							<img src = "<?php bloginfo('stylesheet_directory');?>/img/icontwitter.png" />
						</a>
						<a class="btn btn-social-icon btn-issuu">
							<img src = "<?php bloginfo('stylesheet_directory');?>/img/iconissuu.png" />
						</a>
						<a class="btn btn-social-icon btn-behance">
							<img src = "<?php bloginfo('stylesheet_directory');?>/img/iconbehance.png" />
						</a>
						<a class="btn btn-social-icon btn-pinterest">
							<img src = "<?php bloginfo('stylesheet_directory');?>/img/iconpinterest.png" />
						</a>
						
						<?php /* Primary navigation */
						wp_nav_menu( array(
							'menu' => 'top_menu',
							'depth' => 2,
							'container' => false,
							'menu_class' => 'nav navbar-nav',
				  //Process nav menu using our custom nav walker
							'walker' => new wp_bootstrap_navwalker())
						);
						?>
						</div>
					</div>
				</div>
			</nav>
		</header>