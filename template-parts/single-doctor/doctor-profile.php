<?php
/**
 * Template part for displaying the single doctor profile redesign
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch doctor custom post metadata
$name              = get_the_title();
$specialty_desc    = get_post_meta( get_the_ID(), '_doctor_specialty', true );
$experience        = get_post_meta( get_the_ID(), '_doctor_experience', true );
$department        = get_post_meta( get_the_ID(), '_doctor_department', true );
$phone             = get_post_meta( get_the_ID(), '_doctor_phone', true );
$education_raw     = get_post_meta( get_the_ID(), '_doctor_education', true );
$experience_raw    = get_post_meta( get_the_ID(), '_doctor_experience_detail', true );
$working_hours_raw = get_post_meta( get_the_ID(), '_doctor_working_hours', true );

// Fallbacks matching Dr. V.S.V. Prasad / premium defaults
$specialty_desc = ! empty( $specialty_desc ) ? $specialty_desc : 'Founder & Chief Consultant Neonatologist and Pediatric Intensivist';
$experience     = ! empty( $experience ) ? $experience : '32+ Years';
$department     = ! empty( $department ) ? $department : 'Neonatology, Pediatrics';
$phone          = ! empty( $phone ) ? $phone : '+91 40 4000 6000';

// Parse Education/Degrees
$education_items = ! empty( $education_raw ) ? array_filter( array_map( 'trim', explode( "\n", $education_raw ) ) ) : array();
if ( empty( $education_items ) ) {
	$education_items = array(
		'MD Pediatrics from All India Institute of Medical Sciences, New Delhi.',
		'Ex Diplomate of the American Board of Pediatrics (U.S.A).',
		'Fellowship training in Pediatric Intensive Care and Neonatology in the United States of America.',
	);
}

// Extract degrees/qualification from first education line or custom logic
$degrees = '';
if ( ! empty( $education_raw ) ) {
	$edu_lines = explode( "\n", str_replace( "\r", "", $education_raw ) );
	$degrees = trim( $edu_lines[0] );
	// If the degree contains a dash, only take the degree part (e.g. "MD Pediatrics - Niloufer" -> "MD Pediatrics")
	if ( strpos( $degrees, ' - ' ) !== false ) {
		$parts = explode( ' - ', $degrees );
		$degrees = trim( $parts[0] );
	}
}
// Apply exact name-based degrees matching (only if database education is empty)
if ( empty( $education_raw ) ) {
	if ( strpos( $name, 'V.S.V. Prasad' ) !== false ) {
		$degrees = 'MD Pediatrics (AIIMS, New Delhi), FRCPCH (UK)';
	} elseif ( strpos( $name, 'Satish Ghanta' ) !== false ) {
		$degrees = 'MD (Pediatrics)';
	} elseif ( strpos( $name, 'Mehul' ) !== false ) {
		$degrees = 'MD(PED), DCH(BOM), MD(USA), DABPN(USA)';
	} elseif ( strpos( $name, 'Roopa' ) !== false ) {
		$degrees = 'MBBS, DGO, CCPU';
	} elseif ( strpos( $name, 'Ramana' ) !== false ) {
		$degrees = 'MBBS, MD – Pediatrics, DCH, MRCP (UK)';
	}
}

if ( empty( $degrees ) ) {
	$degrees = 'MD Pediatrics (AIIMS, New Delhi), FRCPCH (UK)';
}

// Parse Detailed Experience list
$experience_items = ! empty( $experience_raw ) ? array_filter( array_map( 'trim', explode( "\n", $experience_raw ) ) ) : array();
if ( empty( $experience_items ) ) {
	$experience_items = array(
		'He received specialised training in Neonatology and Pediatric Intensive Care (United Kingdom).',
		'Instrumental in bringing advanced children s health care to the undivided Andhra Pradesh State in 1999.',
		'Has set up two children s centres in Hyderabad before Lotus Hospital for Women & Children.',
		'Member of many professional bodies including the IAP Intensive Care Chapter and ISCCM, NNF, Member of the College of Pediatric Critical Care.',
		'Former Executive Member of the Governing Body of the National Neonatology Forum of India, New Delhi.',
		'Faculty and Inspector for the National Board of Examinations, New Delhi.',
		'Invited Faculty for all National Conferences of the Indian Academy of Pediatrics, National Neonatology Forum.',
		'Authored several chapters in the Recent Advances in Pediatrics Series and published case reports in the Journal of Pediatric Critical Care.',
	);
}

// Parse Working Hours list
$working_hours_items = ! empty( $working_hours_raw ) ? array_filter( array_map( 'trim', explode( "\n", $working_hours_raw ) ) ) : array();
if ( empty( $working_hours_items ) ) {
	$working_hours_items = array(
		'Mon - Sun 10:30 A.M. 01:00 P.M.',
		'Mon - Sun 05:00 P.M. 08:00 P.M.',
	);
}

// Image fallback logic
$doctor_images = array(
	'Satish Ghanta'    => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/satish-ghanta.webp',
	'V.S.V. Prasad'    => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/vsv-prasad-1.png',
	'Mehul Shah'       => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/Dr-Mhul-A-shah-scaled.webp',
	'Roopa Ghanta'     => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/DR-Roopa-ghanta-scaled.webp',
	'Ramana Dandamudi' => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/ramana-new.png',
);
$matched_img_url = '';
foreach ( $doctor_images as $doc_name => $url ) {
	if ( strpos( $name, $doc_name ) !== false ) {
		$matched_img_url = $url;
		break;
	}
}

// Bio paragraph fallbacks if post content is empty
$bio_content = '';
if ( get_the_content() ) {
	$bio_content = apply_filters( 'the_content', get_the_content() );
} else {
	$bio_content = '<p>Dr Prasad has over 32 years of a rich and varied expertise in India, the United Kingdom and United States of America. His credentials are impressive and is a natural leader in Pediatric healthcare in Hyderabad and the Telugu states. As a medical professional, Dr Prasad s astute clinical acumen and decision making skills are powerful, and these qualities have gained him tremendous respect amongst his peers, both nationally and internationally.</p>';
}
?>

<section class="py-16 bg-[#FDFBF7]/40 min-h-screen">
	<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Breadcrumb Navigation -->
		<nav class="text-xs text-brand-muted mb-10 select-none">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-brand-red transition-all">Home</a>
			<span class="mx-2">/</span>
			<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="hover:text-brand-red transition-all">Doctors</a>
			<span class="mx-2">/</span>
			<span class="text-brand-dark font-medium"><?php echo esc_html( $name ); ?></span>
		</nav>

		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
			
			<!-- Left Sidebar (Doctor Card) -->
			<div class="lg:col-span-4 bg-white border border-[#EBE8E2] rounded-3xl p-8 shadow-[0_4px_20px_rgba(0,0,0,0.03)] transition-all">
				
				<!-- Profile Image -->
				<div class="w-44 h-44 rounded-full overflow-hidden mx-auto border-[6px] border-[#3C493D] bg-[#3C493D] flex items-center justify-center shadow-sm mb-6">
					<?php if ( ! empty( $matched_img_url ) ) : ?>
						<img src="<?php echo esc_url( $matched_img_url ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="w-full h-full object-cover">
					<?php elseif ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
					<?php else : ?>
						<!-- Default Icon -->
						<svg class="h-20 w-20 text-white/70" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
						</svg>
					<?php endif; ?>
				</div>

				<!-- Left Column Doctor Info -->
				<div class="text-left">
					<h1 class="text-xl sm:text-2xl font-extrabold text-brand-dark mb-1 font-outfit tracking-tight">
						<?php echo esc_html( $name ); ?>
					</h1>
					<p class="text-xs text-brand-muted leading-relaxed mb-6">
						<?php echo esc_html( $specialty_desc ); ?>
					</p>

					<!-- Fields List -->
					<div class="space-y-4">
						<div>
							<span class="text-xs font-bold text-brand-dark block font-outfit">Speciality</span>
							<span class="text-xs text-brand-muted mt-0.5 block"><?php echo esc_html( $department ); ?></span>
						</div>
						<div>
							<span class="text-xs font-bold text-brand-dark block font-outfit">Degrees</span>
							<span class="text-xs text-brand-muted mt-0.5 block"><?php echo esc_html( $degrees ); ?></span>
						</div>
						<div>
							<span class="text-xs font-bold text-brand-dark block font-outfit">Experience</span>
							<span class="text-xs text-brand-muted mt-0.5 block"><?php echo esc_html( $experience ); ?></span>
						</div>
					</div>

					<!-- Divider -->
					<div class="my-6 border-t border-brand-cream/80"></div>

					<!-- Working Hours -->
					<div class="mb-6">
						<h3 class="text-sm font-bold text-brand-dark mb-3 font-outfit">Working Hours</h3>
						<div class="space-y-2">
							<?php
							foreach ( $working_hours_items as $index => $line ) {
								$parts = preg_split( '/(?=\d)/', $line, 2 );
								$days  = trim( $parts[0] );
								$time  = isset( $parts[1] ) ? trim( $parts[1] ) : '';
								// Style second line time in red (matching Mon - Sun 05:00 P.M. 08:00 P.M. in screenshot)
								$time_class = ( $index === 1 ) ? 'text-[#A61A24] font-semibold' : 'text-brand-dark';
								?>
								<div class="flex justify-between items-center text-xs">
									<span class="text-brand-muted"><?php echo esc_html( $days ); ?></span>
									<span class="<?php echo esc_attr( $time_class ); ?>"><?php echo esc_html( $time ); ?></span>
								</div>
								<?php
							}
							?>
						</div>
					</div>

					<!-- Book Appointment Button -->
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="w-full inline-flex items-center justify-center h-11 bg-[#A61A24] hover:bg-[#8B141B] text-white text-xs font-bold rounded-lg shadow-sm transition-all duration-200">
						Book an Appointment
					</a>

				</div>

			</div>

			<!-- Right Main Content Area -->
			<div class="lg:col-span-8 space-y-12">
				
				<!-- About the Doctor -->
				<div>
					<div class="flex items-center gap-4 mb-6">
						<h2 class="text-lg sm:text-xl font-extrabold text-[#111827] shrink-0 font-outfit">About the Doctor</h2>
						<div class="h-[1px] bg-brand-cream/80 grow"></div>
					</div>
					<div class="text-brand-muted text-sm leading-relaxed space-y-4">
						<?php echo $bio_content; ?>
					</div>
				</div>

				<!-- Educational Qualifications -->
				<div>
					<div class="flex items-center gap-4 mb-6">
						<h2 class="text-lg sm:text-xl font-extrabold text-[#111827] shrink-0 font-outfit">Educational Qualifications</h2>
						<div class="h-[1px] bg-brand-cream/80 grow"></div>
					</div>
					<ul class="space-y-3">
						<?php foreach ( $education_items as $item ) : 
							// Strip leading bullet characters if they exist
							$clean_item = ltrim( $item, "›> -*" );
							?>
							<li class="flex items-start gap-3">
								<span class="text-brand-muted shrink-0 text-sm select-none">›</span>
								<span class="text-brand-muted text-sm leading-relaxed"><?php echo esc_html( $clean_item ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>

				<!-- Experience -->
				<div>
					<div class="flex items-center gap-4 mb-6">
						<h2 class="text-lg sm:text-xl font-extrabold text-[#111827] shrink-0 font-outfit">Experience</h2>
						<div class="h-[1px] bg-brand-cream/80 grow"></div>
					</div>
					<ul class="space-y-3">
						<?php foreach ( $experience_items as $item ) : 
							// Strip leading bullet characters if they exist
							$clean_item = ltrim( $item, "›> -*" );
							?>
							<li class="flex items-start gap-3">
								<span class="text-brand-muted shrink-0 text-sm select-none">›</span>
								<span class="text-brand-muted text-sm leading-relaxed"><?php echo esc_html( $clean_item ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>

			</div>

		</div>
	</div>
</section>
