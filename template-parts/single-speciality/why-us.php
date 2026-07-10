<?php
/**
 * Template part for displaying the single speciality "Why Choose Us" section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Fetch SCF/ACF Fields
$why_section_heading = function_exists( 'get_field' ) ? get_field( 'why_section_heading', $post_id ) : '';
$why_card_items      = function_exists( 'get_field' ) ? get_field( 'why_card_items', $post_id ) : null;



// Render only if repeater has items
if ( ! empty( $why_card_items ) && is_array( $why_card_items ) ) :
	?>
	<section class="py-16 md:py-24 bg-brand-bg border-b border-brand-cream/60">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			
			<!-- Section Heading -->
			<?php if ( ! empty( $why_section_heading ) ) : ?>
				<div class="mb-12 text-left">
					<h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-brand-green font-outfit relative inline-block pb-3 after:absolute after:bottom-0 after:left-0 after:w-16 after:h-[3px] after:bg-brand-red">
						<?php echo esc_html( $why_section_heading ); ?>
					</h2>
				</div>
			<?php endif; ?>
			
			<!-- Grid of Cards -->
			<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-6">
				<?php 
				foreach ( $why_card_items as $item ) : 
					$card_title = ! empty( $item['why_card_title'] ) ? $item['why_card_title'] : '';
					$card_desc  = ! empty( $item['why_card_description'] ) ? $item['why_card_description'] : '';
					
					// Resolve Icon
					$icon_url = '';
					$icon_alt = '';
					
					if ( ! empty( $item['why_card_icon'] ) ) {
						if ( is_array( $item['why_card_icon'] ) ) {
							$icon_url = ! empty( $item['why_card_icon']['url'] ) ? $item['why_card_icon']['url'] : '';
							$icon_alt = ! empty( $item['why_card_icon']['alt'] ) ? $item['why_card_icon']['alt'] : $card_title;
						} elseif ( is_numeric( $item['why_card_icon'] ) ) {
							$icon_url = wp_get_attachment_url( $item['why_card_icon'] );
							$icon_alt = get_post_meta( $item['why_card_icon'], '_wp_attachment_image_alt', true );
						} elseif ( is_string( $item['why_card_icon'] ) ) {
							$icon_url = $item['why_card_icon'];
							$icon_alt = $card_title;
						}
					}
					
					if ( empty( $icon_alt ) ) {
						$icon_alt = $card_title;
					}
					?>
					<div class="bg-white border border-[#EBE8E2] rounded-2xl p-6 md:p-8 shadow-[0_4px_20px_rgba(0,0,0,0.02)] flex flex-col h-full hover:shadow-[0_8px_30px_rgba(0,0,0,0.05)] transition-all duration-300">
						
						<!-- Icon Circle -->
						<?php if ( ! empty( $icon_url ) ) : ?>
							<div class="w-12 h-12 rounded-full bg-[#E5E9E1]/85 flex items-center justify-center mb-6 shrink-0 select-none">
								<img src="<?php echo esc_url( $icon_url ); ?>" 
									 alt="<?php echo esc_attr( $icon_alt ); ?>" 
									 class="w-8 h-8 object-contain"
									 loading="lazy">
							</div>
						<?php endif; ?>
						
						<!-- Card Content -->
						<div class="text-left flex-grow">
							<?php if ( ! empty( $card_title ) ) : ?>
								<h3 class="text-lg font-bold text-brand-red font-outfit mb-3 leading-snug">
									<?php echo esc_html( $card_title ); ?>
								</h3>
							<?php endif; ?>
							
							<?php if ( ! empty( $card_desc ) ) : ?>
								<p class="text-brand-muted text-sm leading-relaxed">
									<?php echo esc_html( $card_desc ); ?>
								</p>
							<?php endif; ?>
						</div>
						
					</div>
				<?php endforeach; ?>
			</div>
			
		</div>
	</section>
	<?php
endif;
