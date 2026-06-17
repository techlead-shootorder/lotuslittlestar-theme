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
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/about-left-img-1.png" alt="Lotus Little Stars Legacy" class="relative z-10 w-full h-auto rounded-3xl shadow-lg object-cover">
					
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
							<span class="block text-base sm:text-lg font-bold font-outfit text-white leading-tight">16+ Years</span>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Content Column (Right) -->
			<div class="lg:col-span-7 text-left">
				
				<h2 class="text-3xl sm:text-4xl font-medium text-brand-dark mt-2 mb-6">
					A Legacy of Trust & Specialized Care
				</h2>
				<p class="text-brand-muted text-base leading-relaxed mb-6">
					Lotus Little Stars Hospital has stood as a beacon of clinical excellence for over 16 years. Our journey began with a simple yet profound vision: to provide a sanctuary where women and children receive world-class medical attention in a nurturing environment.
				</p>
				<p class="text-brand-muted text-base leading-relaxed mb-8">
					As a trusted center of excellence, we have pioneered advancements in Obstetrics, Gynecology, Fetal Medicine, Neonatology, and Pediatrics. Every touchpoint in our hospital is designed with the unique needs of mothers and their "little stars" in mind.
				</p>
				
				<!-- Highlights Grid -->
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 text-brand-muted text-sm sm:text-base font-semibold">
					<div class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<span class="text-brand-muted">Expert Neonatologists</span>
					</div>
					<div class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<span class="text-brand-muted">Advanced Fetal Imaging</span>
					</div>
					<div class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<span class="text-brand-muted">24/7 Pediatric ER</span>
					</div>
					<div class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						<span class="text-brand-muted">Luxury Birthing Suites</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
