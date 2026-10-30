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

// Parse textarea items line-by-line
$expertise_items = ! empty( $expertise_raw ) ? array_filter( array_map( 'trim', explode( "\n", $expertise_raw ) ) ) : array();

// Fallbacks matching Figma (Dr. V.S.V. Prasad)
if ( empty( $expertise_items ) ) {
	$expertise_items = array(
		'Child Development',
		'High-Risk Pregnancy',
		'Pediatric Surgery',
		'Vaccinations',
	);
}

// Primary doctor description fallback paragraphs matching SS
$bio_paragraphs = array(
	'Dr. V.S.V. Prasad is a highly distinguished Neonatologist and Pediatrician with over 16 years of dedicated service in neonatal intensive care and advanced child healthcare. As a cornerstone of Lotus Little Stars Hospital, he has pioneered specialized treatments for complex newborn conditions and high-risk neonatal cases.',
	'His approach combines cutting-edge medical technology with deep clinical empathy, ensuring that every "little star" receives the highest standard of evidence-based medical attention. Dr. Prasad is renowned for his expertise in managing extremely low birth weight infants and neonatal respiratory disorders.'
);
?>

<section class="py-16 bg-white">
	<div class="w-full mx-auto px-4 sm:px-6 lg:px-8 text-left">
		<!-- Biography section -->
		<div>
			<h2 class="text-3xl font-bold text-brand-dark mb-6 font-outfit">
				About <?php the_title(); ?>
			</h2>
			<div class="text-brand-muted text-sm sm:text-base leading-relaxed space-y-6">
				<?php if ( get_the_content() ) : ?>
					<?php the_content(); ?>
				<?php else : ?>
					<?php foreach ( $bio_paragraphs as $para ) : ?>
						<p><?php echo esc_html( $para ); ?></p>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="py-16 bg-[#f4f6f3] border-t border-b border-brand-cream/40">
	<div class="w-full mx-auto px-4 sm:px-6 lg:px-8 text-left">
		<h2 class="text-3xl font-bold text-brand-dark mb-8 font-outfit">
			Areas of Expertise
		</h2>
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
			<?php
			$expertise_icons = array(
				'child development'   => '<svg class="h-6 w-6 text-brand-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 18L8 5l5 13M5.5 14h5M18 18V6m0 0l-3 3m3-3l3 3" /></svg>',
				'high-risk pregnancy' => '<svg class="h-6 w-6 text-brand-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h2l2 9l2-18l2 9h2" /></svg>',
				'pediatric surgery'   => '<svg class="h-6 w-6 text-brand-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>',
				'vaccinations'        => '<svg class="h-6 w-6 text-brand-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>',
			);

			foreach ( $expertise_items as $item ) :
				$key = strtolower( trim( $item ) );
				$icon = isset( $expertise_icons[ $key ] ) ? $expertise_icons[ $key ] : '<svg class="h-6 w-6 text-brand-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>';
				?>
				<div class="bg-white p-5 rounded-2xl flex items-center gap-4 shadow-sm hover:shadow-md transition-all border border-brand-cream/40">
					<div class="w-12 h-12 rounded-xl bg-brand-red/5 flex items-center justify-center shrink-0">
						<?php echo $icon; ?>
					</div>
					<span class="text-sm sm:text-base font-bold text-brand-dark leading-snug"><?php echo esc_html( $item ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>


