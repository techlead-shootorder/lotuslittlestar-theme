<?php
/**
 * Template part for displaying the Our Presence section on the home page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-20 bg-[#F1F4F0] border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header (Left Aligned) -->
		<div class="mb-12 text-left">
			<h2 class="text-3xl sm:text-3xl font-semibold text-brand-green font-outfit tracking-tight">
				Our Presence
			</h2>
		</div>

		<!-- Locations Grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
			
			<!-- Card 1: Banjara Hills -->
			<div class="bg-white p-8 rounded-[5px] shadow-sm hover:shadow-md border border-brand-cream/60 flex flex-col justify-between text-left group transition-all duration-300">
				<div>
					<h3 class="text-xl font-bold text-brand-green mb-2 font-outfit">Banjara Hills</h3>
					<p class="text-brand-green text-xs leading-relaxed mb-6">
						Road No. 12, Banjara Hills, Hyderabad - 500034
					</p>
					<!-- Location Image -->
					<div class="aspect-[1.6] w-full bg-brand-cream rounded-2xl overflow-hidden border border-brand-cream/80 mb-6 relative">
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/banjara-hills.png" alt="Banjara Hills, Hyderabad" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
					</div>
				</div>
				<!-- External link -->
				<a href="https://maps.app.goo.gl/pYsM12x43wwQvR1y7" target="_blank" class="inline-flex items-center gap-1.5 text-brand-green hover:text-brand-red font-bold text-sm transition-colors">
					Directions
					<svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
					</svg>
				</a>
			</div>

			
			<!-- Card 3: Rajahmundry -->
			<div class="bg-white p-8 rounded-[5px] shadow-sm hover:shadow-md border border-brand-cream/60 flex flex-col justify-between text-left group transition-all duration-300">
				<div>
					<h3 class="text-xl font-bold text-brand-green mb-2 font-outfit">Rajahmundry</h3>
					<p class="text-brand-green text-xs leading-relaxed mb-6">
						Danavaipeta, Rajahmundry, Andhra Pradesh - 533103
					</p>
					<!-- Location Image -->
					<div class="aspect-[1.6] w-full bg-brand-cream rounded-2xl overflow-hidden border border-brand-cream/80 mb-6 relative">
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/rajamundry-loc.png" alt="Rajahmundry, Andhra Pradesh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
					</div>
				</div>
				<a href="https://maps.app.goo.gl/hwhEdxf9FrWPKWyA7" target="_blank" class="inline-flex items-center gap-1.5 text-brand-green hover:text-brand-red font-bold text-sm transition-colors">
					Directions
					<svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
					</svg>
				</a>
			</div>

		</div>
	</div>
</section>
