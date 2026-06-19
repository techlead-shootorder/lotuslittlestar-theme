<?php
/**
 * Template part for displaying the doctors grid and filters
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Query all doctors
$args = array(
	'post_type'      => 'doctor',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'orderby'        => 'title',
	'order'          => 'ASC',
);
$doctors_query = new WP_Query( $args );

// Extract specialties for filter options
$specialties_list = array();
if ( $doctors_query->have_posts() ) {
	while ( $doctors_query->have_posts() ) {
		$doctors_query->the_post();
		$spec = get_post_meta( get_the_ID(), '_doctor_specialty', true );
		if ( ! empty( $spec ) && ! in_array( $spec, $specialties_list ) ) {
			$specialties_list[] = $spec;
		}
	}
	wp_reset_postdata();
}
?>

<section class="relative bg-cover bg-center py-20 sm:py-24 border-b border-brand-cream/60 overflow-hidden" style="background-image: url('http://lotuslittlestars.in/wp-content/uploads/2026/06/doctor-hero.png');">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-left">
		<!-- Section Header -->
		<div class="max-w-3xl mb-0">
			<span class="inline-flex items-center px-5 py-2 rounded-full text-sm font-semibold border border-brand-red text-brand-red bg-brand-red/10 mb-4">Our Medical Team</span>
			<h1 class="text-4xl sm:text-5xl font-extrabold text-brand-green mt-2 mb-4">
				Meet Our Experts
			</h1>
			<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-2xl">
				Our experienced team of specialists is dedicated to providing exceptional care for women, newborns, and children. Combining advanced medical expertise with compassion, we deliver personalized healthcare and trusted support at every stage of life.
			</p>
		</div>
	</div>
</section>

<section class="py-20 bg-brand-bg min-h-screen">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Search and Filter Bar -->
		<div class="bg-white p-6 rounded-3xl border border-brand-cream shadow-sm mb-12 flex flex-col md:flex-row gap-4 items-center justify-between">
			<!-- Search Field -->
			<div class="relative w-full md:max-w-md">
				<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-brand-muted">
					<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
					</svg>
				</div>
				<input type="text" id="doctor-search" class="block w-full pl-11 pr-4 py-3 border border-brand-cream rounded-full bg-brand-bg text-brand-dark text-sm placeholder-brand-muted focus:outline-none focus:ring-2 focus:ring-brand-coral focus:border-transparent transition-all" placeholder="Search doctor by name...">
			</div>

			<!-- Filters Group -->
			<div class="flex gap-4 w-full md:w-auto">
				<select id="specialty-filter" class="block w-full md:w-48 px-4 py-3 border border-brand-cream rounded-full bg-brand-bg text-brand-dark text-sm focus:outline-none focus:ring-2 focus:ring-brand-coral transition-all">
					<option value="">All Specialties</option>
					<?php if ( ! empty( $specialties_list ) ) : ?>
						<?php foreach ( $specialties_list as $spec ) : ?>
							<option value="<?php echo esc_attr( $spec ); ?>"><?php echo esc_html( $spec ); ?></option>
						<?php endforeach; ?>
					<?php else : ?>
						<!-- Fallback filter options matching standard list -->
						<option value="Neonatology">Neonatology</option>
						<option value="Pediatric Intensive Care">Pediatric Intensive Care</option>
						<option value="Pediatric Orthopedics">Pediatric Orthopedics</option>
						<option value="Gynecology & Obstetrics">Gynecology & Obstetrics</option>
					<?php endif; ?>
				</select>
			</div>
		</div>

		<!-- Doctors Grid Container -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="doctors-list-grid">
			<?php
			if ( $doctors_query->have_posts() ) :
				while ( $doctors_query->have_posts() ) : $doctors_query->the_post();
					$specialty    = get_post_meta( get_the_ID(), '_doctor_specialty', true );
					$experience   = get_post_meta( get_the_ID(), '_doctor_experience', true );
					$patients     = get_post_meta( get_the_ID(), '_doctor_patients', true );
					$success_rate = get_post_meta( get_the_ID(), '_doctor_success_rate', true );
					if ( empty( $specialty ) ) {
						$specialty = 'Specialist Doctor';
					}
					?>
					<!-- CPT Doctor Grid Card -->
					<div class="doctor-card-item bg-white w-full  rounded-[0.5rem] border border-[#EBE8E2] shadow-sm hover:shadow-md transform hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group mx-auto"
						 data-name="<?php echo esc_attr( strtolower( get_the_title() ) ); ?>"
						 data-specialty="<?php echo esc_attr( $specialty ); ?>">
						
						<!-- Image Container -->
						<div class="aspect-[6/7] w-full bg-brand-cream relative overflow-hidden flex items-center justify-center shrink-0">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
							<?php else : ?>
								<svg class="h-16 w-16 text-brand-coral/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
								</svg>
							<?php endif; ?>
						</div>
						
						<!-- Card Body -->
						<div class="p-5 flex flex-col justify-between flex-grow text-left">
							<div class="mb-4">
								<h3 class="text-base font-bold text-brand-green line-clamp-1 group-hover:text-brand-red transition-colors"><?php the_title(); ?></h3>
								<p class="text-xs text-brand-muted mt-0.5 line-clamp-1"><?php echo esc_html( $specialty ); ?></p>
							</div>
							
							<div class="mt-auto">
								<a href="<?php the_permalink(); ?>" class="flex items-center justify-center w-full py-2 border border-brand-red text-brand-red hover:bg-brand-red hover:text-white text-xs font-bold rounded-lg transition-all duration-300">
									Book Now
								</a>
							</div>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				// Fallback mockup list matching the design layout with 6 complete cards.
				$fallback_docs = array(
					array(
						'name'      => 'Dr. V.S.V. Prasad',
						'specialty' => 'Neonatology & Pediatrics',
						'experience' => '18+ Yrs',
						'patients' => '15k+',
						'success' => '99.2%',
						'color' => 'text-brand-red',
					),
					array(
						'name'      => 'Dr. Satish Ghanta',
						'specialty' => 'Pediatric Intensive Care',
						'experience' => '15+ Yrs',
						'patients' => '12k+',
						'success' => '98.8%',
						'color' => 'text-brand-coral',
					),
					array(
						'name'      => 'Dr. Mehul A. Shah',
						'specialty' => 'Pediatric Orthopedics',
						'experience' => '20+ Yrs',
						'patients' => '18k+',
						'success' => '99.5%',
						'color' => 'text-brand-red',
					),
					array(
						'name'      => 'Dr. V. Rajesh',
						'specialty' => 'Pediatric Surgery',
						'experience' => '14+ Yrs',
						'patients' => '9k+',
						'success' => '98.5%',
						'color' => 'text-brand-coral',
					),
					array(
						'name'      => 'Dr. S. K. Sharma',
						'specialty' => 'Gynecology & Obstetrics',
						'experience' => '16+ Yrs',
						'patients' => '14k+',
						'success' => '99.0%',
						'color' => 'text-brand-red',
					),
					array(
						'name'      => 'Dr. K. Srinivas',
						'specialty' => 'Pediatrics & Nephrologist',
						'experience' => '12+ Yrs',
						'patients' => '8k+',
						'success' => '97.9%',
						'color' => 'text-brand-coral',
					),
				);

				foreach ( $fallback_docs as $index => $doc ) :
					?>
					<!-- Fallback Doctor Card -->
					<div class="doctor-card-item bg-white w-full max-w-[300px] rounded-[0.5rem] border border-[#EBE8E2] shadow-sm hover:shadow-md transform hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group mx-auto"
						 data-name="<?php echo esc_attr( strtolower( $doc['name'] ) ); ?>"
						 data-specialty="<?php echo esc_attr( $doc['specialty'] ); ?>">
						
						<!-- Image Container -->
						<div class="aspect-[6/7] w-full bg-brand-cream relative overflow-hidden flex items-center justify-center shrink-0 select-none">
							<svg class="h-20 w-20 <?php echo $doc['color']; ?> opacity-75 group-hover:scale-105 transition-transform duration-500" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
								<circle cx="50" cy="35" r="18" fill="currentColor" fill-opacity="0.1"/>
								<path d="M20 85c0-15 15-22 30-22s30 7 30 22" fill="currentColor" fill-opacity="0.05" stroke-linecap="round"/>
							</svg>
						</div>
						
						<!-- Card Body -->
						<div class="p-5 flex flex-col justify-between flex-grow text-left">
							<div class="mb-4">
								<h3 class="text-base font-bold text-brand-green line-clamp-1 group-hover:text-brand-red transition-colors"><?php echo esc_html( $doc['name'] ); ?></h3>
								<p class="text-xs text-brand-muted mt-0.5 line-clamp-1"><?php echo esc_html( $doc['specialty'] ); ?></p>
							</div>
							
							<div class="mt-auto">
								<a href="#" class="flex items-center justify-center w-full py-2 border border-brand-red text-brand-red hover:bg-brand-red hover:text-white text-xs font-bold rounded-lg transition-all duration-300">
									Book Now
								</a>
							</div>
						</div>
					</div>
					<?php
				endforeach;
			endif;
			?>
		</div>
		
		<!-- Empty state for search results -->
		<div id="no-doctors-found" class="hidden text-center py-12 bg-white rounded-3xl border border-brand-cream max-w-md mx-auto mt-8">
			<svg class="h-16 w-16 text-brand-coral/40 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
			<h3 class="text-lg font-bold text-brand-dark mb-2">No Doctors Found</h3>
			<p class="text-xs text-brand-muted px-6">
				We couldn't find any specialist matching your search query. Try typing another name or selecting a different specialty.
			</p>
		</div>
	</div>
</section>

<!-- Client side Search & Filters JS script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const searchInput = document.getElementById('doctor-search');
	const filterSelect = document.getElementById('specialty-filter');
	const cards = document.querySelectorAll('.doctor-card-item');
	const noResults = document.getElementById('no-doctors-found');

	function filterDoctors() {
		const searchVal = searchInput.value.toLowerCase().trim();
		const filterVal = filterSelect.value.toLowerCase().trim();
		let visibleCount = 0;

		cards.forEach(card => {
			const name = card.getAttribute('data-name');
			const specialty = card.getAttribute('data-specialty').toLowerCase();

			const matchesSearch = name.includes(searchVal);
			const matchesSpecialty = filterVal === "" || specialty.includes(filterVal);

			if (matchesSearch && matchesSpecialty) {
				card.style.display = '';
				visibleCount++;
			} else {
				card.style.display = 'none';
			}
		});

		if (visibleCount === 0) {
			noResults.classList.remove('hidden');
		} else {
			noResults.classList.add('hidden');
		}
	}

	if (searchInput) {
		searchInput.addEventListener('input', filterDoctors);
	}
	if (filterSelect) {
		filterSelect.addEventListener('change', filterDoctors);
	}
});
</script>
