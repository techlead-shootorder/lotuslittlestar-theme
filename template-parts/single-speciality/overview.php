<?php
/**
 * Template part for displaying the single speciality overview section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Fetch SCF/ACF Fields
$overview_heading     = function_exists( 'get_field' ) ? get_field( 'overview_heading', $post_id ) : '';
$overview_description = function_exists( 'get_field' ) ? get_field( 'overview_description', $post_id ) : '';



// Render only if fields are not empty
if ( ! empty( $overview_heading ) || ! empty( $overview_description ) ) :
	?>
	<section class="py-16 md:py-24 lg:py-28 bg-[#F5F3F0] border-b border-brand-cream/60">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="max-w-4xl mx-auto text-center">
				
				<!-- Overview Heading -->
				<?php if ( ! empty( $overview_heading ) ) : ?>
					<h2 class="text-2xl sm:text-3xl lg:text-[38px] lg:leading-[1.25] font-bold text-brand-green mb-6 font-outfit">
						<?php echo esc_html( $overview_heading ); ?>
					</h2>
				<?php endif; ?>
				
				<!-- Overview Description -->
				<?php if ( ! empty( $overview_description ) ) : ?>
					<div class="text-brand-muted text-base sm:text-lg leading-relaxed max-w-3xl mx-auto font-normal">
						<?php echo wp_kses_post( $overview_description ); ?>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
	</section>
	<?php
endif;
