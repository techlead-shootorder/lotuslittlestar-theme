<?php
/**
 * Template part for displaying the home page special care section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch header fields
$special_care_heading     = function_exists( 'get_field' ) ? get_field( 'special_care_heading' ) : '';
$special_care_description = function_exists( 'get_field' ) ? get_field( 'special_care_description' ) : '';

if ( empty( $special_care_heading ) ) {
	$special_care_heading = __( 'Specialized Care Wings', 'lotus' );
}
if ( empty( $special_care_description ) ) {
	$special_care_description = __( 'Providing a full spectrum of healthcare services tailored specifically for women and children.', 'lotus' );
}

// Fetch the repeater cards data
$cards_data = function_exists( 'get_field' ) ? get_field( 'special_care_section_cards' ) : null;

// Fallback static cards data
$fallback_cards = array(
	array(
		'heading'          => __( 'Maternity Care', 'lotus' ),
		'description'      => __( 'Comprehensive pregnancy care, prenatal classes, and state-of-the-art labor rooms for a safe delivery experience.', 'lotus' ),
		'icon_url'         => get_stylesheet_directory_uri() . '/assets/maternity.svg',
		'background_color' => 'bg-[#FDFBF7]',
	),
	array(
		'heading'          => __( 'Neonatal NICU', 'lotus' ),
		'description'      => __( 'Level III Neonatal Intensive Care Unit (NICU) with advanced life support systems for premature and critically ill newborns.', 'lotus' ),
		'icon_url'         => get_stylesheet_directory_uri() . '/assets/neonatal NICU.svg',
		'background_color' => 'bg-[#F1F4F0]',
	),
	array(
		'heading'          => __( 'Pediatric Care', 'lotus' ),
		'description'      => __( 'Dedicated medical services for infants, children, and adolescents, including vaccinations and general health check-ups.', 'lotus' ),
		'icon_url'         => get_stylesheet_directory_uri() . '/assets/pediatric-care.svg',
		'background_color' => 'bg-[#FDFBF7]',
	),
	array(
		'heading'          => __( 'Pediatric Nephrology', 'lotus' ),
		'description'      => __( 'Specialized diagnosis and treatment for children with kidney disorders, led by experienced pediatric nephrologists.', 'lotus' ),
		'icon_url'         => get_stylesheet_directory_uri() . '/assets/pediatric-nephrology.svg',
		'background_color' => 'bg-[#F1F4F0]',
	),
	array(
		'heading'          => __( 'Developmental Pediatrics', 'lotus' ),
		'description'      => __( 'Assessing and supporting children with developmental delays, behavioral challenges, and learning disorders.', 'lotus' ),
		'icon_url'         => get_stylesheet_directory_uri() . '/assets/developmental.svg',
		'background_color' => 'bg-[#FDFBF7]',
	),
	array(
		'heading'          => __( 'Pediatric Super Specialty', 'lotus' ),
		'description'      => __( 'Comprehensive surgical and medical care across advanced pediatric sub-specialties.', 'lotus' ),
		'icon_url'         => get_stylesheet_directory_uri() . '/assets/super speciality.svg',
		'background_color' => 'bg-[#F1F4F0]',
	),
);

$processed_cards = array();
if ( is_array( $cards_data ) && ! empty( $cards_data ) ) {
	foreach ( $cards_data as $index => $item ) {
		// Heading
		$heading = '';
		if ( isset( $item['special_care_card_heading'] ) ) {
			$heading = $item['special_care_card_heading'];
		} elseif ( isset( $item['heading'] ) ) {
			$heading = $item['heading'];
		}
		
		// Description
		$description = '';
		if ( isset( $item['special_care_card_description'] ) ) {
			$description = $item['special_care_card_description'];
		} elseif ( isset( $item['description'] ) ) {
			$description = $item['description'];
		}
		
		// Icon
		$icon = null;
		if ( isset( $item['special_care_card_icon'] ) ) {
			$icon = $item['special_care_card_icon'];
		} elseif ( isset( $item['icon'] ) ) {
			$icon = $item['icon'];
		}
		
		// Background Color
		$bg_color = '';
		if ( isset( $item['special_care_card_background'] ) ) {
			$bg_color = $item['special_care_card_background'];
		} elseif ( isset( $item['special_care_card_background_color'] ) ) {
			$bg_color = $item['special_care_card_background_color'];
		} elseif ( isset( $item['background_color'] ) ) {
			$bg_color = $item['background_color'];
		} elseif ( isset( $item['background'] ) ) {
			$bg_color = $item['background'];
		}
		
		$bg_style = '';
		$bg_class = '';
		if ( empty( $bg_color ) ) {
			$bg_class = ( $index % 2 === 0 ) ? 'bg-[#FDFBF7]' : 'bg-[#F1F4F0]';
		} else {
			$bg_color = trim( $bg_color );
			if ( strpos( $bg_color, '#' ) === 0 || strpos( $bg_color, 'rgb' ) === 0 || preg_match( '/^[A-Fa-f0-9]{6}$|^[A-Fa-f0-9]{3}$/', $bg_color ) ) {
				$hex_prefix = ( strpos( $bg_color, '#' ) !== 0 && strpos( $bg_color, 'rgb' ) !== 0 ) ? '#' : '';
				$bg_style = 'background-color: ' . $hex_prefix . $bg_color . ';';
			} else {
				$bg_class = $bg_color;
			}
		}
		
		// Process Icon URL and Alt
		$icon_url = '';
		$icon_alt = $heading;
		if ( ! empty( $icon ) ) {
			if ( is_array( $icon ) && ! empty( $icon['url'] ) ) {
				$icon_url = $icon['url'];
				if ( ! empty( $icon['alt'] ) ) {
					$icon_alt = $icon['alt'];
				}
			} elseif ( is_string( $icon ) ) {
				$icon_url = $icon;
			}
		}
		
		if ( ! empty( $heading ) ) {
			$processed_cards[] = array(
				'heading'     => $heading,
				'description' => $description,
				'icon_url'    => $icon_url,
				'icon_alt'    => $icon_alt,
				'bg_class'    => $bg_class,
				'bg_style'    => $bg_style,
			);
		}
	}
}

// Fallback to default cards if no repeater data exists
if ( empty( $processed_cards ) ) {
	foreach ( $fallback_cards as $fallback ) {
		$processed_cards[] = array(
			'heading'     => $fallback['heading'],
			'description' => $fallback['description'],
			'icon_url'    => $fallback['icon_url'],
			'icon_alt'    => $fallback['heading'],
			'bg_class'    => $fallback['background_color'],
			'bg_style'    => '',
		);
	}
}
?>

<section class="py-20 bg-brand-cream border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="text-center max-w-3xl mx-auto mb-16">
			<h2 class="text-3xl sm:text-4xl font-medium text-brand-dark tracking-tight mb-4 font-outfit">
				<?php echo esc_html( $special_care_heading ); ?>
			</h2>
			<p class="text-brand-muted text-base sm:text-base leading-relaxed max-w-2xl mx-auto">
				<?php echo esc_html( $special_care_description ); ?>
			</p>
		</div>

		<!-- Services Grid -->
		<?php if ( ! empty( $processed_cards ) ) : ?>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
				<?php foreach ( $processed_cards as $card ) : ?>
					<div class="group relative overflow-hidden <?php echo esc_attr( $card['bg_class'] ); ?> p-10 border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[320px] bg-cover bg-center"<?php echo ! empty( $card['bg_style'] ) ? ' style="' . esc_attr( $card['bg_style'] ) . '"' : ''; ?>>
						<div class="w-full relative z-10">
							<!-- Icon container -->
							<?php if ( ! empty( $card['icon_url'] ) ) : ?>
								<div class="bg-white p-3 rounded-full inline-flex items-center justify-center mb-6 shadow-sm">
									<img src="<?php echo esc_url( $card['icon_url'] ); ?>" alt="<?php echo esc_attr( $card['icon_alt'] ); ?>" class="h-10 w-10 object-contain">
								</div>
							<?php endif; ?>
							<h3 class="text-2xl font-medium text-brand-dark mb-4 font-outfit"><?php echo esc_html( $card['heading'] ); ?></h3>
							<div class="text-brand-dark text-base leading-relaxed mb-6">
								<?php echo wp_kses_post( $card['description'] ); ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
