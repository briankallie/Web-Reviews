<?php get_header(); ?>
	<section id="content" class="column two-thirds alignleft">
					
		<div id="posts">
			<h2>
			<?php
				if( is_day() ) _e( 'You are viewing the ' .  get_the_date() . ' daily archives' );
				elseif ( is_month() ) _e( 'You are viewing the ' . get_the_date( 'F Y' ) . ' monthly archives' );
				elseif ( is_year() ) _e( 'You are viewing the ' . get_the_date( 'Y' ) . ' yearly archives' ); 
				elseif ( is_author() ) _e( 'You are viewing the ' . get_the_author() . ' archives' ); 
				else _e( 'You are viewing the "'. single_cat_title( '', false ) . '" Archives' );
			?>
			</h2>

			<?php 
				global $postcount;
				$postcount = 0;
			?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php $postcount&1 ? post_class( 'alignleft' ) : post_class( 'clear alignleft' ); ?>>
					<?php $postcount++; ?>
					<?php the_post_thumbnail( 'post-thumb' ); ?>
					<h3>
						<a href="<?php the_permalink(); ?>" title="For More Info on <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h3>
					<?php the_excerpt(); ?>
					<p class="meta">Posted 
						<time datetime="<?php the_time( 'Y-m-d' ); ?>">
							<?php the_time( 'M j, Y \a\t g:i A' ); ?>
						</time>
						 with <a href="<?php the_permalink(); ?>#comments" title="<?php the_title_attribute() ?> Comments">
							<?php comments_number( '0 comments', '1 comment', '% comments' ); ?>
						</a>
					</p>
					<hr />
				</article>
			<?php endwhile; else:
				_e( 'Sorry, no posts matched your criteria.' );
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