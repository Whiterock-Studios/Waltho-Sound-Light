<section class="slider-container">
	<ul class="slider">
	<?php
	$loop = new WP_Query( array( 'post_type' => 'slides', 'posts_per_page' => 5,'orderby' => 'rand' ) ); 
	while ( $loop->have_posts() ) : $loop->the_post(); 
		$thumb_id = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
	?>
		<li class="slide" style='background-image:url("<?php echo $thumb_url[0]; ?>");'>
		<?php
			if( get_field('background_darkness') ): ?>
				<div class="shade" style="opacity:0.<?php the_field('background_darkness'); ?>;"></div>
			<?php endif; ?>>
			<div class="container">
				<div class="slide-content">
					<h2><?php the_title(); ?></h2>
					<p><?php the_field('slide_body_text'); ?></p>
					<a class="waltho-button" href="<?php the_field('slide_link'); ?>"><?php the_field('link_text'); ?></a>
				</div>
			</div>
		</li>
	<?php endwhile; wp_reset_query();?>
	</ul>
	<span title="Play / Pause" id="pauseSlider">&#10073;&#10073;</span>

	<span id="slider-next">
		<i class="icon-right-open"></i>
	</span>
	<span id="slider-prev">
		<i class="icon-left-open"></i>
	</span>
</section>