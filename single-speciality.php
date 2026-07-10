<?php
/**
 * The template for displaying all single speciality posts
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Load the hero section template part
get_template_part( 'template-parts/single-speciality/single-speciality-hero' );

// Load the overview section template part
get_template_part( 'template-parts/single-speciality/overview' );

// Load the why us section template part
get_template_part( 'template-parts/single-speciality/why-us' );

// Load the conditions & symptoms section template part
get_template_part( 'template-parts/single-speciality/conditions-symptoms' );

// Load the diagnosis & evaluation section template part
get_template_part( 'template-parts/single-speciality/diagnosis' );

// Load the services section template part
get_template_part( 'template-parts/single-speciality/services-section' );

// Load the FAQ section template part
get_template_part( 'template-parts/single-speciality/Faq-section' );

// Load the CTA section template part
get_template_part( 'template-parts/single-speciality/Speciality-cta' );

// Load other page layout sections here in the future

get_footer();
