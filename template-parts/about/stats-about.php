<?php
/**
 * Template part for displaying stats on the about page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-16 bg-brand-cream border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Stats Grid -->
		<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
			
			<!-- Stat 1: Years of Excellence -->
			<div class="bg-white p-12 rounded-[2rem] shadow-sm hover:shadow-md transition-all duration-300 border border-brand-cream/40 flex flex-col items-center justify-center text-center">
				<!-- Green icon circle container -->
				<div class="w-12 h-12 bg-[#DCEFE5] rounded-xl flex items-center justify-center mb-6 select-none">
					<!-- Award Badge Icon -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<circle cx="12" cy="8" r="4"/>
						<path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/>
					</svg>
				</div>
				<span class="font-outfit text-4xl sm:text-5xl font-bold text-brand-dark mb-3">16+</span>
				<span class="text-xs sm:text-sm text-brand-muted font-medium">Years of Excellence</span>
			</div>

			<!-- Stat 2: Happy Patients -->
			<div class="bg-white p-12 rounded-[2rem] shadow-sm hover:shadow-md transition-all duration-300 border border-brand-cream/40 flex flex-col items-center justify-center text-center">
				<div class="w-12 h-12 bg-[#DCEFE5] rounded-xl flex items-center justify-center mb-6 select-none">
					<!-- Group Icon -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
						<circle cx="9" cy="7" r="4"/>
						<path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
					</svg>
				</div>
				<span class="font-outfit text-4xl sm:text-5xl font-bold text-brand-dark mb-3">150k+</span>
				<span class="text-xs sm:text-sm text-brand-muted font-medium">Happy Patients</span>
			</div>

			<!-- Stat 3: Hospital Beds -->
			<div class="bg-white p-12 rounded-[2rem] shadow-sm hover:shadow-md transition-all duration-300 border border-brand-cream/40 flex flex-col items-center justify-center text-center">
				<div class="w-12 h-12 bg-[#DCEFE5] rounded-xl flex items-center justify-center mb-6 select-none">
					<!-- Bed Icon -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M2 4v16M2 11h18M20 11v9M2 17h18M6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
					</svg>
				</div>
				<span class="font-outfit text-4xl sm:text-5xl font-bold text-brand-dark mb-3">220+</span>
				<span class="text-xs sm:text-sm text-brand-muted font-medium">Hospital Beds</span>
			</div>

		</div>
	</div>
</section>
