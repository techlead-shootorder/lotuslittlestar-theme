<?php
/**
 * Doctor Archive Template
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Doctors grid template part
get_template_part( 'template-parts/doctors/doctors-grid' );
get_template_part( 'template-parts/home/presence' );
get_footer();