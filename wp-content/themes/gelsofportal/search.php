<?php get_header(); ?>

			<section id="content" class="column two-thirds">
				<?php get_search_form(); ?>
				<h2><?php _e ( 'Results for: "' . get_search_query() . '"' ); ?></h2>
				<div id="posts">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div>
								<?php the_post_thumbnail( 'small-post-thumb' ); ?>
								<h3>
									<a href="<?php the_permalink(); ?>" title="Read more about <?php the_title_attribute(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
								<?php the_excerpt(); ?>
								<p class="meta">
									Posted on 
									<time datetime="<?php the_time( 'Y-m-d' ); ?>">
										<?php the_time( 'M j, Y \a\t g:i A' ); ?>
									</time> by <?php the_author_posts_link() ;?>
									with <a href="<?php the_permalink(); ?>#comments" title="<?php the_title_attribute(); ?> Comments">
									<br /><?php comments_number( '0 comments', '1 comment', '% comments' ); ?>
									</a>
								</p>
								<hr />
							</div>
						</article>
					<?php endwhile; else: 
					_e( 'Sorry, no posts matched your search criteria.' ); 
				endif; ?>
				<div class="clear"></div>
			</div><!-- posts -->
			<?php if( $wp_query->max_num_pages > 1 ) { ?>
				<nav id="pagination" class="clear">
					<?php gelsofportal_paginate(); ?>
					<div class="clear"></div>
				</nav><!-- .pagination -->
			<?php } ?>
			</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>