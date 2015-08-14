<?php get_header(); ?>

<div style = "widh: 100%; background: #DDD">
	<?php

	$post = get_post($_POST['id']);

	?>

	<div id="single-post post-<?php the_ID(); ?>">

		<?php while (have_posts()) : the_post(); ?>

			<div class = "conteudo">

				<?php the_content();?>

			</div>

		<?php endwhile;?> 

	</div>
</div>

<?php include('filtro.php'); ?>

<?php get_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.min.js"></script>

<script src="<?php bloginfo('stylesheet_directory');?>/js/isotope_portifolio.js"></script>

<script>
	
	jQuery( document ).ready( function( $ ) {
	// Relocate Jetpack sharing buttons down into the comments form
	jQuery( '#sharing' ).html( jQuery( '.sharedaddy' ).detach() );
	});

</script>