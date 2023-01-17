<?php get_header(); ?>

		<section id="content" class="column two-thirds">	
			<?php while ( have_posts() ) : the_post(); ?>
					<div>
					<?php the_post_thumbnail( 'page-featured-image' ); ?>
				</div><!-- featured image -->
				
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
					<div>
						<h2><?php the_title(); ?></h2>
						<p class="meta">
							<time datetime="<?php the_time( 'Y-m-d' ); ?>">
								Posted on <?php the_time( 'M j, Y \a\t g:i A' ); ?>
							</time>
							with <a href="<?php the_permalink(); ?>#comments" 
							   title="<?php the_title_attribute() ?> Comments">
							   <?php comments_number( '0 comments', 'only 1 comment', '% comments' ); ?>
							</a>
						</p>
					</div>						
					<div class="content">
						<?php the_content(); ?>
					</div><!-- content -->
					<div>
						<div class="tax clearfix">
							<div class="alignleft">
								<p>Filed Under: <?php the_category( ', ' ); ?></p>
							</div>
							<?php if( get_the_tags() ) { ?>
								<div class="alignright">
									<p><?php the_tags(); ?></p>
								</div>
							<?php } ?>
						</div>
					</div>
					<nav id="pagi" class="clearfix">
						<ul>
							<?php previous_post_link( '<li>%link</li>', '&lt; Previous Post' ); ?>
							<?php next_post_link( '<li>%link</li>', 'Next Post &gt;' ); ?>
						</ul>
					</nav><!-- .pagination -->
				</article>
									
				<div class="author clearfix">
					<h2>Written by: <?php the_author_posts_link(); ?></h2>
					<?php echo get_avatar( get_the_author_meta( 'email' ), '150', 'mm', 'Avatar of '.get_the_author_meta( 'first_name' ).' '.get_the_author_meta( 'last_name' ) ); ?>
					<?php if( get_the_author_meta( 'description' ) ) { ?>
						<p><?php the_author_meta( 'description' ); ?></p>
					<?php } ?>
					<?php if( get_the_author_meta( 'user_url' ) ) { ?>
						<a href="<?php the_author_meta( 'user_url' ); ?>" title="<?php the_author_meta( 'first_name' ); ?>'s Website" target="_blank">
					<?php the_author_meta( 'user_url' ); ?></a> 
					<?php } ?>
				</div><!-- author -->
				<div class="comments">
			<?php comments_template( '', true ); ?>
				</div><!-- comments-->
			<?php endwhile; ?>			
		</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>