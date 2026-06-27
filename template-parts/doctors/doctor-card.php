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
	$name       = get_the_title();
	$specialty  = get_post_meta( get_the_ID(), '_doctor_specialty', true );
	$department = get_post_meta( get_the_ID(), '_doctor_department', true );
	$experience_val = get_post_meta( get_the_ID(), '_doctor_experience', true );
	$education  = get_post_meta( get_the_ID(), '_doctor_education', true );
	$permalink  = get_permalink();

	// Parse first line of education as qualification
	$qualification = '';
	if ( ! empty( $education ) ) {
		$edu_lines = explode( "\n", str_replace( "\r", "", $education ) );
		$qualification = trim( $edu_lines[0] );
	}
	if ( empty( $qualification ) ) {
		$qualification = ! empty( $department ) ? $department : 'Specialist';
	}

	// Resolve experience string
	$experience = ! empty( $experience_val ) ? $experience_val : '10+ Yrs';
	if ( strpos( $experience, 'Experience' ) === false ) {
		$experience .= ' Experience';
	}

	// Resolve designation and specialty
	if ( empty( $specialty ) ) {
		$specialty = 'Specialist Doctor';
	}
	
	// Fetch or fallback designation
	$designation = get_post_meta( get_the_ID(), '_doctor_designation', true );
	if ( empty( $designation ) ) {
		$designation = 'Consultant – ' . $specialty;
	}

	// Exact database overrides for name matchings
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
	}
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
	'bg-white',
	'w-full',
	$max_width_class ? $max_width_class : 'max-w-[340px]',
	'rounded-[0.5rem]',
	'border',
	'border-[#EBE8E2]',
	'shadow-sm',
	'hover:shadow-md',
	'transform',
	'hover:-translate-y-1',
	'transition-all',
	'duration-300',
	'flex',
	'flex-col',
	'overflow-hidden',
	'group',
	'mx-auto'
);

if ( $is_grid ) {
	$card_classes[] = 'doctor-card-item';
}

$card_classes_str = implode( ' ', array_filter( $card_classes ) );

// Prepare data attributes for grid filtering
$data_attrs = '';
if ( $is_grid ) {
	$data_attrs = sprintf(
		'data-name="%s" data-specialty="%s"',
		esc_attr( strtolower( $name ) ),
		esc_attr( $specialty )
	);
}
?>

<div class="<?php echo esc_attr( $card_classes_str ); ?>" <?php echo $data_attrs; ?>>
	<!-- Image Container -->
	<div class="aspect-[1/1] max-h-[300px] md:max-h-[300px] w-full bg-brand-cream relative overflow-hidden flex items-center justify-center shrink-0 border-b border-[#EBE8E2]">
		<?php if ( $matched_img_url ) : ?>
			<img src="<?php echo esc_url( $matched_img_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
		<?php elseif ( ! $fallback_doctor && has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
		<?php else : ?>
			<svg class="h-16 w-16 text-brand-coral/40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
			</svg>
		<?php endif; ?>
	</div>
	
	<!-- Card Body -->
	<div class="p-4 md:p-5 flex flex-col items-center text-center flex-grow">
		<h3 class="text-lg md:text-xl font-bold text-brand-dark font-outfit mb-1 group-hover:text-brand-red transition-colors"><?php echo esc_html( $name ); ?></h3>
		
		<p class="text-[#007AFF] text-[12px] md:text-xs font-semibold tracking-wide uppercase mb-0.5"><?php echo esc_html( $specialty ); ?></p>
		
		<p class="text-base text-brand-muted mb-2"><?php echo esc_html( $qualification ); ?></p>
		
		
		
		<p class="text-sm text-[#4B5563] font-medium leading-relaxed max-w-[280px]">
			<?php echo esc_html( $designation ); ?>
		</p>
		

		<?php if ( $is_grid ) : ?>
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
				<div class="w-full border-t border-[#F1ECE4]/60 my-2"></div>
				<p class="text-base text-brand-muted leading-relaxed max-w-[280px] mb-4">
					<?php 
					if ( substr( $card_desc, -3 ) === '...' ) {
						$clean_desc = substr( $card_desc, 0, -3 );
						echo esc_html( $clean_desc );
					} else {
						echo esc_html( $card_desc );
					}
					echo ' <a href="' . esc_url( $permalink ) . '" class="text-brand-red font-semibold hover:text-brand-red-hover transition-colors inline-block whitespace-nowrap">Read More</a>';
					?>
				</p>
			<?php endif; ?>
		<?php endif; ?>
		<!-- Experience Badge -->
		<div class="flex items-center justify-center gap-2 mb-1 mt-0.5">
			<div class="w-5 h-5 rounded-full bg-[#E5F1FF] text-[#007AFF] flex items-center justify-center shrink-0 select-none">
				<svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
					<circle cx="12" cy="8" r="4"/>
					<path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/>
				</svg>
			</div>
			<span class="text-base font-bold text-brand-dark leading-none"><?php echo esc_html( $experience ); ?></span>
		</div>

		
	</div>
	
	<!-- Action Buttons -->
	<div class="w-full flex border-t border-[#EBE8E2] mt-auto">
		<a href="<?php echo esc_url( $permalink ); ?>" class="w-1/2 h-11 bg-[#FDF3D5] hover:bg-[#FBE09E] text-brand-dark font-bold text-xs sm:text-xs flex items-center justify-center gap-1.5 transition-colors border-r border-[#EBE8E2]">
			<svg class="w-3.5 h-3.5 text-brand-dark shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
			</svg>
			View Profile
		</a>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="w-1/2 h-11 bg-brand-red hover:bg-brand-red-hover text-white font-bold text-xs sm:text-xs flex items-center justify-center gap-1.5 transition-colors">
			<svg class="w-3.5 h-3.5 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
			</svg>
			Book Appointment
		</a>
	</div>
</div>

