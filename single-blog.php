<?php
/**
 * The template for displaying all single blog CPT posts
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Load the hero section and content column template parts
get_template_part( 'template-parts/blogs/blog-hero' );
get_template_part( 'template-parts/blogs/blog-content' );

get_footer();
