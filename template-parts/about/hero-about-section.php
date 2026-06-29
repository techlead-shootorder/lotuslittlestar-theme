<?php
/**
 * Template part for displaying the redesigned about page hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="relative inset-0 bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat -z-20 py-24 sm:py-32 border-b border-brand-cream overflow-hidden" 
	style="background-image: url('http://lotuslittlestars.in/wp-content/uploads/2026/06/hero-about-new-scaled.webp');">
	
	<!-- Gradient Overlay (Solid background color on the left fading to transparent on the right) -->
	<!-- <div class="absolute inset-0 bg-gradient-to-r from-brand-bg via-brand-bg/90 to-brand-bg/30 lg:to-transparent"></div> -->
	
	<div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
		<!-- Pill Badge -->
		<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold border border-brand-red/40 bg-brand-red/5 text-brand-red tracking-wide mb-6">
			Trusted Clinical Excellence
		</span>
		
		<!-- Main Heading -->
		<h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold text-brand-green leading-tight max-w-2xl mb-6 font-outfit">
			Most Trusted Hospital for Women & Children
		</h1>
		
		<!-- Subtext Description -->
		<p class="text-brand-dark/85 text-sm sm:text-base leading-relaxed max-w-xl mb-8">
			From motherhood to childhood, we are dedicated to delivering exceptional healthcare through expert medical care, cutting-edge technology, and a compassionate approach that puts every family first.
		</p>
		
		<!-- Buttons Group -->
		<div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
			<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" 
				class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-red-hover text-white text-sm font-bold rounded-[4px] shadow-sm hover:shadow transition-all duration-200">
				Our Specializations
			</a>
			<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" 
				class="inline-flex items-center justify-center px-6 h-12 bg-white/95 hover:bg-brand-cream text-brand-red border border-brand-red text-sm font-bold rounded-[4px] shadow-sm hover:shadow transition-all duration-200">
				Meet Our Doctors
			</a>
		</div>
	</div>
</section>
