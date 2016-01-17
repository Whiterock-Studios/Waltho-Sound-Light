</main>
<footer>
	<section class="upper-footer container">
		<div id="footer-contact">
			<h6>Get in touch</h6>
			<?php wp_nav_menu( array( 'theme_location' => 'social_menu' ) ); ?>
			<div id="footer-form">
				<?php echo do_shortcode("[caldera_form id='CF5660aaf58ddbd']"); ?>
			</div>
		</div>

		<div id="footer-menu">
			<h6>Go To</h6>
			<?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
		</div>
		
	</section>

	<section id="lower-footer">
		<div class="container">
			<div class="pull-left">
				<p>&copy; WalthoSound&Light <a href="<?php echo site_url(); ?>/terms-conditions">Terms & Conditions</a></p>
			</div>
			<div id="whiterock" class="pull-right">
				<p>Crafted with <i class="icon-heart"></i> by WhiteRock</p>
			</div>
		</div>
	</section>
</footer>

<?php wp_footer(); ?>
</body>
</html>
