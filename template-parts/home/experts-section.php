<?php
/**
 * Template part for displaying the home page experts section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Query for first 3 doctors
$args = array(
	'post_type'      => 'doctor',
	'posts_per_page' => 3,
	'post_status'    => 'publish',
);
$doctors_query = new WP_Query( $args );
?>

<section class="py-20 bg-brand-bg relative overflow-hidden">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
			<div class="text-left max-w-2xl">
			
				<h2 class="text-3xl sm:text-4xl font-medium text-brand-dark mt-2 mb-4">
					Meet Our Experts
				</h2>
				<p class="text-brand-muted text-sm leading-relaxed">
					Trust your care to the most experienced hands in the region.
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
					$specialty = get_post_meta( get_the_ID(), '_doctor_specialty', true );
					if ( empty( $specialty ) ) {
						$specialty = 'Specialist Doctor';
					}
					?>
					<!-- CPT Doctor Card -->
					<div class="bg-white rounded-[1rem] border border-brand-cream shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group">
						<!-- Image Container -->
						<div class="aspect-[2/3] bg-brand-cream relative overflow-hidden flex items-center justify-center">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
							<?php else : ?>
								<!-- Doctor SVG outline placeholder -->
								<svg class="h-24 w-24 text-brand-coral/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
								</svg>
							<?php endif; ?>
						</div>
						
						<!-- Card Body -->
						<div class="p-8 flex flex-col flex-grow text-left">
							<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2"><?php echo esc_html( $specialty ); ?></span>
							<h3 class="text-xl font-bold text-brand-dark mb-4 group-hover:text-brand-red transition-colors"><?php the_title(); ?></h3>
							
							<div class="mt-auto pt-6 border-t border-brand-cream flex items-center justify-between">
								<a href="<?php the_permalink(); ?>" class="inline-flex items-center justify-center px-6 h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full shadow-sm hover:shadow transition-all">
									Book Now
								</a>
								<a href="<?php the_permalink(); ?>" class="text-xs font-bold text-brand-muted hover:text-brand-dark transition-colors">
									View Profile
								</a>
							</div>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				// Fallback mockup doctors matching the Figma design layout exactly!
				$fallback_doctors = array(
					array(
						'name'      => 'Dr. V.S.V. Prasad',
						'specialty' => 'Senior Consultant Neonatologist',
						'color'     => 'text-brand-red',
					),
					array(
						'name'      => 'Dr. Satish Ghanta',
						'specialty' => 'Director - Pediatric Intensive Care',
						'color'     => 'text-brand-coral',
					),
					array(
						'name'      => 'Dr. Mehul A. Shah',
						'specialty' => 'Senior Pediatric Orthopedic Surgeon',
						'color'     => 'text-brand-red',
					),
				);

				foreach ( $fallback_doctors as $index => $doc ) :
					?>
					<!-- Fallback Mockup Doctor Card -->
					<div class="bg-white rounded-[1rem] border border-brand-cream shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group">
						<!-- Image Container with unique SVG layout -->
						<div class="aspect-[4/3] bg-brand-cream relative overflow-hidden flex items-center justify-center p-8 select-none">
							<svg class="h-28 w-28 <?php echo $doc['color']; ?> opacity-75 group-hover:scale-105 transition-transform duration-300" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
								<circle cx="50" cy="35" r="18" fill="currentColor" fill-opacity="0.1"/>
								<path d="M20 85c0-15 15-22 30-22s30 7 30 22" fill="currentColor" fill-opacity="0.05" stroke-linecap="round"/>
								<!-- Stethoscope styling around -->
								<path d="M35 55c0 8 10 15 15 15s15-7 15-15" stroke-dasharray="2 2" stroke-linecap="round"/>
							</svg>
						</div>
						
						<!-- Card Body -->
						<div class="p-8 flex flex-col flex-grow text-left">
							<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2"><?php echo esc_html( $doc['specialty'] ); ?></span>
							<h3 class="text-xl font-bold text-brand-dark mb-4 group-hover:text-brand-red transition-colors"><?php echo esc_html( $doc['name'] ); ?></h3>
							
							<div class="mt-auto pt-6 border-t border-brand-cream flex items-center justify-between">
								<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="inline-flex items-center justify-center px-6 w-full h-11 bg-white border border-brand-red text-brand-red text-xs font-bold rounded-[4px] shadow-sm hover:shadow transition-all">
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
	</div>
</section>
