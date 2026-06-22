<?php
/**
 * Template part for displaying the single doctor profile banner
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch doctor custom post metadata
$specialty    = get_post_meta( get_the_ID(), '_doctor_specialty', true );
$experience   = get_post_meta( get_the_ID(), '_doctor_experience', true );
$department   = get_post_meta( get_the_ID(), '_doctor_department', true );
$success_rate = get_post_meta( get_the_ID(), '_doctor_success_rate', true );
$phone        = get_post_meta( get_the_ID(), '_doctor_phone', true );

// Fallbacks for preview details matching Figma defaults (Dr. V.S.V. Prasad)
$specialty    = ! empty( $specialty ) ? $specialty : 'Senior Consultant Neonatologist';
$experience   = ! empty( $experience ) ? $experience : '18+ Yrs';
$department   = ! empty( $department ) ? $department : 'Pediatrics';
$success_rate = ! empty( $success_rate ) ? $success_rate : '99.2%';
$phone        = ! empty( $phone ) ? $phone : '+91 40 4000 6000';
?>

<section class="py-12 bg-gradient-to-br from-brand-bg to-brand-cream/30 border-b border-brand-cream relative">
	<div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Navigation Breadcrumb -->
		<nav class="text-xs text-brand-muted mb-8 select-none">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-brand-red transition-all">Home</a>
			<span class="mx-2">/</span>
			<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="hover:text-brand-red transition-all">Doctors</a>
			<span class="mx-2">/</span>
			<span class="text-brand-dark font-medium"><?php the_title(); ?></span>
		</nav>

		<!-- Doctor Banner Card -->
		<div class="p-6 sm:p-3 flex flex-col md:flex-row gap-10 items-center">
			
			<!-- Photo Column (Left) -->
			<div class="w-full md:w-1/3 aspect-square max-w-[480px] bg-brand-cream rounded-3xl overflow-hidden flex items-center justify-center shrink-0 shadow-inner">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
				<?php else : ?>
					<!-- Doctor default icon -->
					<svg class="h-28 w-28 text-brand-coral/50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
					</svg>
				<?php endif; ?>
			</div>

			<!-- Information Column (Right) -->
			<div class="w-full md:w-2/3 text-left flex flex-col items-start">
				<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-brand-red/10 text-brand-red uppercase tracking-wider mb-3 select-none">
					<?php echo esc_html( $specialty ); ?>
				</span>
				
				<h1 class="text-3xl sm:text-4xl font-extrabold text-brand-dark mb-2">
					<?php the_title(); ?>
				</h1>
				
				<p class="text-xs sm:text-sm text-brand-muted flex items-center gap-2 mb-6 select-none">
					<svg class="h-4 w-4 text-brand-coral shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
					</svg>
					Lotus Little Stars Hospital, Banjara Hills, Hyderabad
				</p>

				<!-- Badges grid -->
				<div class="grid grid-cols-2 gap-4 border-y border-brand-cream/80 py-4 w-full mb-8 select-none">
					<div class="text-center">
						<p class="text-xl font-bold font-outfit text-brand-red line-clamp-1"><?php echo esc_html( $department ); ?></p>
						<p class="text-[10px] uppercase font-bold text-brand-muted mt-0.5">Department</p>
					</div>
					<div class="text-center border-x border-brand-cream/80">
						<p class="text-2xl font-bold font-outfit text-brand-dark"><?php echo esc_html( $experience ); ?></p>
						<p class="text-[10px] uppercase font-bold text-brand-muted mt-0.5">Experience</p>
					</div>
					<!-- <div class="text-center">
						<p class="text-2xl font-bold font-outfit text-brand-coral"><?php echo esc_html( $success_rate ); ?></p>
						<p class="text-[10px] uppercase font-bold text-brand-muted mt-0.5">Success Rate</p>
					</div> -->
				</div>

				<!-- Call to actions -->
				<div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
					<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="inline-flex items-center justify-center px-8 h-12 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-[12px] shadow-md transition-all">
						Book Appointment
					</a>
					<a href="tel:<?php echo esc_attr( $phone ); ?>" class="inline-flex items-center justify-center px-8 h-12 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-[12px] transition-all">
						Call Now
					</a>
				</div>
			</div>

		</div>
	</div>
</section>
