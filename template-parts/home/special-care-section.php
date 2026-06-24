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
			<p class="text-brand-muted text-base sm:text-base leading-relaxed max-w-2xl mx-auto">
				Providing a full spectrum of healthcare services tailored specifically for women and children.
			</p>
		</div>

		<!-- Services Grid (3 Columns x 2 Rows) -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			
			<!-- Wing 1: Gynecology -->
			<div class="relative overflow-hidden bg-[#F1F4F0] p-10  border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]" 
			 style="background-image:url('http://lotuslittlestars.in/wp-content/uploads/2026/06/gynocology-bg.webp');">
				<div class="w-full">
					<!-- Venus symbol icon -->
					<div class="text-brand-dark mb-6">
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/gynacology.png" alt="Gynecology" class="h-10 w-10 object-contain">
					</div>
					<h3 class="text-2xl font-medium text-brand-dark mb-4 font-outfit">Gynecology</h3>
					<p class="text-brand-dark text-base leading-relaxed mb-6">
From preventive women’s wellness to advanced surgical care, we offer expertise in treating ovarian cysts, fibroids, uterus removal, MTP, and other gynecological conditions for every stage of a woman’s health journey.					</p>
				</div>
				<!-- <a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a> -->
			</div>

			<!-- Wing 2: Maternity & Fetal -->
			<div class="bg-[#FDF5F7] p-10  border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Pregnant/Female symbol icon -->
					<div class="text-brand-dark mb-6">
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/metarnity.png" alt="Obstetrics & Fetal Care" class="h-10 w-10 object-contain">
					</div>
					<h3 class="text-2xl font-medium text-brand-dark mb-4 font-outfit">Obstetrics & Fetal Care</h3>
					<p class="text-brand-dark text-base leading-relaxed mb-6">
						Providing holistic care for pregnancy, childbirth, and maternity, with specialized support for high-risk pregnancies and cutting-edge fetal medicine for optimal mother and baby outcomes.
					</p>
				</div>
				<!-- <a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a> -->
			</div>

			<!-- Wing 3: Pediatric Care -->
			<div class="bg-[#F5F5FF] p-10 border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Baby face icon -->
					<div class="text-brand-dark mb-6">
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/pediatric-care.png" alt="General Pediatrics" class="h-10 w-10 object-contain">
					</div>
					<h3 class="text-2xl font-medium text-brand-dark mb-4 font-outfit">General Pediatrics</h3>
					<p class="text-brand-muted text-base leading-relaxed mb-6">
						Comprehensive medical care for children, including immunizations, growth monitoring, common illnesses, and preventive health programs for overall well-being.
					</p>
				</div>
				<!-- <a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a> -->
			</div>

			<!-- Wing 4: Neonatal NICU -->
			<div class="bg-[#FCF8F0] p-10  border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Medical bag icon -->
					<div class="text-brand-dark mb-6">
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/neonatol.png" alt="Neonatology & Intensive Care" class="h-10 w-10 object-contain">
					</div>
					<h3 class="text-2xl font-medium text-brand-dark mb-4 font-outfit">Neonatology & Intensive Care</h3>
					<p class="text-brand-dark text-base leading-relaxed mb-6">
						Specialized neonatal and pediatric intensive care services (NICU & PICU) designed to manage critical conditions, premature births, and life-threatening illnesses with utmost precision.
				</div>
				<!-- <a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a> -->
			</div>

			<!-- Wing 5: Super-Specialties -->
			<div class="bg-[#F0F8F8] p-10  border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Microscope/Science icon -->
					<div class="text-brand-dark mb-6">
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/speciality.png" alt="Pediatric Multi-Speciality" class="h-10 w-10 object-contain">
					</div>
					<h3 class="text-2xl font-medium text-brand-dark mb-4 font-outfit">Pediatric Multi-Speciality</h3>
					<p class="text-brand-dark text-base leading-relaxed mb-6">
						Expertise across multiple specialties, including pediatric surgery, oncology, nephrology, dentistry, ENT, orthopedics, gastroenterology, endocrinology, plastic, and neuro surgery to cater to the diverse healthcare needs of children.
					</p>
				</div>
				<!-- <a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a> -->
			</div>

			<!-- Wing 6: Developmental -->
			<div class="bg-[#F9F0FD] p-10  border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[280px]">
				<div class="w-full">
					<!-- Profile silhouette with brain gears icon -->
					<div class="text-brand-dark mb-6">
						<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/developmental.png" alt="Child Development Center" class="h-10 w-10 object-contain">
					</div>
					<h3 class="text-2xl font-medium text-brand-dark mb-4 font-outfit">Child Development Center (CDC)</h3>
					<p class="text-brand-dark text-base leading-relaxed mb-6">
						A nurturing space offering therapies, assessments, and interventions to support children with developmental delays, learning challenges, or special needs, enabling them to thrive.
					</p>
				</div>
				<!-- <a href="<?php echo esc_url( home_url( '/specialists/' ) ); ?>" class="text-brand-dark hover:text-brand-red text-xs font-bold inline-flex items-center gap-1 transition-colors">
					Learn More
					<svg class="h-3 w-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a> -->
			</div>

		</div>
	</div>
</section>
