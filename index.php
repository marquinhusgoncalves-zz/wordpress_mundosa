<?php get_header(); ?>
<div class="wrapper">
	<header >
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
		</nav>
	</header>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			<li data-target="#carousel-example-generic" data-slide-to="4"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner.jpg" alt="Banner Mundo S A ">
			</div>
			<div class="item">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner_somague.jpg" alt="Banner Mundo S A">
			</div>
			<div class="item">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner_palaciodopao.jpg" alt="Banner Mundo S A">
			</div>
			<div class="item">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner_guiasingrafs.jpg" alt="Banner Mundo S A">
			</div>
			<div class="item">
				<img src="<?php bloginfo('stylesheet_directory');?>/img/banner/mundosa_banner_e3gerenciamento.jpg" alt="Banner Mundo S A">
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<?php get_footer(); ?>