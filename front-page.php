<?php
/**
 * The template for displaying the front page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Home page section template parts
get_template_part( 'template-parts/home/hero-section' );
get_template_part( 'template-parts/home/stats-section' );
get_template_part( 'template-parts/home/why-us-section' );
// get_template_part( 'template-parts/home/legacy-section' );
get_template_part( 'template-parts/home/special-care-section' );
get_template_part( 'template-parts/home/experts-section' );
get_template_part( 'template-parts/home/video-section' );
// get_template_part( 'template-parts/home/accreditations' );
get_template_part( 'template-parts/home/faq' );
get_template_part( 'template-parts/home/presence' );
get_template_part( 'template-parts/home/accreditations' );

get_footer();
