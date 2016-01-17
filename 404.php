<?php 
get_header();

while ( have_posts() ) : the_post(); ?>

<section class="page-title">	
	<h1>404 - Page Not Found</h1>
</section>

<section class="main-content container">
		
	<p>Sorry, the page you are looking for doesn't exist! Please click <a href="<?php echo site_url(); ?>">here</a> to go home.</p>

</section>

<?php endwhile;
get_footer(); ?>