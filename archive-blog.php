<?php
/**
 * Blog Archive Template
 *
 * The template for displaying all blog archive posts
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Load the blog cards template part
get_template_part( 'template-parts/blogs/blog-card' );

get_footer();
