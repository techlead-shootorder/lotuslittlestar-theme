<?php
/**
 * Template part for displaying the blog post hero section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$post_id = get_the_ID();

// Category Taxonomy Badge (first assigned term)
$terms = get_the_terms( $post_id, 'blog-category' );
$category_name = '';
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	$category_name = $terms[0]->name;
}

// SCF Fields
$author_name        = function_exists( 'get_field' ) ? get_field( 'author_name', $post_id ) : '';
$author_designation = function_exists( 'get_field' ) ? get_field( 'author_designation', $post_id ) : '';
$blog_read_time     = function_exists( 'get_field' ) ? get_field( 'blog_read_time', $post_id ) : '';

$publish_date = get_the_date( 'F j, Y', $post_id );
?>

<section class="pt-16 pb-8 bg-white">
	<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Category Badge -->
		<?php if ( ! empty( $category_name ) ) : ?>
			<span class="text-xs sm:text-sm font-bold text-brand-red uppercase tracking-widest block mb-4">
				<?php echo esc_html( $category_name ); ?>
			</span>
		<?php endif; ?>

		<!-- Blog Title -->
		<h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-brand-dark leading-tight mb-8 font-outfit">
			<?php echo esc_html( get_the_title() ); ?>
		</h1>

		<!-- Divider -->
		<hr class="border-[#EBE8E2] mb-6">

		<!-- Metadata Row -->
		<div class="flex flex-wrap items-center gap-6 md:gap-10 text-xs sm:text-sm mb-10 select-none">
			<!-- Author Block -->
			<?php if ( ! empty( $author_name ) ) : ?>
				<div class="flex items-center gap-3">
					<!-- Circular Icon Placeholder -->
					<div class="w-10 h-10 rounded-full bg-brand-cream/60 flex items-center justify-center text-brand-muted shrink-0">
						<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
						</svg>
					</div>
					<div>
						<span class="font-bold text-brand-dark block leading-tight"><?php echo esc_html( $author_name ); ?></span>
						<?php if ( ! empty( $author_designation ) ) : ?>
							<span class="text-[10px] font-bold text-brand-muted uppercase tracking-wider block mt-0.5"><?php echo esc_html( $author_designation ); ?></span>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<!-- Vertical Divider -->
			<?php if ( ! empty( $author_name ) ) : ?>
				<div class="hidden sm:block h-8 w-[1px] bg-[#EBE8E2]"></div>
			<?php endif; ?>

			<!-- Published Block -->
			<div>
				<span class="text-[10px] font-bold text-brand-muted uppercase tracking-wider block mb-1">Published</span>
				<span class="font-bold text-brand-dark block"><?php echo esc_html( $publish_date ); ?></span>
			</div>

			<!-- Vertical Divider -->
			<div class="hidden sm:block h-8 w-[1px] bg-[#EBE8E2]"></div>

			<!-- Read Time Block -->
			<?php if ( ! empty( $blog_read_time ) ) : ?>
				<div>
					<span class="text-[10px] font-bold text-brand-muted uppercase tracking-wider block mb-1">Read Time</span>
					<span class="font-bold text-brand-dark block"><?php echo esc_html( $blog_read_time ); ?></span>
				</div>
			<?php endif; ?>
		</div>

		<!-- Divider -->
		<hr class="border-[#EBE8E2] mb-10">

		<!-- Featured Cover Image -->
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="w-full aspect-[21/9] rounded-3xl overflow-hidden shadow-sm bg-brand-cream/30">
				<?php the_post_thumbnail( 'full', array( 'class' => 'w-full h-full object-cover' ) ); ?>
			</div>
		<?php endif; ?>

	</div>
</section>
