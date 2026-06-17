<?php
/**
 * Template part for displaying the about page vision section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-20 bg-[#E4E2DF] border-b border-brand-cream/40 relative overflow-hidden mb-5">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="text-center max-w-3xl mx-auto mb-20">
			<h2 class="font-outfit text-3xl sm:text-4xl font-semibold text-brand-dark">
				Values That Drive Us
			</h2>
			<p class="text-brand-muted text-base sm:text-lg mt-4 max-w-2xl mx-auto font-medium">
				At Lotus Little Stars, our core values are the heartbeat of our clinical and administrative decisions.
			</p>
		</div>

		<!-- Values Grid (4 Columns) -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 text-center">
			
			<!-- Value 1: Compassion -->
			<div class="flex flex-col items-center">
				<!-- Centered Icon -->
				<div class="w-12 h-12 flex items-center justify-center mb-4 text-[#2D5A44] select-none">
					<!-- Heart Icon -->
					<svg class="h-8 w-8 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Compassion</h3>
				<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-xs font-medium">
					Treating every patient like our own family.
				</p>
			</div>

			<!-- Value 2: Expertise -->
			<div class="flex flex-col items-center">
				<!-- Centered Icon -->
				<div class="w-12 h-12 flex items-center justify-center mb-4 text-[#2D5A44] select-none">
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/epertise-icon.png" alt="Expertise Icon" class="h-8 w-8 object-contain">
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Expertise</h3>
				<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-xs font-medium">
					Continuous learning and medical excellence.
				</p>
			</div>

			<!-- Value 3: Innovation -->
			<div class="flex flex-col items-center">
				<!-- Centered Icon -->
				<div class="w-12 h-12 flex items-center justify-center mb-4 text-[#2D5A44] select-none">
					<!-- Lightbulb Icon -->
					<svg class="h-8 w-8 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M9 18h6M10 22h4M15.09 14c.78-.52 1.41-1.2 1.83-2.01A5 5 0 1 0 7.08 11.99c.42.81 1.05 1.49 1.83 2.01L9 18h6l.09-4z"/>
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Innovation</h3>
				<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-xs font-medium">
					Embracing the latest medical technologies.
				</p>
			</div>

			<!-- Value 4: Integrity -->
			<div class="flex flex-col items-center">
				<!-- Centered Icon -->
				<div class="w-12 h-12 flex items-center justify-center mb-4 text-[#2D5A44] select-none">
					<!-- Handshake Icon -->
					<svg class="h-8 w-8 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M18 11l-3.5-3.5a2 2 0 0 0-2.83 0L10 9.17m-6 4l3.5 3.5a2 2 0 0 0 2.83 0l6.67-6.67a2 2 0 0 0 0-2.83l-.67-.67a2 2 0 0 0-2.83 0L7.5 12.5" />
						<path d="M16 16l2 2a2 2 0 0 0 2.83-2.83l-2-2" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Integrity</h3>
				<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-xs font-medium">
					Ethical practices and transparent care.
				</p>
			</div>

		</div>
	</div>
</section>
