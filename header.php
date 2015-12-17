<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="description" content="Mundo S.A Comunicação ">
	<meta name="keywords" content="agência, comunicação, logo, logos, criação, site, website, e-mail marketing, SEO">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
	<link rel="publisher" href="https://plus.google.com/+MundoSAComunicacaoSaoBernardodoCampo"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<?php include_once("analyticstracking.php") ?>
	<div id="stage">
		<header class="header_menu" itemscope itemtype="http://schema.org/WPHeader">
			<div class="container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Link página principal" style="display: inline-block"><img id="logo" src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt="Logo Mundo S.A Comunicação"></a>
				<input type="checkbox" id="sidebartoggler">	
				<label class="toggle visible-xs-inline-block visible-sm-inline-block" for="sidebartoggler"><i class="fa fa-bars"></i></label>
				<nav class="--menu-principal sidebar visible-xs-inline-block visible-sm-inline-block" itemscope itemtype="http://schema.org/SiteNavigationElement"><?php wp_nav_menu(''); ?></nav>
				<nav class="--menu-principal hidden-xs hidden-sm" itemscope itemtype="http://schema.org/SiteNavigationElement"><?php wp_nav_menu(''); ?></nav>
			</div>
		</header>

		<div class="content">