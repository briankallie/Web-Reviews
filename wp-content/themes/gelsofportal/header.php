<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="The place for website reviews and critiques!">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen">

	<!-- Load jQuery Library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Load SlickNav CSS / SlickNav Plugin / Select Navigation / Run SlickNav -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css" rel="stylesheet" type="text/css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js"></script>

	<!-- Configure and implement Slicknav Navigation bar -->
	<script>
		$(document).ready(function(){
			$('nav.topnav').slicknav({
				label: '',
				prependTo: 'header',
				brand: '<?php bloginfo( 'name' ); ?>',
			});
		});
	</script>

	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
	<header class="column full">
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p class="center"><?php bloginfo( 'description' ); ?></p>
		<form id="head-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input id="search-header" name="s" type="text" placeholder="Search..." value="<?php the_search_query(); ?>">
			<input id="submit-header" name="submit" type="submit" value="Search">
		</form>
	</header>

	<div class="row clearfix navbar">
		<div class="container">
			<nav class="column full topnav">
				<?php
					$header_nav = array(
						'theme_location' => 'header-nav',
						'container_id' => 'header-main-nav',
						'depth' => 1
					);
					?>
					<?php wp_nav_menu( $header_nav ); ?>
			</nav>
		</div>
	</div>
	<main class="container">
		<div class="row clearfix">