<?php
// Template Name:Contact
get_header(); ?>

<section class="main-content container">

	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>
			
			<div class="row">
				<div class="col-sm-8">
					<?php the_field("contact_1"); ?>
				</div>
				<div class="col-sm-4 range-contact">
					<?php the_field("contact_2"); ?>
				</div>
			</div>

			<?php
			}
		}
	?>
	
</section>

<?php get_footer(); ?>
