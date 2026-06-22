<?php
/**
 * Template part for displaying the Mission and Vision section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-16 bg-[#FAF9F6] border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Mission & Vision Cards Grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
			
			<!-- Card 1: Our Mission -->
			<div class="bg-white p-10 sm:p-12 rounded-[2rem] shadow-sm hover:shadow-md transition-all duration-300 border border-brand-cream/40 flex flex-col justify-between items-start">
				<div class="w-full">
					<!-- Header Row -->
					<div class="flex items-center mb-8">
						<!-- Icon container -->
						<div class="w-14 h-14 bg-brand-red/10 rounded-2xl flex items-center justify-center mr-4 shrink-0 select-none">
							<!-- Rocket Icon -->
							<svg class="h-7 w-7 text-[#A61A24]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
								<path d="M4.5 16.5C3 18 2 20.5 2 22C3.5 22 6 21 7.5 19.5" />
								<path d="M12 2C6 2 2 6 2 12c0 2.5.5 4.5 1.5 6l4.5-4.5M22 2c-3 0-8 3-10 6l4.5 4.5c3-2 6-7 6-10.5z" />
								<path d="M9 15l-3 3" />
								<path d="M15 9l-3 3" />
								<circle cx="15.5" cy="8.5" r="1" fill="currentColor" />
							</svg>
						</div>
						<h3 class="font-outfit text-2xl font-bold text-brand-green">Our Mission</h3>
					</div>
					<!-- Quote Text -->
					<p class="text-brand-green text-base sm:text-lg leading-relaxed mb-8 font-medium">
						"To deliver exceptional women and child healthcare through clinical excellence, advanced technology, and compassionate care, ensuring the health and well-being of every mother, newborn, and child."
					</p>
				</div>
				<!-- Underline Bar -->
				<div class="w-16 h-1 bg-brand-red rounded-full"></div>
			</div>

			<!-- Card 2: Our Vision -->
			<div class="bg-white p-10 sm:p-12 rounded-[2rem] shadow-sm hover:shadow-md transition-all duration-300 border border-brand-cream/40 flex flex-col justify-between items-start">
				<div class="w-full">
					<!-- Header Row -->
					<div class="flex items-center mb-8">
						<!-- Icon container -->
						<div class="w-14 h-14 bg-brand-red/10 rounded-2xl flex items-center justify-center mr-4 shrink-0 select-none">
							<!-- Eye Icon -->
							<svg class="h-7 w-7 text-[#A61A24]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
								<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
								<circle cx="12" cy="12" r="3" />
								<circle cx="12" cy="12" r="1" fill="currentColor" />
							</svg>
						</div>
						<h3 class="font-outfit text-2xl font-bold text-brand-green">Our Vision</h3>
					</div>
					<!-- Quote Text -->
					<p class="text-brand-green text-base sm:text-lg leading-relaxed mb-8 font-medium">
						"To be the most trusted destination for women and child healthcare, setting new benchmarks in maternity, neonatal, and pediatric care through innovation, expertise, and patient-centered excellence."
					</p>
				</div>
				<!-- Underline Bar -->
				<div class="w-16 h-1 bg-brand-red rounded-full"></div>
			</div>

		</div>
	</div>
</section>
