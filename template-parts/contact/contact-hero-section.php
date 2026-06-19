<?php
/**
 * Template part for displaying the contact page hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-16 sm:py-20 lg:py-24 bg-[#F5F2EC] border-b border-brand-cream/60 overflow-hidden relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
			
			<!-- Left Column: Content -->
			<div class="lg:col-span-5 flex flex-col justify-center text-left">
				<h1 class="text-4xl sm:text-5xl lg:text-[56px] font-semibold text-brand-green leading-tight font-outfit mb-4 lg:mb-6">
					Get in Touch
				</h1>
				<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-md">
					We are here to support you and your family. Reach out to any of our centers for expert maternal and pediatric care.
				</p>
			</div>

			<!-- Right Column: Image -->
			<div class="lg:col-span-7 flex justify-center lg:justify-end">
				<div class="w-full max-w-2xl">
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/contact-hero.png" 
						 alt="Lotus Little Stars Reception Area" 
						 class="w-full h-auto rounded-[2rem] shadow-sm object-cover aspect-[4/3] sm:aspect-[16/10]" 
						 loading="lazy">
				</div>
			</div>

		</div>
	</div>
</section>
