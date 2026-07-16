<?php
/**
 * Reusable Doctor Card Component
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Extract arguments
$is_grid         = ! empty( $args['is_grid'] ) 
                   || ( function_exists( 'is_post_type_archive' ) && is_post_type_archive( 'doctor' ) )
                   || ( function_exists( 'is_page' ) && ( is_page( 'doctors' ) || is_page( 'specialists' ) ) )
                   || ( isset( $_SERVER['REQUEST_URI'] ) && ( preg_match( '#/doctors(\?|/|$)#', $_SERVER['REQUEST_URI'] ) || preg_match( '#/specialists(\?|/|$)#', $_SERVER['REQUEST_URI'] ) ) && strpos( $_SERVER['REQUEST_URI'], '/doctors/dr-' ) === false );
$fallback_doctor = ! empty( $args['fallback_doctor'] ) ? $args['fallback_doctor'] : null;
$max_width_class = isset( $args['max_width'] ) ? $args['max_width'] : '';

// Resolve values based on whether it is fallback or a custom post
if ( $fallback_doctor ) {
	$name       = $fallback_doctor['name'];
	$specialty  = $fallback_doctor['specialty'];
	$department = isset( $fallback_doctor['department'] ) ? $fallback_doctor['department'] : 'Pediatrics';
	$experience = isset( $fallback_doctor['experience'] ) ? $fallback_doctor['experience'] : '10+ Yrs';
	$permalink  = isset( $fallback_doctor['permalink'] ) ? $fallback_doctor['permalink'] : home_url( '/doctors/' );
	
	// Map locations and filter types for mockups
	$location = 'Hyderabad';
	$filter   = 'child care';
	if ( strpos( $name, 'Sharma' ) !== false || strpos( $name, 'Srinivas' ) !== false ) {
		$location = 'Rajahmundry';
	}
	if ( strpos( $name, 'Roopa' ) !== false || strpos( $name, 'Sharma' ) !== false ) {
		$filter = 'Woman care';
	}
	
	// Clean overrides to match standard designations
	if ( strpos( $name, 'Satish Ghanta' ) !== false ) {
		$specialty     = 'Neonatology | Pediatrics | PICU';
		$qualification = 'MD (Pediatrics)';
		$designation   = 'Director – Neonatal & Pediatric Intensive Care Services';
		$experience    = '32+ Years Experience';
	} elseif ( strpos( $name, 'V.S.V. Prasad' ) !== false ) {
		$specialty     = 'Neonatology | Pediatrics';
		$qualification = 'MD Pediatrics (AIIMS, New Delhi), FRCPCH (UK)';
		$designation   = 'Managing Director – Neonatology & Pediatrics';
		$experience    = '35+ Years Experience';
	} elseif ( strpos( $name, 'Mehul' ) !== false ) {
		$specialty     = 'Pediatrics & Nephrology';
		$qualification = 'MD(PED), DCH(BOM), MD(USA), DABPN(USA)';
		$designation   = 'Senior Consultant – Pediatric Nephrology';
		$experience    = '30+ Years Experience';
	} elseif ( strpos( $name, 'Roopa' ) !== false ) {
		$specialty     = 'Gynecology & Obstetrics';
		$qualification = 'MBBS, DGO, CCPU';
		$designation   = 'HOD – Obstetrics & Gynecology';
		$experience    = '26+ Years Experience';
	} elseif ( strpos( $name, 'Ramana' ) !== false ) {
		$specialty     = 'Pediatric Hematology & Oncology';
		$qualification = 'MBBS, MD – Pediatrics, DCH, MRCP (UK)';
		$designation   = 'Director – Pediatric Hematology & Oncology';
		$experience    = '39+ Years Experience';
	} else {
		$qualification = $department;
		$designation   = 'Consultant - ' . $specialty;
		$experience    = $experience . ' Experience';
	}
} else {
	$name           = get_the_title();
	$meta_specialty = get_post_meta( get_the_ID(), '_doctor_specialty', true );
	$meta_department = get_post_meta( get_the_ID(), '_doctor_department', true );
	$meta_experience = get_post_meta( get_the_ID(), '_doctor_experience', true );
	$meta_education  = get_post_meta( get_the_ID(), '_doctor_education', true );
	$permalink       = get_permalink();
	
	$location = get_post_meta( get_the_ID(), '_doctor_location', true );
	if ( empty( $location ) ) {
		$location = 'Hyderabad';
	}
	$filter = get_post_meta( get_the_ID(), '_doctor_filter', true );
	if ( empty( $filter ) ) {
		$filter = 'child care';
	}

	// Resolve specialty
	$specialty = ! empty( $meta_specialty ) ? $meta_specialty : '';

	// Resolve qualification
	$qualification = '';
	if ( ! empty( $meta_education ) ) {
		$edu_lines = explode( "\n", str_replace( "\r", "", $meta_education ) );
		$qualification = trim( $edu_lines[0] );
	}

	// Resolve experience
	$experience = ! empty( $meta_experience ) ? $meta_experience : '';
	if ( ! empty( $experience ) && strpos( $experience, 'Experience' ) === false ) {
		$experience .= ' Experience';
	}

	// Resolve designation
	$designation = get_post_meta( get_the_ID(), '_doctor_designation', true );

	$department = ! empty( $meta_department ) ? $meta_department : '';
}

// Doctor specific image URL mapping
$doctor_images = array(
	'Dr. Satish Ghanta' => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/satish-ghanta.webp',
	'Dr. V.S.V. Prasad' => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/vsv-prasad-1.png',
	'Dr. Mehul Shah'    => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/Dr-Mhul-A-shah-scaled.webp',
	'Dr. Roopa Ghanta'  => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/DR-Roopa-ghanta-scaled.webp',
	'Dr. Ramana Dandamudi' => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/ramana-new.png',
);

$matched_img_url = '';
foreach ( $doctor_images as $doc_name => $url ) {
	if ( strpos( $name, $doc_name ) !== false ) {
		$matched_img_url = $url;
		break;
	}
}

// Generate classes
$card_classes = array(
	'bg-[#FAF9F5]',
	'w-full',
	$max_width_class ? $max_width_class : 'max-w-xl',
	'rounded',
	'border',
	'border-[#EBE8E2]',
	'shadow-sm',
	'hover:shadow-md',
	'transition-all',
	'duration-300',
	'flex',
	'flex-col',
	'sm:flex-row',
	'gap-3',
	'p-6',
	'items-center',
	'sm:items-start',
	'mx-auto',
	'group'
);

if ( $is_grid ) {
	$card_classes[] = 'doctor-card-item';
}

$card_classes_str = implode( ' ', array_filter( $card_classes ) );

// Prepare data attributes for grid filtering
$data_attrs = '';
if ( $is_grid ) {
	$data_attrs = sprintf(
		'data-name="%s" data-specialty="%s" data-department="%s" data-location="%s" data-filter="%s"',
		esc_attr( strtolower( $name ) ),
		esc_attr( $specialty ),
		esc_attr( $department ),
		esc_attr( strtolower( $location ) ),
		esc_attr( strtolower( $filter ) )
	);
}
?>

<div class="<?php echo esc_attr( $card_classes_str ); ?>" <?php echo $data_attrs; ?>>
	<!-- Circular Image -->
	<div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden shrink-0 border-2 border-white shadow-sm bg-brand-cream relative">
		<?php if ( $matched_img_url ) : ?>
			<img src="<?php echo esc_url( $matched_img_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="w-full h-full object-cover">
		<?php elseif ( ! $fallback_doctor && has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
		<?php else : ?>
			<div class="w-full h-full flex items-center justify-center bg-brand-coral/10">
				<svg class="h-12 w-12 text-brand-coral/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
				</svg>
			</div>
		<?php endif; ?>
	</div>

	<!-- Info Details -->
	<div class="flex-grow flex flex-col text-center sm:text-left h-full justify-around w-full min-w-0">
		<div>
			<!-- Name -->
			<h3 class="text-xl sm:text-2xl font-bold text-brand-red mb-1 font-outfit break-words">
				<?php echo esc_html( $name ); ?>
			</h3>
			
			<!-- Specialty -->
			<?php if ( ! empty( $specialty ) ) : ?>
			<p class="text-brand-muted text-sm sm:text-base mb-1 font-medium break-words">
				<?php echo esc_html( $specialty ); ?>
			</p>
			<?php endif; ?>
			
			<!-- Qualification -->
			<?php if ( ! empty( $qualification ) ) : ?>
			<p class="text-brand-dark text-sm sm:text-base font-semibold mb-3 break-words">
				<?php echo esc_html( $qualification ); ?>
			</p>
			<?php endif; ?>

			<!-- Description (if exists) -->
			<!-- <?php if ( $is_grid ) : ?>
				<?php
				$card_desc = '';
				if ( $fallback_doctor ) {
					$card_desc = isset( $fallback_doctor['description'] ) ? $fallback_doctor['description'] : '';
					if ( empty( $card_desc ) ) {
						if ( strpos( $name, 'Satish Ghanta' ) !== false ) {
							$card_desc = 'Director of Neonatal & Pediatric Intensive Care Services with 32+ years experience.';
						} elseif ( strpos( $name, 'V.S.V. Prasad' ) !== false ) {
							$card_desc = 'Managing Director of Neonatology & Pediatrics with 35+ years clinical expertise.';
						} elseif ( strpos( $name, 'Mehul' ) !== false ) {
							$card_desc = 'Senior Consultant Pediatric Nephrologist specializing in pediatric kidney disease and transplants.';
						} elseif ( strpos( $name, 'Roopa' ) !== false ) {
							$card_desc = 'HOD of Obstetrics & Gynecology specializing in high-risk pregnancy and maternal care.';
						} elseif ( strpos( $name, 'Ramana' ) !== false ) {
							$card_desc = 'Director of Pediatric Hematology & Oncology specializing in childhood cancers.';
						} else {
							$card_desc = 'Expert consultant providing comprehensive, compassionate pediatric and neonatal healthcare services.';
						}
					}
				} else {
					$card_desc = lotus_get_doctor_excerpt( get_the_ID(), 120 );
				}
				?>
				<?php if ( ! empty( $card_desc ) ) : ?>
					<p class="text-base text-brand-muted leading-relaxed max-w-md mb-2">
						<?php 
						if ( substr( $card_desc, -3 ) === '...' ) {
							$clean_desc = substr( $card_desc, 0, -3 );
							echo esc_html( $clean_desc );
						} else {
							echo esc_html( $card_desc );
						}
						?>
					</p>
					<div class="mb-4">
						<a href="<?php echo esc_url( $permalink ); ?>" class="text-brand-red font-semibold hover:text-brand-red-hover transition-colors inline-block text-sm">Read More</a>
					</div>
				<?php endif; ?>
			<?php endif; ?> -->

			<!-- Experience Badge -->
			<?php if ( ! empty( $experience ) ) : ?>
			<div class="flex items-center justify-center sm:justify-start gap-2 text-brand-dark text-sm sm:text-base mb-4 font-medium">
				<!-- Calendar Icon -->
				<svg class="w-5 h-5 text-brand-dark" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
					<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
					<line x1="16" y1="2" x2="16" y2="6"></line>
					<line x1="8" y1="2" x2="8" y2="6"></line>
					<line x1="3" y1="10" x2="21" y2="10"></line>
				</svg>
				<span><?php echo esc_html( $experience ); ?></span>
			</div>
			<?php endif; ?>
		</div>

		<!-- Action Buttons -->
		<div class="flex flex-row justify-center sm:justify-start gap-3">
			<a href="<?php echo esc_url( $permalink ); ?>" class="inline-flex items-center justify-center px-2 py-2 border border-brand-red text-brand-red hover:bg-brand-red hover:text-white font-semibold text-sm rounded-lg transition-colors duration-200">
				View Profile
			</a>
			<a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="inline-flex items-center justify-center px-2 py-2 bg-brand-red text-white font-semibold text-sm rounded-lg hover:bg-brand-red-hover transition-colors duration-200">
				Appointment
			</a>
		</div>
	</div>
</div>

