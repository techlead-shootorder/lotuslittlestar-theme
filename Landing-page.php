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
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/lotus-new-logo.gif" alt="Lotus Little Stars" class="h-16 md:h-20 w-auto object-contain">
					</a>
				</div>

				<!-- CTA Button -->
				<div>
					<a href="#booking-form" class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold rounded-xl text-white bg-brand-red hover:bg-brand-red-hover transition-colors duration-200 shadow-sm">
						Book Appointment
					</a>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content Section -->
	<main class="flex-grow">
		
		<!-- Hero Section -->
		<section class="relative bg-[#F4F8F3] overflow-hidden">
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
						<h1 class="text-3xl md:text-4xl lg:text-5xl font-mulish font-extrabold text-[#A61A24] leading-[1.1] mb-6">
							Expert Paediatric Inpatient Care in Hyderabad
						</h1>

						<!-- Brand Name & Description -->
						<div class="mb-6">
							<h2 class="text-xl md:text-2xl font-bold text-[#536257] mb-1">Little Fernz</h2>
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
							<a href="#booking-form" class="inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-xl text-white bg-[#A61A24] hover:bg-[#8B141B] transition-colors duration-200 shadow-md">
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
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/Lp-right.png" alt="Paediatric Inpatient Care" class="w-full h-full object-cover">
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- Trust Bar Section -->
		<section class="bg-[#F6E5E5] py-6 border-y border-[#F3DFDF] relative z-10 shadow-sm">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-4 items-center">
					
					<!-- Item 1: 15+ Years of Trusted Care -->
					<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 text-center sm:text-left">
						<div class="w-11 h-11 flex items-center justify-center text-[#3C493D] shadow-sm flex-shrink-0">
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/about-icon-1.svg" alt="15+ Years of Trusted Care" class="w-6 h-6 object-contain">
						</div>
						<span class="text-sm md:text-base text-[#3C493D] font-bold font-mulish leading-tight">
							15+ Years of Trusted Care
						</span>
					</div>
					
					<!-- Item 2: Experienced Specialists -->
					<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 text-center sm:text-left">
						<div class="w-11 h-11 flex items-center justify-center text-[#3C493D] shadow-sm flex-shrink-0">
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/about-icon-2.svg" alt="Experienced Specialists" class="w-6 h-6 object-contain">
						</div>
						<span class="text-sm md:text-base text-[#3C493D] font-bold font-mulish leading-tight">
							Experienced Specialists
						</span>
					</div>

					<!-- Item 3: Clinical Excellence -->
					<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 text-center sm:text-left">
						<div class="w-11 h-11 flex items-center justify-center text-[#3C493D] shadow-sm flex-shrink-0">
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/about-icon-3.svg" alt="Clinical Excellence" class="w-6 h-6 object-contain">
						</div>
						<span class="text-sm md:text-base text-[#3C493D] font-bold font-mulish leading-tight">
							Clinical Excellence
						</span>
					</div>

					<!-- Item 4: Family-Centered Care -->
					<div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 text-center sm:text-left">
						<div class="w-11 h-11 flex items-center justify-center text-[#3C493D] shadow-sm flex-shrink-0">
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/about-icon-4.svg" alt="Family-Centered Care" class="w-6 h-6 object-contain">
						</div>
						<span class="text-sm md:text-base text-[#3C493D] font-bold font-mulish leading-tight">
							Family-Centered Care
						</span>
					</div>
					
				</div>
			</div>
		</section>

		<!-- About / Healthcare Designed Section -->
		<section class="bg-white py-16 md:py-24 relative overflow-hidden">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
					
					<!-- Left Column: Image Frame -->
					<div class="lg:col-span-5 relative">
						<!-- Glow effect background for image -->
						<div class="absolute -inset-4 bg-red-100/20 rounded-[40px] blur-2xl -z-10"></div>
						<!-- Frame & Image -->
						<div class="relative w-full max-w-md lg:max-w-none aspect-[1.53] mx-auto overflow-hidden rounded-[32px] md:rounded-[40px] border-[10px] md:border-[16px] border-white shadow-2xl">
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/lp-about-image.jpg" alt="Healthcare Designed Around Your Family" class="w-full h-full object-cover">
						</div>
					</div>

					<!-- Right Column: Content -->
					<div class="lg:col-span-7 flex flex-col justify-center text-left">
						<!-- Heading -->
						<h2 class="text-3xl md:text-4xl lg:text-5xl font-mulish font-semibold text-[#3C493D] leading-[1.2] mb-4">
							Healthcare Designed Around Your Family
						</h2>
						
						<!-- Decorative Red Line -->
						<div class="w-16 h-1.5 bg-[#A61A24] rounded-full mb-6"></div>

						<!-- Description -->
						<p class="text-base md:text-lg text-gray-600 font-medium leading-relaxed mb-6">
							For over 15 years, Lotus Little Stars Hospital has been a trusted destination for families seeking the highest standards of healthcare. We believe that every woman deserves personalized wellness journeys and every child deserves the brightest start in life.
						</p>
						
						<p class="text-base md:text-lg text-gray-600 font-medium leading-relaxed mb-8">
							Our integrated approach combines cutting-edge medical technology with a deeply human touch, ensuring that your family's health is in the safest, most compassionate hands.
						</p>

						<!-- Features Check List -->
						<div class="space-y-4">
							<!-- Feature 1 -->
							<div class="flex items-start gap-3">
								<svg class="w-6 h-6 text-[#A61A24] mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
								<span class="text-sm md:text-base text-gray-800 font-bold leading-normal">
									24/7 Advanced Neonatal Intensive Care (NICU)
								</span>
							</div>

							<!-- Feature 2 -->
							<div class="flex items-start gap-3">
								<svg class="w-6 h-6 text-[#A61A24] mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
								<span class="text-sm md:text-base text-gray-800 font-bold leading-normal">
									State-of-the-art Labor & Delivery Suites
								</span>
							</div>

							<!-- Feature 3 -->
							<div class="flex items-start gap-3">
								<svg class="w-6 h-6 text-[#A61A24] mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>
								<span class="text-sm md:text-base text-gray-800 font-bold leading-normal">
									Comprehensive Preventive Health Screening
								</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- Comprehensive Care Across Every Stage Section -->
		<section class="bg-[#F8F9F8] py-16 md:py-24 relative overflow-hidden">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
				<!-- Heading -->
				<h2 class="text-3xl md:text-3xl lg:text-4xl font-mulish font-semibold text-[#3C493D] leading-tight mb-4">
					Comprehensive Care Across Every Stage
				</h2>
				<!-- Subtitle -->
				<p class="text-base md:text-lg text-gray-500 font-medium max-w-2xl mx-auto mb-16 leading-relaxed">
					From adolescent health to geriatric care, and everything in between for your little ones.
				</p>

				<!-- Cards Grid -->
				<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
					
					<!-- Card 1: Women's Care -->
					<div class="bg-white rounded-[24px] border border-red-100/30 p-8 md:p-10 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center">
						<div class="w-20 h-20 rounded-full bg-[#E2ECE4]/50 flex items-center justify-center mb-6">
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/Gynecology-Icon.svg" alt="Women's Care" class="w-12 h-12 object-contain">
						</div>
						<h3 class="text-xl md:text-2xl font-bold font-mulish text-[#3C493D] mb-4">
							Women's Care
						</h3>
						<p class="text-sm md:text-base text-gray-600 font-medium leading-relaxed">
							Advanced gynecological screenings, hormonal health management, and minimally invasive surgeries tailored for every life stage.
						</p>
					</div>

					<!-- Card 2: Maternity Care -->
					<div class="bg-white rounded-[24px] border border-red-100/30 p-8 md:p-10 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center">
						<div class="w-20 h-20 rounded-full bg-[#E2ECE4]/50 flex items-center justify-center mb-6">
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/Maternity-Icon.svg" alt="Maternity Care" class="w-12 h-12 object-contain">
						</div>
						<h3 class="text-xl md:text-2xl font-bold font-mulish text-[#3C493D] mb-4">
							Maternity Care
						</h3>
						<p class="text-sm md:text-base text-gray-600 font-medium leading-relaxed">
							Comprehensive prenatal, delivery, and postnatal support systems designed to make your journey to motherhood safe and joyful.
						</p>
					</div>

					<!-- Card 3: Pediatric Care -->
					<div class="bg-white rounded-[24px] border border-red-100/30 p-8 md:p-10 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col items-center">
						<div class="w-20 h-20 rounded-full bg-[#E1ECF7]/50 flex items-center justify-center mb-6">
							<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/Pediatric-Icon.svg" alt="Pediatric Care" class="w-12 h-12 object-contain">
						</div>
						<h3 class="text-xl md:text-2xl font-bold font-mulish text-[#3C493D] mb-4">
							Pediatric Care
						</h3>
						<p class="text-sm md:text-base text-gray-600 font-medium leading-relaxed">
							Dedicated specialists providing neonatology, routine immunizations, and specialized pediatric emergency care 24/7.
						</p>
					</div>

				</div>
			</div>
		</section>

		<!-- What Sets Lotus Little Stars Apart Section -->
		<section class="bg-white py-16 md:py-24 relative overflow-hidden">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
					
					<!-- Left Column: Title and Description -->
					<div class="lg:col-span-5 flex flex-col justify-center text-left">
						<h2 class="text-3xl md:text-3xl lg:text-4xl font-mulish font-semibold text-[#3C493D] leading-tight mb-6">
							What Sets Lotus Little Stars Apart
						</h2>
						<p class="text-base text-gray-500 font-medium leading-relaxed max-w-md">
							We don't just treat symptoms; we care for people. Our values are built into every brick of our facility.
						</p>
					</div>

					<!-- Right Column: 2x2 Grid of Cards -->
					<div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
						
						<!-- Card 1: Integrated Care -->
						<div class="bg-[#F3F6F3] rounded-[24px] p-8 relative overflow-hidden flex flex-col items-start text-left shadow-sm border border-gray-100/50 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
							<!-- Corner decorative arc -->
							<div class="absolute -top-10 -right-10 w-24 h-24 rounded-full bg-[#E5ECE7]/60 -z-0"></div>
							
							<!-- Icon container -->
							<div class="w-12 h-12 rounded-xl bg-[#FADCDD]/60 flex items-center justify-center mb-6 relative z-10">
								<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/integrated-care.svg" alt="Integrated Care" class="w-6 h-6 object-contain">
							</div>
							
							<h3 class="text-xl font-bold font-mulish text-[#A61A24] mb-3 relative z-10">
								Integrated Care
							</h3>
							<p class="text-sm md:text-base text-gray-600 font-medium leading-relaxed relative z-10">
								One-stop solution for all health needs with seamless coordination between departments.
							</p>
						</div>

						<!-- Card 2: Clinical Expertise -->
						<div class="bg-[#F4F4FC] rounded-[24px] p-8 relative overflow-hidden flex flex-col items-start text-left shadow-sm border border-gray-100/50 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
							<!-- Corner decorative arc -->
							<div class="absolute -top-10 -right-10 w-24 h-24 rounded-full bg-[#EBEBFA]/60 -z-0"></div>
							
							<!-- Icon container -->
							<div class="w-12 h-12 rounded-xl bg-[#FADCDD]/60 flex items-center justify-center mb-6 relative z-10">
								<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/clinical.svg" alt="Clinical Expertise" class="w-6 h-6 object-contain">
							</div>
							
							<h3 class="text-xl font-bold font-mulish text-[#A61A24] mb-3 relative z-10">
								Clinical Expertise
							</h3>
							<p class="text-sm md:text-base text-gray-600 font-medium leading-relaxed relative z-10">
								Over 50+ years of cumulative experience among our senior consultant team.
							</p>
						</div>

						<!-- Card 3: Medical Excellence -->
						<div class="bg-[#FAF7F2] rounded-[24px] p-8 relative overflow-hidden flex flex-col items-start text-left shadow-sm border border-gray-100/50 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
							<!-- Corner decorative arc -->
							<div class="absolute -top-10 -right-10 w-24 h-24 rounded-full bg-[#F6ECE0]/60 -z-0"></div>
							
							<!-- Icon container -->
							<div class="w-12 h-12 rounded-xl bg-[#FADCDD]/60 flex items-center justify-center mb-6 relative z-10">
								<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/medical.svg" alt="Medical Excellence" class="w-6 h-6 object-contain">
							</div>
							
							<h3 class="text-xl font-bold font-mulish text-[#A61A24] mb-3 relative z-10">
								Medical Excellence
							</h3>
							<p class="text-sm md:text-base text-gray-600 font-medium leading-relaxed relative z-10">
								Equipped with the latest diagnostic and therapeutic technology in Hyderabad.
							</p>
						</div>

						<!-- Card 4: Compassion -->
						<div class="bg-[#F1F7F6] rounded-[24px] p-8 relative overflow-hidden flex flex-col items-start text-left shadow-sm border border-gray-100/50 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
							<!-- Corner decorative arc -->
							<div class="absolute -top-10 -right-10 w-24 h-24 rounded-full bg-[#E3EFF0]/60 -z-0"></div>
							
							<!-- Icon container -->
							<div class="w-12 h-12 rounded-xl bg-[#FADCDD]/60 flex items-center justify-center mb-6 relative z-10">
								<img src="http://lotuslittlestars.in/wp-content/uploads/2026/07/compassion.svg" alt="Compassion" class="w-6 h-6 object-contain">
							</div>
							
							<h3 class="text-xl font-bold font-mulish text-[#A61A24] mb-3 relative z-10">
								Compassion
							</h3>
							<p class="text-sm md:text-base text-gray-600 font-medium leading-relaxed relative z-10">
								Every patient is treated with dignity, warmth, and genuine human empathy.
							</p>
						</div>

					</div>

				</div>
			</div>
		</section>

		<!-- A Simple Path to Exceptional Care Section -->
		<section class="bg-[#FDF9F3] py-16 md:py-24 relative overflow-hidden">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
				<!-- Heading -->
				<h2 class="text-3xl md:text-3xl lg:text-4xl  font-regular text-[#3C493D] leading-tight mb-16">
					A Simple Path to Exceptional Care
				</h2>

				<!-- Steps Container -->
				<div class="relative max-w-6xl mx-auto">
					
					<!-- Desktop Connecting Line -->
					<div class="hidden md:block absolute top-[28px] left-[10%] right-[10%] h-[1px] bg-red-200/50 -z-0"></div>
					
					<!-- Mobile Connecting Line -->
					<div class="block md:hidden absolute left-[28px] top-8 bottom-8 w-[1px] bg-red-200/50 -z-0"></div>

					<!-- Grid for Steps -->
					<div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-6 relative z-10">
						
						<!-- Step 1 -->
						<div class="flex flex-row md:flex-col items-start md:items-center gap-6 md:gap-4 text-left md:text-center relative">
							<!-- Step Badge (You can replace the number with an <img> tag if you prefer icons) -->
							<div class="w-14 h-14 rounded-[14px] bg-white border-2 border-[#A61A24] shadow-md flex items-center justify-center text-[#A61A24] font-bold text-lg flex-shrink-0 relative z-10">
								1
							</div>
							<!-- Text Content -->
							<div>
								<h3 class="font-serif font-regular text-gray-900 text-lg md:text-xl mb-2 md:mt-4">
									Initial Consultation
								</h3>
								<p class="text-sm md:text-base text-gray-500 font-medium leading-relaxed">
									Review clinical history and current symptoms.
								</p>
							</div>
						</div>

						<!-- Step 2 -->
						<div class="flex flex-row md:flex-col items-start md:items-center gap-6 md:gap-4 text-left md:text-center relative">
							<!-- Step Badge (You can replace the number with an <img> tag if you prefer icons) -->
							<div class="w-14 h-14 rounded-[14px] bg-white border-2 border-[#3C493D] shadow-md flex items-center justify-center text-[#3C493D] font-bold text-lg flex-shrink-0 relative z-10">
								2
							</div>
							<!-- Text Content -->
							<div>
								<h3 class="font-serif font-regular text-gray-900 text-lg md:text-xl mb-2 md:mt-4">
									Diagnostic Mapping
								</h3>
								<p class="text-sm md:text-base text-gray-500 font-medium leading-relaxed">
									Advanced screening and immediate lab results.
								</p>
							</div>
						</div>

						<!-- Step 3 -->
						<div class="flex flex-row md:flex-col items-start md:items-center gap-6 md:gap-4 text-left md:text-center relative">
							<!-- Step Badge (You can replace the number with an <img> tag if you prefer icons) -->
							<div class="w-14 h-14 rounded-[14px] bg-white border-2 border-[#0058A2] shadow-md flex items-center justify-center text-[#0058A2] font-bold text-lg flex-shrink-0 relative z-10">
								3
							</div>
							<!-- Text Content -->
							<div>
								<h3 class="font-serif font-regular text-gray-900 text-lg md:text-xl mb-2 md:mt-4">
									Personalized Care
								</h3>
								<p class="text-sm md:text-base text-gray-500 font-medium leading-relaxed">
									Admission and round-the-clock specialized monitoring.
								</p>
							</div>
						</div>

						<!-- Step 4 -->
						<div class="flex flex-row md:flex-col items-start md:items-center gap-6 md:gap-4 text-left md:text-center relative">
							<!-- Step Badge (You can replace the number with an <img> tag if you prefer icons) -->
							<div class="w-14 h-14 rounded-[14px] bg-white border-2 border-[#111827] shadow-md flex items-center justify-center text-[#111827] font-bold text-lg flex-shrink-0 relative z-10">
								4
							</div>
							<!-- Text Content -->
							<div>
								<h3 class="font-serif font-regular text-gray-900 text-lg md:text-xl mb-2 md:mt-4">
									Continued Wellness
								</h3>
								<p class="text-sm md:text-base text-gray-500 font-medium leading-relaxed">
									Post-discharge follow-ups and recovery support.
								</p>
							</div>
						</div>

					</div>

				</div>
			</div>
		</section>

		<?php
		$doctors = [
			[
				'name'          => 'Dr. Satish Ghanta',
				'speciality'    => 'PEDIATRICS & NEONATOLOGY',
				'qualification' => 'MBBS (Manipal University), MD – Pediatrics',
				'position'      => 'SR Consultant Pediatrician, HOD Neonatal & Pediatric Intensivist Care',
				'experience'    => '32+ Years Experience',
				'image'         => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/Satish-Ghanta.jpg.jpeg', // Placeholder image URL
			],
			[
				'name'          => 'Dr. V.S.V Prasad',
				'speciality'    => 'PEDIATRICS & NEONATOLOGY',
				'qualification' => 'MD Pediatrics, AIIMS, New Delhi',
				'position'      => 'Group Chief Consultant Neonatologist and Pediatric Intensivist',
				'experience'    => '32+ Years Experience',
				'image'         => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/Dr-VSV-Prasad.jpg', // Placeholder image URL
			],
			[
				'name'          => 'Dr Ramana Dandamudi',
				'speciality'    => 'PEDIATRICS & PEDIATRIC HEMATO ONCOLOGY',
				'qualification' => 'MBBS, D.CH, MRCPI',
				'position'      => 'SR Consultant & HOD Pediatric Hematology & Oncology',
				'experience'    => '35+ Years Experience',
				'image'         => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/Ramana-Dandamudi.jpg.jpeg', // Placeholder image URL
			],
			[
				'name'          => 'Dr Roopa Ghanta',
				'speciality'    => 'GYNEACOLOGY',
				'qualification' => 'MBBS, DGO, CCPU',
				'position'      => 'Senior Consultant & HOD Obstetrics and Gynaecology',
				'experience'    => '29+ Years Experience',
				'image'         => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/DR-Roopa-ghanta-scaled.webp', // Placeholder image URL
			]
		];
		?>

		<!-- Meet Our Experts Section -->
		<section class="bg-white py-16 md:py-24 relative overflow-hidden">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				
				<!-- Section Header -->
				<div class="mb-12 text-left">
					<h2 class="text-3xl md:text-3xl lg:text-4xl font-mulish font-semibold text-[#3C493D] leading-tight mb-3">
						Meet Our Experts
					</h2>
					<p class="text-base md:text-lg text-gray-500 font-medium leading-relaxed">
						World-class doctors leading the way in family health.
					</p>
				</div>

				<!-- Doctors Grid -->
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
					<?php foreach ( $doctors as $doctor ) : ?>
						<div class="bg-white rounded-[24px] border border-red-100/30 p-6 md:p-8 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between">
							
							<!-- Top Content Area -->
							<div class="flex flex-col sm:flex-row gap-6 mb-6">
								<!-- Doctor Image -->
								<div class="w-full sm:w-44 aspect-square rounded-2xl overflow-hidden bg-gray-100 flex-shrink-0">
									<img src="<?php echo esc_url( $doctor['image'] ); ?>" alt="<?php echo esc_attr( $doctor['name'] ); ?>" class="w-full h-full object-cover">
								</div>

								<!-- Doctor Info & Details -->
								<div class="flex-grow text-left">
									<!-- Name & Verified Badge -->
									<div class="flex items-center gap-1.5 flex-wrap">
										<h3 class="text-xl md:text-2xl font-bold font-mulish text-gray-800 leading-tight">
											<?php echo esc_html( $doctor['name'] ); ?>
										</h3>
										<svg class="w-5 h-5 text-blue-500 flex-shrink-0 fill-current" viewBox="0 0 20 20">
											<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
										</svg>
									</div>

									<!-- Specialty -->
									<span class="text-xs font-bold tracking-wider text-gray-500 uppercase mt-1 mb-4 block">
										<?php echo esc_html( $doctor['speciality'] ); ?>
									</span>

									<hr class="border-gray-100 mb-4">

									<!-- Details List -->
									<div class="space-y-3.5">
										<!-- Qualification -->
										<div class="flex items-center gap-3">
											<div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 flex-shrink-0">
												<!-- Graduation Cap Icon -->
												<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
												</svg>
											</div>
											<span class="text-sm font-semibold text-gray-700 leading-normal">
												<?php echo esc_html( $doctor['qualification'] ); ?>
											</span>
										</div>

										<!-- Position -->
										<div class="flex items-center gap-3">
											<div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 flex-shrink-0">
												<!-- Briefcase Icon -->
												<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
												</svg>
											</div>
											<span class="text-sm font-semibold text-gray-700 leading-normal">
												<?php echo esc_html( $doctor['position'] ); ?>
											</span>
										</div>

										<!-- Experience -->
										<div class="flex items-center gap-3">
											<div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-500 flex-shrink-0">
												<!-- Award/Badge Icon -->
												<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
												</svg>
											</div>
											<span class="text-sm font-semibold text-gray-700 leading-normal">
												<?php echo esc_html( $doctor['experience'] ); ?>
											</span>
										</div>
									</div>
								</div>
							</div>

							<!-- Action Button -->
							<div class="mt-2">
								<a href="#booking-form" class="w-full inline-flex items-center justify-center px-6 py-3.5 text-base font-bold rounded-xl text-white bg-[#A61A24] hover:bg-[#8B141B] transition-colors duration-200 shadow-sm gap-2">
									<svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
										<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
									</svg>
									Book Appointment
								</a>
							</div>

						</div>
					<?php endforeach; ?>
				</div>

			</div>
		</section>

		<!-- Testimonials Section -->
		<section class="bg-[#F8F9F8] py-16 md:py-24 relative overflow-hidden">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
				
				<!-- Heading -->
				<h2 class="text-3xl md:text-3xl lg:text-4xl font-mulish font-semibold text-[#3C493D] leading-tight mb-16">
					What Families Say About Us
				</h2>

				<!-- Testimonials Grid -->
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
					
					<!-- Testimonial 1 -->
					<div class="bg-white rounded-[24px] border border-red-100/30 p-8 md:p-10 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between text-left">
						<div>
							<!-- Star Rating -->
							<div class="flex items-center gap-1 mb-6">
								<?php for ( $i = 0; $i < 5; $i++ ) : ?>
									<svg class="w-5 h-5 text-[#A61A24] fill-current" viewBox="0 0 20 20">
										<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
									</svg>
								<?php endfor; ?>
							</div>
							
							<!-- Quote Text -->
							<p class="text-gray-600 font-medium text-base md:text-lg mb-8 leading-relaxed">
								"The care we received during my pregnancy was exceptional. Dr. Roopa and her team made me feel safe and empowered every step of the way."
							</p>
						</div>

						<!-- Author Info Block -->
						<div class="flex items-center gap-4">
							<!-- Avatar Placeholder -->
							<div class="w-12 h-12 rounded-xl bg-[#E2ECE4] flex-shrink-0">
								<!-- If you want to add a photo, replace with an <img> tag:
								<img src="..." class="w-full h-full object-cover rounded-xl">
								-->
							</div>
							<div>
								<h4 class="font-bold text-gray-800 text-base md:text-lg font-mulish">
									Ananya Reddy
								</h4>
								<p class="text-xs text-gray-500 font-bold uppercase mt-0.5">
									Mother of two
								</p>
							</div>
						</div>
					</div>

					<!-- Testimonial 2 -->
					<div class="bg-white rounded-[24px] border border-red-100/30 p-8 md:p-10 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between text-left">
						<div>
							<!-- Star Rating -->
							<div class="flex items-center gap-1 mb-6">
								<?php for ( $i = 0; $i < 5; $i++ ) : ?>
									<svg class="w-5 h-5 text-[#A61A24] fill-current" viewBox="0 0 20 20">
										<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
									</svg>
								<?php endfor; ?>
							</div>
							
							<!-- Quote Text -->
							<p class="text-gray-600 font-medium text-base md:text-lg mb-8 leading-relaxed">
								"Lotus Little Stars was a blessing for our newborn. The NICU facilities and the nurses are world-class. We are eternally grateful."
							</p>
						</div>

						<!-- Author Info Block -->
						<div class="flex items-center gap-4">
							<!-- Avatar Placeholder -->
							<div class="w-12 h-12 rounded-xl bg-[#E2ECE4] flex-shrink-0">
								<!-- If you want to add a photo, replace with an <img> tag:
								<img src="..." class="w-full h-full object-cover rounded-xl">
								-->
							</div>
							<div>
								<h4 class="font-bold text-gray-800 text-base md:text-lg font-mulish">
									Suresh Kumar
								</h4>
								<p class="text-xs text-gray-500 font-bold uppercase mt-0.5">
									Parent
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<?php
		$faqs = [
			[
				'question' => 'How do I book an appointment?',
				'answer'   => 'Appointments can be booked online by submitting the enquiry form or by contacting our patient care team.',
			],
			[
				'question' => 'Do you provide emergency care?',
				'answer'   => 'Yes, we provide 24/7 pediatric and neonatal emergency care services across all our locations.',
			],
			[
				'question' => 'Do you treat high-risk pregnancies?',
				'answer'   => 'Yes, our highly experienced obstetricians and maternal-fetal medicine specialists are fully equipped to manage high-risk pregnancies.',
			],
			[
				'question' => 'What pediatric specialties are available?',
				'answer'   => 'We offer comprehensive pediatric care, including pediatric cardiology, gastroenterology, neurology, and neonatal intensive care (NICU).',
			],
		];
		?>

		<!-- FAQ Section -->
		<section class="bg-white py-16 md:py-24 relative overflow-hidden">
			<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
				
				<!-- Heading -->
				<h2 class="text-3xl md:text-3xl lg:text-4xl font-mulish font-semibol text-[#3C493D] text-center leading-tight mb-16">
					Frequently Asked Questions
				</h2>

				<!-- FAQ Accordion List -->
				<div class="space-y-4">
					<?php foreach ( $faqs as $index => $faq ) : 
						$is_first = $index === 0;
					?>
						<div class="faq-item bg-white rounded-2xl border border-gray-200/80 transition-all duration-300 shadow-sm overflow-hidden">
							<button class="faq-toggle w-full flex items-center justify-between p-6 text-left font-bold text-gray-800 hover:text-[#A61A24] transition-colors font-mulish text-base md:text-lg">
								<span><?php echo esc_html( $faq['question'] ); ?></span>
								<svg class="chevron-icon w-5 h-5 text-gray-500 transform transition-transform duration-200 <?php echo $is_first ? 'rotate-180' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
									<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
								</svg>
							</button>
							<div class="faq-content transition-all duration-300 overflow-hidden <?php echo $is_first ? '' : 'max-h-0'; ?>" style="<?php echo $is_first ? 'max-height: 150px;' : ''; ?>">
								<div class="px-6 pb-6 text-sm md:text-base text-gray-600 font-medium leading-relaxed">
									<?php echo esc_html( $faq['answer'] ); ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

			</div>
		</section>

		<!-- Ready to Take the Next Step / Booking Form Section -->
		<section id="booking-form" class="bg-[#F8F9F8] py-16 md:py-24 relative overflow-hidden">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				
				<!-- Inner Green Container -->
				<div class="bg-[#536257] rounded-[32px] md:rounded-[40px] p-8 md:p-12 lg:p-16 shadow-xl relative overflow-hidden">
					<!-- Decorative Background Circles -->
					<div class="absolute -right-20 -bottom-20 w-80 h-80 bg-green-700/20 rounded-full blur-3xl -z-0"></div>
					<div class="absolute -left-20 -top-20 w-80 h-80 bg-green-600/20 rounded-full blur-3xl -z-0"></div>

					<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
						
						<!-- Left Column: Content -->
						<div class="lg:col-span-6 flex flex-col justify-center text-left text-white">
							<h2 class="text-3xl md:text-4xl lg:text-5xl font-mulish font-extrabold leading-tight mb-6">
								Ready to Take the Next Step?
							</h2>
							<p class="text-green-100/90 text-base md:text-lg leading-relaxed mb-8 max-w-md">
								Expert Care Begins with a Simple Conversation. Join over 50,000 families who have trusted us with their most precious health needs.
							</p>

							<!-- Bullets Row -->
							<div class="flex items-center gap-6 flex-wrap">
								<!-- Bullet 1 -->
								<div class="flex items-center gap-2">
									<svg class="w-5 h-5 text-[#A61A24] fill-current" viewBox="0 0 20 20">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<span class="text-sm md:text-base text-white font-bold">
										Instant Booking
									</span>
								</div>
								
								<!-- Bullet 2 -->
								<div class="flex items-center gap-2">
									<svg class="w-5 h-5 text-[#A61A24] fill-current" viewBox="0 0 20 20">
										<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
									</svg>
									<span class="text-sm md:text-base text-white font-bold">
										Top-tier Specialists
									</span>
								</div>
							</div>
						</div>

						<!-- Right Column: Zoho Iframe Form Box -->
						<div class="lg:col-span-6">
							<div class="bg-white rounded-[24px] p-4 md:p-6 shadow-2xl max-w-lg mx-auto w-full overflow-hidden">
								<iframe id="ziframe_518622" aria-label="Appointment Booking Form" frameborder="0" scrolling="no" style="height:720px;width:100%;border:none;transition:height 0.2s ease-in-out;" src='https://forms.zohopublic.in/lotuslittlestars1/form/AppointmentBookingForm/formperma/PjujkW3Efvz-ZdXvFM0ey7k0rNAlotX7ZcStZBYd3Bg'>    
								</iframe>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>

		<!-- Booking Modal Popup -->
		<div id="booking-modal" class="fixed inset-0 bg-black/60 z-[100] backdrop-blur-sm hidden flex items-center justify-center p-4">
			<div class="bg-white  max-w-xl w-full p-4 md:p-6 shadow-2xl relative max-h-[90vh] overflow-y-auto transform scale-95 opacity-0 transition-all duration-300 ease-out" id="booking-modal-container">
				
				<!-- Close Button -->
				<button id="close-booking-modal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors focus:outline-none" aria-label="Close booking modal">
					<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>

				<!-- Modal Body (Zoho Form Iframe) -->
				<div class="mt-4 overflow-hidden rounded-xl">
					<iframe id="ziframe_popup" aria-label="Appointment Booking Form" frameborder="0" scrolling="no" style="height:700px;width:100%;border:none;transition:height 0.2s ease-in-out;" src='https://forms.zohopublic.in/lotuslittlestars1/form/AppointmentBookingForm/formperma/PjujkW3Efvz-ZdXvFM0ey7k0rNAlotX7ZcStZBYd3Bg'>    
					</iframe>
				</div>

			</div>
		</div>

	</main>

	<!-- Footer Section -->
	<footer class="bg-gray-50 border-t border-gray-100 py-6 pb-20 md:pb-6 text-center text-sm text-gray-500">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<p>&copy; <?php echo date('Y'); ?> Lotus Little Stars Hospitals. All rights reserved.</p>
		</div>
	</footer>

	<!-- Mobile Fixed Bottom Action Bar (Mobile View Only) -->
	<div class="fixed bottom-0 left-0 right-0 z-40 md:hidden bg-[#A61A24] rounded-t-2xl shadow-[0_-4px_20px_rgba(0,0,0,0.25)] border-t border-white/10 pb-safe">
		<div class="grid grid-cols-2 divide-x divide-white/20 py-2">
			<!-- Book Appointment Button -->
			<a href="#booking-form" class="flex flex-row items-center justify-center gap-3 text-center px-2 py-1 text-white hover:bg-white/10 active:bg-white/20 transition-colors focus:outline-none group">
				<svg class="w-6 h-6 mb-1 text-white shrink-0 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
					<rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="1.8"/>
					<path d="M16 2v4M8 2v4M3 9h18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
					<circle cx="15" cy="15" r="3" fill="#A61A24" stroke="currentColor" stroke-width="1.5"/>
					<path d="M15 13.8v1.4l1 0.7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
				</svg>
				<span class="text-xs font-bold tracking-tight text-white">Book Appointment</span>
			</a>

			<!-- Call Button -->
			<a href="tel:+919666604444" class="flex flex-row items-center justify-center gap-3 text-center px-2 py-1 text-white hover:bg-white/10 active:bg-white/20 transition-colors focus:outline-none group">
				<svg class="w-6 h-6 mb-1 text-white shrink-0 transform group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 7a3 3 0 013 3M14 3a7 7 0 017 7" />
				</svg>
				<span class="text-xs font-bold tracking-tight text-white">Call Now</span>
			</a>
		</div>
	</div>

	<!-- FAQ Toggle Script & Booking Modal Script -->
	<script>
		document.addEventListener('DOMContentLoaded', () => {
			// FAQ Accordion logic
			const toggles = document.querySelectorAll('.faq-toggle');
			const firstContent = document.querySelector('.faq-content:not(.max-h-0)');
			if (firstContent) {
				firstContent.style.maxHeight = firstContent.scrollHeight + 'px';
			}

			toggles.forEach(toggle => {
				toggle.addEventListener('click', () => {
					const content = toggle.nextElementSibling;
					const icon = toggle.querySelector('.chevron-icon');
					const isOpen = !content.classList.contains('max-h-0');
					
					document.querySelectorAll('.faq-content').forEach(item => {
						item.classList.add('max-h-0');
						item.style.maxHeight = null;
					});
					document.querySelectorAll('.chevron-icon').forEach(svg => {
						svg.classList.remove('rotate-180');
					});
					
					if (!isOpen) {
						content.classList.remove('max-h-0');
						content.style.maxHeight = content.scrollHeight + 'px';
						icon.classList.add('rotate-180');
					}
				});
			});

			// Booking Modal logic
			const bookingModal = document.getElementById('booking-modal');
			const modalContainer = document.getElementById('booking-modal-container');
			const closeModalBtn = document.getElementById('close-booking-modal');
			const body = document.body;

			function openModal() {
				bookingModal.classList.remove('hidden');
				setTimeout(() => {
					modalContainer.classList.remove('scale-95', 'opacity-0');
					modalContainer.classList.add('scale-100', 'opacity-100');
				}, 10);
				body.classList.add('overflow-hidden');
			}

			function closeModal() {
				modalContainer.classList.remove('scale-100', 'opacity-100');
				modalContainer.classList.add('scale-95', 'opacity-0');
				setTimeout(() => {
					bookingModal.classList.add('hidden');
				}, 300);
				body.classList.remove('overflow-hidden');
			}

			// Listen to clicks on any links targeting #booking-form
			document.querySelectorAll('a[href="#booking-form"]').forEach(btn => {
				btn.addEventListener('click', (e) => {
					e.preventDefault();
					openModal();
				});
			});

			// Close actions
			closeModalBtn.addEventListener('click', closeModal);
			bookingModal.addEventListener('click', (e) => {
				if (e.target === bookingModal) {
					closeModal();
				}
			});
			document.addEventListener('keydown', (e) => {
				if (e.key === 'Escape' && !bookingModal.classList.contains('hidden')) {
					closeModal();
				}
			});

			// Zoho Frame resizing and referrer addition
			const zohoFrames = [
				document.getElementById('ziframe_518622'),
				document.getElementById('ziframe_popup')
			];

			zohoFrames.forEach(zf_frame => {
				if (!zf_frame) return;
				try {
					var ifrmSrc = zf_frame.src;
					if (!((new RegExp("[?&]referrername=")).test(ifrmSrc))) {
						var rfr = window.location.href;
						try { 
							rfr = window.self !== window.top ? 
								window.top.location.href : 
								(/^https?:\/\/[\w.-]+\.[a-zA-Z]{2,}/i.test(rfr) ? rfr : "");
						} catch (e) {}

						if (rfr && rfr !== "") {
							if (rfr.length > 1800) {
								var queryIndex = rfr.indexOf('?');
								if (queryIndex > -1) {
									rfr = rfr.substring(0, queryIndex);
								}
								if (rfr.length > 1800) {
									rfr = rfr.substring(0, 1800);
								}
							}
							ifrmSrc += ((ifrmSrc.indexOf('?') > 0) ? '&' : '?') + 'referrername=' + encodeURIComponent(rfr);
						}
					}
					if (zf_frame.src !== ifrmSrc) {
						zf_frame.src = ifrmSrc;
					}
				} catch (e) {}
			});

			// Listen to messages from the Zoho Form to auto-resize and remove scrollbar
			window.addEventListener('message', function(event) {
				try {
					var evntData = event.data;
					if (evntData && typeof evntData === 'string') {
						var zf_ifrm_data = evntData.split("|");
						if (zf_ifrm_data.length === 2) {
							var zf_perma = zf_ifrm_data[0];
							var zf_ifrm_ht_nw = (parseInt(zf_ifrm_data[1], 10) + 15) + "px";
							
							zohoFrames.forEach(iframe => {
								if (iframe && iframe.src.indexOf(zf_perma) > 0) {
									if (iframe.style.height !== zf_ifrm_ht_nw) {
										iframe.style.height = zf_ifrm_ht_nw;
									}
								}
							});
						}
					}
				} catch (e) {}
			}, false);
		});
	</script>

	

</body>
</html>
