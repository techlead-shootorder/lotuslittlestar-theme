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

// Contact page template parts
get_template_part( 'template-parts/contact/contact-hero-section' );
get_template_part( 'template-parts/contact/our-center' );
get_template_part( 'template-parts/contact/contact-form' );

get_footer();
