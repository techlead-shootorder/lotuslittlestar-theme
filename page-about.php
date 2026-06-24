<?php
/**
 * Template Name: About Page
 *
 * The template for displaying the About Us page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// About page section template parts

get_template_part( 'template-parts/about/hero-about-section' );
get_template_part( 'template-parts/about/legacy-about-section' );
get_template_part( 'template-parts/about/mission-vision' );
get_template_part( 'template-parts/about/stats-about.php' );
get_template_part( 'template-parts/about/founders-section' );


get_footer();
