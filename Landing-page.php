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
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/lotus-logo.png?v=1" alt="Lotus Little Stars" class="h-16 md:h-20 w-auto object-contain">
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
							<svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-auto">
								<path d="M0 5V2C0 1.45 0.195833 0.979167 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0H18C18.55 0 19.0208 0.195833 19.4125 0.5875C19.8042 0.979167 20 1.45 20 2V8H18V2H2V5H0ZM2 16C1.45 16 0.979167 15.8042 0.5875 15.4125C0.195833 15.0208 0 14.55 0 14V11H2V14H9C9 14.3333 9 14.6667 9 15C9 15.3333 9 15.6667 9 16H2ZM16 18.5L14.475 17.2C13.0083 15.95 12.0625 15.0458 11.6375 14.4875C11.2125 13.9292 11 13.35 11 12.75C11 12 11.2667 11.3542 11.8 10.8125C12.3333 10.2708 12.9833 10 13.75 10C14.1833 10 14.5958 10.1 14.9875 10.3C15.3792 10.5 15.7167 10.7917 16 11.175C16.2667 10.7917 16.5958 10.5 16.9875 10.3C17.3792 10.1 17.8 10 18.25 10C19 10 19.6458 10.2708 20.1875 10.8125C20.7292 11.3542 21 12 21 12.75C21 13.35 20.7833 13.9292 20.35 14.4875C19.9167 15.0458 18.9667 15.95 17.5 17.2L16 18.5ZM16 15.85L16.7 15.275C17.6333 14.475 18.25 13.9125 18.55 13.5875C18.85 13.2625 19 12.9833 19 12.75C19 12.55 18.925 12.375 18.775 12.225C18.625 12.075 18.45 12 18.25 12C18.1167 12 17.9958 12.0292 17.8875 12.0875C17.7792 12.1458 17.65 12.2417 17.5 12.375L16 13.8L14.475 12.375C14.325 12.2417 14.1958 12.1458 14.0875 12.0875C13.9792 12.0292 13.8667 12 13.75 12C13.5333 12 13.3542 12.075 13.2125 12.225C13.0708 12.375 13 12.55 13 12.75C13 12.9833 13.1458 13.2625 13.4375 13.5875C13.7292 13.9125 14.3417 14.475 15.275 15.275L16 15.85ZM5 13C4.8 13 4.62083 12.9542 4.4625 12.8625C4.30417 12.7708 4.18333 12.6333 4.1 12.45L2.375 9H0V7H3C3.18333 7 3.35417 7.05 3.5125 7.15C3.67083 7.25 3.79167 7.38333 3.875 7.55L5 9.775L8.1 3.55C8.18333 3.38333 8.30833 3.25833 8.475 3.175C8.64167 3.09167 8.81667 3.05 9 3.05C9.18333 3.05 9.35833 3.09167 9.525 3.175C9.69167 3.25833 9.81667 3.38333 9.9 3.55L11.6 7H15V9H11C10.8 9 10.6208 8.95417 10.4625 8.8625C10.3042 8.77083 10.1833 8.63333 10.1 8.45L9 6.25L5.875 12.45C5.79167 12.6333 5.67083 12.7708 5.5125 12.8625C5.35417 12.9542 5.18333 13 5 13Z" fill="#536257"/>
							</svg>
						</div>
						<!-- Icon 2 -->
						<div class="w-12 h-12 rounded-xl bg-[#FADCDD] flex items-center justify-center shadow-sm">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5.5 h-auto">
								<path d="M11.5 8.75C11.15 8.75 10.8542 8.62917 10.6125 8.3875C10.3708 8.14583 10.25 7.85 10.25 7.5C10.25 7.15 10.3708 6.85417 10.6125 6.6125C10.8542 6.37083 11.15 6.25 11.5 6.25C11.85 6.25 12.1458 6.37083 12.3875 6.6125C12.6292 6.85417 12.75 7.15 12.75 7.5C12.75 7.85 12.6292 8.14583 12.3875 8.3875C12.1458 8.62917 11.85 8.75 11.5 8.75ZM6.5 8.75C6.15 8.75 5.85417 8.62917 5.6125 8.3875C5.37083 8.14583 5.25 7.85 5.25 7.5C5.25 7.15 5.37083 6.85417 5.6125 6.6125C5.85417 6.37083 6.15 6.25 6.5 6.25C6.85 6.25 7.14583 6.37083 7.3875 6.6125C7.62917 6.85417 7.75 7.15 7.75 7.5C7.75 7.85 7.62917 8.14583 7.3875 8.3875C7.14583 8.62917 6.85 8.75 6.5 8.75ZM9 14C8 14 7.09583 13.725 6.2875 13.175C5.47917 12.625 4.88333 11.9 4.5 11H13.5C13.1167 11.9 12.5208 12.625 11.7125 13.175C10.9042 13.725 10 14 9 14ZM9 18C7.75 18 6.57917 17.7625 5.4875 17.2875C4.39583 16.8125 3.44583 16.1708 2.6375 15.3625C1.82917 14.5542 1.1875 13.6042 0.7125 12.5125C0.2375 11.4208 0 10.25 0 9C0 7.75 0.2375 6.57917 0.7125 5.4875C1.1875 4.39583 1.82917 3.44583 2.6375 2.6375C3.44583 1.82917 4.39583 1.1875 5.4875 0.7125C6.57917 0.2375 7.75 0 9 0C10.25 0 11.4208 0.2375 12.5125 0.7125C13.6042 1.1875 14.5542 1.82917 15.3625 2.6375C16.1708 3.44583 16.8125 4.39583 17.2875 5.4875C17.7625 6.57917 18 7.75 18 9C18 10.25 17.7625 11.4208 17.2875 12.5125C16.8125 13.6042 16.1708 14.5542 15.3625 15.3625C14.5542 16.1708 13.6042 16.8125 12.5125 17.2875C11.4208 17.7625 10.25 18 9 18ZM9 16C10.9333 16 12.5833 15.3167 13.95 13.95C15.3167 12.5833 16 10.9333 16 9C16 7.06667 15.3167 5.41667 13.95 4.05C12.5833 2.68333 10.9333 2 9 2C8.9 2 8.8 2 8.7 2C8.6 2 8.5 2.01667 8.4 2.05C8.3 2.15 8.23333 2.25833 8.2 2.375C8.16667 2.49167 8.15 2.61667 8.15 2.75C8.15 3.1 8.27083 3.39583 8.5125 3.6375C8.75417 3.87917 9.05 4 9.4 4C9.55 4 9.6875 3.975 9.8125 3.925C9.9375 3.875 10.0667 3.85 10.2 3.85C10.4 3.85 10.5667 3.925 10.7 4.075C10.8333 4.225 10.9 4.4 10.9 4.6C10.9 4.98333 10.7208 5.22917 10.3625 5.3375C10.0042 5.44583 9.68333 5.5 9.4 5.5C8.65 5.5 8.00417 5.22917 7.4625 4.6875C6.92083 4.14583 6.65 3.5 6.65 2.75C6.65 2.7 6.65 2.65 6.65 2.6C6.65 2.55 6.65833 2.48333 6.675 2.4C5.29167 2.9 4.16667 3.74167 3.3 4.925C2.43333 6.10833 2 7.46667 2 9C2 10.9333 2.68333 12.5833 4.05 13.95C5.41667 15.3167 7.06667 16 9 16Z" fill="#AF101A"/>
							</svg>
						</div>
						<!-- Icon 3 -->
						<div class="w-12 h-12 rounded-xl bg-[#E1ECF7] flex items-center justify-center shadow-sm">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5.5 h-auto">
								<path d="M2 20C1.45 20 0.979167 19.8042 0.5875 19.4125C0.195833 19.0208 0 18.55 0 18V6C0 5.45 0.195833 4.97917 0.5875 4.5875C0.979167 4.19583 1.45 4 2 4H6V2C6 1.45 6.19583 0.979167 6.5875 0.5875C6.97917 0.195833 7.45 0 8 0H12C12.55 0 13.0208 0.195833 13.4125 0.5875C13.8042 0.979167 14 1.45 14 2V4H18C18.55 4 19.0208 4.19583 19.4125 4.5875C19.8042 4.97917 20 5.45 20 6V18C20 18.55 19.8042 19.0208 19.4125 19.4125C19.0208 19.8042 18.55 20 18 20H2ZM2 18H18V6H2V18ZM8 4H12V2H8V4ZM2 18V6V18ZM9 13V16H11V13H14V11H11V8H9V11H6V13H9Z" fill="#0058A2"/>
							</svg>
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
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Lp-right.png?v=1" alt="Paediatric Inpatient Care" class="w-full h-full object-cover">
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
