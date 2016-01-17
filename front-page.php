<?php get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
			<?php 
			include('partials/slider.php');
			 ?>
			 
			<section id="home-cta">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 cta">
							<a href="<?php the_field("link_1"); ?>">
								<img src="<?php the_field("icon_1"); ?>" alt="<?php the_field("title_1"); ?> Icon">
								<h1><?php the_field("title_1"); ?></h1>
								<p><?php the_field("paragraph_1"); ?></p>
								<span class="waltho-button"><?php the_field("link_text_1"); ?></span>
							</a>
						</div>
						<div class="col-sm-4 cta">
							<a href="<?php the_field("link_2"); ?>">
								<img src="<?php the_field("icon_2"); ?>" alt="<?php the_field("title_2"); ?> Icon">
								<h1><?php the_field("title_2"); ?></h1>
								<p><?php the_field("paragraph_2"); ?></p>
								<span class="waltho-button"><?php the_field("link_text_2"); ?></span>
							</a>
						</div>
						<div class="col-sm-4 cta">
							<a href="<?php the_field("link_3"); ?>">
								<img src="<?php the_field("icon_3"); ?>" alt="<?php the_field("title_3"); ?> Icon">
								<h1><?php the_field("title_3"); ?></h1>
								<p><?php the_field("paragraph_3"); ?></p>
								<span class="waltho-button"><?php the_field("link_text_3"); ?></span>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="home-about">
				<div class="container">
					<div class="row">
						<div id="about-text" class="col-sm-7">
							<h3><?php the_field("about_title"); ?></h3>
							<p><?php the_field("about_text"); ?></p>
						</div>
						<div id="about-image" class="col-sm-5">
							<img src="<?php the_field("about_image"); ?>" alt="<?php the_field("image_alt_text"); ?>">
						</div>
					</div>
				</div>
			</section>

		<?php
	}
}

get_footer(); ?>
