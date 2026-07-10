<?php
/**
 * Template part for displaying the blog listing cards and pagination
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Option A Page Lookup: Look up settings page to get Custom Fields
$blogs_settings_page = null;
$possible_slugs = array( 
	'blog-archive-settings', 
	'blogs-archive-settings', 
	'blog-settings', 
	'blogs-settings', 
	'blog-archive', 
	'blogs-archive', 
	'blogs', 
	'blog' 
);
foreach ( $possible_slugs as $slug ) {
	$page = get_page_by_path( $slug );
	if ( $page ) {
		$blogs_settings_page = $page;
		break;
	}
}

// Fallback search by title
if ( ! $blogs_settings_page ) {
	$possible_titles = array( 
		'Blog Archive Settings', 
		'Blogs Archive Settings', 
		'Blog Settings', 
		'Blogs Settings', 
		'Blogs', 
		'Blog' 
	);
	foreach ( $possible_titles as $title ) {
		$page = get_page_by_title( $title, OBJECT, 'page' );
		if ( $page ) {
			$blogs_settings_page = $page;
			break;
		}
	}
}

$blogs_page_id = $blogs_settings_page ? $blogs_settings_page->ID : 0;

// Fetch SCF Fields
$blog_hero_badge       = function_exists( 'get_field' ) ? get_field( 'blog_hero_badge', $blogs_page_id ) : '';
$blog_hero_heading     = function_exists( 'get_field' ) ? get_field( 'blog_hero_heading', $blogs_page_id ) : '';
$blog_hero_description = function_exists( 'get_field' ) ? get_field( 'blog_hero_description', $blogs_page_id ) : '';
$blog_background       = function_exists( 'get_field' ) ? get_field( 'blog_background', $blogs_page_id ) : null;

// Fallbacks
if ( empty( $blog_hero_badge ) ) {
	$blog_hero_badge = __( 'Our Publications', 'lotus' );
}
if ( empty( $blog_hero_heading ) ) {
	$blog_hero_heading = '<h1>' . __( 'Latest Blogs & Insights', 'lotus' ) . '</h1>';
}
if ( empty( $blog_hero_description ) ) {
	$blog_hero_description = '<p>' . __( 'Stay updated with the latest news, healthy parenting tips, and clinical updates from our team of pediatricians and child care experts.', 'lotus' ) . '</p>';
}

// Background Image
$bg_image_url = 'http://lotuslittlestars.in/wp-content/uploads/2026/06/hero-doctore-new-scaled.webp';
if ( ! empty( $blog_background ) ) {
	if ( is_array( $blog_background ) && ! empty( $blog_background['url'] ) ) {
		$bg_image_url = $blog_background['url'];
	} elseif ( is_string( $blog_background ) ) {
		$bg_image_url = $blog_background;
	}
}

// Query blogs
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'post_type'      => 'blog',
	'posts_per_page' => 9,
	'post_status'    => 'publish',
	'paged'          => $paged,
	'orderby'        => 'date',
	'order'          => 'DESC',
);
$blogs_query = new WP_Query( $args );

// Fetch blog categories taxonomy terms for filtering
$categories = get_terms( array(
	'taxonomy'   => 'blog-category',
	'hide_empty' => false,
) );
?>

<section class="relative py-24 flex items-center border-b border-brand-cream/60 overflow-hidden bg-brand-bg">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-center bg-no-repeat -z-20" style="background-image: url('<?php echo esc_url( $bg_image_url ); ?>');"></div>
	
	<!-- Overlay Gradient to ensure text readability -->
	<div class="absolute inset-0 bg-white/75 sm:bg-gradient-to-r sm:from-white/80 sm:via-white/70 sm:to-transparent -z-10"></div>
	
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10 text-left">
		<!-- Section Header -->
		<div class="max-w-3xl mb-0">
			<?php if ( ! empty( $blog_hero_badge ) ) : ?>
				<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold border border-brand-red text-brand-red bg-brand-red/10 mb-4 uppercase tracking-wider">
					<?php echo esc_html( $blog_hero_badge ); ?>
				</span>
			<?php endif; ?>
			
			<?php if ( ! empty( $blog_hero_heading ) ) : ?>
				<div class="text-3xl sm:text-4xl lg:text-5xl font-bold text-brand-green mt-2 mb-4 font-outfit">
					<?php echo wp_kses_post( $blog_hero_heading ); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( ! empty( $blog_hero_description ) ) : ?>
				<div class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-2xl font-medium">
					<?php echo wp_kses_post( $blog_hero_description ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="py-20 bg-brand-bg min-h-screen">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Category Filter Pills -->
		<div class="flex flex-wrap gap-2.5 mb-10 select-none">
			<button class="blog-filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-200 bg-brand-red text-white" data-category="">
				<?php _e( 'All', 'lotus' ); ?>
			</button>
			<?php if ( ! is_wp_error( $categories ) && ! empty( $categories ) ) : ?>
				<?php foreach ( $categories as $cat ) : ?>
					<button class="blog-filter-btn px-6 py-2 rounded-full text-sm font-semibold transition-all duration-200 bg-[#FFF5F5] text-brand-dark hover:bg-brand-cream/80" data-category="<?php echo esc_attr( $cat->slug ); ?>">
						<?php echo esc_html( $cat->name ); ?>
					</button>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

		<!-- Latest Articles Heading -->
		<h2 class="text-3xl sm:text-4xl font-semibold text-brand-dark mb-10 font-outfit">
			<?php _e( 'Latest Articles', 'lotus' ); ?>
		</h2>
		
		<!-- Blog Grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			<?php if ( $blogs_query->have_posts() ) : ?>
				<?php while ( $blogs_query->have_posts() ) : $blogs_query->the_post(); ?>
					<?php
					$permalink  = get_permalink();
					$title      = get_the_title();
					$date       = get_the_date( 'M j, Y' );
					$short_desc = get_the_excerpt();

					// Resolve CPT category taxonomy terms
					$terms = get_the_terms( get_the_ID(), 'blog-category' );
					$badge_name = '';
					$cat_slugs = array();
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
						$badge_name = $terms[0]->name;
						foreach ( $terms as $term ) {
							$cat_slugs[] = $term->slug;
						}
					}
					$cat_slugs_str = implode( ' ', $cat_slugs );
					?>
					<article class="blog-card-item bg-white border border-[#EBE8E2] rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 flex flex-col group" data-categories="<?php echo esc_attr( $cat_slugs_str ); ?>">
						<!-- Cover Image -->
						<div class="relative aspect-video overflow-hidden bg-brand-cream/50">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500' ) ); ?>
							<?php else : ?>
								<div class="w-full h-full flex items-center justify-center text-brand-muted/40">
									<svg class="w-12 h-12" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375 0 11-.75 0 .375 0 017.5 0z" />
									</svg>
								</div>
							<?php endif; ?>
						</div>

						<!-- Content -->
						<div class="p-6 flex-grow flex flex-col">
							<!-- Category Badge -->
							<?php if ( ! empty( $badge_name ) ) : ?>
								<span class="text-xs font-bold text-brand-red uppercase tracking-wider block mb-2">
									<?php echo esc_html( $badge_name ); ?>
								</span>
							<?php endif; ?>

							<!-- Title -->
							<h3 class="text-lg font-bold text-brand-dark mb-3 font-outfit line-clamp-2 group-hover:text-brand-red transition-colors">
								<a href="<?php echo esc_url( $permalink ); ?>">
									<?php echo esc_html( $title ); ?>
								</a>
							</h3>

							<!-- Short Description -->
							<?php if ( ! empty( $short_desc ) ) : ?>
								<p class="text-xs text-brand-muted leading-relaxed line-clamp-3 mb-6">
									<?php echo esc_html( $short_desc ); ?>
								</p>
							<?php endif; ?>

							<!-- Divider Line -->
							<div class="border-t border-[#EBE8E2] my-4 mt-auto"></div>

							<!-- Footer details (Date & Read More) -->
							<div class="flex justify-between items-center text-xs sm:text-sm">
								<span class="text-brand-muted font-medium"><?php echo esc_html( $date ); ?></span>
								<a href="<?php echo esc_url( $permalink ); ?>" class="text-brand-red hover:text-brand-red-hover font-semibold transition-colors flex items-center gap-1">
									<?php _e( 'Read More', 'lotus' ); ?> &rarr;
								</a>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<!-- Empty state -->
				<div class="col-span-full text-center py-16 bg-white rounded-2xl border border-brand-cream max-w-md mx-auto">
					<svg class="h-12 w-12 text-brand-muted/40 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
					</svg>
					<h3 class="text-base font-bold text-brand-dark mb-1"><?php _e( 'No Blogs Found', 'lotus' ); ?></h3>
					<p class="text-xs text-brand-muted px-6">
						<?php _e( 'We haven\'t published any articles yet. Please check back later.', 'lotus' ); ?>
					</p>
				</div>
			<?php endif; ?>
		</div>

		<!-- Pagination Section -->
		<?php if ( $blogs_query->max_num_pages > 1 ) : ?>
			<div class="flex justify-center mt-12">
				<?php
				echo paginate_links( array(
					'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
					'format'    => '?paged=%#%',
					'current'   => max( 1, $paged ),
					'total'     => $blogs_query->max_num_pages,
					'prev_text' => '<svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>',
					'next_text' => '<svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>',
					'type'      => 'list',
					'class'     => 'pagination-list',
				) );
				?>
			</div>
		<?php endif; ?>
		
	</div>
</section>

<!-- Client side Filters Javascript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const filterBtns = document.querySelectorAll('.blog-filter-btn');
	const cards = document.querySelectorAll('.blog-card-item');

	filterBtns.forEach(btn => {
		btn.addEventListener('click', function() {
			// Update active class
			filterBtns.forEach(b => {
				b.classList.remove('bg-brand-red', 'text-white');
				b.classList.add('bg-[#FFF5F5]', 'text-brand-dark');
			});
			this.classList.add('bg-brand-red', 'text-white');
			this.classList.remove('bg-[#FFF5F5]', 'text-brand-dark');

			const selectedCat = this.getAttribute('data-category');

			cards.forEach(card => {
				const categories = card.getAttribute('data-categories') || "";
				const catArray = categories.split(' ').filter(c => c !== "");

				if (selectedCat === "" || catArray.includes(selectedCat)) {
					card.style.display = '';
				} else {
					card.style.display = 'none';
				}
			});
		});
	});
});
</script>
