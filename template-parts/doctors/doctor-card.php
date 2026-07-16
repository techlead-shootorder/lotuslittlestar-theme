<?php
/**
 * Reusable Doctor Card Component
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Extract arguments
$is_grid         = ! empty( $args['is_grid'] ) 
                   || ( function_exists( 'is_post_type_archive' ) && is_post_type_archive( 'doctor' ) )
                   || ( function_exists( 'is_page' ) && ( is_page( 'doctors' ) || is_page( 'specialists' ) ) )
                   || ( isset( $_SERVER['REQUEST_URI'] ) && ( preg_match( '#/doctors(\?|/|$)#', $_SERVER['REQUEST_URI'] ) || preg_match( '#/specialists(\?|/|$)#', $_SERVER['REQUEST_URI'] ) ) && strpos( $_SERVER['REQUEST_URI'], '/doctors/dr-' ) === false );
$max_width_class = isset( $args['max_width'] ) ? $args['max_width'] : '';

// Resolve values strictly from custom post meta
$name            = get_the_title();
$meta_specialty  = get_post_meta( get_the_ID(), '_doctor_specialty', true );
$meta_department = get_post_meta( get_the_ID(), '_doctor_department', true );
$meta_experience = get_post_meta( get_the_ID(), '_doctor_experience', true );
$meta_education  = get_post_meta( get_the_ID(), '_doctor_education', true );
$permalink       = get_permalink();

$location = get_post_meta( get_the_ID(), '_doctor_location', true );
$location = ! empty( $location ) ? $location : '';

$filter = get_post_meta( get_the_ID(), '_doctor_filter', true );
$filter = ! empty( $filter ) ? $filter : '';

// Resolve specialty
$specialty = ! empty( $meta_specialty ) ? $meta_specialty : '';

// Resolve qualification
$qualification = '';
if ( ! empty( $meta_education ) ) {
	$edu_lines = explode( "\n", str_replace( "\r", "", $meta_education ) );
	$qualification = trim( $edu_lines[0] );
}

// Resolve experience
$experience = ! empty( $meta_experience ) ? $meta_experience : '';
if ( ! empty( $experience ) && strpos( $experience, 'Experience' ) === false ) {
	$experience .= ' Experience';
}

// Resolve designation
$designation = get_post_meta( get_the_ID(), '_doctor_designation', true );
$department  = ! empty( $meta_department ) ? $meta_department : '';

// Generate classes
$card_classes = array(
	'bg-[#FAF9F5]',
	'w-full',
	$max_width_class ? $max_width_class : 'max-w-xl',
	'rounded',
	'border',
	'border-[#EBE8E2]',
	'shadow-sm',
	'hover:shadow-md',
	'transition-all',
	'duration-300',
	'flex',
	'flex-col',
	'sm:flex-row',
	'gap-3',
	'p-6',
	'items-center',
	'sm:items-start',
	'mx-auto',
	'group'
);

if ( $is_grid ) {
	$card_classes[] = 'doctor-card-item';
}

$card_classes_str = implode( ' ', array_filter( $card_classes ) );

// Prepare data attributes for grid filtering
$data_attrs = '';
if ( $is_grid ) {
	$data_attrs = sprintf(
		'data-name="%s" data-specialty="%s" data-department="%s" data-location="%s" data-filter="%s"',
		esc_attr( strtolower( $name ) ),
		esc_attr( $specialty ),
		esc_attr( $department ),
		esc_attr( strtolower( $location ) ),
		esc_attr( strtolower( $filter ) )
	);
}
?>

<div class="<?php echo esc_attr( $card_classes_str ); ?>" <?php echo $data_attrs; ?>>
	<!-- Circular Image -->
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shrink-0 border-2 border-white shadow-sm bg-brand-cream relative">
		<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
	</div>
	<?php endif; ?>

	<!-- Info Details -->
	<div class="flex-grow flex flex-col text-center sm:text-left h-full justify-around w-full min-w-0">
		<div>
			<!-- Name -->
			<h3 class="text-xl sm:text-2xl font-bold text-brand-red mb-1 font-outfit break-words">
				<?php echo esc_html( $name ); ?>
			</h3>
			
			<!-- Specialty -->
			<?php if ( ! empty( $specialty ) ) : ?>
			<p class="text-brand-muted text-sm sm:text-base mb-1 font-medium break-words">
				<?php echo esc_html( $specialty ); ?>
			</p>
			<?php endif; ?>
			
			<!-- Qualification -->
			<?php if ( ! empty( $qualification ) ) : ?>
			<p class="text-brand-dark text-sm sm:text-base font-semibold mb-3 break-words">
				<?php echo esc_html( $qualification ); ?>
			</p>
			<?php endif; ?>



			<!-- Experience Badge -->
			<?php if ( ! empty( $experience ) ) : ?>
			<div class="flex items-center justify-center sm:justify-start gap-2 text-brand-dark text-sm sm:text-base mb-4 font-medium">
				<!-- Calendar Icon -->
				<svg class="w-5 h-5 text-brand-dark" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
					<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
					<line x1="16" y1="2" x2="16" y2="6"></line>
					<line x1="8" y1="2" x2="8" y2="6"></line>
					<line x1="3" y1="10" x2="21" y2="10"></line>
				</svg>
				<span><?php echo esc_html( $experience ); ?></span>
			</div>
			<?php endif; ?>
		</div>

		<!-- Action Buttons -->
		<div class="flex flex-row justify-center sm:justify-start gap-3">
			<a href="<?php echo esc_url( $permalink ); ?>" class="inline-flex items-center justify-center px-2 py-2 border border-brand-red text-brand-red hover:bg-brand-red hover:text-white font-semibold text-sm rounded-lg transition-colors duration-200">
				View Profile
			</a>
			<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="inline-flex items-center justify-center px-2 py-2 bg-brand-red text-white font-semibold text-sm rounded-lg hover:bg-brand-red-hover transition-colors duration-200">
				Appointment
			</a>
		</div>
	</div>
</div>

