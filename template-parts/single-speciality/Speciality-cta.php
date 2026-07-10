<?php
/**
 * Template part for displaying the speciality CTA section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Fetch SCF/ACF Fields exactly as defined
$single_speciality_cta_heading     = function_exists( 'get_field' ) ? get_field( 'single_speciality_cta_heading', $post_id ) : '';
$single_speciality_cta_description = function_exists( 'get_field' ) ? get_field( 'single_speciality_cta_description', $post_id ) : '';
$cta_button_link                  = function_exists( 'get_field' ) ? get_field( 'cta_button_link', $post_id ) : null;

$has_button = is_array( $cta_button_link ) && ! empty( $cta_button_link['url'] );

// Hide section if everything is empty
if ( empty( $single_speciality_cta_heading ) && empty( $single_speciality_cta_description ) && ! $has_button ) {
	return;
}
?>

<section class="py-12 bg-brand-bg border-b border-brand-cream/60">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Red CTA Banner Card -->
		<div class="relative bg-brand-red rounded-[2rem] px-6 py-12 md:py-16 lg:py-20 text-center overflow-hidden shadow-xl">
			
			<!-- Decorative concentric rings bottom-left -->
			<div class="absolute -bottom-10 -left-10 w-36 h-36 rounded-full border-[8px] border-white/10 pointer-events-none select-none"></div>
			<div class="absolute -bottom-16 -left-16 w-48 h-48 rounded-full border-[8px] border-white/5 pointer-events-none select-none"></div>
			
			<!-- Decorative concentric rings top-right -->
			<div class="absolute -top-10 -right-10 w-36 h-36 rounded-full border-[8px] border-white/10 pointer-events-none select-none"></div>
			<div class="absolute -top-16 -right-16 w-48 h-48 rounded-full border-[8px] border-white/5 pointer-events-none select-none"></div>
			
			<div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center">
				
				<!-- Heading -->
				<?php if ( ! empty( $single_speciality_cta_heading ) ) : ?>
					<h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white font-outfit mb-4 leading-tight">
						<?php echo esc_html( $single_speciality_cta_heading ); ?>
					</h2>
				<?php endif; ?>
				
				<!-- Description -->
				<?php if ( ! empty( $single_speciality_cta_description ) ) : ?>
					<p class="text-white/90 text-sm sm:text-base leading-relaxed mb-8 max-w-2xl font-normal">
						<?php echo esc_html( $single_speciality_cta_description ); ?>
					</p>
				<?php endif; ?>
				
				<!-- Button -->
				<?php 
				if ( $has_button ) : 
					$btn_url    = ! empty( $cta_button_link['url'] ) ? $cta_button_link['url'] : '#';
					$btn_title  = ! empty( $cta_button_link['title'] ) ? $cta_button_link['title'] : __( 'Book an Appointment', 'lotus' );
					$btn_target = ! empty( $cta_button_link['target'] ) ? $cta_button_link['target'] : '_self';
					$btn_rel    = '_blank' === $btn_target ? ' rel="noopener"' : '';
					?>
					<a href="<?php echo esc_url( $btn_url ); ?>" 
					   target="<?php echo esc_attr( $btn_target ); ?>" 
					   <?php echo $btn_rel; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					   class="inline-flex items-center justify-center px-8 h-12 bg-brand-green hover:bg-brand-green/90 text-white font-bold rounded-lg shadow-md hover:shadow-lg transition-all duration-200 text-sm sm:text-base">
						<?php echo esc_html( $btn_title ); ?>
					</a>
				<?php endif; ?>
				
			</div>
			
		</div>
		
	</div>
</section>
