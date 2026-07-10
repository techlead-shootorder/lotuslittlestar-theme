<?php
/**
 * Template part for displaying the single speciality hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Fetch SCF/ACF Fields
$speciality_hero_badge       = function_exists( 'get_field' ) ? get_field( 'speciality_hero_badge', $post_id ) : '';
$speciality_hero_description = function_exists( 'get_field' ) ? get_field( 'speciality_hero_description', $post_id ) : '';
$hero_primary_button         = function_exists( 'get_field' ) ? get_field( 'hero_primary_button', $post_id ) : null;
$hero_secondary_button       = function_exists( 'get_field' ) ? get_field( 'hero_secondary_button', $post_id ) : null;

// Post title
$hero_title = get_the_title( $post_id );



// Check if buttons are valid (support both ACF Link Array and Link URL string formats)
$has_primary   = ( is_array( $hero_primary_button ) && ! empty( $hero_primary_button['url'] ) ) || ( is_string( $hero_primary_button ) && ! empty( trim( $hero_primary_button ) ) );
$has_secondary = ( is_array( $hero_secondary_button ) && ! empty( $hero_secondary_button['url'] ) ) || ( is_string( $hero_secondary_button ) && ! empty( trim( $hero_secondary_button ) ) );
?>

<section class="py-12 md:py-20 lg:py-24 bg-brand-bg overflow-hidden border-b border-brand-cream/60">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
			
			<!-- Left Column: Content -->
			<div class="lg:col-span-7 flex flex-col items-start text-left order-1 lg:order-1">
				
				<!-- Badge -->
				<?php if ( ! empty( $speciality_hero_badge ) ) : ?>
					<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold tracking-wider text-brand-red border border-brand-red/30 bg-brand-red/5 uppercase mb-6 select-none font-outfit">
						<?php echo esc_html( $speciality_hero_badge ); ?>
					</span>
				<?php endif; ?>
				
				<!-- Heading (Post Title) -->
				<?php if ( ! empty( $hero_title ) ) : ?>
					<h1 class="text-3xl sm:text-4xl lg:text-[46px] lg:leading-[1.15] font-bold text-brand-green mb-6 font-outfit">
						<?php echo esc_html( $hero_title ); ?>
					</h1>
				<?php endif; ?>
				
				<!-- Description -->
				<?php if ( ! empty( $speciality_hero_description ) ) : ?>
					<div class="text-brand-muted text-base sm:text-lg leading-relaxed mb-8 max-w-2xl font-normal">
						<?php echo wp_kses_post( $speciality_hero_description ); ?>
					</div>
				<?php endif; ?>
				
				<!-- Buttons -->
				<?php if ( $has_primary || $has_secondary ) : ?>
					<div class="flex flex-wrap items-center gap-4 w-full sm:w-auto">
						
						<!-- Primary Button -->
						<?php
						if ( $has_primary ) :
							if ( is_array( $hero_primary_button ) ) {
								$primary_url    = $hero_primary_button['url'];
								$primary_target = ! empty( $hero_primary_button['target'] ) ? $hero_primary_button['target'] : '_self';
								$primary_title  = ! empty( $hero_primary_button['title'] ) ? $hero_primary_button['title'] : __( 'Book Appointment', 'lotus' );
							} else {
								$primary_url    = $hero_primary_button;
								$primary_target = '_self';
								$primary_title  = __( 'Book Appointment', 'lotus' );
							}
							$primary_rel = '_blank' === $primary_target ? ' rel="noopener"' : '';
							?>
							<a href="<?php echo esc_url( $primary_url ); ?>" 
							   target="<?php echo esc_attr( $primary_target ); ?>" 
							   <?php echo $primary_rel; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							   class="inline-flex items-center justify-center px-6 py-3.5 bg-brand-red hover:bg-brand-red-hover text-white font-bold rounded-lg shadow-md hover:shadow-lg transition-all duration-200 text-sm sm:text-base leading-none">
								<?php echo esc_html( $primary_title ); ?>
							</a>
						<?php endif; ?>
						
						<!-- Secondary Button -->
						<?php
						if ( $has_secondary ) :
							if ( is_array( $hero_secondary_button ) ) {
								$secondary_url    = $hero_secondary_button['url'];
								$secondary_target = ! empty( $hero_secondary_button['target'] ) ? $hero_secondary_button['target'] : '_self';
								$secondary_title  = ! empty( $hero_secondary_button['title'] ) ? $hero_secondary_button['title'] : __( 'Explore Services', 'lotus' );
							} else {
								$secondary_url    = $hero_secondary_button;
								$secondary_target = '_self';
								$secondary_title  = __( 'Explore Services', 'lotus' );
							}
							$secondary_rel = '_blank' === $secondary_target ? ' rel="noopener"' : '';
							?>
							<a href="<?php echo esc_url( $secondary_url ); ?>" 
							   target="<?php echo esc_attr( $secondary_target ); ?>" 
							   <?php echo $secondary_rel; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							   class="inline-flex items-center justify-center px-6 py-3.5 border border-brand-red hover:bg-brand-red/5 text-brand-red font-bold rounded-lg transition-all duration-200 text-sm sm:text-base leading-none">
								<?php echo esc_html( $secondary_title ); ?>
							</a>
						<?php endif; ?>
						
					</div>
				<?php endif; ?>
				
			</div>
			
			<!-- Right Column: Featured Image -->
			<div class="lg:col-span-5 relative z-10 flex justify-center items-center order-2 lg:order-2">
				<?php if ( has_post_thumbnail( $post_id ) ) : ?>
					<div class="relative w-full max-w-md lg:max-w-none">
						<!-- Decorative circular background shape -->
						<div class="absolute -bottom-6 -left-6 w-48 h-48 sm:w-60 sm:h-60 rounded-full bg-[#E5E9E1]/85 -z-10"></div>
						
						<!-- Featured Image Container -->
						<div class="aspect-[4/3] w-full rounded-[2.5rem] overflow-hidden shadow-xl bg-brand-cream/30">
							<?php 
							the_post_thumbnail( 
								'large', 
								array( 
									'class' => 'w-full h-full object-cover',
									'alt'   => get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true ) ? get_post_meta( get_post_thumbnail_id( $post_id ), '_wp_attachment_image_alt', true ) : $hero_title
								) 
							); 
							?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			
		</div>
	</div>
</section>
