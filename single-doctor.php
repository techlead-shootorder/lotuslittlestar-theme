<?php
/**
 * The template for displaying all single doctor posts
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Single doctor layout sections
get_template_part( 'template-parts/single-doctor/doctor-banner' );
get_template_part( 'template-parts/single-doctor/doctor-details' );

get_footer();
