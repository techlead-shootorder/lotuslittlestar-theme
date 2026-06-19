<?php
/**
 * Template Name: Contact Page
 *
 * The template for displaying the Contact page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Locations grid template part (which now includes the contact form on the right of its hero section)
get_template_part( 'template-parts/locations/locations-grid' );

get_footer();
