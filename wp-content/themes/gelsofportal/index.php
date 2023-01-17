<?php get_header(); ?>

			<section class="column two-thirds">
				<h2>The Posts</h2>
				<div id="posts">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article>
							<?php the_post_thumbnail( 'post-thumb' ); ?>
							<h3>
								<a href="<?php the_permalink(); ?>" title="Read more about <?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							<?php the_excerpt(); ?>
							<p>
								<time datetime="<?php the_time( 'Y-m-d' ); ?>">
									on <?php the_time( 'M j, Y \a\t g:i A' ) ?>
								</time> by <?php the_author_posts_link() ;?>
								<br> with <a href="<?php the_permalink(); ?>#comments" title="<?php the_title_attribute() ?> Comments">
									<?php comments_number( '0 comments', '1 comment', '% comments' ); ?>
								</a>
							</p>
							<p><a href="<?php the_permalink(); ?>">Read More: <?php the_title(); ?></a></p>
							<hr />
						</article>
					<?php endwhile; else: ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				</div>
				<?php if( $wp_query->max_num_pages > 1 ) { ?>
                    <nav id="pagination" class="clear">
                        <?php gelsofportal_paginate(); ?>
                        <div class="clear"></div>
                    </nav><!-- .pagination -->
    			<?php } ?>
			</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>