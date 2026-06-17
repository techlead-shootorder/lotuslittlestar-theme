<?php
/**
 * Template part for displaying the FAQ section on the home page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-20 bg-brand-cream border-b border-brand-cream relative">
	<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="text-center mb-16">
			<h2 class="text-3xl sm:text-3xl font-semibold text-brand-green tracking-tight font-outfit mb-4">
				Common Inquiries
			</h2>
		</div>

		<!-- Accordion Stack -->
		<div class="space-y-4">
			
			<!-- FAQ Item 1 -->
			<div class="faq-item bg-white rounded-2xl border border-brand-cream overflow-hidden transition-all duration-300">
				<!-- Header Button -->
				<button type="button" class="faq-toggle w-full flex items-center justify-between px-8 py-6 text-left focus:outline-none select-none">
					<span class="font-semibold text-brand-green text-base sm:text-lg">What makes your NICU special?</span>
					<!-- Chevron Icon -->
					<svg class="faq-chevron h-5 w-5 text-brand-green transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
					</svg>
				</button>
				<!-- Answer Panel -->
				<div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
					<div class="px-8 pb-6 text-brand-green text-xs sm:text-sm leading-relaxed border-t border-brand-cream/60 pt-4">
						Our Level III Neonatal Intensive Care Unit (NICU) is staffed 24/7 by board-certified neonatologists and pediatric critical care nurses. We feature advanced incubators, dedicated ventilation support, and low-sensory environments designed specifically to protect premature infants and critically ill newborns.
					</div>
				</div>
			</div>

			<!-- FAQ Item 2 -->
			<div class="faq-item bg-white rounded-2xl border border-brand-cream overflow-hidden transition-all duration-300">
				<!-- Header Button -->
				<button type="button" class="faq-toggle w-full flex items-center justify-between px-8 py-6 text-left focus:outline-none select-none">
					<span class="font-semibold text-brand-green text-base sm:text-lg">How do I book a consultation?</span>
					<svg class="faq-chevron h-5 w-5 text-brand-green transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
					</svg>
				</button>
				<!-- Answer Panel -->
				<div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
					<div class="px-8 pb-6 text-brand-green text-xs sm:text-sm leading-relaxed border-t border-brand-cream/60 pt-4">
						Booking a consultation is simple! You can click on the "Book Appointment" button in the header, select your desired doctor or specialty from the directory page, and fill out our contact form. Alternatively, you can call any of our facilities directly to speak with our reception staff.
					</div>
				</div>
			</div>

			<!-- FAQ Item 3 -->
			<div class="faq-item bg-white rounded-2xl border border-brand-cream overflow-hidden transition-all duration-300">
				<!-- Header Button -->
				<button type="button" class="faq-toggle w-full flex items-center justify-between px-8 py-6 text-left focus:outline-none select-none">
					<span class="font-semibold text-brand-dark text-base sm:text-lg">Do you handle high-risk pregnancies?</span>
					<svg class="faq-chevron h-5 w-5 text-brand-dark transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
					</svg>
				</button>
				<!-- Answer Panel -->
				<div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
					<div class="px-8 pb-6 text-brand-muted text-xs sm:text-sm leading-relaxed border-t border-brand-cream/60 pt-4">
						Yes, we specialize in high-risk pregnancy supervision. Our team of fetal medicine consultants, maternal obstetricians, and neonatologists work together to provide continuous diagnostic scanning, painless labor support, and state-of-the-art labor suites to ensure maximum clinical safety for both mother and child.
					</div>
				</div>
			</div>

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
