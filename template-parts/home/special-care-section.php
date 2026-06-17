<?php
/**
 * Template part for displaying the home page special care section matching Figma pixel-to-pixel
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-20 bg-brand-cream border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="text-center max-w-3xl mx-auto mb-16">
			<h2 class="text-3xl sm:text-4xl font-medium text-brand-dark tracking-tight mb-4 font-outfit">
				Specialized Care Wings
			</h2>
			<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
				Providing a full spectrum of healthcare services tailored specifically for women and children.
			</p>
		</div>

		<!-- Services Grid (3 Columns x 2 Rows) -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			
			<!-- Wing 1: Gynecology -->
			<div class="bg-[#F3F6F3] p-10 border-l-[5px] border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Venus symbol icon -->
					<div class="text-brand-green mb-6">
						<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="9" r="6" />
							<path d="M12 15v8M9 19h6" />
						</svg>
					</div>
					<h3 class="text-2xl font-medium text-brand-green mb-4 font-outfit">Gynecology</h3>
					<p class="text-brand-green text-xs leading-relaxed mb-6">
						Comprehensive women's health services from adolescent care to menopause management.
					</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</div>

			<!-- Wing 2: Maternity & Fetal -->
			<div class="bg-[#FAF2F2] p-10 border-l-[5px] border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Pregnant/Female symbol icon -->
					<div class="text-brand-green mb-6">
						<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<!-- Stylized woman silhouette -->
							<circle cx="12" cy="5" r="2.5" fill="currentColor"/>
							<path d="M12 8c-2 0-3.5 1.5-3.5 3.5v4.5h1.5v6h4v-6h1.5v-4.5C15.5 9.5 14 8 12 8z" fill="currentColor"/>
						</svg>
					</div>
					<h3 class="text-2xl font-medium text-brand-green mb-4 font-outfit">Maternity & Fetal</h3>
					<p class="text-brand-green text-xs leading-relaxed mb-6">
						High-risk pregnancy management and specialized fetal medicine diagnostic care.
					</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</div>

			<!-- Wing 3: Pediatric Care -->
			<div class="bg-[#F2F3FA] p-10 border-l-[5px] border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Baby face icon -->
					<div class="text-brand-green mb-6">
						<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<circle cx="12" cy="12" r="9"/>
							<path d="M8 14.5c1 1.5 3 2 4 2s3-.5 4-2"/>
							<circle cx="9" cy="10" r="1" fill="currentColor"/>
							<circle cx="15" cy="10" r="1" fill="currentColor"/>
							<!-- Hair curl -->
							<path d="M12 3c-.5.5-1.5.5-1.5 1.5s1 1 1 1"/>
						</svg>
					</div>
					<h3 class="text-2xl font-medium text-brand-green mb-4 font-outfit">Pediatric Care</h3>
					<p class="text-brand-muted text-xs leading-relaxed mb-6">
						Expert care for infants, children and adolescents across various sub-specialties.
					</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</div>

			<!-- Wing 4: Neonatal NICU -->
			<div class="bg-[#FAF7F2] p-10 border-l-[5px] border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Medical bag icon -->
					<div class="text-brand-green mb-6">
						<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<rect x="3" y="7" width="18" height="14" rx="2"/>
							<path d="M9 7V4.5A1.5 1.5 0 0 1 10.5 3h3A1.5 1.5 0 0 1 15 4.5V7"/>
							<path d="M12 11v6M9 14h6"/>
						</svg>
					</div>
					<h3 class="text-2xl font-medium text-brand-green mb-4 font-outfit">Neonatal NICU</h3>
					<p class="text-brand-green text-xs leading-relaxed mb-6">
						Level III NICU facilities providing advanced life support for premature newborns.
					</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</div>

			<!-- Wing 5: Super-Specialties -->
			<div class="bg-[#F2F8FA] p-10 border-l-[5px] border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Microscope/Science icon -->
					<div class="text-brand-green mb-6">
						<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 18h12M8 18v-3a4 4 0 0 1 4-4h2v2M12 11V4h4v7M16 7h2"/>
						</svg>
					</div>
					<h3 class="text-2xl font-medium text-brand-green mb-4 font-outfit">Super-Specialties</h3>
					<p class="text-brand-green text-xs leading-relaxed mb-6">
						Nephrology, Cardiology, and Oncology specialized treatments for children.
					</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</div>

			<!-- Wing 6: Developmental -->
			<div class="bg-[#FAF2FA] p-10 border-l-[5px] border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Profile silhouette with brain gears icon -->
					<div class="text-brand-green mb-6">
						<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
							<circle cx="9" cy="7" r="4" />
							<!-- Gear gears details in mind -->
							<circle cx="18" cy="8" r="2.5" />
							<path d="M18 5.5v5M15.5 8h5"/>
						</svg>
					</div>
					<h3 class="text-2xl font-medium text-brand-green mb-4 font-outfit">Developmental</h3>
					<p class="text-brand-green text-xs leading-relaxed mb-6">
						Holistic child development therapy and behavioral counseling programs.
					</p>
				</div>
				<a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</div>

		</div>
	</div>
</section>
