<?php
/**
 * Template part for displaying the single speciality Diagnosis & Evaluation section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Fetch SCF/ACF Fields
$diagnosis_heading     = function_exists( 'get_field' ) ? get_field( 'diagnosis_heading', $post_id ) : '';
$diagnosis_description = function_exists( 'get_field' ) ? get_field( 'diagnosis_description', $post_id ) : '';
$diagnosis_image       = function_exists( 'get_field' ) ? get_field( 'diagnosis_image', $post_id ) : null;
$diagnosis_steps       = function_exists( 'get_field' ) ? get_field( 'diagnosis_steps', $post_id ) : null;

$has_steps = ! empty( $diagnosis_steps ) && is_array( $diagnosis_steps );
$has_image = ! empty( $diagnosis_image );

// Hide section if everything is empty
if ( empty( $diagnosis_heading ) && empty( $diagnosis_description ) && ! $has_steps && ! $has_image ) {
	return;
}

// Column classes based on image presence
if ( $has_image ) {
	$left_col_class  = 'lg:col-span-7';
	$right_col_class = 'lg:col-span-5';
} else {
	$left_col_class  = 'lg:col-span-12';
	$right_col_class = 'hidden';
}

// Resolve Image URL & Alt
$image_url = '';
$image_alt = '';
if ( $has_image ) {
	if ( is_array( $diagnosis_image ) ) {
		$image_url = ! empty( $diagnosis_image['url'] ) ? $diagnosis_image['url'] : '';
		$image_alt = ! empty( $diagnosis_image['alt'] ) ? $diagnosis_image['alt'] : get_the_title( $post_id );
	} elseif ( is_numeric( $diagnosis_image ) ) {
		$image_url = wp_get_attachment_url( $diagnosis_image );
		$image_alt = get_post_meta( $diagnosis_image, '_wp_attachment_image_alt', true );
	} elseif ( is_string( $diagnosis_image ) ) {
		$image_url = $diagnosis_image;
		$image_alt = get_the_title( $post_id );
	}
}
?>

<section class="py-16 md:py-24 bg-brand-bg border-b border-brand-cream/60">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="bg-brand-green rounded-[2.5rem] p-8 md:p-12 lg:p-16 text-white shadow-xl overflow-hidden">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
				
				<!-- Left Column: Heading, Description, Steps -->
				<div class="<?php echo esc_attr( $left_col_class ); ?> flex flex-col items-start text-left order-1 lg:order-1">
					
					<!-- Heading -->
					<?php if ( ! empty( $diagnosis_heading ) ) : ?>
						<h2 class="text-3xl sm:text-4xl lg:text-[46px] lg:leading-[1.15] font-bold font-outfit mb-6 text-left">
							<?php echo esc_html( $diagnosis_heading ); ?>
						</h2>
					<?php endif; ?>
					
					<!-- Description -->
					<?php if ( ! empty( $diagnosis_description ) ) : ?>
						<div class="text-white/80 text-base sm:text-lg leading-relaxed mb-10 max-w-xl">
							<?php echo wp_kses_post( $diagnosis_description ); ?>
						</div>
					<?php endif; ?>
					
					<!-- Diagnosis Steps Grid -->
					<?php if ( $has_steps ) : ?>
						<div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-8 w-full">
							<?php 
							foreach ( $diagnosis_steps as $item ) : 
								$step_num  = ! empty( $item['step_number'] ) ? $item['step_number'] : '';
								$step_title = ! empty( $item['step_title'] ) ? $item['step_title'] : '';
								$step_desc  = ! empty( $item['step_description'] ) ? $item['step_description'] : '';
								
								if ( empty( $step_num ) && empty( $step_title ) && empty( $step_desc ) ) {
									continue;
								}
								?>
								<div class="text-left">
									<?php if ( ! empty( $step_num ) ) : ?>
										<div class="font-outfit text-3xl sm:text-4xl font-bold text-[#E2A293] mb-2 leading-none">
											<?php echo esc_html( $step_num ); ?>
										</div>
									<?php endif; ?>
									
									<?php if ( ! empty( $step_title ) ) : ?>
										<h3 class="font-outfit text-sm sm:text-base font-bold text-white uppercase tracking-wider mb-2">
											<?php echo esc_html( $step_title ); ?>
										</h3>
									<?php endif; ?>
									
									<?php if ( ! empty( $step_desc ) ) : ?>
										<p class="text-white/70 text-xs sm:text-sm leading-relaxed font-normal">
											<?php echo esc_html( $step_desc ); ?>
										</p>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					
				</div>
				
				<!-- Right Column: Diagnosis Image in Circular Frame -->
				<?php if ( $has_image && ! empty( $image_url ) ) : ?>
					<div class="<?php echo esc_attr( $right_col_class ); ?> flex justify-center items-center order-2 lg:order-2">
						<div class="w-64 h-64 sm:w-80 sm:h-80 md:w-[360px] md:h-[360px] rounded-full border-[16px] md:border-[20px] border-[#4E5A4E]/65 overflow-hidden shadow-xl shrink-0">
							<img src="<?php echo esc_url( $image_url ); ?>" 
								 alt="<?php echo esc_attr( $image_alt ); ?>" 
								 class="w-full h-full object-cover select-none pointer-events-none"
								 loading="lazy">
						</div>
					</div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>
