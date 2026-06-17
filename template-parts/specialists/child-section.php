<?php
/**
 * Template part for displaying the Child Development Center section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-20 bg-[#F5F3F0] border-b border-brand-cream/40 relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
			
			<!-- Content Column (Left) -->
			<div class="lg:col-span-6 text-left">
				<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2 block">KONDAPUR CAMPUS</span>
				<h2 class="font-outfit text-3xl sm:text-4xl font-semibold text-brand-dark mt-2 mb-6">
					Dedicated Excellence: Child Development Center
				</h2>
				<p class="text-brand-muted text-base sm:text-lg leading-relaxed mb-8 font-medium">
					Our specialized Kondapur facility focuses exclusively on pediatric milestones, behavioral health, and developmental support, providing a nurturing ecosystem for every child to thrive.
				</p>
				
				<!-- Checkmark Points List -->
				<ul class="space-y-4">
					<li class="flex items-center">
						<div class="w-6 h-6 bg-brand-red/10 rounded-full flex items-center justify-center shrink-0 mr-4 select-none">
							<!-- Custom checkmark SVG -->
							<svg class="h-3.5 w-3.5 text-[#A61A24]" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
								<path d="M20 6L9 17l-5-5"/>
							</svg>
						</div>
						<span class="text-brand-dark font-semibold text-sm sm:text-base">Speech and Language Therapy</span>
					</li>
					
					<li class="flex items-center">
						<div class="w-6 h-6 bg-brand-red/10 rounded-full flex items-center justify-center shrink-0 mr-4 select-none">
							<svg class="h-3.5 w-3.5 text-[#A61A24]" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
								<path d="M20 6L9 17l-5-5"/>
							</svg>
						</div>
						<span class="text-brand-dark font-semibold text-sm sm:text-base">Occupational and Physical Therapy</span>
					</li>
					
					<li class="flex items-center">
						<div class="w-6 h-6 bg-brand-red/10 rounded-full flex items-center justify-center shrink-0 mr-4 select-none">
							<svg class="h-3.5 w-3.5 text-[#A61A24]" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
								<path d="M20 6L9 17l-5-5"/>
							</svg>
						</div>
						<span class="text-brand-dark font-semibold text-sm sm:text-base">Behavioral and Sensory Integration</span>
					</li>
				</ul>
			</div>

			<!-- Image/Graphic Column with Overlay (Right) -->
			<div class="lg:col-span-6 relative">
				<div class="relative w-full rounded-[2.5rem] overflow-hidden border border-brand-cream/60 shadow-lg">
					<!-- Developmental Playroom Montessori Image -->
					<img class="w-full h-auto min-h-[350px] lg:min-h-[420px] object-cover" 
						src="https://images.unsplash.com/photo-1597176116047-97824341f107?q=80&w=1200&auto=format&fit=crop" 
						alt="Child Development Center Playroom">
					
					<!-- Overlay Card in Bottom Left -->
					<div class="absolute bottom-6 left-6 bg-[#374E63]/90 backdrop-blur-md p-6 rounded-2xl text-left max-w-sm shadow-md border border-white/10 select-none">
						<h4 class="text-white font-outfit text-base font-bold mb-1">Milestone Support</h4>
						<p class="text-white/80 text-xs sm:text-sm">Expert care for developmental pathways</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


