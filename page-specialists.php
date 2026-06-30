<?php
/**
 * Template Name: Specialists Page
 *
 * The template for displaying the Specialists/Specialties page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Specialists page section template parts
get_template_part( 'template-parts/specialists/special-hero-section' );
get_template_part( 'template-parts/specialists/specialists-grid' );
get_template_part( 'template-parts/specialists/child-section' );

get_footer();
