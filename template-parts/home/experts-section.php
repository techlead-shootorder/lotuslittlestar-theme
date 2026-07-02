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
		'name'          => 'Dr.Satish Ghanta',
		'speciality'    => 'Director – Neonatal & Pediatric Intensive Care Services',
		'qualification' => 'MD (Pediatrics)',
		'position'      => 'SR Consultant Pediatrician, HOD Neonatal & Pediatric Intensivist Care',
		'exp'           => '32+ Years Experience',
		'image'         => 'https://lotuslittlestars.in/wp-content/uploads/2026/06/satish-ghanta.webp',
		'profile_url'   => home_url( '/doctors/' ), // Can be customized if specific URL exists
		'appointment_url'=> home_url( '/contact/' ),
	),
	array(
		'name'          => 'Dr. V.S.V Prasad',
		'speciality'    => 'Consultant – Specialist Doctor',
		'qualification' => 'MD Pediatrics, AIIMS, New Delhi',
		'position'      => 'Senior Consultant – Pediatric Nephrology',
		'exp'           => '32+ Years Experience',
		'image'         => 'https://lotuslittlestars.in/wp-content/uploads/2026/06/VSV.-Prasad.jpg',
		'profile_url'   => home_url( '/doctors/' ), // Can be customized if specific URL exists
		'appointment_url'=> home_url( '/contact/' ),
	),
	array(
		'name'          => 'Dr Ramana Dandamudi',
		'speciality'    => 'Director – Pediatric Hematology & Oncology',
		'qualification' => 'MBBS, MD – Pediatrics, DCH, MRCP (UK)',
		'position'      => 'Chief Consultant Neonatologist and Pediatric Intensivist',
		'exp'           => '39+ Years Experience',
		'image'         => 'https://lotuslittlestars.in/wp-content/uploads/2026/06/Ramana-Dandamudi.jpg.jpeg',
		'profile_url'   => home_url( '/doctors/' ), // Can be customized if specific URL exists
		'appointment_url'=> home_url( '/contact/' ),
	),
	array(
		'name'          => 'Dr. Mehul A. Shah',
		'speciality'    => 'Senior Consultant – Pediatric Nephrology',
		'qualification' => 'MD(PED), DCH(BOM), MD(USA), DABPN(USA)',
		'position'      => 'Senior Consultant – Pediatric Nephrology',
		'exp'           => '30+ Years Experience',
		'image'         => 'https://lotuslittlestars.in/wp-content/uploads/2026/06/Mehul-A-Sha.jpg',
		'profile_url'   => home_url( '/doctors/' ), // Can be customized if specific URL exists
		'appointment_url'=> home_url( '/contact/' ),
	),
	array(
		'name'          => 'Dr. Roopa Ghanta',
		'speciality'    => 'HOD – Obstetrics & Gynecology',
		'qualification' => 'MBBS, DGO, CCPU',
		'position'      => 'Chief Consultant Neonatologist and Pediatric Intensivist',
		'exp'           => '26+ Years Experience',
		'image'         => 'https://lotuslittlestars.in/wp-content/uploads/2026/06/Roopa-Ganta.jpg',
		'profile_url'   => home_url( '/doctors/' ), // Can be customized if specific URL exists
		'appointment_url'=> home_url( '/contact/' ),
	),
	array(
		'name'          => 'Dr.K.V.S. NARAYANA',
		'speciality'    => 'Consultant – Consultant Pediatric Surgeon',
		'qualification' => 'MBBS, MS(General Surgery)',
		'position'      => 'Chief Consultant Neonatologist and Pediatric Intensivist',
		'exp'           => '30+ Years Experience',
		'image'         => 'https://lotuslittlestars.in/wp-content/uploads/2026/06/KVS-Narayana.jpg',
		'profile_url'   => home_url( '/doctors/' ), // Can be customized if specific URL exists
		'appointment_url'=> home_url( '/contact/' ),
	),
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
			// Query doctor posts checked for display in the experts section
			$experts_args = array(
				'post_type'      => 'doctor',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
				'orderby'        => 'title',
				'order'          => 'ASC',
				'meta_query'     => array(
					array(
						'key'     => '_doctor_show_in_experts',
						'value'   => '1',
						'compare' => '=',
					),
				),
			);
			$experts_query = new WP_Query( $experts_args );

			if ( $experts_query->have_posts() ) :
				while ( $experts_query->have_posts() ) : $experts_query->the_post();
					get_template_part( 'template-parts/doctors/doctor-card', null, array(
						'max_width' => 'max-w-xl'
					) );
				endwhile;
				wp_reset_postdata();
			else :
				// Fallback to title-matching / static list if no doctors are checked in the backend
				global $post;
				foreach ( $homepage_doctors as $doctor ) :
					// Try to find the actual custom post type 'doctor' by name to display real data if it exists
					$doctor_posts = get_posts( array(
						'post_type'   => 'doctor',
						'title'       => $doctor['name'],
						'numberposts' => 1,
						'post_status' => 'publish',
					) );

					if ( ! empty( $doctor_posts ) ) {
						// Real post exists! Setup post data and render
						$post = $doctor_posts[0];
						setup_postdata( $post );
						get_template_part( 'template-parts/doctors/doctor-card', null, array(
							'max_width' => 'max-w-xl'
						) );
					} else {
						// Real post doesn't exist, use the homepage static data as a mapped fallback
						$fallback_data = array(
							'name'       => $doctor['name'],
							'specialty'  => $doctor['speciality'],
							'experience' => $doctor['exp'],
							'department' => isset( $doctor['department'] ) ? $doctor['department'] : 'Pediatrics',
							'permalink'  => isset( $doctor['profile_url'] ) ? $doctor['profile_url'] : home_url( '/doctors/' ),
						);
						get_template_part( 'template-parts/doctors/doctor-card', null, array(
							'fallback_doctor' => $fallback_data,
							'max_width'       => 'max-w-xl'
						) );
					}
				endforeach;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>

