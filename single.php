<?php get_header(); ?>

<section style="widh: 100%">
	<?php $post = get_post($_POST['id']); ?>

	<div id="single-post post-<?php the_ID(); ?>">
		<?php while (have_posts()) : the_post(); ?>
			<article class="conteudo" itemscope itemtype="http://schema.org/Article">
				<?php the_content();?>
			</article>
		<?php endwhile;?> 
	</div>
</section>

<?php include('filtro.php'); ?>

<?php get_footer(); ?>