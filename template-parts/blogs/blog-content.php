<?php
/**
 * Template part for displaying the blog post content columns and sidebar
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Retrieve post content and process the featured quote placement
$content = apply_filters( 'the_content', get_the_content() );
$featured_quote = function_exists( 'get_field' ) ? get_field( 'featured_quote', $post_id ) : '';

if ( ! empty( $featured_quote ) ) {
	// Construct the styled blockquote HTML
	$quote_html = '
	<blockquote class="my-8 pl-6 border-l-[3px] border-[#3C493D] bg-[#FAF9F5] py-6 pr-4 rounded-r-xl select-none">
		<p class="text-base sm:text-lg italic font-medium text-brand-dark leading-relaxed mb-4">
			"' . esc_html( $featured_quote ) . '"
		</p>
		<cite class="text-xs text-brand-muted font-bold tracking-wider not-italic block uppercase">
			&mdash; Clinical Perspective, Lotus Medical Review
		</cite>
	</blockquote>';

	// Insert after the first closing paragraph </p> or heading, otherwise append
	$pos = strpos( $content, '</p>' );
	if ( $pos !== false ) {
		$content = substr_replace( $content, $quote_html, $pos + 4, 0 );
	} else {
		$content .= $quote_html;
	}
}

// Retrieve Sidebar CTA fields
$cta_heading = function_exists( 'get_field' ) ? get_field( 'sidebar_cta_heading', $post_id ) : '';
$cta_desc    = function_exists( 'get_field' ) ? get_field( 'sidebar_cta_description', $post_id ) : '';
$cta_link    = function_exists( 'get_field' ) ? get_field( 'sidebar_cta_button', $post_id ) : null;

// Fallback values for Sidebar CTA
if ( empty( $cta_heading ) ) {
	$cta_heading = __( 'Need Expert Guidance?', 'lotus' );
}
if ( empty( $cta_desc ) ) {
	$cta_desc = __( 'Our pediatric and maternity specialists are here to support you through every stage of your newborn\'s first year.', 'lotus' );
}

// Resolve link URL, title, and target
$cta_url    = home_url( '/contact/' );
$cta_title  = __( 'Consult a Specialist', 'lotus' );
$cta_target = '_self';

if ( is_array( $cta_link ) ) {
	if ( ! empty( $cta_link['url'] ) ) {
		$cta_url = $cta_link['url'];
	}
	if ( ! empty( $cta_link['title'] ) ) {
		$cta_title = $cta_link['title'];
	}
	if ( ! empty( $cta_link['target'] ) ) {
		$cta_target = $cta_link['target'];
	}
} elseif ( is_string( $cta_link ) && ! empty( $cta_link ) ) {
	$cta_title = $cta_link;
}

// Retrieve Related Blogs
$related_posts = function_exists( 'get_field' ) ? get_field( 'related_blogs', $post_id ) : null;
?>

<section class="pb-24 bg-white">
	<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
			
			<!-- Left Column (Article Body) -->
			<div class="lg:col-span-8 text-brand-dark text-sm sm:text-base leading-relaxed space-y-6">
				<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>

			<!-- Right Column (Sidebar) -->
			<aside class="lg:col-span-4 space-y-10">
				
				<!-- Sidebar CTA Card -->
				<div class="bg-[#A61A24] text-white p-8 rounded-2xl shadow-sm flex flex-col items-center text-center">
					<!-- Briefcase Icon -->
					<div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center mb-5 shrink-0">
						<svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
							<rect x="3" y="9" width="18" height="11" rx="2" ry="2" />
							<path d="M12 11v6m-3-3h6M9 9V6a3 3 0 0 1 6 0v3" />
						</svg>
					</div>

					<h3 class="text-xl font-bold mb-3 font-outfit">
						<?php echo esc_html( $cta_heading ); ?>
					</h3>

					<p class="text-white/85 text-xs sm:text-sm leading-relaxed mb-6 font-medium">
						<?php echo esc_html( $cta_desc ); ?>
					</p>

					<a href="<?php echo esc_url( $cta_url ); ?>" target="<?php echo esc_attr( $cta_target ); ?>" class="w-full inline-flex items-center justify-center px-4 py-2.5 bg-white text-[#A61A24] hover:bg-white/95 font-bold text-xs sm:text-sm rounded-lg transition-all duration-200 select-none">
						<?php echo esc_html( $cta_title ); ?>
					</a>
				</div>

				<!-- Related Resources -->
				<?php if ( ! empty( $related_posts ) ) : ?>
					<div class="pt-4">
						<h3 class="text-xs sm:text-sm font-extrabold text-[#A61A24] uppercase tracking-wider mb-3 font-outfit">
							<?php _e( 'Related Resources', 'lotus' ); ?>
						</h3>
						<div class="border-t border-[#EBE8E2] mb-6"></div>

						<div class="space-y-6">
							<?php
							foreach ( $related_posts as $related_post ) :
								$related_id = is_object( $related_post ) ? $related_post->ID : $related_post;
								$related_title = get_the_title( $related_id );
								$related_link = get_permalink( $related_id );
								
								// Get taxonomy categories for the related blog
								$related_terms = get_the_terms( $related_id, 'blog-category' );
								$related_cat_name = '';
								if ( ! empty( $related_terms ) && ! is_wp_error( $related_terms ) ) {
									$related_cat_name = $related_terms[0]->name;
								}
								?>
								<div class="flex flex-col">
									<?php if ( ! empty( $related_cat_name ) ) : ?>
										<span class="text-[11px] font-bold text-brand-red uppercase tracking-wider mb-1 block">
											<?php echo esc_html( $related_cat_name ); ?>
										</span>
									<?php endif; ?>
									<h4 class="text-sm sm:text-base font-bold text-brand-dark leading-snug hover:text-brand-red transition-colors">
										<a href="<?php echo esc_url( $related_link ); ?>">
											<?php echo esc_html( $related_title ); ?>
										</a>
									</h4>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>

			</aside>
			
		</div>
		
	</div>
</section>
