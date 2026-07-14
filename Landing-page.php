<?php
/**
 * Template Name: Landing Page
 *
 * This is a completely custom static landing page template.
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lotus Little Stars Hospitals</title>

	<!-- Google Fonts: Mulish and Lato -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Mulish:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

	<!-- Tailwind Play CDN -->
	<script src="https://cdn.tailwindcss.com?plugins=typography"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						brand: {
							red: '#A61A24',
							'red-hover': '#8B141B',
							coral: '#D93B48',
							cream: '#F7FAF5',
							bg: '#FDFBF7',
							dark: '#111827',
							muted: '#4B5563',
							border: '#E5E7EB',
							green: '#3C493D',
						}
					},
					fontFamily: {
						sans: ['Lato', 'sans-serif'],
						mulish: ['Mulish', 'sans-serif'],
						lato: ['Lato', 'sans-serif'],
					}
				}
			}
		}
	</script>
	<style type="text/tailwindcss">
		@layer base {
			body {
				@apply bg-white text-brand-dark font-sans antialiased;
			}
		}
	</style>
</head>
<body class="bg-white min-h-screen flex flex-col justify-between">
	
	<!-- Header Navigation -->
	<header class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex items-center justify-between h-24">
				<!-- Logo -->
				<div class="flex-shrink-0 flex items-center">
					<a href="#" class="flex items-center">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/lotus-logo.png" alt="Lotus Little Stars" class="h-16 md:h-20 w-auto object-contain">
					</a>
				</div>

				<!-- CTA Button -->
				<div>
					<a href="#" class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold rounded-xl text-white bg-brand-red hover:bg-brand-red-hover transition-colors duration-200 shadow-sm">
						Book Appointment
					</a>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content Section -->
	<main class="flex-grow bg-[#F4F8F3] relative overflow-hidden">
		<!-- Background decorative glowing circles -->
		<div class="absolute -right-20 -top-20 w-[400px] h-[400px] bg-green-200/30 rounded-full blur-3xl -z-10"></div>
		<div class="absolute right-10 top-1/2 -translate-y-1/2 w-[350px] h-[350px] bg-green-100/40 rounded-full blur-3xl -z-10"></div>

		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 lg:py-24">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
				
				<!-- Left Column: Content -->
				<div class="lg:col-span-7 flex flex-col justify-center text-left">
					<!-- Badge -->
					<div class="self-start inline-flex items-center justify-center bg-[#A61A24] text-white text-xs font-extrabold tracking-wider px-4 py-1.5 rounded-full uppercase mb-6 shadow-sm">
						Available 24/7
					</div>

					<!-- Heading -->
					<h1 class="text-4xl md:text-5xl lg:text-6xl font-mulish font-extrabold text-[#A61A24] leading-[1.1] mb-6">
						Expert Paediatric Inpatient Care in Hyderabad
					</h1>

					<!-- Brand Name & Description -->
					<div class="mb-6">
						<h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-1">Little Fernz</h2>
						<p class="text-base md:text-lg text-gray-600 font-medium">Paediatric Inpatient Services at Fernandez Hospitals</p>
					</div>

					<!-- Location -->
					<div class="flex items-start gap-2 mb-8">
						<svg class="w-5 h-5 text-[#A61A24] mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
							<path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
						</svg>
						<span class="text-sm md:text-base text-gray-700 font-semibold leading-relaxed">
							Hyderguda | Bogulkunta | Stork Home (Banjara Hills)
						</span>
					</div>

					<!-- Local SVG Icons Row -->
					<div class="flex items-center gap-4 mb-8">
						<!-- Icon 1 -->
						<div class="w-12 h-12 rounded-xl bg-[#E2ECE4] flex items-center justify-center shadow-sm">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Lp-icon-1.svg" alt="Pediatric Care Icon" class="w-6 h-auto">
						</div>
						<!-- Icon 2 -->
						<div class="w-12 h-12 rounded-xl bg-[#FADCDD] flex items-center justify-center shadow-sm">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Lp-icon-2.svg" alt="Child Care Icon" class="w-5.5 h-auto">
						</div>
						<!-- Icon 3 -->
						<div class="w-12 h-12 rounded-xl bg-[#E1ECF7] flex items-center justify-center shadow-sm">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Lp-icon-3.svg" alt="Medical Services Icon" class="w-5.5 h-auto">
						</div>
					</div>

					<!-- Button -->
					<div class="mb-8">
						<a href="#" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-xl text-white bg-[#A61A24] hover:bg-[#8B141B] transition-colors duration-200 shadow-md">
							Book an Appointment
						</a>
					</div>

					<!-- Disclaimer -->
					<p class="text-xs md:text-sm text-gray-500 italic font-medium leading-relaxed max-w-xl">
						Note: No On-site PICU, but supported by a trusted referral network for specialised care.
					</p>
				</div>

				<!-- Right Column: Image Frame -->
				<div class="lg:col-span-5 relative">
					<!-- Glow effect background for image -->
					<div class="absolute -inset-4 bg-green-200/20 rounded-[58px] md:rounded-[68px] blur-2xl -z-10"></div>
					<!-- Frame & Image -->
					<div class="relative w-full max-w-md lg:max-w-none aspect-[4/5] mx-auto overflow-hidden rounded-[50px] md:rounded-[60px] border-[10px] md:border-[16px] border-white shadow-2xl">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Lp-right.png" alt="Paediatric Inpatient Care" class="w-full h-full object-cover">
					</div>
				</div>

			</div>
		</div>
	</main>

	<!-- Footer Section -->
	<footer class="bg-gray-50 border-t border-gray-100 py-6 text-center text-sm text-gray-500">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<p>&copy; <?php echo date('Y'); ?> Lotus Little Stars Hospitals. All rights reserved.</p>
		</div>
	</footer>

</body>
</html>
