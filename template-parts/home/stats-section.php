<?php
/**
 * Template part for displaying the home page stats section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-12 bg-[#F1F4F0] border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12 divide-y-0 divide-x-0 sm:divide-x-0 lg:divide-x lg:divide-brand-cream/80">
			<!-- Stat 1 -->
			<div class="flex flex-col items-center text-center bg-white border  rounded-lg p-4 lg:p-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-black mb-2">220+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">hospital beds</span>
			</div>
			
			<!-- Stat 2 -->
			<div class="flex flex-col items-center text-center bg-white rounded-lg borderp-4 lg:p-4 lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-black mb-2">150k+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">Happy Patients</span>
			</div>
			
			<!-- Stat 3 -->
			<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-black mb-2">35k+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">In-patients Treated</span>
			</div>
			
			<!-- Stat 4 -->
			<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p- 4lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-black mb-2">5k+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">Successful Surgeries</span>
			</div>
			<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p- 4lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-black mb-2">6000+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">Pediatric Nephrology Treatments</span>
			</div>
			<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p- 4lg:pl-4">
				<span class="font-outfit text-4xl sm:text-3xl font-bold text-black mb-2">35+</span>
				<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase">Years of Combined Clinical Experience</span>
			</div>
		</div>
	</div>
</section>
