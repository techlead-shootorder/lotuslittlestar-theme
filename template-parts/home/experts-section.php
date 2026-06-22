<?php
/**
 * Template part for displaying the home page experts section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Query for selected experts first
$args = array(
	'post_type'      => 'doctor',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'meta_query'     => array(
		array(
			'key'   => '_doctor_show_in_experts',
			'value' => '1',
		),
	),
);
$doctors_query = new WP_Query( $args );

// Fallback to first 3 doctors if no specific experts are selected
if ( ! $doctors_query->have_posts() ) {
	$args = array(
		'post_type'      => 'doctor',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	);
	$doctors_query = new WP_Query( $args );
}
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
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php
			if ( $doctors_query->have_posts() ) :
				while ( $doctors_query->have_posts() ) : $doctors_query->the_post();
					get_template_part( 'template-parts/doctors/doctor-card' );
				endwhile;
				wp_reset_postdata();
			else :
				// Fallback mockup doctors matching the Figma design layout exactly!
				$fallback_doctors = array(
					array(
						'name'       => 'Dr. V.S.V. Prasad',
						'specialty'  => 'Neonatology & Pediatrics',
						'department' => 'Pediatrics',
						'experience' => '18+ Yrs',
						'color'      => 'text-brand-red',
					),
					array(
						'name'       => 'Dr. Satish Ghanta',
						'specialty'  => 'Pediatric Intensive Care',
						'department' => 'Pediatrics',
						'experience' => '15+ Yrs',
						'color'      => 'text-brand-coral',
					),
					array(
						'name'       => 'Dr. Mehul A. Shah',
						'specialty'  => 'Pediatric Orthopedics',
						'department' => 'Orthopedics',
						'experience' => '20+ Yrs',
						'color'      => 'text-brand-red',
					),
				);

				foreach ( $fallback_doctors as $index => $doc ) :
					get_template_part( 'template-parts/doctors/doctor-card', null, array( 'fallback_doctor' => $doc, 'max_width' => 'max-w-[300px]' ) );
				endforeach;
			endif;
			?>
		</div>
	</div>
</section>
