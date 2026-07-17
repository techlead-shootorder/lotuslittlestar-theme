<?php
/**
 * Template Name: Thank You Page
 *
 * The template for displaying the Thank You page.
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>



<div class="py-14 md:py-18 flex flex-col items-center justify-center bg-brand-bg px-4 sm:px-6 lg:px-8">
	<div class="max-w-xl w-full text-center space-y-6 md:space-y-8">
		<!-- Icon Container -->
		<div class="flex justify-center">
			<div class="flex items-center justify-center h-16 w-16 md:h-20 md:w-20 rounded-full bg-[#22C55E] text-white shadow-lg transform hover:scale-105 transition-transform duration-300">
				<!-- SVG Checkmark -->
				<svg class="h-8 w-8 md:h-10 md:w-10" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
				</svg>
			</div>
		</div>

		<!-- Text Content -->
		<div class="space-y-4">
			<h1 class="text-3xl md:text-[40px] font-bold text-brand-green tracking-tight font-outfit leading-tight">
				Thank You for Reaching Out
			</h1>
			<p class="text-base md:text-lg text-brand-muted leading-relaxed font-sans max-w-lg mx-auto">
				We've received your request. One of our patient care coordinators will review your details and contact you within the next 24 hours to assist with your inquiry.
			</p>
		</div>

		<!-- Action Button -->
		<div class="pt-2">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
			   onclick="if(document.referrer && document.referrer.indexOf(window.location.host) !== -1) { history.back(); return false; }"
			   class="inline-flex items-center justify-center px-10 py-3 bg-brand-red hover:bg-brand-red-hover text-white font-medium rounded-lg shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200 text-base">
				Go Back
			</a>
		</div>
	</div>
</div>

<?php
get_footer();
