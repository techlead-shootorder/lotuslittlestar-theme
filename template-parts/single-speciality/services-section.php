<?php
/**
 * Template part for displaying the single speciality Services section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Fetch SCF/ACF Fields exactly as defined
$service_title       = function_exists( 'get_field' ) ? get_field( 'service_title', $post_id ) : '';
$service_description = function_exists( 'get_field' ) ? get_field( 'service_description', $post_id ) : '';
$service_list        = function_exists( 'get_field' ) ? get_field( 'service_list', $post_id ) : null;

// Hide the section completely if the repeater is empty
if ( empty( $service_list ) || ! is_array( $service_list ) ) {
	return;
}
?>

<section class="py-16 md:py-24 bg-brand-bg border-b border-brand-cream/60">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Section Header -->
		<?php if ( ! empty( $service_title ) || ! empty( $service_description ) ) : ?>
			<div class="max-w-3xl mx-auto text-center mb-12 sm:mb-16">
				<?php if ( ! empty( $service_title ) ) : ?>
					<h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-brand-green font-outfit mb-4">
						<?php echo esc_html( $service_title ); ?>
					</h2>
				<?php endif; ?>
				
				<?php if ( ! empty( $service_description ) ) : ?>
					<p class="text-brand-muted text-base">
						<?php echo esc_html( $service_description ); ?>
					</p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
		<!-- Grid of Service Cards -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
			<?php 
			foreach ( $service_list as $item ) : 
				$card_title = ! empty( $item['service_card_title'] ) ? $item['service_card_title'] : '';
				$card_desc  = ! empty( $item['service_card_description'] ) ? $item['service_card_description'] : '';
				
				if ( empty( $card_title ) && empty( $card_desc ) ) {
					continue;
				}
				?>
				<div class="bg-[#F5F4F1] hover:bg-white hover:shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-transparent hover:border-[#EBE8E2] rounded-2xl p-8 transition-all duration-300 flex flex-col h-full group">
					
					<!-- Card Title -->
					<?php if ( ! empty( $card_title ) ) : ?>
						<h3 class="text-lg md:text-xl font-bold text-brand-red font-outfit mb-4 group-hover:text-brand-red-hover transition-colors">
							<?php echo esc_html( $card_title ); ?>
						</h3>
					<?php endif; ?>
					
					<!-- Card Description -->
					<?php if ( ! empty( $card_desc ) ) : ?>
						<p class="text-brand-muted text-sm sm:text-base leading-relaxed font-normal">
							<?php echo esc_html( $card_desc ); ?>
						</p>
					<?php endif; ?>
					
				</div>
			<?php endforeach; ?>
		</div>
		
	</div>
</section>
