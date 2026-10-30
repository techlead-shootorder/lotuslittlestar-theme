<?php
/**
 * Template part for displaying the about page mission section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch SCF Fields
$legacy_left_image          = function_exists( 'get_field' ) ? get_field( 'legacy_left_image' ) : null;
$legacy_badge_text          = function_exists( 'get_field' ) ? get_field( 'legacy_badge_text' ) : '';
$legacy_badge_years         = function_exists( 'get_field' ) ? get_field( 'legacy_badge_years' ) : '';
$legacy_section_heading     = function_exists( 'get_field' ) ? get_field( 'legacy_section_heading' ) : '';
$legacy_section_description = function_exists( 'get_field' ) ? get_field( 'legacy_section_description' ) : '';
$highlights_heading         = function_exists( 'get_field' ) ? get_field( 'highlights_heading' ) : '';
$highlight_section_items    = function_exists( 'get_field' ) ? get_field( 'highlight_section_items' ) : null;

// Left Image processing
$left_image_url = 'http://lotuslittlestars.in/wp-content/uploads/2026/06/about-left-new-scaled.jpeg';
if ( ! empty( $legacy_left_image ) ) {
	if ( is_array( $legacy_left_image ) && ! empty( $legacy_left_image['url'] ) ) {
		$left_image_url = $legacy_left_image['url'];
	} elseif ( is_string( $legacy_left_image ) ) {
		$left_image_url = $legacy_left_image;
	}
}

// Badge
if ( empty( $legacy_badge_text ) ) {
	$legacy_badge_text = __( 'Accredited', 'lotus' );
}
if ( empty( $legacy_badge_years ) ) {
	$legacy_badge_years = __( '35+ Years', 'lotus' );
}

// Right column content
if ( empty( $legacy_section_heading ) ) {
	$legacy_section_heading = __( 'About Lotus Little Stars', 'lotus' );
}
if ( empty( $legacy_section_description ) ) {
	$legacy_section_description = '<p class="text-brand-muted text-base leading-relaxed mb-6">' . __( 'At Lotus Little Stars, we are dedicated to providing exceptional healthcare for women, newborns, and children through every stage of life. From advanced maternity and gynecological care to specialized neonatology and pediatric services, we combine clinical excellence, innovation, and compassionate care to deliver the best outcomes for every family.', 'lotus' ) . '</p><p class="text-brand-muted text-base leading-relaxed mb-8">' . __( 'With <span class="font-bold text-brand-red">220+ beds, state-of-the-art facilities</span> and a family-centered approach, we provide world-class healthcare across our locations in Banjara Hills and Rajahmundry.', 'lotus' ) . '</p>';
}

// Highlights heading
if ( empty( $highlights_heading ) ) {
	$highlights_heading = __( 'Why Families Trust Lotus Little Stars', 'lotus' );
}

// Highlights list loop
$processed_highlights = array();
if ( is_array( $highlight_section_items ) && ! empty( $highlight_section_items ) ) {
	foreach ( $highlight_section_items as $item ) {
		$text = '';
		if ( is_array( $item ) ) {
			if ( ! empty( $item['highlight_item'] ) ) {
				$text = $item['highlight_item'];
			} elseif ( ! empty( $item['item'] ) ) {
				$text = $item['item'];
			} elseif ( ! empty( $item['title'] ) ) {
				$text = $item['title'];
			} elseif ( ! empty( $item['text'] ) ) {
				$text = $item['text'];
			} elseif ( ! empty( $item['name'] ) ) {
				$text = $item['name'];
			}
		} elseif ( is_string( $item ) ) {
			$text = $item;
		}

		if ( ! empty( $text ) ) {
			$processed_highlights[] = $text;
		}
	}
}

if ( empty( $processed_highlights ) ) {
	$processed_highlights = array(
		__( 'World-Class Infrastructure', 'lotus' ),
		__( 'Advanced Medical Technology', 'lotus' ),
		__( 'Expert Women & Child Specialists', 'lotus' ),
		__( 'Comprehensive Care Under One Roof', 'lotus' ),
	);
}
?>

<section class="py-20 bg-white border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
			
			<!-- Graphic Column (Left) -->
			<div class="lg:col-span-5 flex justify-center order-last lg:order-first">
				<div class="relative w-full max-w-md">
					<div class="absolute -inset-4 bg-brand-coral/10 rounded-[2rem] transform -rotate-2 -z-10"></div>
					<img src="<?php echo esc_url( $left_image_url ); ?>" alt="<?php echo esc_attr( $legacy_section_heading ); ?>" class="relative z-10 w-full h-[300px] rounded-3xl shadow-lg object-cover">
					
					<!-- Accreditation Badge overlaying the bottom-right -->
					<div class="absolute bottom-4 right-4 md:-bottom-4 md:-right-4 bg-[#5E6D62] border-4 border-white rounded-2xl py-3 px-5 shadow-xl flex items-center gap-3 z-20">
						<div class="flex-shrink-0">
							<svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
							</svg>
						</div>
						<div class="text-left">
							<span class="block text-[10px] font-semibold text-white/80 uppercase tracking-wider leading-none mb-1"><?php echo esc_html( $legacy_badge_text ); ?></span>
							<span class="block text-base sm:text-lg font-bold font-outfit text-white leading-tight"><?php echo esc_html( $legacy_badge_years ); ?></span>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Content Column (Right) -->
			<div class="lg:col-span-7 text-left">
				
				<h2 class="text-3xl sm:text-4xl font-medium text-brand-dark mt-2 mb-6">
					<?php echo esc_html( $legacy_section_heading ); ?>
				</h2>
				
				<div class="text-brand-muted text-base leading-relaxed legacy-description mb-8">
					<?php echo wp_kses_post( $legacy_section_description ); ?>
				</div>
				
				<div>
					<h4 class="text-2xl font-medium text-brand-green mt-2 mb-6">
						<?php echo esc_html( $highlights_heading ); ?>
					</h4>
				</div>
				
				<!-- Highlights Grid -->
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 text-brand-muted text-sm sm:text-base font-semibold">
					<?php foreach ( $processed_highlights as $highlight ) : ?>
						<div class="flex items-center gap-3">
							<svg class="h-6 w-6 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<span class="text-brand-muted"><?php echo esc_html( $highlight ); ?></span>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

		</div>
	</div>
</section>
