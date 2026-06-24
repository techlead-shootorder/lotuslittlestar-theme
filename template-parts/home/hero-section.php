<?php
/**
 * Template part for displaying the home page hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="relative overflow-hidden py-16 lg:py-24 border-b border-brand-cream min-h-[550px] lg:min-h-[600px] flex items-center">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat -z-20" style="background-image: url('http://lotuslittlestars.in/wp-content/uploads/2026/06/special-hero-banner.png');"></div>
	
	<!-- Overlay Gradient to ensure text readability -->
	<!-- <div class="absolute inset-0 bg-gradient-to-r from-white via-white/95 to-white/60 lg:from-white lg:via-white/70 lg:to-transparent -z-10"></div> -->

	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
			<!-- Text Content Column -->
			<div class="lg:col-span-8 flex flex-col items-start text-left">
				<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-brand-red/5 text-brand-red border border-brand-red/30 mb-5">
					35+ Years of Excellence
				</span>
				
				<h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-brand-dark leading-[1.15] mb-6">
					Advanced <span class="font-semibold italic text-brand-green">women and child care</span> backed by <span class="font-semibold italic text-brand-green">expertise , innovation, and compassion</span>
				</h1>
				
				<p class="text-brand-muted text-base sm:text-lg leading-relaxed mb-8 max-w-2xl">
					For over 16+ years, Little Stars & She Hospital has been providing expert maternity, neonatal, pediatric, and women's healthcare services with advanced technology and compassionate care.
				</p>
				
				<div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-red-hover text-white font-semibold rounded-[4px] shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 text-base">
						Book Appointment
					</a>
					<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="inline-flex items-center justify-center px-6 h-12 bg-white hover:bg-brand-cream text-brand-red border-2 border-brand-red font-semibold rounded-[4px] shadow-sm hover:shadow-md transform hover:-translate-y-0.5 transition-all duration-200 text-base">
						Meet Our Doctors
					</a>
				</div>
			</div>
			
			<!-- Empty Column to leave space for background image on desktop -->
			<div class="hidden lg:block lg:col-span-5"></div>
		</div>
	</div>
</section>
