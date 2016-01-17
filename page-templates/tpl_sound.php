 <?php 
// Template Name: Sound
get_header();

while ( have_posts() ) : the_post(); ?>
	<section class="page-title">	
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</section>

<?php endwhile; ?>

<section class="container">
	<div class="item-container">
		<?php
			$loop = new WP_Query( array( 'post_type' => 'sound-equipment', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' ) );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
			<div class="item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'small' ); ?>
						<h2><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?></p>
						<?php 
							if( get_field('price_per_day') ):

								$perDayVal = get_field('price_per_day');
								$perWeek = $perDayVal * 3;

								echo "<p class='price-tag'>£";
								the_field('price_per_day');
								echo " / Day&nbsp;&nbsp;|&nbsp;&nbsp;£" . $perWeek . " / Week</p>";
							endif;
						?>
				</a>
			</div>

		<?php endwhile; wp_reset_query(); ?>
	</div>

</section>

<?php get_footer(); ?>