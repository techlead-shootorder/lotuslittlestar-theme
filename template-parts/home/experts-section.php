<?php
/**
 * Template part for displaying the home page experts section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define the static doctors array for the homepage
$homepage_doctors = array(
	array(
		'name'          => 'Dr. Mehul A. Shah',
		'speciality'    => 'Pediatrics & Nephrology',
		'qualification' => 'MD(PED), DCH(BOM), MD(USA), DABPN(USA)',
		'position'      => 'Senior Consultant – Pediatric Nephrology',
		'exp'           => '30+ Years Experience',
		'image'         => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/Dr-Mhul-A-shah-scaled.webp',
		'profile_url'   => home_url( '/doctors/' ), // Can be customized if specific URL exists
		'appointment_url'=> home_url( '/contact/' ),
	)
);
?>

<section class="py-20 bg-brand-bg relative overflow-hidden">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
			<div class="text-left max-w-2xl">
			
				<h2 class="text-3xl sm:text-4xl font-medium text-brand-dark mt-2 mb-4">
					Meet Our Experts
				</h2>
				<p class="text-brand-muted text-base leading-relaxed">
					Our multidisciplinary team of renowned specialists is dedicated to delivering advanced, compassionate care for women, newborns, and children—helping families navigate every stage of life with confidence.
				</p>
			</div>
			<div>
				<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="inline-flex items-center gap-2 px-6 h-12 bg-white hover:bg-brand-cream text-brand-red border border-brand-red font-semibold rounded-full shadow-sm hover:shadow-md transition-all text-sm shrink-0">
					View All Doctors
					<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</div>
		</div>

		<!-- Doctors Grid -->
		<div class="flex flex-wrap justify-center gap-8">
			<?php
			foreach ( $homepage_doctors as $doctor ) :
				get_template_part( 'template-parts/home/doctor-card-static', null, array( 'doctor' => $doctor ) );
			endforeach;
			?>
		</div>
	</div>
</section>

