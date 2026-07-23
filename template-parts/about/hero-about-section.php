<?php
/**
 * Template part for displaying the redesigned about page hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch SCF Fields
$about_hero_badge       = function_exists( 'get_field' ) ? get_field( 'about_hero_badge' ) : '';
$about_hero_heading     = function_exists( 'get_field' ) ? get_field( 'about_hero_heading' ) : '';
$about_hero_description = function_exists( 'get_field' ) ? get_field( 'about_hero_description' ) : '';
$about_primary_button   = function_exists( 'get_field' ) ? get_field( 'about_primary_button' ) : null;
$about_secondary_button = function_exists( 'get_field' ) ? get_field( 'about_secondary_button' ) : null;
$about_bg_image         = function_exists( 'get_field' ) ? get_field( 'about_background_image' ) : null;

// Fallback values
if ( empty( $about_hero_badge ) ) {
	$about_hero_badge = __( 'Trusted Clinical Excellence', 'lotus' );
}
if ( empty( $about_hero_heading ) ) {
	$about_hero_heading = '<h1>' . __( 'Most Trusted Hospital for Women & Children', 'lotus' ) . '</h1>';
}
if ( empty( $about_hero_description ) ) {
	$about_hero_description = '<p>' . __( 'From motherhood to childhood, we are dedicated to delivering exceptional healthcare through expert medical care, cutting-edge technology, and a compassionate approach that puts every family first.', 'lotus' ) . '</p>';
}

// Background Image
$bg_image_url = 'http://lotuslittlestars.in/wp-content/uploads/2026/06/hero-about-new-scaled.webp';
if ( ! empty( $about_bg_image ) ) {
	if ( is_array( $about_bg_image ) && ! empty( $about_bg_image['url'] ) ) {
		$bg_image_url = $about_bg_image['url'];
	} elseif ( is_string( $about_bg_image ) ) {
		$bg_image_url = $about_bg_image;
	}
}

// Button Configuration
$has_primary   = is_array( $about_primary_button ) && ! empty( $about_primary_button['url'] );
$has_secondary = is_array( $about_secondary_button ) && ! empty( $about_secondary_button['url'] );

$primary_url    = $has_primary ? $about_primary_button['url'] : home_url( '/speciality/' );
if ( false !== strpos( $primary_url, 'contact-us' ) ) {
	$primary_url = '#booking-form';
}
$primary_title  = $has_primary && ! empty( $about_primary_button['title'] ) ? $about_primary_button['title'] : __( 'Our Specializations', 'lotus' );
$primary_target = $has_primary && ! empty( $about_primary_button['target'] ) ? $about_primary_button['target'] : '_self';
$primary_rel    = '_blank' === $primary_target ? ' rel="noopener"' : '';

$secondary_url    = $has_secondary ? $about_secondary_button['url'] : home_url( '/doctors/' );
$secondary_title  = $has_secondary && ! empty( $about_secondary_button['title'] ) ? $about_secondary_button['title'] : __( 'Meet Our Doctors', 'lotus' );
$secondary_target = $has_secondary && ! empty( $about_secondary_button['target'] ) ? $about_secondary_button['target'] : '_self';
$secondary_rel    = '_blank' === $secondary_target ? ' rel="noopener"' : '';
?>

<section class="relative h-screen sm:h-auto py-0 sm:py-32 flex items-center border-b border-brand-cream overflow-hidden">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat -z-20" style="background-image: url('<?php echo esc_url( $bg_image_url ); ?>');"></div>
	
	<!-- Gradient Overlay (Solid background color on the left fading to transparent on the right) -->
	<div class="absolute inset-0 bg-brand-bg/65 sm:bg-transparent sm:bg-gradient-to-r sm:from-brand-bg/65 sm:via-brand-bg/60 sm:to-transparent -z-10"></div>
	
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10 text-left">
		<!-- Pill Badge -->
		<?php if ( ! empty( $about_hero_badge ) ) : ?>
			<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold border border-brand-red/40 bg-brand-red/5 text-brand-red tracking-wide mb-6">
				<?php echo esc_html( $about_hero_badge ); ?>
			</span>
		<?php endif; ?>
		
		<!-- Main Heading -->
		<?php if ( ! empty( $about_hero_heading ) ) : ?>
			<div class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-brand-green leading-tight max-w-2xl mb-6 font-outfit">
				<?php echo wp_kses_post( $about_hero_heading ); ?>
			</div>
		<?php endif; ?>
		
		<!-- Subtext Description -->
		<?php if ( ! empty( $about_hero_description ) ) : ?>
			<div class="text-brand-dark/85 text-sm sm:text-base leading-relaxed max-w-xl mb-8">
				<?php echo wp_kses_post( $about_hero_description ); ?>
			</div>
		<?php endif; ?>
		
		<!-- Buttons Group -->
		<div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
			<a href="<?php echo esc_url( $primary_url ); ?>" target="<?php echo esc_attr( $primary_target ); ?>"<?php echo $primary_rel; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-red-hover text-white text-sm font-bold rounded-[4px] shadow-sm hover:shadow transition-all duration-200">
				<?php echo esc_html( $primary_title ); ?>
			</a>
			<a href="<?php echo esc_url( $secondary_url ); ?>" target="<?php echo esc_attr( $secondary_target ); ?>"<?php echo $secondary_rel; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="inline-flex items-center justify-center px-6 h-12 bg-white/95 hover:bg-brand-cream text-brand-red border border-brand-red text-sm font-bold rounded-[4px] shadow-sm hover:shadow transition-all duration-200">
				<?php echo esc_html( $secondary_title ); ?>
			</a>
		</div>
	</div>
</section>
