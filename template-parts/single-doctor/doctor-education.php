<?php
/**
 * Template part for displaying single doctor education timeline
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch doctor custom post metadata
$education_raw = get_post_meta( get_the_ID(), '_doctor_education', true );

$education_data = array();
if ( ! empty( $education_raw ) ) {
	$lines = array_filter( array_map( 'trim', explode( "\n", $education_raw ) ) );
	foreach ( $lines as $line ) {
		// Try to parse format: "Degree - College - Year" or "Degree (College) - Year"
		$parts = explode( ' - ', $line );
		$degree = isset( $parts[0] ) ? trim( $parts[0] ) : '';
		$college = isset( $parts[1] ) ? trim( $parts[1] ) : '';
		$year = isset( $parts[2] ) ? trim( $parts[2] ) : '';
		
		if ( ! empty( $year ) ) {
			if ( is_numeric( $year ) || preg_match( '/^\d{4}$/', $year ) ) {
				$year = 'Class of ' . $year;
			}
		}
		
		if ( empty( $college ) && preg_match( '/\((.*?)\)/', $line, $matches ) ) {
			$college = $matches[1];
			$degree = trim( preg_replace( '/\s*\(.*?\)/', '', $line ) );
		}
		
		$education_data[] = array(
			'degree'  => $degree,
			'college' => $college,
			'year'    => $year,
		);
	}
}

// Fallback matching the screenshot exactly
if ( empty( $education_data ) ) {
	$education_data = array(
		array(
			'degree'  => 'MBBS',
			'college' => 'Osmania Medical College, Hyderabad',
			'year'    => 'Class of 2002',
		),
		array(
			'degree'  => 'MD Pediatrics',
			'college' => 'Niloufer Hospital for Women and Children',
			'year'    => 'Class of 2006',
		),
		array(
			'degree'  => 'Fellowship in Neonatology',
			'college' => 'Royal College of Pediatrics (UK)',
			'year'    => 'Class of 2010',
		),
	);
}
?>

<section class="py-16 bg-white">
	<div class="w-full mx-auto px-4 sm:px-6 lg:px-8 text-left">
		<div class="max-w-5xl">
			<h2 class="text-3xl font-bold text-brand-dark mb-10 font-outfit">
				Education & Qualifications
			</h2>
			
			<div class="space-y-12 max-w-3xl pl-2">
				<?php foreach ( $education_data as $index => $item ) : ?>
					<div class="relative flex gap-6">
						<!-- Timeline Line & Dot Column -->
						<div class="flex flex-col items-center shrink-0 relative">
							<!-- Dot -->
							<div class="flex items-center justify-center w-5 h-5 z-10 bg-white">
								<div class="w-2.5 h-2.5 rounded-full bg-brand-red shadow-[0_0_8px_4px_rgba(166,26,36,0.15)]"></div>
							</div>
							<!-- Connector line -->
							<?php if ( $index < count( $education_data ) - 1 ) : ?>
								<div class="absolute top-5 bottom-[-48px] w-0 border-l border-dotted border-gray-300"></div>
							<?php endif; ?>
						</div>
						<!-- Content Column -->
						<div class="pb-2">
							<h4 class="text-brand-red font-bold text-lg leading-tight mb-1"><?php echo esc_html( $item['degree'] ); ?></h4>
							<p class="text-brand-dark font-bold text-sm mb-1"><?php echo esc_html( $item['college'] ); ?></p>
							<p class="text-brand-muted text-xs font-medium"><?php echo esc_html( $item['year'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
