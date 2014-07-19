<?php
	get_header();
	$categorias = get_categories();
?>

	<div class="width clearfix catalogo">
		<?php  foreach ($categorias as $categoria) {
			$slug 	= $categoria->slug;
			$nombre = $categoria->name;
			if ( $slug !== 'sin-categoria' ){
		?>
			<div class="columna full categoria center">
				<h2><?php echo $nombre; ?></h2>
				<img src="<?php echo THEMEPATH; ?>images/<?php echo $slug; ?>.jpg" />
				<ul class="hide">
					<?php
						$counter = 1;
						$args = array(
							'category_name' 	=> $slug,
							'posts_per_page' 	=> -1
						);
						$query = new WP_Query($args);
						if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
						$contenido = get_post_meta($post->ID, '_contenido_meta', true);
					?>
						<li class="columna xmall-12 small-6 large-4">
							<h3 class="full text-center"><?php the_title(); ?></h3>
							<p class="full text-center">Contenido neto: <?php echo $contenido; ?></p>
							<div class="clear"></div>
							<?php the_post_thumbnail( 'medium', array('class' => 'columna xmall-6') ); ?>
							<div class="columna xmall-6"><?php the_content(); ?></div>
						</li>

					<?php
						if($counter %3 == 0) {
							echo '<div class="clear-large"></div>';
						}
						if($counter %2 == 0) {
							echo '<div class="clear-small no-large"></div>';
						}
					?>
					<?php $counter++; endwhile; endif; wp_reset_query(); ?>
				</ul>
			</div>
			<div class="clear"></div>
		<?php } } ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>