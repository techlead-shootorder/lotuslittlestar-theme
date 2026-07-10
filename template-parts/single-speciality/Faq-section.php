<?php
/**
 * Template part for displaying the FAQ section inside single speciality
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Fetch SCF/ACF Fields exactly as defined
$faq_list = function_exists( 'get_field' ) ? get_field( 'faq_list', $post_id ) : null;

// Hide the section completely if the repeater is empty
if ( empty( $faq_list ) || ! is_array( $faq_list ) ) {
	return;
}
?>

<section class="py-16 md:py-24 bg-brand-bg border-b border-brand-cream/60">
	<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Section Header -->
		<div class="text-center mb-12 sm:mb-16">
			<h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-brand-green font-outfit">
				<?php esc_html_e( 'Frequently Asked Questions', 'lotus' ); ?>
			</h2>
		</div>
		
		<!-- Accordion List -->
		<div class="flex flex-col gap-4">
			<?php 
			$index = 0;
			foreach ( $faq_list as $item ) : 
				$question = ! empty( $item['faq_question'] ) ? $item['faq_question'] : '';
				$answer   = ! empty( $item['faq_answer'] ) ? $item['faq_answer'] : '';
				
				if ( empty( $question ) && empty( $answer ) ) {
					continue;
				}
				
				$is_open_attr = ( 0 === $index ) ? ' open' : '';
				?>
				<details <?php echo $is_open_attr; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="group bg-white border border-[#EBE8E2] rounded-2xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.01)] transition-all duration-300">
					
					<!-- Accordion Header -->
					<summary class="flex justify-between items-center p-6 cursor-pointer font-bold font-outfit text-brand-green select-none list-none [&::-webkit-details-marker]:hidden">
						<span class="text-sm sm:text-base pr-4">
							<?php echo esc_html( $question ); ?>
						</span>
						<!-- Chevron Icon -->
						<span class="shrink-0 text-brand-green">
							<svg class="w-4 h-4 transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
							</svg>
						</span>
					</summary>
					
					<!-- Accordion Body -->
					<?php if ( ! empty( $answer ) ) : ?>
						<div class="px-6 pb-6 pt-4 border-t border-[#EBE8E2] text-brand-muted text-sm sm:text-base leading-relaxed font-normal text-left">
							<?php echo wp_kses_post( $answer ); ?>
						</div>
					<?php endif; ?>
					
				</details>
				<?php 
				$index++;
			endforeach; 
			?>
		</div>
		
	</div>
</section>
