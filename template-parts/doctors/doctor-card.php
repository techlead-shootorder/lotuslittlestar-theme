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
$is_grid         = ! empty( $args['is_grid'] );
$fallback_doctor = ! empty( $args['fallback_doctor'] ) ? $args['fallback_doctor'] : null;
$max_width_class = isset( $args['max_width'] ) ? $args['max_width'] : '';

// Resolve values based on whether it is fallback or a custom post
if ( $fallback_doctor ) {
	$name       = $fallback_doctor['name'];
	$specialty  = $fallback_doctor['specialty'];
	$department = isset( $fallback_doctor['department'] ) ? $fallback_doctor['department'] : 'Pediatrics';
	$experience = isset( $fallback_doctor['experience'] ) ? $fallback_doctor['experience'] : '10+ Yrs';
	$permalink  = isset( $fallback_doctor['permalink'] ) ? $fallback_doctor['permalink'] : home_url( '/doctors/' );
} else {
	$name       = get_the_title();
	$specialty  = get_post_meta( get_the_ID(), '_doctor_specialty', true );
	if ( empty( $specialty ) ) {
		$specialty = 'Specialist Doctor';
	}
	$department = get_post_meta( get_the_ID(), '_doctor_department', true );
	if ( empty( $department ) ) {
		$department = 'Pediatrics';
	}
	$experience = get_post_meta( get_the_ID(), '_doctor_experience', true );
	if ( empty( $experience ) ) {
		$experience = '10+ Yrs';
	}
	$permalink  = get_permalink();
}

// Generate classes
$card_classes = array(
	'bg-white',
	'w-full',
	$max_width_class ? $max_width_class : '',
	'rounded-[0.5rem]',
	'border',
	'border-[#EBE8E2]',
	'shadow-sm',
	'hover:shadow-md',
	'transform',
	'hover:-translate-y-1',
	'transition-all',
	'duration-300',
	'flex',
	'flex-col',
	'overflow-hidden',
	'group',
	'mx-auto'
);

if ( $is_grid ) {
	$card_classes[] = 'doctor-card-item';
}

$card_classes_str = implode( ' ', array_filter( $card_classes ) );

// Prepare data attributes for grid filtering
$data_attrs = '';
if ( $is_grid ) {
	$data_attrs = sprintf(
		'data-name="%s" data-specialty="%s"',
		esc_attr( strtolower( $name ) ),
		esc_attr( $specialty )
	);
}
?>

<div class="<?php echo esc_attr( $card_classes_str ); ?>" <?php echo $data_attrs; ?>>
	<!-- Image Container -->
	<div class="aspect-[6/7] w-full bg-brand-cream relative overflow-hidden flex items-center justify-center shrink-0">
		<?php if ( ! $fallback_doctor && has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
		<?php else : ?>
			<!-- SVG Placeholder -->
			<?php if ( $fallback_doctor && ! empty( $fallback_doctor['color'] ) ) : ?>
				<svg class="h-20 w-20 <?php echo esc_attr( $fallback_doctor['color'] ); ?> opacity-75 group-hover:scale-105 transition-transform duration-500" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
					<circle cx="50" cy="35" r="18" fill="currentColor" fill-opacity="0.1"/>
					<path d="M20 85c0-15 15-22 30-22s30 7 30 22" fill="currentColor" fill-opacity="0.05" stroke-linecap="round"/>
				</svg>
			<?php else : ?>
				<svg class="h-16 w-16 text-brand-coral/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
				</svg>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	
	<!-- Card Body -->
	<div class="p-5 flex flex-col justify-between flex-grow text-left">
		<div>
			<div class="mb-4">
				<h3 class="text-base font-bold text-brand-green line-clamp-1 group-hover:text-brand-red transition-colors"><?php echo esc_html( $name ); ?></h3>
				<p class="text-xs text-brand-muted mt-0.5 line-clamp-1"><?php echo esc_html( $specialty ); ?></p>
			</div>
			
			<div class="mb-5 flex flex-col gap-1.5 text-[11px] border-t border-brand-cream/40 pt-3">
				<div class="flex justify-between items-center">
					<span class="font-medium text-brand-muted/70">Department:</span>
					<span class="font-bold text-brand-red"><?php echo esc_html( $department ); ?></span>
				</div>
				<div class="flex justify-between items-center">
					<span class="font-medium text-brand-muted/70">Experience:</span>
					<span class="font-bold text-brand-dark"><?php echo esc_html( $experience ); ?></span>
				</div>
			</div>
		</div>
		
		<div class="mt-auto">
			<a href="<?php echo esc_url( $permalink ); ?>" class="flex items-center justify-center w-full py-2 border border-brand-red text-brand-red hover:bg-brand-red hover:text-white text-xs font-bold rounded-lg transition-all duration-300">
				Book Now
			</a>
		</div>
	</div>
</div>
