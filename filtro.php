<div class="main">
	<div class="brand">
		<div class="container">
			<div class="scroll">
				<div class="scroll-left"><i class="fa fa-chevron-circle-left"></i></div>
					<ul id="filters" class="container" style="margin-bottom: 0">
						<div class="scrolling">
							<li><a href="#" data-filter="*" class="selected">tudo</a></li>
							<li><a href="#" data-filter=".logos" class="logos-text">logos</a></li>			
							<?php
								$terms = get_terms("category", "wpds_tax_pic");// get all categories, but you can use any taxonomy
								$count = count($terms); //How many are they?
								if ( $count > 0 ){  //If there are more than 0 terms
									foreach ( $terms as $term ) {  //for each term:
										echo "<li><a href='#' class = " . $term->slug . " data-filter='.".$term->slug."'>"
										."<img src='".wpds_tax_pic_url($term->term_id)."' />".
										"</a></li>\n";
									}
								}
							?>
						</div>
					</ul>
				<div class="scroll-right"><i class="fa fa-chevron-circle-right"></i></div>
			</div>
		</div>
	</div>

		<?php $the_query = new WP_Query( 'posts_per_page=50' ); //Check the WP_Query docs to see how you can limit which posts to display ?>
		<?php if ( $the_query->have_posts() ) : ?>
			<div id="isotope-list">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
		$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
		$termsString = ""; //initialize the string that will contain the terms
			foreach ( $termsArray as $term ) { // for each term 
				$termsString .= $term->slug.' '; //create a string that has all the slugs 
			}
			?>

			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			
			<div class = "<?php echo $termsString; ?> itens item col-xs-6 col-sm-6 col-md-4 col-lg-3 third-effect"> <?php // 'item' is used as an identifier (see Setp 5, line 6) ?>
				
				<a href = "<?php the_permalink(); ?>" class = "mask bar" rel = "<?php the_ID(); ?>" title = "<?php the_title(); ?>" style = "display: table; width: 100%; height: 300px; position: absolute; z-index: 10">
					<figcaption style = "display: table-cell; vertical-align: middle">
						<h3><?php the_title(); ?></h3>
						<div style="margin: 0 auto; width: 100px">
							<div class="mais">saiba mais</div>
						</div>
					</figcaption>

					<?php if ( has_post_thumbnail() ) { 
							//the_post_thumbnail();
					} ?>
				</a>
				<div class = "over-image" style = "width: 100%; height: 100%; position: absolute; background:url('<?php echo $url; ?>') no-repeat; background-size: cover; background-position: center; z-index: 1"></div>

			</div> <!-- end item -->
		<?php endwhile;  ?>
	</div> <!-- end isotope-list -->
<?php endif; ?>
</div>