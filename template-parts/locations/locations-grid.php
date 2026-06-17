<?php
/**
 * Template part for displaying the locations grid
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-20 bg-brand-bg min-h-screen">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="text-center max-w-3xl mx-auto mb-16">
			<span class="text-xs font-bold text-brand-red uppercase tracking-wider">Hospital Locations</span>
			<h1 class="text-4xl sm:text-5xl font-extrabold text-brand-dark mt-2 mb-4">
				Our Hospital Network
			</h1>
			<p class="text-brand-muted text-sm sm:text-base leading-relaxed">
				Lotus Little Stars operates advanced multi-specialty centers in key areas, delivering exceptional medical support to your doorstep.
			</p>
		</div>

		<!-- Locations Grid -->
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
			<!-- Location 1: Banjara Hills -->
			<div class="bg-white rounded-[2rem] border border-brand-cream shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col group text-left">
				<!-- Image Header (SVG Map Graphic) -->
				<div class="aspect-[16/9] bg-brand-cream/80 relative overflow-hidden flex items-center justify-center p-6 select-none">
					<!-- Styled map pin background -->
					<svg class="h-20 w-20 text-brand-red opacity-85 group-hover:scale-105 transition-transform duration-300" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
						<path d="M50 15c-15 0-27 12-27 27 0 19 27 43 27 43s27-24 27-43c0-15-12-27-27-27z" fill="currentColor" fill-opacity="0.1"/>
						<circle cx="50" cy="42" r="8" fill="currentColor"/>
						<path d="M20 75h60" stroke-linecap="round"/>
					</svg>
				</div>
				
				<!-- Body Content -->
				<div class="p-8 flex flex-col flex-grow">
					<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2">Flagship Tertiary Center</span>
					<h3 class="text-xl font-bold text-brand-dark mb-4">Banjara Hills, Hyderabad</h3>
					
					<div class="space-y-4 text-xs text-brand-muted mb-8 leading-relaxed">
						<p class="flex gap-2 items-start">
							<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
							</svg>
							<span>Accent Towers, 8-2-590, Road No. 10, Banjara Hills, Hyderabad, Telangana 500034, India.</span>
						</p>
						<p class="flex gap-2 items-center">
							<svg class="h-5 w-5 text-brand-coral shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
							</svg>
							<span>+91 40 4000 6000</span>
						</p>
					</div>

					<div class="mt-auto pt-6 border-t border-brand-cream grid grid-cols-2 gap-4">
						<a href="https://maps.google.com" target="_blank" class="inline-flex items-center justify-center h-11 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-full transition-all">
							Directions
						</a>
						<a href="tel:+914040006000" class="inline-flex items-center justify-center h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full transition-all">
							Call Facility
						</a>
					</div>
				</div>
			</div>

			<!-- Location 2: Kondapur -->
			<div class="bg-white rounded-[2rem] border border-brand-cream shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col group text-left">
				<!-- Image Header -->
				<div class="aspect-[16/9] bg-brand-cream/80 relative overflow-hidden flex items-center justify-center p-6 select-none">
					<svg class="h-20 w-20 text-brand-coral opacity-85 group-hover:scale-105 transition-transform duration-300" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
						<path d="M50 15c-15 0-27 12-27 27 0 19 27 43 27 43s27-24 27-43c0-15-12-27-27-27z" fill="currentColor" fill-opacity="0.1"/>
						<circle cx="50" cy="42" r="8" fill="currentColor"/>
						<path d="M20 75h60" stroke-linecap="round"/>
					</svg>
				</div>
				
				<!-- Body Content -->
				<div class="p-8 flex flex-col flex-grow">
					<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2">Premium Mother & Child Facility</span>
					<h3 class="text-xl font-bold text-brand-dark mb-4">Kondapur, Hyderabad</h3>
					
					<div class="space-y-4 text-xs text-brand-muted mb-8 leading-relaxed">
						<p class="flex gap-2 items-start">
							<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
							</svg>
							<span>Block No. 2-55/6, Kothaguda X Roads, Hanuman Nagar, Kondapur, Hyderabad, Telangana 500084, India.</span>
						</p>
						<p class="flex gap-2 items-center">
							<svg class="h-5 w-5 text-brand-coral shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
							</svg>
							<span>+91 40 4000 6100</span>
						</p>
					</div>

					<div class="mt-auto pt-6 border-t border-brand-cream grid grid-cols-2 gap-4">
						<a href="https://maps.google.com" target="_blank" class="inline-flex items-center justify-center h-11 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-full transition-all">
							Directions
						</a>
						<a href="tel:+914040006100" class="inline-flex items-center justify-center h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full transition-all">
							Call Facility
						</a>
					</div>
				</div>
			</div>

			<!-- Location 3: Rajahmundry -->
			<div class="bg-white rounded-[2rem] border border-brand-cream shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col group text-left">
				<!-- Image Header -->
				<div class="aspect-[16/9] bg-brand-cream/80 relative overflow-hidden flex items-center justify-center p-6 select-none">
					<svg class="h-20 w-20 text-brand-red opacity-85 group-hover:scale-105 transition-transform duration-300" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
						<path d="M50 15c-15 0-27 12-27 27 0 19 27 43 27 43s27-24 27-43c0-15-12-27-27-27z" fill="currentColor" fill-opacity="0.1"/>
						<circle cx="50" cy="42" r="8" fill="currentColor"/>
						<path d="M20 75h60" stroke-linecap="round"/>
					</svg>
				</div>
				
				<!-- Body Content -->
				<div class="p-8 flex flex-col flex-grow">
					<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2">Advanced Pediatric Hub</span>
					<h3 class="text-xl font-bold text-brand-dark mb-4">Rajahmundry, Andhra Pradesh</h3>
					
					<div class="space-y-4 text-xs text-brand-muted mb-8 leading-relaxed">
						<p class="flex gap-2 items-start">
							<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
							</svg>
							<span>Door No. 76-8-11, Plot No. B-4, Danavaipeta, Rajahmundry, Andhra Pradesh 533103, India.</span>
						</p>
						<p class="flex gap-2 items-center">
							<svg class="h-5 w-5 text-brand-coral shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
							</svg>
							<span>+91 883 243 4000</span>
						</p>
					</div>

					<div class="mt-auto pt-6 border-t border-brand-cream grid grid-cols-2 gap-4">
						<a href="https://maps.google.com" target="_blank" class="inline-flex items-center justify-center h-11 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-full transition-all">
							Directions
						</a>
						<a href="tel:+918832434000" class="inline-flex items-center justify-center h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full transition-all">
							Call Facility
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
