<?php get_header(); ?>

<div style = "widh: 100%">
	<?php $post = get_post($_POST['id']); ?>

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