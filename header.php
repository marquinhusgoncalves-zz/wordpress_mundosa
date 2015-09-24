<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="description" content="mundo sa agencia de comunicacao">
	<meta name="keywords" content="agencia, comunicacao, logo, logos, criacao, site, website, e-mail marketing">
	<meta name="robots" content="index, follow">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" >

	<?php wp_head(); ?>
</head>
<?php include_once("analyticstracking.php") ?>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<div id="stage">
		<header class="header_menu" itemscope itemtype="http://schema.org/WPHeader">
			<div class="container">
				<a style="display: inline-block" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt="Logo Mundo S/A"></a>
				<input	type="checkbox" id="sidebartoggler" name="" value="">	
				<label class="toggle visible-xs-inline-block visible-sm-inline-block" for="sidebartoggler"><i class="fa fa-bars"></i></label>
				<nav class="menu_principal sidebar visible-xs-inline-block visible-sm-inline-block" itemscope itemtype="http://schema.org/SiteNavigationElement"><?php wp_nav_menu(''); ?></nav>
				<nav class="menu_principal hidden-xs hidden-sm" itemscope itemtype="http://schema.org/SiteNavigationElement"><?php wp_nav_menu(''); ?></nav>
			</div>
		</header>

		<div class="content">