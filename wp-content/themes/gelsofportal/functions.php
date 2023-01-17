<?php

/**
 * Make Function Pluggable
 *
 * Child Theme can have a function with the same name
 * That function can override this function
 * If the function does not exist use this function
 * Otherwise do nothing the function already exists
 */
if ( ! function_exists( 'gelsofportal_after_setup_theme' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function gelsofportal_after_setup_theme() {

        // Allow excerpts on pages
        add_post_type_support( 'page', 'excerpt' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );
        
        // Allow admin users to use Featured Images and add image resize dimensions and names
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'post-thumb', 260, 175, true ); // index.php and archive.php
        add_image_size( 'small-post-thumb', 65, 50, true ); // search.php
        add_image_size( 'page-featured-image', 530, 95, true ); // single.php
        add_image_size( 'fullwidth-featured-image', 820, 95, true ); // page.php
        
        // Output HTML5 style HTML
        add_theme_support( 'html5', array(
            'caption',
            'comment-form',
            'comment-list',
            'gallery',
            'search-form',
        ) );
        
        // Register Navigation Menus.
        register_nav_menus(
            array(
                'header-nav' => 'Main Nav, Bottom of Header',
                'footer-nav' => 'Footer Nav, Middle Footer',
                'bottom-nav' => 'Bottom Nav, Bottom Footer'
            )
        );

    }
endif;
add_action( 'after_setup_theme', 'gelsofportal_after_setup_theme' );


// Rewrite Search URL's to Human-friendly URL's
function fp_mod_rewrite_search_url() {
    if ( is_search() && !empty($_GET['s']) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }   
}
add_action('template_redirect', 'fp_mod_rewrite_search_url');


/**
 * Register widget areas and custom widgets.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 **/
function gelsofportal_widgets_init() {

  /**
  * Registering "sidebars"
  **/


  /**
  * Registering the Aside "Sidebar"
  **/
  $gelsofportal_aside_sidebar = array(
      'name' => 'Aside',
      'id' => 'aside',
      'description' => 'Widgets placed here will go in the Right hand sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div><!-- class: widget -->',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => '</h2>',
  );
  register_sidebar( $gelsofportal_aside_sidebar );


  /**
  * Registering the Upper Footer "Sidebar"
  **/
  $lightandeasy_upperfooter_sidebar = array(
      'name' => 'Upper Footer',
      'id' => 'upper-footer',
      'description' => 'Widgets placed here will go in the upper footer area',
      'before_widget' => '<div class="widget column third alignleft">',
      'after_widget' => '</div><!-- class: widget -->',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => '</h2>',
  );
  register_sidebar( $lightandeasy_upperfooter_sidebar );

  /**
  * Registering the 404 Page "Sidebar"
  **/
  $gelsofportal_404error_sidebar = array(
      'name' => '404 Error Page',
      'id' => '404error',
      'description' => 'Widgets placed here will go in the 404 Error Page',
      'before_widget' => '<div class="widget column third alignleft">',
      'after_widget' => '</div><!-- class: widget -->',
      'before_title' => '<h2 class="widgettitle">',
      'after_title' => '</h2>',
  );
  register_sidebar( $gelsofportal_404error_sidebar );
}
add_action( 'widgets_init', 'gelsofportal_widgets_init' );


function gelsofportal_set_widget_tag_cloud_args( $args ) {
    $my_args = array(
        'format' => 'list',
        'number' => 0,
        'smallest' => 16,
        'largest'   => 30,
        'unit'  => 'px',
        'order' => 'DESC',
        'orderby' => 'count',
    );
    $args = wp_parse_args( $args, $my_args );
    return $args;
}
add_filter( 'widget_tag_cloud_args', 'gelsofportal_set_widget_tag_cloud_args' );


function gelsofportal_enqueue() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_style( 'gelsofportal_normalize', get_stylesheet_directory_uri() . '/normalize.css' );
}
add_action( 'wp_enqueue_scripts', 'gelsofportal_enqueue' );


function gelsofportal_paginate() {
        global $paged, $wp_query;
        $abignum = 1000000000; //we need an unlikely integer
        $args = array(
            'base' => str_replace( $abignum, '%#%', esc_url( get_pagenum_link( $abignum ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var( 'paged' ) ),
            'total' => $wp_query->max_num_pages,
            'show_all' => False,
            'end_size' => 2,
            'mid_size' => 2,
            'prev_next' => True,
            'prev_text' => __( '<' ),
            'next_text' => __( '>' ),
            'type' => 'list'
        );
        echo paginate_links( $args );
      }
