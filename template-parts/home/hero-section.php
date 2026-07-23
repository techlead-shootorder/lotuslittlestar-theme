<?php
/**
 * Template part for displaying the home page hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch ACF Fields
$hero_badge            = get_field( 'hero_badge' );
$hero_heading          = get_field( 'hero_heading' );
$hero_description      = get_field( 'hero_description' );
$hero_primary_button   = get_field( 'hero_primary_button' );
$hero_secondary_button = get_field( 'hero_secondary_button' );
$hero_bg_image         = get_field( 'hero_background_image' );

// Process Background Image
$bg_image_url = '';
if ( is_array( $hero_bg_image ) && ! empty( $hero_bg_image['url'] ) ) {
	$bg_image_url = $hero_bg_image['url'];
}
?>

<section class="relative overflow-hidden h-screen lg:h-auto lg:min-h-[600px] flex items-center border-b border-brand-cream">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat -z-20" style="<?php echo ! empty( $bg_image_url ) ? 'background-image: url(\'' . esc_url( $bg_image_url ) . '\');' : ''; ?>"></div>
	
	<!-- Overlay Gradient to ensure text readability -->
	<div class="absolute inset-0 bg-white/65 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/65 sm:via-white/60 sm:to-transparent -z-10"></div>

	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
			<!-- Text Content Column -->
			<div class="lg:col-span-8 flex flex-col items-start text-left">
				
				<?php if ( ! empty( $hero_badge ) ) : ?>
					<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-brand-red/5 text-brand-red border border-brand-red/30 mb-5">
						<?php echo esc_html( $hero_badge ); ?>
					</span>
				<?php endif; ?>
				
				<?php if ( ! empty( $hero_heading ) ) : ?>
					<h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-brand-dark leading-[1.15] mb-6">
						<?php echo wp_kses_post( $hero_heading ); ?>
					</h1>
				<?php endif; ?>
				
				<?php if ( ! empty( $hero_description ) ) : ?>
					<div class="text-brand-muted text-base sm:text-lg leading-relaxed mb-8 max-w-2xl">
						<?php echo wp_kses_post( $hero_description ); ?>
					</div>
				<?php endif; ?>
				
				<?php
				$has_primary   = is_array( $hero_primary_button ) && ! empty( $hero_primary_button['url'] );
				$has_secondary = is_array( $hero_secondary_button ) && ! empty( $hero_secondary_button['url'] );

				if ( $has_primary || $has_secondary ) :
					?>
					<div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
						<?php
						if ( $has_primary ) :
							$primary_target = ! empty( $hero_primary_button['target'] ) ? $hero_primary_button['target'] : '_self';
							$primary_rel    = '_blank' === $primary_target ? ' rel="noopener"' : '';
							$primary_url    = $hero_primary_button['url'];
							if ( empty( $primary_url ) || false !== strpos( $primary_url, 'contact-us' ) ) {
								$primary_url = '#booking-form';
							}
							?>
							<a href="<?php echo esc_url( $primary_url ); ?>" target="<?php echo esc_attr( $primary_target ); ?>"<?php echo $primary_rel; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-red-hover text-white font-semibold rounded-[4px] shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 text-base">
								<?php echo esc_html( ! empty( $hero_primary_button['title'] ) ? $hero_primary_button['title'] : __( 'Book Appointment', 'lotus' ) ); ?>
							</a>
						<?php endif; ?>

						<?php
						if ( $has_secondary ) :
							$secondary_target = ! empty( $hero_secondary_button['target'] ) ? $hero_secondary_button['target'] : '_self';
							$secondary_rel    = '_blank' === $secondary_target ? ' rel="noopener"' : '';
							?>
							<a href="<?php echo esc_url( $hero_secondary_button['url'] ); ?>" target="<?php echo esc_attr( $secondary_target ); ?>"<?php echo $secondary_rel; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="inline-flex items-center justify-center px-6 h-12 bg-white hover:bg-brand-cream text-brand-red border-2 border-brand-red font-semibold rounded-[4px] shadow-sm hover:shadow-md transform hover:-translate-y-0.5 transition-all duration-200 text-base">
								<?php echo esc_html( ! empty( $hero_secondary_button['title'] ) ? $hero_secondary_button['title'] : __( 'Meet Our Doctors', 'lotus' ) ); ?>
							</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
			
			<!-- Empty Column to leave space for background image on desktop -->
			<div class="hidden lg:block lg:col-span-5"></div>
		</div>
	</div>
</section>
