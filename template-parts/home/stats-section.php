<?php
/**
 * Template part for displaying the home page stats section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-12 bg-[#F1F4F0] border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12 divide-y-0 divide-x-0 sm:divide-x-0 lg:divide-x lg:divide-brand-cream/80">
			<!-- Stat 1 -->
			<div class="flex flex-col items-center text-center bg-white border rounded-lg p-4 lg:p-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number" data-target="220" data-suffix="+">0+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">hospital beds</span>
			</div>
			
			<!-- Stat 2 -->
			<div class="flex flex-col items-center text-center bg-white rounded-lg border p-4 lg:p-4 lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number" data-target="150" data-suffix="k+">0k+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">Happy Patients</span>
			</div>
			
			<!-- Stat 3 -->
			<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number" data-target="35" data-suffix="k+">k+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">In-patients Treated</span>
			</div>
			
			<!-- Stat 4 -->
			<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number" data-target="5" data-suffix="+">0k+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">Successful Surgeries</span>
			</div>
			<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number" data-target="6000" data-suffix="+">0+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">Pediatric Nephrology Treatments</span>
			</div>
			<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number" data-target="35" data-suffix="+">0+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">Years of Combined Clinical Experience</span>
			</div>
		</div>
	</div>
</section>

<script>
(function() {
	function initStatsCounter() {
		const stats = document.querySelectorAll('.stat-number');
		
		const startCounting = (el) => {
			const target = parseInt(el.getAttribute('data-target'), 10);
			const suffix = el.getAttribute('data-suffix') || '';
			const duration = 2000; // 2 seconds animation duration
			const frameRate = 60;
			const totalFrames = Math.round((duration / 1000) * frameRate);
			let frame = 0;
			
			const counter = setInterval(() => {
				frame++;
				// Easing function: easeOutQuad
				const progress = frame / totalFrames;
				const easedProgress = progress * (2 - progress);
				const currentValue = Math.round(easedProgress * target);
				
				if (frame >= totalFrames) {
					el.textContent = target.toLocaleString() + suffix;
					clearInterval(counter);
				} else {
					el.textContent = currentValue.toLocaleString() + suffix;
				}
			}, 1000 / frameRate);
		};

		// Use IntersectionObserver to trigger counter when it enters viewport
		if ('IntersectionObserver' in window) {
			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						startCounting(entry.target);
						observer.unobserve(entry.target);
					}
				});
			}, { threshold: 0.1 });

			stats.forEach(stat => observer.observe(stat));
		} else {
			// Fallback: Animate directly if IntersectionObserver is not supported
			stats.forEach(stat => startCounting(stat));
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initStatsCounter);
	} else {
		initStatsCounter();
	}
})();
</script>
