<?php
/**
 * Static Doctor Card for Homepage
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$doctor = isset( $args['doctor'] ) ? $args['doctor'] : array();
if ( empty( $doctor ) ) {
	return;
}

$name          = isset( $doctor['name'] ) ? $doctor['name'] : '';
$speciality    = isset( $doctor['speciality'] ) ? $doctor['speciality'] : '';
$qualification = isset( $doctor['qualification'] ) ? $doctor['qualification'] : '';
$position      = isset( $doctor['position'] ) ? $doctor['position'] : '';
$exp           = isset( $doctor['exp'] ) ? $doctor['exp'] : '';
$image         = isset( $doctor['image'] ) ? $doctor['image'] : '';
$profile_url   = isset( $doctor['profile_url'] ) ? $doctor['profile_url'] : home_url( '/doctors/' );

// If the profile URL is the default doctors archive page, try to find the specific doctor post dynamically.
if ( ( $profile_url === home_url( '/doctors/' ) || empty( $profile_url ) ) && ! empty( $name ) ) {
	// 1. Try to find the post by name/title
	$doctor_posts = get_posts( array(
		'post_type'   => 'doctor',
		'title'       => $name,
		'numberposts' => 1,
		'post_status' => 'publish',
	) );

	if ( ! empty( $doctor_posts ) ) {
		$profile_url = get_permalink( $doctor_posts[0]->ID );
	} else {
		// 2. Try to find by slug using the sanitized name
		$slug = sanitize_title( $name );
		$doctor_by_slug = get_page_by_path( $slug, OBJECT, 'doctor' );
		if ( $doctor_by_slug ) {
			$profile_url = get_permalink( $doctor_by_slug->ID );
		} else {
			// 3. Try a loose search using WP search query parameter
			$doctor_posts_search = get_posts( array(
				'post_type'   => 'doctor',
				's'           => $name,
				'numberposts' => 1,
				'post_status' => 'publish',
			) );
			if ( ! empty( $doctor_posts_search ) ) {
				$profile_url = get_permalink( $doctor_posts_search[0]->ID );
			}
		}
	}
}
$appointment_url = isset( $doctor['appointment_url'] ) ? $doctor['appointment_url'] : home_url( '/contact/' );
?>

<div class="bg-[#FAF9F5] rounded-2xl border border-[#EBE8E2] shadow-sm hover:shadow-md transition-all duration-300 p-6 max-w-lg w-full flex flex-col sm:flex-row gap-6 items-center sm:items-start mx-auto">
	<!-- Circular Image -->
	<div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full overflow-hidden shrink-0 border-2 border-white shadow-sm bg-brand-cream relative">
		<?php if ( $image ) : ?>
			<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="w-full h-full object-cover">
		<?php else : ?>
			<div class="w-full h-full flex items-center justify-center bg-brand-coral/10">
				<svg class="h-12 w-12 text-brand-coral/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
				</svg>
			</div>
		<?php endif; ?>
	</div>

	<!-- Info Details -->
	<div class="flex-grow flex flex-col text-center sm:text-left h-full justify-between">
		<div>
			<!-- Name -->
			<h3 class="text-xl sm:text-2xl font-bold text-brand-red mb-1 font-outfit">
				<?php echo esc_html( $name ); ?>
			</h3>
			
			<!-- Position/Speciality -->
			<p class="text-brand-muted text-sm sm:text-base mb-1 font-medium">
				<?php echo esc_html( $position ); ?>
			</p>
			
			<!-- Qualification -->
			<p class="text-brand-dark text-sm sm:text-base font-semibold mb-3">
				<?php echo esc_html( $qualification ); ?>
			</p>
			
			<!-- Experience -->
			<div class="flex items-center justify-center sm:justify-start gap-2 text-brand-dark text-sm sm:text-base mb-4 font-medium">
				<!-- Calendar Icon -->
				<svg class="w-5 h-5 text-brand-dark" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
					<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
					<line x1="16" y1="2" x2="16" y2="6"></line>
					<line x1="8" y1="2" x2="8" y2="6"></line>
					<line x1="3" y1="10" x2="21" y2="10"></line>
				</svg>
				<span><?php echo esc_html( $exp ); ?></span>
			</div>
		</div>

		<!-- Action Buttons -->
		<div class="flex flex-row justify-center sm:justify-start gap-3 mt-auto">
			<a href="<?php echo esc_url( $profile_url ); ?>" class="inline-flex items-center justify-center px-6 py-2 border-2 border-brand-red text-brand-red hover:bg-brand-red hover:text-white font-semibold text-sm rounded-lg transition-colors duration-200">
				View Profile
			</a>
			<a href="<?php echo esc_url( $appointment_url ); ?>" class="inline-flex items-center justify-center px-6 py-2 bg-brand-red  text-white font-semibold text-sm rounded-lg transition-colors duration-200">
				Appointment
			</a>
		</div>
	</div>
</div>
