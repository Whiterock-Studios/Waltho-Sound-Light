 <?php 
get_header();

while ( have_posts() ) : the_post(); ?>
	<section class="page-title">	
		<h1><?php the_title(); ?></h1>
	</section>
	<section id="range-item-container" class="container">
		<div class="row">
			<div class="col-md-3 col-sm-5 range-image">
				<?php 
					the_post_thumbnail( 'full' );
					
					if( get_field('price_per_day') ):

						$perDayVal = get_field('price_per_day');
						$perWeek = $perDayVal * 3;
					?>

						<div class="pricing">
							<p><strong>£<?php the_field('price_per_day'); ?></strong> Per Day</p>
							<p><strong>£<?php echo $perWeek; ?></strong> Per Week</p>
						</div>

					<?php	
						endif;
					?>
			</div>
			<div class="col-md-6 col-sm-7 range-text">
				<?php the_content(); ?>
			</div>
			<div class="col-md-3 col-sm-12 range-contact">
				<?php echo do_shortcode("[caldera_form id='CF5667313e755f0']"); ?>
			</div>
		</div>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
