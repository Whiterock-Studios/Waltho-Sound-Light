 <?php 
// Template Name: Equipment
get_header();

while ( have_posts() ) : the_post(); ?>
	<section class="page-title">	
		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</section>


<section class="container">
	<div class="item-container">	
			<div class="item">
				<a href="<?php the_field("link_1"); ?>">
					<img src="<?php the_field("image_1"); ?>" alt="<?php the_field("title_1"); ?>" title="<?php the_field("title_1"); ?>">
					<h2><?php the_field("title_1"); ?></h2>
				</a>
			</div>
			<div class="item">
				<a href="<?php the_field("link_2"); ?>">
					<img src="<?php the_field("image_2"); ?>" alt="<?php the_field("title_2"); ?>" title="<?php the_field("title_2"); ?>">
					<h2><?php the_field("title_2"); ?></h2>
				</a>
			</div>
			<div class="item">
				<a href="<?php the_field("link_3"); ?>">
					<img src="<?php the_field("image_3"); ?>" alt="<?php the_field("title_3"); ?>" title="<?php the_field("title_3"); ?>">
					<h2><?php the_field("title_3"); ?></h2>
				</a>
			</div>
			<div class="item">
				<a href="<?php the_field("link_4"); ?>">
					<img src="<?php the_field("image_4"); ?>" alt="<?php the_field("title_4"); ?>" title="<?php the_field("title_4"); ?>">
					<h2><?php the_field("title_4"); ?></h2>
				</a>
			</div>
	</div>
</section>

<?php endwhile;
get_footer(); ?>