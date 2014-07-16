<?php get_header(); ?>

	<div class="width clearfix catalogo">
		<div class="columna full categoria center">
			<h2>Semillas y botanas</h2>
			<img src="<?php echo THEMEPATH; ?>images/seeds-bg-1000.jpg" />
			<ul>
				<?php
					$semillasArgs = array(
						'category_name' 	=> 'semillas-y-botanas',
						'posts_per_page' 	=> -1
					);
					$semillasQuery = new WP_Query($semillasArgs);
					if ( $semillasQuery->have_posts() ) : while( $semillasQuery->have_posts() ) : $semillasQuery->the_post();
					$contenido = get_post_meta($post->ID, '_contenido_meta', true);
				?>
					<li class="columna xmall-12 small-6 medium-6 large-4">
						<h3 class="columna medium-12 text-center"><?php the_title(); ?></h3>
						<p class="columna medium-12 text-center">Contenido neto: <?php echo $contenido; ?></p>
						<div class="clear"></div>
						<?php the_post_thumbnail( 'medium', array('class' => 'columna medium-6') ); ?>
						<div class="columna medium-6"><?php the_content(); ?></div>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="columna full categoria center">
			<h2>Café</h2>
			<img src="<?php echo THEMEPATH; ?>images/coffee-bg.jpg" />
			<ul>
				<?php
					$cafeArgs = array(
						'category_name' 	=> 'cafe',
						'posts_per_page' 	=> -1
					);
					$cafeQuery = new WP_Query($cafeArgs);
					if ( $cafeQuery->have_posts() ) : while( $cafeQuery->have_posts() ) : $cafeQuery->the_post();
					$contenido = get_post_meta($post->ID, '_contenido_meta', true);
				?>
					<li class="columna xmall-12 small-6 medium-6 large-4">
						<h3 class="columna medium-12 text-center"><?php the_title(); ?></h3>
						<p class="columna medium-12 text-center">Contenido neto: <?php echo $contenido; ?></p>
						<div class="clear"></div>
						<?php the_post_thumbnail( 'medium', array('class' => 'columna medium-6') ); ?>
						<div class="columna medium-6"><?php the_content(); ?></div>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="columna full categoria center">
			<h2>Barras naturales</h2>
			<img src="<?php echo THEMEPATH; ?>images/bar-bg.jpg" />
			<ul>
				<?php
					$barrasArgs = array(
						'category_name' 	=> 'barras-naturales',
						'posts_per_page' 	=> -1
					);
					$barrasQuery = new WP_Query($barrasArgs);
					if ( $barrasQuery->have_posts() ) : while( $barrasQuery->have_posts() ) : $barrasQuery->the_post();
					$contenido = get_post_meta($post->ID, '_contenido_meta', true);
				?>
					<li class="columna xmall-12 small-6 medium-6 large-4">
						<h3 class="columna medium-12 text-center"><?php the_title(); ?></h3>
						<p class="columna medium-12 text-center">Contenido neto: <?php echo $contenido; ?></p>
						<div class="clear"></div>
						<?php the_post_thumbnail( 'medium', array('class' => 'columna medium-6') ); ?>
						<div class="columna medium-6"><?php the_content(); ?></div>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="columna full categoria center">
			<h2>Salsas artesanales</h2>
			<img src="<?php echo THEMEPATH; ?>images/sauce-bg.jpg" />
			<ul>
				<?php
					$salsasArgs = array(
						'category_name' 	=> 'salsas-artesanales',
						'posts_per_page' 	=> -1
					);
					$salsasQuery = new WP_Query($salsasArgs);
					if ( $salsasQuery->have_posts() ) : while( $salsasQuery->have_posts() ) : $salsasQuery->the_post();
					$contenido = get_post_meta($post->ID, '_contenido_meta', true);
				?>
					<li class="columna xmall-12 small-6 medium-6 large-4">
						<h3 class="columna medium-12 text-center"><?php the_title(); ?></h3>
						<p class="columna medium-12 text-center">Contenido neto: <?php echo $contenido; ?></p>
						<div class="clear"></div>
						<?php the_post_thumbnail( 'medium', array('class' => 'columna medium-6') ); ?>
						<div class="columna medium-6"><?php the_content(); ?></div>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="columna full categoria center">
			<h2>Bebidas naturales</h2>
			<img src="<?php echo THEMEPATH; ?>images/water-bg.jpg" />
			<ul>
				<?php
					$bebidasArgs = array(
						'category_name' 	=> 'bebidas-naturales',
						'posts_per_page' 	=> -1
					);
					$bebidasQuery = new WP_Query($bebidasArgs);
					if ( $bebidasQuery->have_posts() ) : while( $bebidasQuery->have_posts() ) : $bebidasQuery->the_post();
					$contenido = get_post_meta($post->ID, '_contenido_meta', true);
				?>
					<li class="columna xmall-12 small-6 medium-6 large-4">
						<h3 class="columna medium-12 text-center"><?php the_title(); ?></h3>
						<p class="columna medium-12 text-center">Contenido neto: <?php echo $contenido; ?></p>
						<div class="clear"></div>
						<?php the_post_thumbnail( 'medium', array('class' => 'columna medium-6') ); ?>
						<div class="columna medium-6"><?php the_content(); ?></div>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="columna full categoria center">
			<h2>Aceites</h2>
			<img src="<?php echo THEMEPATH; ?>images/oil-bg.jpg" />
			<ul>
				<?php
					$aceitesArgs = array(
						'category_name' 	=> 'aceites',
						'posts_per_page' 	=> -1
					);
					$aceitesQuery = new WP_Query($aceitesArgs);
					if ( $aceitesQuery->have_posts() ) : while( $aceitesQuery->have_posts() ) : $aceitesQuery->the_post();
					$contenido = get_post_meta($post->ID, '_contenido_meta', true);
				?>
					<li class="columna xmall-12 small-6 medium-6 large-4">
						<h3 class="columna medium-12 text-center"><?php the_title(); ?></h3>
						<p class="columna medium-12 text-center">Contenido neto: <?php echo $contenido; ?></p>
						<div class="clear"></div>
						<?php the_post_thumbnail( 'medium', array('class' => 'columna medium-6') ); ?>
						<div class="columna medium-6"><?php the_content(); ?></div>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="columna full categoria center">
			<h2>Productos de cacao</h2>
			<img src="<?php echo THEMEPATH; ?>images/chocolate-bg.jpg" />
			<ul>
				<?php
					$cacaoArgs = array(
						'category_name' 	=> 'productos-de-cacao',
						'posts_per_page' 	=> -1
					);
					$cacaoQuery = new WP_Query($cacaoArgs);
					if ( $cacaoQuery->have_posts() ) : while( $cacaoQuery->have_posts() ) : $cacaoQuery->the_post();
					$contenido = get_post_meta($post->ID, '_contenido_meta', true);
				?>
					<li class="columna xmall-12 small-6 medium-6 large-4">
						<h3 class="columna medium-12 text-center"><?php the_title(); ?></h3>
						<p class="columna medium-12 text-center">Contenido neto: <?php echo $contenido; ?></p>
						<div class="clear"></div>
						<?php the_post_thumbnail( 'medium', array('class' => 'columna medium-6') ); ?>
						<div class="columna medium-6"><?php the_content(); ?></div>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="clear"></div>
		<div class="columna full categoria center">
			<h2>Mermeladas, cajetas y miel</h2>
			<img src="<?php echo THEMEPATH; ?>images/mermelada-bg.jpg" />
			<ul>
				<?php
					$mermeladasArgs = array(
						'category_name' 	=> 'mermeladas-cajetas-y-miel',
						'posts_per_page' 	=> -1
					);
					$mermeladasQuery = new WP_Query($mermeladasArgs);
					if ( $mermeladasQuery->have_posts() ) : while( $mermeladasQuery->have_posts() ) : $mermeladasQuery->the_post();
					$contenido = get_post_meta($post->ID, '_contenido_meta', true);
				?>
					<li class="columna xmall-12 small-6 medium-6 large-4">
						<h3 class="columna medium-12 text-center"><?php the_title(); ?></h3>
						<p class="columna medium-12 text-center">Contenido neto: <?php echo $contenido; ?></p>
						<div class="clear"></div>
						<?php the_post_thumbnail( 'medium', array('class' => 'columna medium-6') ); ?>
						<div class="columna medium-6"><?php the_content(); ?></div>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
		<div class="clear"></div>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>