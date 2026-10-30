<?php
/**
 * Template part for displaying the home page stats section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the Front Page ID
$home_page_id = get_option( 'page_on_front' );

// Fetch stats group fields from the Front Page
$stat_1 = function_exists( 'get_field' ) ? get_field( 'stat_1', $home_page_id ) : null;
$stat_2 = function_exists( 'get_field' ) ? get_field( 'stat_2', $home_page_id ) : null;
$stat_3 = function_exists( 'get_field' ) ? get_field( 'stat_3', $home_page_id ) : null;
$stat_4 = function_exists( 'get_field' ) ? get_field( 'stat_4', $home_page_id ) : null;
$stat_5 = function_exists( 'get_field' ) ? get_field( 'stat_5', $home_page_id ) : null;
$stat_6 = function_exists( 'get_field' ) ? get_field( 'stat_6', $home_page_id ) : null;
?>

<section class="py-12 bg-[#F1F4F0] border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12 divide-y-0 divide-x-0 sm:divide-x-0 lg:divide-x lg:divide-brand-cream/80">
			<!-- Stat 1 -->
			<?php if ( is_array( $stat_1 ) && ( ! empty( $stat_1['number'] ) || ! empty( $stat_1['label'] ) ) ) : ?>
				<div class="flex flex-col items-center text-center bg-white border rounded-lg p-4 lg:p-4">
					<?php if ( ! empty( $stat_1['number'] ) ) : ?>
						<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number"><?php echo esc_html( $stat_1['number'] ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $stat_1['label'] ) ) : ?>
						<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase"><?php echo esc_html( $stat_1['label'] ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
			<!-- Stat 2 -->
			<?php if ( is_array( $stat_2 ) && ( ! empty( $stat_2['number'] ) || ! empty( $stat_2['label'] ) ) ) : ?>
				<div class="flex flex-col items-center text-center bg-white rounded-lg border p-4 lg:p-4 lg:pl-4">
					<?php if ( ! empty( $stat_2['number'] ) ) : ?>
						<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number"><?php echo esc_html( $stat_2['number'] ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $stat_2['label'] ) ) : ?>
						<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase"><?php echo esc_html( $stat_2['label'] ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
			<!-- Stat 3 -->
			<?php if ( is_array( $stat_3 ) && ( ! empty( $stat_3['number'] ) || ! empty( $stat_3['label'] ) ) ) : ?>
				<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
					<?php if ( ! empty( $stat_3['number'] ) ) : ?>
						<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number"><?php echo esc_html( $stat_3['number'] ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $stat_3['label'] ) ) : ?>
						<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase"><?php echo esc_html( $stat_3['label'] ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
			<!-- Stat 4 -->
			<?php if ( is_array( $stat_4 ) && ( ! empty( $stat_4['number'] ) || ! empty( $stat_4['label'] ) ) ) : ?>
				<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
					<?php if ( ! empty( $stat_4['number'] ) ) : ?>
						<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number"><?php echo esc_html( $stat_4['number'] ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $stat_4['label'] ) ) : ?>
						<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase"><?php echo esc_html( $stat_4['label'] ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
			<!-- Stat 5 -->
			<?php if ( is_array( $stat_5 ) && ( ! empty( $stat_5['number'] ) || ! empty( $stat_5['label'] ) ) ) : ?>
				<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
					<?php if ( ! empty( $stat_5['number'] ) ) : ?>
						<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number"><?php echo esc_html( $stat_5['number'] ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $stat_5['label'] ) ) : ?>
						<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase"><?php echo esc_html( $stat_5['label'] ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			
			<!-- Stat 6 -->
			<?php if ( is_array( $stat_6 ) && ( ! empty( $stat_6['number'] ) || ! empty( $stat_6['label'] ) ) ) : ?>
				<div class="flex flex-col items-center text-center bg-white rounded border p-4 lg:p-4 lg:pl-4">
					<?php if ( ! empty( $stat_6['number'] ) ) : ?>
						<span class="font-outfit text-4xl sm:text-3xl font-bold text-brand-red mb-2 stat-number"><?php echo esc_html( $stat_6['number'] ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $stat_6['label'] ) ) : ?>
						<span class="text-sm font-semibold text-brand-dark tracking-wide uppercase"><?php echo esc_html( $stat_6['label'] ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

