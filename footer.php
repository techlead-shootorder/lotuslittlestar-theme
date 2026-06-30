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
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/lotus-new-logo.gif" alt="Lotus Little Stars" class="h-16 w-22 object-contain">
				</a>
				<p class="text-brand-green text-xs leading-relaxed mt-2 pl-2">
					Dedicated to providing compassionate and advanced healthcare for mothers and children for over 35+ years.
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
						<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Our Specialties</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/doctors/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Our Experts</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Contact Us</a>
					</li>
				</ul>
			</div>

			<!-- Column 3: Patient Resources -->
			<div>
				<h3 class="text-brand-dark text-sm font-bold uppercase tracking-wider mb-5">Patient Resources</h3>
				<ul class="space-y-3 text-sm">
					<li>
						<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Privacy Policy</a>
					</li>
					<li>
						<a href="#" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Insurance Partners</a>
					</li>
					<li>
						<a href="#" class="text-brand-muted hover:text-brand-red transition-colors duration-150">Health Tips</a>
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
					<li class="pt-2">
						<div class="flex items-center gap-3">
							<!-- Facebook -->
							<a href="https://www.facebook.com/littlestarsandshehyd/" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#F4EBE1] text-brand-dark hover:bg-brand-red hover:text-white flex items-center justify-center transition-all duration-200" aria-label="Facebook">
								<svg class="w-4 h-4 fill-currentColor" viewBox="0 0 24 24">
									<path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
								</svg>
							</a>
							<!-- Instagram -->
							<a href="https://www.instagram.com/littlestarsandshehospitals/" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#F4EBE1] text-brand-dark hover:bg-brand-red hover:text-white flex items-center justify-center transition-all duration-200" aria-label="Instagram">
								<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
									<rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
									<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
									<line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
								</svg>
							</a>
							<!-- YouTube -->
							<a href="https://www.youtube.com/@littlestarsandshe" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full bg-[#F4EBE1] text-brand-dark hover:bg-brand-red hover:text-white flex items-center justify-center transition-all duration-200" aria-label="YouTube">
								<svg class="w-4 h-4 fill-currentColor" viewBox="0 0 24 24">
									<path d="M23.498 6.163a3.003 3.003 0 0 0-2.11-2.11C19.518 3.545 12 3.545 12 3.545s-7.518 0-9.388.508a3.003 3.003 0 0 0-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 0 0 2.11 2.11c1.87.508 9.388.508 9.388.508s7.518 0 9.388-.508a3.003 3.003 0 0 0 2.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
								</svg>
							</a>
						</div>
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
