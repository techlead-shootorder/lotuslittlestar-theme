<?php
/**
 * Template part for displaying the about page mission section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-20 bg-white border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
			
			<!-- Graphic Column (Left) -->
			<div class="lg:col-span-5 flex justify-center order-last lg:order-first">
				<div class="relative w-full max-w-md">
					<div class="absolute -inset-4 bg-brand-coral/10 rounded-[2rem] transform -rotate-2 -z-10"></div>
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/about-legacy-left.jpg" alt="Lotus Little Stars Legacy" class="relative z-10 w-full h-auto rounded-3xl shadow-lg object-cover">
					
					<!-- Accreditation Badge overlaying the bottom-right -->
					<div class="absolute bottom-4 right-4 md:-bottom-4 md:-right-4 bg-[#5E6D62] border-4 border-white rounded-2xl py-3 px-5 shadow-xl flex items-center gap-3 z-20">
						<div class="flex-shrink-0">
							<svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
							</svg>
						</div>
						<div class="text-left">
							<span class="block text-[10px] font-semibold text-white/80 uppercase tracking-wider leading-none mb-1">Accredited</span>
							<span class="block text-base sm:text-lg font-bold font-outfit text-white leading-tight">35+ Years</span>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Content Column (Right) -->
			<div class="lg:col-span-7 text-left">
				
				<h2 class="text-3xl sm:text-4xl font-medium text-brand-dark mt-2 mb-6">
					About Lotus Little Stars
				</h2>
				<p class="text-brand-muted text-base leading-relaxed mb-6">
					At Lotus Little Stars, we are dedicated to providing exceptional healthcare for women, newborns, and children through every stage of life. From advanced maternity and gynecological care to specialized neonatology and pediatric services, we combine clinical excellence, innovation, and compassionate care to deliver the best outcomes for every family.
				</p>
				<p class="text-brand-muted text-base leading-relaxed mb-8">
					With 220+ beds, state-of-the-art facilities, and a family-centered approach, we provide world-class healthcare across our locations in Banjara Hills, Kondapur, and Rajahmundry.
				</p>
				<div>
					<h4 class="text-2xl font-medium text-brand-green mt-2 mb-6">Why Families Trust Lotus Little Stars</h4>
				</div>
				<!-- Highlights Grid -->
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 text-brand-muted text-sm sm:text-base font-semibold">
					<div class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<span class="text-brand-muted">World-Class Infrastructure</span>
					</div>
					<div class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<span class="text-brand-muted">Advanced Medical Technology</span>
					</div>
					<div class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<span class="text-brand-muted">Expert Women & Child Specialists</span>
					</div>
					<div class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<span class="text-brand-muted">Comprehensive Care Under One Roof</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
