<?php get_header(); ?>	

	<section id="content" class="column full alignleft">	
		<h1 class="error">Oh no! Error 404!</h1>
		<h2 class="tagline">We're sorry, we can't find what you're looking for. Perhaps its our fault. Please use the navigation above or below and try again!</h2>
		<?php get_search_form(); ?>

		<?php dynamic_sidebar( '404 Error Page' ); ?>
	</section>

<?php get_footer(); ?>