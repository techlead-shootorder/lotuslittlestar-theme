<?php
/**
 * Template part for displaying the specialists page hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch SCF Fields
$specialities_hero_badge       = function_exists( 'get_field' ) ? get_field( 'specialities_hero_badge' ) : '';
$specialities_hero_heading     = function_exists( 'get_field' ) ? get_field( 'specialities_hero_heading' ) : '';
$specialities_hero_description = function_exists( 'get_field' ) ? get_field( 'specialities_hero_description' ) : '';
$specialities_hero_background  = function_exists( 'get_field' ) ? get_field( 'specialities_hero_background' ) : null;

// Fallbacks
if ( empty( $specialities_hero_badge ) ) {
	$specialities_hero_badge = __( 'Expert Healthcare', 'lotus' );
}
if ( empty( $specialities_hero_heading ) ) {
	$specialities_hero_heading = '<h1>' . __( 'Specialized Care for Every Little Milestone', 'lotus' ) . '</h1>';
}
if ( empty( $specialities_hero_description ) ) {
	$specialities_hero_description = '<p>' . __( 'Comprehensive medical excellence for women and children across Telangana and Andhra Pradesh. We combine world-class expertise with nurturing compassion.', 'lotus' ) . '</p>';
}

// Background Image
$bg_image_url = 'http://lotuslittlestars.in/wp-content/uploads/2026/06/hero-speciality-new-scaled.webp';
if ( ! empty( $specialities_hero_background ) ) {
	if ( is_array( $specialities_hero_background ) && ! empty( $specialities_hero_background['url'] ) ) {
		$bg_image_url = $specialities_hero_background['url'];
	} elseif ( is_string( $specialities_hero_background ) ) {
		$bg_image_url = $specialities_hero_background;
	}
}
?>

<section class="relative h-screen sm:h-auto py-0 sm:py-24 flex items-center border-b border-brand-cream/60 overflow-hidden">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat bg-center -z-20" style="background-image: url('<?php echo esc_url( $bg_image_url ); ?>');"></div>
	
	<!-- Gradient Overlay (Solid background color on the left fading to transparent on the right) -->
	<div class="absolute inset-0 bg-[#F5F3EF]/65 sm:bg-transparent sm:bg-gradient-to-r sm:from-[#F5F3EF]/65 sm:via-[#F5F3EF]/60 sm:to-transparent -z-10"></div>
	
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10 text-left">
		<!-- Pill Badge -->
		<?php if ( ! empty( $specialities_hero_badge ) ) : ?>
			<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold border border-brand-red/60 bg-white/40 text-brand-red tracking-wide mb-6 select-none">
				<?php echo esc_html( $specialities_hero_badge ); ?>
			</span>
		<?php endif; ?>
		
		<!-- Main Heading -->
		<?php if ( ! empty( $specialities_hero_heading ) ) : ?>
			<div class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-brand-green leading-tight max-w-2xl mb-6 font-outfit">
				<?php echo wp_kses_post( $specialities_hero_heading ); ?>
			</div>
		<?php endif; ?>
		
		<!-- Subtext Description -->
		<?php if ( ! empty( $specialities_hero_description ) ) : ?>
			<div class="text-brand-muted text-base sm:text-lg leading-relaxed max-w-2xl mb-8 font-medium">
				<?php echo wp_kses_post( $specialities_hero_description ); ?>
			</div>
		<?php endif; ?>
		
		<!-- Button -->
		<div class="flex">
			<a href="#specialists-grid" 
				class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-coral text-white text-sm sm:text-base font-bold rounded-[4px] shadow-md hover:shadow-lg transition-all duration-200">
				Explore Our Expertise
			</a>
		</div>
	</div>
</section>
