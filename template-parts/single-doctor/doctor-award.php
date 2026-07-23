<?php
/**
 * Template part for displaying single doctor awards & recognition
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch doctor custom post metadata
$awards_raw = get_post_meta( get_the_ID(), '_doctor_awards', true );

$awards_data = array();
if ( ! empty( $awards_raw ) ) {
	$lines = array_filter( array_map( 'trim', explode( "\n", $awards_raw ) ) );
	foreach ( $lines as $line ) {
		// Try to parse format: "Award Title - Description"
		$parts = explode( ' - ', $line );
		$title = isset( $parts[0] ) ? trim( $parts[0] ) : '';
		$desc = isset( $parts[1] ) ? trim( $parts[1] ) : '';
		
		$awards_data[] = array(
			'title' => $title,
			'desc'  => $desc,
		);
	}
}

// Fallback matching the screenshot exactly
if ( empty( $awards_data ) ) {
	$awards_data = array(
		array(
			'title' => 'Best Pediatrician Award',
			'desc'  => 'Awarded by Health Ministry for excellence in Neonatal care, 2022.',
		),
		array(
			'title' => 'Clinical Excellence',
			'desc'  => 'Recognized for 100+ successful micro-preemie interventions.',
		),
		array(
			'title' => 'Neonatology Pioneer',
			'desc'  => 'For advancing respiratory therapy protocols in state-run units.',
		),
	);
}

// Map corresponding icons to each card
$awards_icons = array(
	0 => '<svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11" /></svg>',
	1 => '<svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" /><path stroke-linecap="round" stroke-linejoin="round" d="M8 2h8l-2 6H10L8 2z" /></svg>',
	2 => '<svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.907c.961 0 1.371 1.24.588 1.81l-3.97 2.883a1 1 0 00-.364 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.971-2.883a1 1 0 00-1.178 0l-3.97 2.883c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.364-1.118L2.98 10.1c-.783-.57-.372-1.81.588-1.81h4.908a1 1 0 00.951-.69l1.519-4.674z" /></svg>',
);
?>

<section class="py-16 bg-[#f4f6f3] border-b border-brand-cream/40">
	<div class="w-full mx-auto px-4 sm:px-6 lg:px-8 text-left">
		<div>
			<h2 class="text-3xl font-bold text-brand-dark mb-10 font-outfit">
				Awards & Recognition
			</h2>
			
			<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
				<?php foreach ( $awards_data as $index => $item ) : 
					$icon = isset( $awards_icons[ $index % 3 ] ) ? $awards_icons[ $index % 3 ] : $awards_icons[0];
					?>
					<div class="bg-white p-8 rounded-[2rem] border border-brand-cream/40 flex flex-col items-start shadow-sm hover:shadow-md transition-all">
						<div class="w-12 h-12 rounded-2xl bg-brand-red flex items-center justify-center shrink-0 mb-6">
							<?php echo $icon; ?>
						</div>
						<h3 class="text-lg font-bold text-brand-dark mb-2 font-outfit">
							<?php echo esc_html( $item['title'] ); ?>
						</h3>
						<p class="text-xs sm:text-sm text-brand-muted leading-relaxed">
							<?php echo esc_html( $item['desc'] ); ?>
						</p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<!-- CTA -->
<section class="py-16 bg-white">
	<div class="w-full mx-auto">
		
		<div class="bg-brand-red text-white p-8 sm:p-12  text-center relative overflow-hidden select-none">
			
			<div class="absolute top-0 left-0 w-24 h-24 bg-white/5 rounded-full filter blur-xl -translate-x-1/2 -translate-y-1/2"></div>
			<div class="absolute bottom-0 right-0 w-36 h-36 bg-white/5 rounded-full filter blur-2xl translate-x-1/4 translate-y-1/4"></div>

			<div class="relative z-10 max-w-2xl mx-auto">
				<h3 class="text-2xl sm:text-3xl font-extrabold font-outfit mb-3">
					Ready to consult <?php the_title(); ?>?
				</h3>
				<p class="text-white/85 text-xs sm:text-sm mb-8 leading-relaxed">
					Get expert clinical consultation for your child\'s health from one of the most trusted names in Neonatology & Pediatrics.
				</p>
				<a href="#booking-form" class="inline-flex items-center justify-center px-8 h-12 bg-white hover:bg-brand-cream text-brand-red text-xs font-bold rounded-[12px] shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
					Book Appointment Now
				</a>
			</div>
		</div>
	</div>
</section>