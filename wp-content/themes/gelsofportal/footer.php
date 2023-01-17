		</div><!--  /row -->
	</main><!-- /.container -->
	<div class="row clearfix" id="upper-footer">
		<div class="container">
			<?php get_sidebar( 'upper-footer' ); ?>
		</div>
	</div>
	<div class="row clearfix navbar">
		<div class="container">
			<nav class="column full">
				<?php
				$footer_nav = array(
					'theme_location' => 'footer-nav',
					'container_id' => 'footer-main',
					'depth' => 1
				);
				?>
				<?php wp_nav_menu( $footer_nav ); ?>
			</nav>
		</div>
	</div>
	<footer class="row clearfix">
		<div class="container">
			<p class="column full center">
				&copy; <?php echo date("Y") ?> <a href="/">Brian Kallie</a> &dash; <a href="/wcmd/final-project/documentation/">Documentation</a>
			</p>
				<?php
				$bottom_nav = array(
					'theme_location' => 'bottom-nav',
					'container_id' => 'bottom-footer-main',
					'depth' => 1
				);
				?>
				<?php wp_nav_menu( $bottom_nav ); ?>
		</div>
	</footer><!--  /row -->
<?php wp_footer(); ?>
</body>
</html>