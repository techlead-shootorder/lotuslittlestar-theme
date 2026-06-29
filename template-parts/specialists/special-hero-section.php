<?php
/**
 * Template part for displaying the specialists page hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="relative bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat bg-center py-10 sm:py-24 border-b border-brand-cream/60 overflow-hidden" 
	style="background-image: url('http://lotuslittlestars.in/wp-content/uploads/2026/06/hero-speciality-new-scaled.webp');">
	
	<!-- Gradient Overlay (Solid background color on the left fading to transparent on the right) -->
	<div class="absolute inset-0 bg-[#F5F3EF]/85 sm:bg-transparent sm:bg-gradient-to-r sm:from-[#F5F3EF] sm:via-[#F5F3EF]/95 sm:to-transparent -z-10"></div>
	
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
		<!-- Pill Badge -->
		<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold border border-brand-red/60 bg-white/40 text-brand-red tracking-wide mb-6 select-none">
			Expert Healthcare
		</span>
		
		<!-- Main Heading -->
		<h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-brand-green leading-tight max-w-2xl mb-6 font-outfit">
			Specialized Care for Every Little Milestone
		</h1>
		
		<!-- Subtext Description -->
		<p class="text-brand-muted text-base sm:text-lg leading-relaxed max-w-2xl mb-8 font-medium">
			Comprehensive medical excellence for women and children across Telangana and Andhra Pradesh. We combine world-class expertise with nurturing compassion.
		</p>
		
		<!-- Button -->
		<div class="flex">
			<a href="#specialists-grid" 
				class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-coral text-white text-sm sm:text-base font-bold rounded-[4px] shadow-md hover:shadow-lg transition-all duration-200">
				Explore Our Expertise
			</a>
		</div>
	</div>
</section>
