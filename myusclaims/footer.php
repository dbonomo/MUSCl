<?php if(is_front_page()): ?>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-12">
						<div class="fcol fcol-first">
							<?php dynamic_sidebar('footer-1');?>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="fcol fcol-middle">
							<?php dynamic_sidebar('footer-2');?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="fcol fcol-last">
							<?php dynamic_sidebar('footer-3');?>
						</div>
					</div>
				</div>
			</div> <!-- container end -->
		</footer> <!-- footer end -->

		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/js/jquery-1.11.2.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/js/bootstrap.min.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/js/plugins.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/js/main.js"></script>

<?php else: ?>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-12">
						<div class="fcol fcol-first">
							<?php dynamic_sidebar('footer-1');?>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="fcol fcol-middle">
							<?php dynamic_sidebar('footer-2');?>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="fcol fcol-last">
							<?php dynamic_sidebar('footer-3');?>
						</div>
					</div>
				</div>
			</div> <!-- container end -->
		</footer> <!-- footer end -->
	</div><!-- mainContainer -->

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/js/jquery-1.11.2.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/js/plugins.js"></script>
	<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/parallax.min.js"></script>
	<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.flexslider-min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/script.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/queryUnderground.js"></script>
<?php endif; ?>



	<?php wp_footer(); ?>

</body>
</html>
