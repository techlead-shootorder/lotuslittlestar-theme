<?php
/**
 * Template part for displaying Doctors related to the current Speciality
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Determine speciality category (woman-care, maternity-care, child-care)
$terms    = get_the_terms( $post_id, 'speciality_category' );
$cat_slug = '';
$cat_name = '';

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	$cat_slug = strtolower( $terms[0]->slug );
	$cat_name = $terms[0]->name;
}

// Map category slug to doctor filter value and section titles
$section_badge    = __( 'Our Specialists', 'lotus' );
$section_title    = __( 'Expert Doctors for Your Care', 'lotus' );
$section_subtitle = __( 'Meet our experienced team of medical specialists dedicated to providing advanced and compassionate healthcare.', 'lotus' );
$filter_keyword   = '';

if ( $cat_slug === 'child-care' ) {
	$section_title    = __( 'Child Care Specialists', 'lotus' );
	$section_subtitle = __( 'Meet our experienced pediatricians and pediatric specialists providing compassionate care for children and newborns.', 'lotus' );
	$filter_keyword   = 'child';
} elseif ( in_array( $cat_slug, array( 'woman-care', 'maternity-care', 'meternity-care' ), true ) ) {
	$section_title    = __( "Women's & Maternity Care Specialists", 'lotus' );
	$section_subtitle = __( 'Meet our experienced gynaecologists, obstetricians, and women\'s health experts dedicated to your well-being.', 'lotus' );
	$filter_keyword   = 'woman';
}

// Build query for doctors
$args = array(
	'post_type'      => 'doctor',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
	'orderby'        => 'title',
	'order'          => 'ASC',
);

if ( ! empty( $filter_keyword ) ) {
	$args['meta_query'] = array(
		array(
			'key'     => '_doctor_filter',
			'value'   => $filter_keyword,
			'compare' => 'LIKE',
		),
	);
}

$doctors_query = new WP_Query( $args );

// Fallback: If no doctors matched the specific category filter, query published doctors
if ( ! $doctors_query->have_posts() ) {
	unset( $args['meta_query'] );
	$doctors_query = new WP_Query( $args );
}

if ( $doctors_query->have_posts() ) :
?>
<section class="py-20 bg-[#FAF9F6] border-b border-brand-cream/60 relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-12 pb-8 border-b border-brand-cream/60 gap-6">
			<div class="text-left max-w-3xl">
				<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider border border-brand-red text-brand-red bg-brand-red/10 mb-4 select-none">
					<?php echo esc_html( $section_badge ); ?>
				</span>
				<h2 class="font-outfit text-3xl sm:text-4xl font-semibold text-brand-dark mt-1">
					<?php echo esc_html( $section_title ); ?>
				</h2>
				<p class="text-brand-muted text-sm sm:text-base mt-2 font-medium leading-relaxed">
					<?php echo esc_html( $section_subtitle ); ?>
				</p>
			</div>
			<div>
				<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="inline-flex items-center gap-2 px-6 h-12 bg-white hover:bg-brand-cream text-brand-red border border-brand-red font-semibold rounded-xl shadow-sm hover:shadow-md transition-all text-sm shrink-0">
					<?php _e( 'View All Doctors', 'lotus' ); ?>
					<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</div>
		</div>

		<!-- Doctors Grid Container -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			<?php
			while ( $doctors_query->have_posts() ) :
				$doctors_query->the_post();
				get_template_part( 'template-parts/doctors/doctor-card', null, array(
					'is_grid'   => true,
					'max_width' => 'max-w-xl',
				) );
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<?php
endif;
