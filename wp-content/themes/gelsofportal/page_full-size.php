<?php /* Template Name: Full Size Page */ ?>

<?php get_header(); ?>

        <section id="content" class="column full alignleft">
            <?php while ( have_posts() ) : the_post(); ?>
            <div>
                <?php the_post_thumbnail( 'fullwidth-featured-image' ); ?>
            </div><!-- featured image -->

            <?php if( function_exists( 'bcn_display' ) ){ ?>
                <nav class="breadcrumb">
                    <p><?php bcn_display(); ?></p>
                </nav>
            <?php } ?>

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

<?php get_footer(); ?>