<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>

	<!-- Google Fonts: Mulish and Lato -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Mulish:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Tailwind Play CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
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
						outfit: ['Mulish', 'sans-serif'],
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
				@apply bg-brand-bg text-brand-dark font-sans antialiased;
			}
			h1, h2, h3, h4, h5, h6 {
				@apply font-outfit font-semibold tracking-tight;
			}
		}
		/* Custom scrollbar */
		::-webkit-scrollbar {
			width: 8px;
		}
		::-webkit-scrollbar-track {
			@apply bg-brand-cream;
		}
		::-webkit-scrollbar-thumb {
			@apply bg-brand-coral/40 rounded-full hover:bg-brand-red/60;
		}
	</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Navigation -->
<header class="sticky top-0 z-50 bg-brand-bg/95 backdrop-blur-md border-b border-brand-cream shadow-sm">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex items-center justify-between h-20">
			<div class="flex-shrink-0 flex items-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center">
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/lotus-logo-1.png" alt="Lotus Little Stars" class="h-16 w-32 object-contain">
				</a>
			</div>

			<!-- Desktop Nav links -->
			<nav class="hidden md:flex items-center gap-8 font-medium text-sm">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-brand-dark hover:text-brand-red transition-colors duration-200">Home</a>
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="text-brand-dark hover:text-brand-red transition-colors duration-200">About Us</a>
				<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red transition-colors duration-200">Specialties</a>
				<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="text-brand-dark hover:text-brand-red transition-colors duration-200">Doctors</a>
				<a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>" class="text-brand-dark hover:text-brand-red transition-colors duration-200">Locations</a>
			</nav>

			<!-- Action Button -->
			<div class="hidden md:block">
				<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-red-hover text-white font-medium rounded-full shadow-md hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-200 text-sm">
					Book Appointment
				</a>
			</div>

			<!-- Mobile Menu Button -->
			<div class="flex md:hidden">
				<button id="mobile-menu-toggle" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-brand-dark hover:text-brand-red hover:bg-brand-cream focus:outline-none transition-colors" aria-controls="mobile-menu" aria-expanded="false">
					<span class="sr-only">Open main menu</span>
					<!-- Menu Icon -->
					<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					</svg>
				</button>
			</div>
		</div>
	</div>

	<!-- Mobile Menu Panel -->
	<div class="hidden md:hidden bg-brand-bg border-b border-brand-cream" id="mobile-menu">
		<div class="px-4 pt-2 pb-4 space-y-2 font-medium text-base shadow-inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block px-3 py-2 rounded-lg text-brand-dark hover:text-brand-red hover:bg-brand-cream transition-all">Home</a>
			<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="block px-3 py-2 rounded-lg text-brand-dark hover:text-brand-red hover:bg-brand-cream transition-all">About Us</a>
			<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="block px-3 py-2 rounded-lg text-brand-dark hover:text-brand-red hover:bg-brand-cream transition-all">Specialties</a>
			<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="block px-3 py-2 rounded-lg text-brand-dark hover:text-brand-red hover:bg-brand-cream transition-all">Doctors</a>
			<a href="<?php echo esc_url( home_url( '/locations/' ) ); ?>" class="block px-3 py-2 rounded-lg text-brand-dark hover:text-brand-red hover:bg-brand-cream transition-all">Locations</a>
			<div class="pt-4 pb-2 px-3 border-t border-brand-cream">
				<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="w-full inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-red-hover text-white font-medium rounded-full shadow-md transition-all text-sm">
					Book Appointment
				</a>
			</div>
		</div>
	</div>
</header>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const button = document.getElementById('mobile-menu-toggle');
		const menu = document.getElementById('mobile-menu');
		if (button && menu) {
			button.addEventListener('click', function() {
				const isExpanded = button.getAttribute('aria-expanded') === 'true';
				button.setAttribute('aria-expanded', !isExpanded);
				menu.classList.toggle('hidden');
			});
		}
	});
</script>
