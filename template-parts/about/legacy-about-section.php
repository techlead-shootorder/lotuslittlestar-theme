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
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
			
			<!-- Graphic Column (Left) -->
			<div class="lg:col-span-5 flex justify-center order-last lg:order-first">
				<div class="relative w-full max-w-sm">
					<div class="absolute -inset-4 bg-brand-coral/10 rounded-[2rem] transform -rotate-2 -z-10"></div>
					<div class="bg-brand-cream/40 p-8 rounded-3xl border border-brand-cream flex items-center justify-center">
						<!-- Custom Heart Care Graphic -->
						<svg class="w-full h-auto text-brand-red max-h-[280px]" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
							<path d="M50 85c-20-18-35-30-35-45C15 28 25 18 37.5 18 45 18 48 22 50 24c2-2 5-6 12.5-6C75 18 85 28 85 40c0 15-15 27-35 45z" fill="currentColor" fill-opacity="0.1"/>
							<circle cx="50" cy="40" r="10" stroke-width="1.5" stroke-dasharray="3 3"/>
							<path d="M50 30v20m-10-10h20" stroke-linecap="round" stroke-width="3"/>
						</svg>
					</div>
				</div>
			</div>
			
			<!-- Content Column (Right) -->
			<div class="lg:col-span-7 text-left">
				<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2">Our Goal</span>
				<h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mt-2 mb-6">
					A Legacy of Trust & Specialized Care
				</h2>
				<p class="text-brand-muted text-base sm:text-lg leading-relaxed mb-6">
					To design and deliver medical services that combine absolute clinical safety with an emotionally nurturing environment, helping families experience health, comfort, and peace of mind.
				</p>
				<p class="text-brand-muted text-sm sm:text-base leading-relaxed mb-8">
					Through cutting-edge neonatology departments, pediatric emergency response units, and advanced maternity packages, we ensure that every critical phase of motherhood and child growth is protected under the guidance of top clinical experts.
				</p>
				
				<!-- Highlights -->
				<ul class="space-y-4 text-brand-dark text-sm sm:text-base font-semibold">
					<li class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						Round-the-clock Pediatric emergency & critical care units.
					</li>
					<li class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						Personalized nurse-to-patient ratios in neonatal ICU (NICU).
					</li>
					<li class="flex items-center gap-3">
						<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>
						Integrative family support and developmental rehabilitation.
					</li>
				</ul>
			</div>

		</div>
	</div>
</section>
