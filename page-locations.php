<?php
/**
 * Template Name: Locations Page
 *
 * The template for displaying the Locations page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Locations grid template part
get_template_part( 'template-parts/locations/locations-grid' );

get_footer();
