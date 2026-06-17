<?php
/**
 * Template part for displaying single doctor details
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch doctor custom post metadata
$expertise_raw = get_post_meta( get_the_ID(), '_doctor_expertise', true );
$education_raw = get_post_meta( get_the_ID(), '_doctor_education', true );
$awards_raw    = get_post_meta( get_the_ID(), '_doctor_awards', true );

// Parse textarea items line-by-line
$expertise_items = ! empty( $expertise_raw ) ? array_filter( array_map( 'trim', explode( "\n", $expertise_raw ) ) ) : array();
$education_items = ! empty( $education_raw ) ? array_filter( array_map( 'trim', explode( "\n", $education_raw ) ) ) : array();
$awards_items    = ! empty( $awards_raw ) ? array_filter( array_map( 'trim', explode( "\n", $awards_raw ) ) ) : array();

// Fallbacks matching Figma (Dr. V.S.V. Prasad)
if ( empty( $expertise_items ) ) {
	$expertise_items = array(
		'Child Development',
		'High-Risk Pregnancy',
		'Pediatric Surgery',
		'Vaccinations',
	);
}

if ( empty( $education_items ) ) {
	$education_items = array(
		'MBBS (Osmania Medical College, Hyderabad)',
		'MD Pediatrics (Niloufer Hospital for Women and Children)',
		'Fellowship in Neonatology (Royal College of Pediatrics UK)',
	);
}

if ( empty( $awards_items ) ) {
	$awards_items = array(
		'Best Neonatologist Award (Class of 2018)',
		'Gold Medal in Pediatrics (Class of 2004)',
		'Outstanding Clinician Award (Banjara Hills Wing)',
	);
}

// Primary doctor description
$bio_content = get_the_content();
if ( empty( $bio_content ) ) {
	$bio_content = 'Dr. K.S.V. Prasad is a highly distinguished Neonatologist and Pediatrician with over 18 years of dedicated services in Neonatal Intensive Care and advanced child healthcare. As a cornerstone of Lotus Little Stars Hospital, he has pioneered specialized treatments for complex newborn conditions and high-risk neonatal cases. His approach combines cutting-edge medical technology, ensuring that every "little star" receives the highest standard of evidence-based medical attention. Dr. Prasad is renowned for his expertise in managing extremely low birth weight infants and neonatal respiratory disorders.';
}
?>

<section class="py-16 bg-white">
	<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Main Content Grid -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 text-left mb-16">
			<!-- Main Column: Biography, Education & Awards (Left) -->
			<div class="lg:col-span-8 flex flex-col gap-10">
				
				<!-- Biography section -->
				<div>
					<h2 class="text-2xl font-bold text-brand-dark border-b border-brand-cream pb-3 mb-4 font-outfit">
						About <?php the_title(); ?>
					</h2>
					<div class="text-brand-muted text-sm sm:text-base leading-relaxed space-y-4">
						<?php if ( get_the_content() ) : ?>
							<?php the_content(); ?>
						<?php else : ?>
							<p><?php echo esc_html( $bio_content ); ?></p>
						<?php endif; ?>
					</div>
				</div>

				<!-- Education Section -->
				<div>
					<h2 class="text-2xl font-bold text-brand-dark border-b border-brand-cream pb-3 mb-4 font-outfit">
						Education & Qualifications
					</h2>
					<ul class="space-y-4">
						<?php foreach ( $education_items as $edu ) : ?>
							<li class="flex items-start gap-3 text-sm sm:text-base text-brand-muted leading-relaxed">
								<div class="w-1.5 h-1.5 bg-brand-coral rounded-full mt-2.5 shrink-0"></div>
								<span><?php echo esc_html( $edu ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>

				<!-- Awards Section -->
				<div>
					<h2 class="text-2xl font-bold text-brand-dark border-b border-brand-cream pb-3 mb-4 font-outfit">
						Awards & Recognition
					</h2>
					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
						<?php foreach ( $awards_items as $award ) : ?>
							<div class="bg-brand-bg p-5 rounded-2xl border border-brand-cream flex gap-3 items-start group hover:border-brand-coral/20 transition-all">
								<div class="p-2 bg-brand-coral/10 text-brand-coral rounded-xl shrink-0">
									<!-- Trophy Cup SVG -->
									<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.286L13 21l-2.286-6.857L5 12l5.714-2.286L13 3z"/>
									</svg>
								</div>
								<div>
									<p class="text-xs font-bold text-brand-dark leading-snug"><?php echo esc_html( $award ); ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

			</div>

			<!-- Sidebar Column: Areas of Expertise (Right) -->
			<div class="lg:col-span-4">
				<div class="bg-brand-bg p-6 sm:p-8 rounded-[2rem] border border-brand-cream sticky top-24">
					<h2 class="text-xl font-bold text-brand-dark mb-6 font-outfit">
						Areas of Expertise
					</h2>
					<div class="flex flex-col gap-3">
						<?php foreach ( $expertise_items as $item ) : ?>
							<div class="flex items-center gap-3 bg-white px-4 py-3 rounded-xl border border-brand-cream text-xs sm:text-sm font-semibold text-brand-dark group hover:border-brand-coral/30 hover:shadow-sm transition-all">
								<svg class="h-4 w-4 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
								</svg>
								<span><?php echo esc_html( $item ); ?></span>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Final CTA Red Banner Block -->
		<div class="bg-brand-red text-white p-8 sm:p-12 rounded-[2.5rem] text-center shadow-lg relative overflow-hidden select-none">
			<!-- Background visual elements -->
			<div class="absolute top-0 left-0 w-24 h-24 bg-white/5 rounded-full filter blur-xl -translate-x-1/2 -translate-y-1/2"></div>
			<div class="absolute bottom-0 right-0 w-36 h-36 bg-white/5 rounded-full filter blur-2xl translate-x-1/4 translate-y-1/4"></div>

			<div class="relative z-10 max-w-2xl mx-auto">
				<h3 class="text-2xl sm:text-3xl font-extrabold font-outfit mb-3">
					Ready to consult <?php the_title(); ?>?
				</h3>
				<p class="text-white/85 text-xs sm:text-sm mb-8 leading-relaxed">
					Get expert clinical consultation for your child's health from one of the most trusted names in Neonatology & Pediatrics.
				</p>
				<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="inline-flex items-center justify-center px-8 h-12 bg-white hover:bg-brand-cream text-brand-red text-xs font-bold rounded-full shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
					Book Appointment
				</a>
			</div>
		</div>

	</div>
</section>
