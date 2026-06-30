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

// Extract departments for filter options
$departments_list = array();
if ( $doctors_query->have_posts() ) {
	while ( $doctors_query->have_posts() ) {
		$doctors_query->the_post();
		$dept = get_post_meta( get_the_ID(), '_doctor_department', true );
		if ( ! empty( $dept ) && ! in_array( $dept, $departments_list ) ) {
			$departments_list[] = $dept;
		}
	}
	wp_reset_postdata();
}
?>



<section class="relative h-screen sm:h-auto py-0 sm:py-24 flex items-center border-b border-brand-cream/60 overflow-hidden">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat -z-20" style="background-image: url('http://lotuslittlestars.in/wp-content/uploads/2026/06/hero-doctore-new-scaled.webp');"></div>
	
	<!-- Overlay Gradient to ensure text readability -->
	<div class="absolute inset-0 bg-white/65 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/65 sm:via-white/60 sm:to-transparent -z-10"></div>
	
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10 text-left">
		<!-- Section Header -->
		<div class="max-w-3xl mb-0">
			<span class="inline-flex items-center px-5 py-2 rounded-full text-sm font-semibold border border-brand-red text-brand-red bg-brand-red/10 mb-4">Our Medical Team</span>
			<h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-brand-green mt-2 mb-4">
				Meet Our Experts
			</h1>
			<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-2xl">
				Our experienced team of specialists is dedicated to providing exceptional care for women, newborns, and children. Combining advanced medical expertise with compassion, we deliver personalized healthcare and trusted support at every stage of life.
			</p>
			<div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto mt-10">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-red-hover text-white font-semibold rounded-[4px] shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 text-base">
					Book Appointment
				</a>
			</div>
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
			<div class="flex flex-wrap gap-4 w-full md:w-auto">
				<!-- Location Filter -->
				<select id="location-filter" class="block w-full md:w-48 px-4 py-3 border border-brand-cream rounded-full bg-brand-bg text-brand-dark text-sm focus:outline-none focus:ring-2 focus:ring-brand-coral transition-all">
					<option value="">Locations</option>
					<option value="hyderabad">Hyderabad</option>
					<option value="rajahmundry">Rajahmundry</option>
				</select>

				<!-- Specialties (Care Type) Filter -->
				<select id="care-filter" class="block w-full md:w-48 px-4 py-3 border border-brand-cream rounded-full bg-brand-bg text-brand-dark text-sm focus:outline-none focus:ring-2 focus:ring-brand-coral transition-all">
					<option value="">Specialities</option>
					<option value="child care">Child Care</option>
					<option value="woman care">Woman Care</option>
				</select>
			</div>
		</div>

		<!-- Doctors Grid Container -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5" id="doctors-list-grid">
			<?php
			if ( $doctors_query->have_posts() ) :
				while ( $doctors_query->have_posts() ) : $doctors_query->the_post();
					get_template_part( 'template-parts/doctors/doctor-card', null, array( 'is_grid' => true ) );
				endwhile;
				wp_reset_postdata();
			else :
				// Fallback mockup list matching the design layout with 6 complete cards.
				$fallback_docs = array(
					array(
						'name'      => 'Dr. V.S.V. Prasad',
						'specialty' => 'Neonatology & Pediatrics',
						'experience' => '18+ Yrs',
						'department' => 'Pediatrics',
						'success' => '99.2%',
						'color' => 'text-brand-red',
					),
					array(
						'name'      => 'Dr. Satish Ghanta',
						'specialty' => 'Pediatric Intensive Care',
						'experience' => '15+ Yrs',
						'department' => 'Pediatrics',
						'success' => '98.8%',
						'color' => 'text-brand-coral',
					),
					array(
						'name'      => 'Dr. Mehul A. Shah',
						'specialty' => 'Pediatric Orthopedics',
						'experience' => '20+ Yrs',
						'department' => 'Orthopedics',
						'success' => '99.5%',
						'color' => 'text-brand-red',
					),
					array(
						'name'      => 'Dr. V. Rajesh',
						'specialty' => 'Pediatric Surgery',
						'experience' => '14+ Yrs',
						'department' => 'Surgery',
						'success' => '98.5%',
						'color' => 'text-brand-coral',
					),
					array(
						'name'      => 'Dr. S. K. Sharma',
						'specialty' => 'Gynecology & Obstetrics',
						'experience' => '16+ Yrs',
						'department' => 'Obstetrics',
						'success' => '99.0%',
						'color' => 'text-brand-red',
					),
					array(
						'name'      => 'Dr. K. Srinivas',
						'specialty' => 'Pediatrics & Nephrologist',
						'experience' => '12+ Yrs',
						'department' => 'Pediatrics',
						'success' => '97.9%',
						'color' => 'text-brand-coral',
					),
				);

				foreach ( $fallback_docs as $index => $doc ) :
					$doc['permalink'] = '#';
					get_template_part( 'template-parts/doctors/doctor-card', null, array(
						'is_grid'         => true,
						'fallback_doctor' => $doc,
						'max_width'       => 'max-w-[300px]',
					) );
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
	const locationSelect = document.getElementById('location-filter');
	const careSelect = document.getElementById('care-filter');
	const cards = document.querySelectorAll('.doctor-card-item');
	const noResults = document.getElementById('no-doctors-found');

	function filterDoctors() {
		const searchVal = searchInput ? searchInput.value.toLowerCase().trim() : "";
		const locationVal = locationSelect ? locationSelect.value.toLowerCase().trim() : "";
		const careVal = careSelect ? careSelect.value.toLowerCase().trim() : "";
		let visibleCount = 0;

		cards.forEach(card => {
			const name = card.getAttribute('data-name') || "";
			const location = card.getAttribute('data-location') || "";
			const filterVal = card.getAttribute('data-filter') || "";

			const matchesSearch = name.includes(searchVal);
			const matchesLocation = locationVal === "" || location === locationVal;
			const matchesCare = careVal === "" || filterVal === careVal;

			if (matchesSearch && matchesLocation && matchesCare) {
				card.style.display = '';
				visibleCount++;
			} else {
				card.style.display = 'none';
			}
		});

		if (visibleCount === 0) {
			if (noResults) noResults.classList.remove('hidden');
		} else {
			if (noResults) noResults.classList.add('hidden');
		}
	}

	if (searchInput) {
		searchInput.addEventListener('input', filterDoctors);
	}
	if (locationSelect) {
		locationSelect.addEventListener('change', filterDoctors);
	}
	if (careSelect) {
		careSelect.addEventListener('change', filterDoctors);
	}
});
</script>
