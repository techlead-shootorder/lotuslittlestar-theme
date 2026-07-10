<?php
/**
 * Template part for displaying the single speciality Conditions & Symptoms section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Fetch SCF/ACF Fields
$conditions_heading   = function_exists( 'get_field' ) ? get_field( 'conditions_heading', $post_id ) : '';
$conditions_list      = function_exists( 'get_field' ) ? get_field( 'conditions_list', $post_id ) : null;
$symptoms_heading     = function_exists( 'get_field' ) ? get_field( 'symptoms_heading', $post_id ) : '';
$symptoms_list        = function_exists( 'get_field' ) ? get_field( 'symptoms_list', $post_id ) : null;
$symptoms_footer_text = function_exists( 'get_field' ) ? get_field( 'symptoms_footer_text', $post_id ) : '';

// Logic for conditional column spans
$has_conditions = ! empty( $conditions_list ) && is_array( $conditions_list );
$has_symptoms   = ! empty( $symptoms_list ) && is_array( $symptoms_list );

if ( $has_conditions && $has_symptoms ) {
	$left_col_class  = 'lg:col-span-8';
	$right_col_class = 'lg:col-span-4';
} elseif ( $has_conditions ) {
	$left_col_class  = 'lg:col-span-12';
	$right_col_class = 'hidden';
} elseif ( $has_symptoms ) {
	$left_col_class  = 'hidden';
	$right_col_class = 'lg:col-span-6 lg:col-start-4';
} else {
	return; // Hide section if both are empty
}
?>

<section class="py-16 md:py-24 bg-white border-b border-brand-cream/60">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
			
			<!-- Left Column: Conditions We Treat -->
			<?php if ( $has_conditions ) : ?>
				<div class="<?php echo esc_attr( $left_col_class ); ?> bg-[#EBECE8]/50 rounded-[2rem] p-8 md:p-12 flex flex-col justify-center border border-[#EBE8E2]/60 shadow-sm">
					
					<!-- Heading -->
					<?php if ( ! empty( $conditions_heading ) ) : ?>
						<h2 class="text-2xl sm:text-3xl font-bold text-brand-green font-outfit mb-8 text-left leading-tight">
							<?php echo esc_html( $conditions_heading ); ?>
						</h2>
					<?php endif; ?>
					
					<!-- List of Conditions -->
					<ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-5 text-brand-dark">
						<?php 
						foreach ( $conditions_list as $item ) : 
							$condition_text = ! empty( $item['condition'] ) ? $item['condition'] : '';
							if ( empty( $condition_text ) ) {
								continue;
							}
							?>
							<li class="flex items-start gap-3 text-base font-medium leading-relaxed">
								<!-- Check-circle Icon -->
								<span class="shrink-0 text-brand-green mt-0.5 select-none">
									<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
										<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" />
										<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
									</svg>
								</span>
								<span>
									<?php echo esc_html( $condition_text ); ?>
								</span>
							</li>
						<?php endforeach; ?>
					</ul>
					
				</div>
			<?php endif; ?>
			
			<!-- Right Column: Symptoms Sidebar Card -->
			<?php if ( $has_symptoms ) : ?>
				<div class="<?php echo esc_attr( $right_col_class ); ?> bg-brand-red rounded-[2rem] p-8 md:p-10 text-white shadow-lg flex flex-col justify-between">
					
					<div>
						<!-- Warning Icon -->
						<div class="mb-6 select-none">
							<svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
								<path d="M12 2L2 22h20L12 2zm1 14h-2v-2h2v2zm0-4h-2V8h2v4z"/>
							</svg>
						</div>
						
						<!-- Heading -->
						<?php if ( ! empty( $symptoms_heading ) ) : ?>
							<h3 class="text-xl sm:text-2xl font-bold font-outfit mb-8 leading-snug text-left">
								<?php echo esc_html( $symptoms_heading ); ?>
							</h3>
						<?php endif; ?>
						
						<!-- List of Symptoms -->
						<div class="flex flex-col gap-4 mb-8">
							<?php 
							foreach ( $symptoms_list as $item ) : 
								$symptom_text = ! empty( $item['symptom'] ) ? $item['symptom'] : '';
								if ( empty( $symptom_text ) ) {
									continue;
								}
								?>
								<div class="bg-[#F0D5D7] text-[#8B141B] font-bold text-sm sm:text-base px-5 py-4 rounded-2xl shadow-sm flex items-center gap-3 select-none leading-tight">
									<span class="shrink-0 text-xl leading-none font-bold select-none">•</span>
									<span>
										<?php echo esc_html( $symptom_text ); ?>
									</span>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					
					<!-- Footer Text -->
					<?php if ( ! empty( $symptoms_footer_text ) ) : ?>
						<p class="text-white/85 text-xs sm:text-sm leading-relaxed text-left font-normal border-t border-white/20 pt-6 mt-auto">
							<?php echo esc_html( $symptoms_footer_text ); ?>
						</p>
					<?php endif; ?>
					
				</div>
			<?php endif; ?>
			
		</div>
	</div>
</section>
