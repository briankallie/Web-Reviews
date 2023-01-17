<?php get_header(); ?>

        <section id="content" class="column two-thirds alignleft">
            <?php while ( have_posts() ) : the_post(); ?>
            <div>
                <?php the_post_thumbnail( 'page-featured-image' ); ?>
            </div><!-- featured image -->

            <div id="page-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <?php if( $post->post_excerpt ) { ?>
                    <div class="tagline">
                        <?php the_excerpt(); ?>
                    </div>
                <?php } ?>

                <div class="content">
                    <?php the_content(); ?>
                </div><!-- content -->
            </div>


            <div class="comments">
                <?php comments_template( '', true ); ?>
            </div><!-- comments-->
            <?php endwhile; ?>

        </section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>