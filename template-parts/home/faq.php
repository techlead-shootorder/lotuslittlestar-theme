<?php
/**
 * Template part for displaying the FAQ section on the home page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch header and repeater fields
$faq_heading     = function_exists( 'get_field' ) ? get_field( 'faq_heading' ) : '';
$faq_description = function_exists( 'get_field' ) ? get_field( 'faq_description' ) : '';
$faq_items       = function_exists( 'get_field' ) ? get_field( 'faq_items' ) : null;

if ( empty( $faq_heading ) ) {
	$faq_heading = __( 'FAQ', 'lotus' );
}

// If no FAQ rows exist, display nothing
if ( empty( $faq_items ) || ! is_array( $faq_items ) ) {
	return;
}
?>

<section class="py-20 bg-brand-cream border-b border-brand-cream relative">
	<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="text-center mb-16">
			<h2 class="text-3xl sm:text-3xl font-semibold text-brand-green tracking-tight font-outfit mb-4">
				<?php echo esc_html( $faq_heading ); ?>
			</h2>
			<?php if ( ! empty( $faq_description ) ) : ?>
				<p class="text-brand-muted text-base leading-relaxed max-w-2xl mx-auto mt-2">
					<?php echo esc_html( $faq_description ); ?>
				</p>
			<?php endif; ?>
		</div>

		<!-- Accordion Stack -->
		<div class="space-y-4">
			<?php foreach ( $faq_items as $index => $item ) : 
				$question = isset( $item['faq_question'] ) ? $item['faq_question'] : '';
				$answer   = isset( $item['faq_answer'] ) ? $item['faq_answer'] : '';

				if ( empty( $question ) || empty( $answer ) ) {
					continue;
				}
			?>
				<!-- FAQ Item <?php echo intval( $index + 1 ); ?> -->
				<div class="faq-item bg-white rounded-2xl border border-brand-cream overflow-hidden transition-all duration-300">
					<!-- Header Button -->
					<button type="button" class="faq-toggle w-full flex items-center justify-between px-8 py-6 text-left focus:outline-none select-none">
						<span class="font-semibold text-brand-green text-base sm:text-lg"><?php echo esc_html( $question ); ?></span>
						<!-- Chevron Icon -->
						<svg class="faq-chevron h-5 w-5 text-brand-green transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
							<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
						</svg>
					</button>
					<!-- Answer Panel -->
					<div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
						<div class="px-8 pb-6 text-brand-green text-xs sm:text-sm leading-relaxed border-t border-brand-cream/60 pt-4">
							<?php echo wp_kses_post( $answer ); ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Accordion Toggle JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const toggles = document.querySelectorAll('.faq-toggle');
	
	toggles.forEach(toggle => {
		toggle.addEventListener('click', function() {
			const item = this.closest('.faq-item');
			const panel = item.querySelector('.faq-panel');
			const chevron = this.querySelector('.faq-chevron');
			
			// Check if already open
			const isOpen = !panel.classList.contains('max-h-0') && panel.style.maxHeight;

			// Close all other panels
			document.querySelectorAll('.faq-panel').forEach(otherPanel => {
				otherPanel.style.maxHeight = null;
				otherPanel.classList.add('max-h-0');
				otherPanel.closest('.faq-item').classList.remove('border-brand-coral/20');
				otherPanel.closest('.faq-item').querySelector('.faq-chevron').classList.remove('rotate-180');
			});

			if (!isOpen) {
				// Open clicked panel
				panel.classList.remove('max-h-0');
				panel.style.maxHeight = panel.scrollHeight + "px";
				item.classList.add('border-brand-coral/20');
				chevron.classList.add('rotate-180');
			}
		});
	});
});
</script>

