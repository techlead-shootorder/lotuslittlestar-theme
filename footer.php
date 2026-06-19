<?php
/**
 * Lotus Theme Footer
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<footer class="bg-brand-cream border-t border-brand-border pt-16 pb-12 mt-auto">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 pb-12 border-b border-brand-border">
			<!-- Column 1: Brand Info -->
			<div class="flex flex-col gap-4">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center">
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/lotus-logo-1.png" alt="Lotus Little Stars" class="h-16 w-22 object-contain">
				</a>
				<p class="text-brand-green text-xs leading-relaxed mt-2 pl-2">
					Dedicated to providing compassionate and advanced healthcare for mothers and children for over 16 years.
				</p>
				
			</div>

			<!-- Column 2: Quick Links -->
			<div>
				<h3 class="text-brand-dark text-sm font-bold uppercase tracking-wider mb-5">Quick Links</h3>
				<ul class="space-y-3 text-sm">
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Home</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">About Us</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Specialties</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Doctors Grid</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Contact & Locations</a>
					</li>
				</ul>
			</div>

			<!-- Column 3: Patient Resources -->
			<div>
				<h3 class="text-brand-dark text-sm font-bold uppercase tracking-wider mb-5">Patient Resources</h3>
				<ul class="space-y-3 text-sm">
					<li>
						<a href="#" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Privacy Policy</a>
					</li>
					<li>
						<a href="#" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Insurance Partners</a>
					</li>
					<li>
						<a href="#" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Health Tips</a>
					</li>
					<li>
						<a href="#" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Careers</a>
					</li>
					<li>
						<a href="#" class="text-brand-muted hover:text-brand-red transition-colors duration-150">FAQ & Support</a>
					</li>
				</ul>
			</div>

			<!-- Column 4: Contact Info -->
			<div>
				<h3 class="text-brand-dark text-sm font-bold uppercase tracking-wider mb-5">Contact Details</h3>
				<ul class="space-y-4 text-sm text-brand-muted">
					<li class="flex items-start gap-2.5">
						<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
						</svg>
						<span>+91 9666604444</span>
					</li>
					<li class="flex items-start gap-2.5">
						<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
						</svg>
						<span class="break-all">contact@lotuslittlestars.in</span>
					</li>
					<li class="flex items-start gap-2.5">
						<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
						</svg>
						<span>Accent Towers, Rd No. 10, Banjara Hills, Hyderabad, Telangana 500034.</span>
					</li>
				</ul>
			</div>
		</div>

		<!-- Footer Bottom Credits -->
		<div class="mt-8 flex flex-col md:flex-row items-center justify-center text-xs text-brand-muted/75 gap-4">
			<p class="text-brand-muted text-xs mt-4">
					&copy; <?php echo date( 'Y' ); ?> Lotus Little Stars. All rights reserved.
				</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
