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
			<h2 class="text-3xl sm:text-4xl font-bold text-brand-dark font-outfit tracking-tight">
				Our Presence
			</h2>
		</div>

		<!-- Locations Grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			
			<!-- Card 1: Banjara Hills -->
			<div class="bg-white p-8 rounded-[5px] shadow-sm hover:shadow-md border border-brand-cream/60 flex flex-col justify-between text-left group transition-all duration-300">
				<div>
					<h3 class="text-xl font-bold text-brand-dark mb-2 font-outfit">Banjara Hills</h3>
					<p class="text-brand-muted text-xs leading-relaxed mb-6">
						Road No. 12, Banjara Hills, Hyderabad - 500034
					</p>
					<!-- Isometric Map SVG Placeholder with medical cross pin -->
					<div class="aspect-[1.6] bg-[#A4C2B4]/20 rounded-2xl overflow-hidden border border-brand-cream/80 flex items-center justify-center p-4 mb-6 relative select-none">
						<svg class="w-full h-full text-brand-dark" viewBox="0 0 200 125" fill="none" xmlns="http://www.w3.org/2000/svg">
							<!-- Ground Grid Pattern -->
							<rect width="200" height="125" fill="#E2ECE9"/>
							<path d="M 0 30 L 200 90 M 0 70 L 200 130 M 40 0 L 40 125 M 120 0 L 120 125 M 160 0 L 160 125" stroke="#CBDCD7" stroke-width="1.5"/>
							<path d="M 0 100 L 200 20" stroke="#FAF8F5" stroke-width="8" stroke-linecap="round"/>
							<!-- Map Pin shadow -->
							<ellipse cx="100" cy="88" rx="8" ry="3" fill="#A8BFB9"/>
							<!-- Isometric Map Pin -->
							<g class="group-hover:translate-y-[-4px] transition-transform duration-300">
								<path d="M100 50c-10 0-18 8-18 18 0 14 18 22 18 22s18-8 18-22c0-10-8-18-18-18z" fill="#9CB2A8"/>
								<circle cx="100" cy="68" r="7" fill="#FFF"/>
								<path d="M100 65v6M97 68h6" stroke="#9CB2A8" stroke-width="2" stroke-linecap="round"/>
							</g>
						</svg>
					</div>
				</div>
				<!-- External link -->
				<a href="https://maps.google.com" target="_blank" class="inline-flex items-center gap-1.5 text-brand-dark hover:text-brand-red font-bold text-sm transition-colors">
					Directions
					<svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
					</svg>
				</a>
			</div>

			<!-- Card 2: Kondapur -->
			<div class="bg-white p-8 rounded-[1.5rem] shadow-sm hover:shadow-md border border-brand-cream/60 flex flex-col justify-between text-left group transition-all duration-300">
				<div>
					<h3 class="text-xl font-bold text-brand-dark mb-2 font-outfit">Kondapur</h3>
					<p class="text-brand-muted text-xs leading-relaxed mb-6">
						Survey No. 4, Kondapur Main Rd, Hyderabad - 500084
					</p>
					<!-- Flat Map SVG with baby pin -->
					<div class="aspect-[1.6] bg-[#A4C2B4]/20 rounded-2xl overflow-hidden border border-brand-cream/80 flex items-center justify-center p-4 mb-6 relative select-none">
						<svg class="w-full h-full text-brand-dark" viewBox="0 0 200 125" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="200" height="125" fill="#E2ECE9"/>
							<path d="M 0 50 L 200 50 M 80 0 L 80 125 M 0 90 L 200 90 M 140 0 L 140 125" stroke="#CBDCD7" stroke-width="1.5"/>
							<path d="M 110 0 L 110 125" stroke="#FAF8F5" stroke-width="12"/>
							<ellipse cx="110" cy="78" rx="8" ry="3" fill="#A8BFB9"/>
							<g class="group-hover:translate-y-[-4px] transition-transform duration-300">
								<path d="M110 40c-10 0-18 8-18 18 0 14 18 22 18 22s18-8 18-22c0-10-8-18-18-18z" fill="#5E8A75"/>
								<!-- Baby Carriage/Toy Pin graphic inside -->
								<circle cx="110" cy="58" r="6" fill="#FFF"/>
								<path d="M110 56v4M108 58h4" stroke="#5E8A75" stroke-width="1.5"/>
							</g>
						</svg>
					</div>
				</div>
				<a href="https://maps.google.com" target="_blank" class="inline-flex items-center gap-1.5 text-brand-dark hover:text-brand-red font-bold text-sm transition-colors">
					Directions
					<svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
					</svg>
				</a>
			</div>

			<!-- Card 3: Rajahmundry -->
			<div class="bg-white p-8 rounded-[1.5rem] shadow-sm hover:shadow-md border border-brand-cream/60 flex flex-col justify-between text-left group transition-all duration-300">
				<div>
					<h3 class="text-xl font-bold text-brand-dark mb-2 font-outfit">Rajahmundry</h3>
					<p class="text-brand-muted text-xs leading-relaxed mb-6">
						Danavaipeta, Rajahmundry, Andhra Pradesh - 533103
					</p>
					<!-- Flat Map SVG with heart pin -->
					<div class="aspect-[1.6] bg-[#A4C2B4]/20 rounded-2xl overflow-hidden border border-brand-cream/80 flex items-center justify-center p-4 mb-6 relative select-none">
						<svg class="w-full h-full text-brand-dark" viewBox="0 0 200 125" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="200" height="125" fill="#E2ECE9"/>
							<path d="M 0 20 L 200 100 M 0 60 L 200 140 M 50 0 L 50 125 M 130 0 L 130 125" stroke="#CBDCD7" stroke-width="1.5"/>
							<path d="M 100 0 L 100 125" stroke="#FAF8F5" stroke-width="10"/>
							<ellipse cx="100" cy="78" rx="8" ry="3" fill="#A8BFB9"/>
							<g class="group-hover:translate-y-[-4px] transition-transform duration-300">
								<path d="M100 40c-10 0-18 8-18 18 0 14 18 22 18 22s18-8 18-22c0-10-8-18-18-18z" fill="#4B695A"/>
								<!-- Heart shape Pin graphic inside -->
								<path d="M100 63s-4-3-4-5.5a2.5 2.5 0 0 1 5 0c0 2.5-4 5.5-4 5.5z" fill="#FFF"/>
							</g>
						</svg>
					</div>
				</div>
				<a href="https://maps.google.com" target="_blank" class="inline-flex items-center gap-1.5 text-brand-dark hover:text-brand-red font-bold text-sm transition-colors">
					Directions
					<svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
					</svg>
				</a>
			</div>

		</div>
	</div>
</section>
