<?php
/**
 * Template part for displaying the specialists grid and details
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section id="specialists-grid" class="py-20 bg-[#FAF9F6] border-b border-brand-cream/40">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Left-Aligned Header -->
		<div class="text-left mb-12 pb-8 border-b border-brand-cream/60">
			<h1 class="font-outfit text-3xl sm:text-4xl font-semibold text-brand-dark">
				Our Center of Excellence 
			</h1>
			<p class="text-brand-muted text-sm sm:text-base mt-2 font-medium">
				Comprehensive Care Centers offering a full spectrum of pediatric and maternity services.
			</p>
		</div>

		<!-- Top 4 Large Specialties Grid -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
			
			<!-- Card 1: Gynecology -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Female Symbol -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<circle cx="12" cy="9" r="6"/>
						<path d="M12 15v7M9 19h6"/>
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Gynecology</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Expert female reproductive health care from adolescence to maturity.
				</p>
			</div>

			<!-- Card 2: Obstetrics & Fetal Care -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Fetal Monitor -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<rect x="6" y="3" width="12" height="18" rx="3" />
						<path d="M6 8h12M6 16h12M9 12h1.5l1-2 1 4 1-2H15" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Obstetrics & Fetal Care</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Dedicated support for high-risk pregnancies and fetal health.
				</p>
			</div>

			<!-- Card 3: Neonatal & Pediatric ICU -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Asterisk Star -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07L19.07 4.93"/>
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Neonatal & Pediatric ICU</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Level III NICU/PICU for comprehensive critical care.
				</p>
			</div>

			<!-- Card 4: Pediatric Multi Speciality -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Medical First Aid Kit -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<rect x="3" y="6" width="18" height="14" rx="2" />
						<path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2" />
						<path d="M12 10v6M9 13h6" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Pediatric Multi Speciality</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Comprehensive treatment across all pediatric sub-specialties.
				</p>
			</div>

		</div>

		<!-- Remaining 12 Specialties Grid -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-24">
			
			<!-- Card 5: Pediatric Dentistry -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Tooth SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M6.5 3c-1.5 0-3 1.5-3 3.5 0 2 1.5 3.5 1.5 6.5s-1.5 5.5.5 7.5c2 2 4.5 1 6.5.5 2 .5 4.5 1.5 6.5-.5 2-2 .5-4.5.5-7.5s1.5-4.5 1.5-6.5c0-2-1.5-3.5-3-3.5-2 0-3.5 1.5-4 3-.5-1.5-2-3-4-3z"/>
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Pediatric Dentistry</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Preventive and corrective dental care.
				</p>
			</div>

			<!-- Card 6: Pediatric Orthopedics -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Orthopedics SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M8 5h8M7 10h10M6 15h12M5 20h14M12 2v20" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Pediatric Orthopedics</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Bone and joint health for active kids.
				</p>
			</div>

			<!-- Card 7: Pediatric Surgery -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Surgery Scissors SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<circle cx="6" cy="6" r="3" />
						<circle cx="6" cy="18" r="3" />
						<path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Pediatric Surgery</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Minimally invasive surgical procedures.
				</p>
			</div>

			<!-- Card 8: Hematology & Oncology -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Droplet SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M12 22a7 7 0 0 0 7-7c0-4.3-7-13-7-13S5 11 5 15a7 7 0 0 0 7 7z" />
						<path d="M12 12v6M9 15h6" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Hematology & Oncology</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Specialized care for childhood cancers.
				</p>
			</div>

			<!-- Card 9: Gastroenterology -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Stomach SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M12 2a5 5 0 0 0-5 5c0 3 3 5 3 7s-2 3-2 5a3 3 0 0 0 6 0c0-2-2-3-2-5s3-4 3-7a5 5 0 0 0-3-5z" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Gastroenterology</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Digestive health and nutrition expert care.
				</p>
			</div>

			<!-- Card 10: Urology Services -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Kidneys SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M8 6c-3 1-4 4-2 7 2 3 4 3 4 1s-1-4-2-8zM16 6c3 1 4 4 2 7-2 3-4 3-4 1s1-4 2-8z" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Urology Services</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Pediatric urological condition management.
				</p>
			</div>

			<!-- Card 11: Endocrinology -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Endocrinology SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M12 3v17M5 8h14M7 8l-2 6h4l-2-6zm12 0l-2 6h4l-2-6z" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Endocrinology</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Hormonal balance and growth issues.
				</p>
			</div>

			<!-- Card 12: Pediatric ENT -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Ear SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M8.5 6A5.5 5.5 0 0 1 14 11.5v3.5a3.5 3.5 0 1 1-7 0m0-3.5h7" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Pediatric ENT</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Expert care for hearing and airway.
				</p>
			</div>

			<!-- Card 13: Nephrology -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Grid Icon -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<rect x="3" y="3" width="7" height="7" rx="1" />
						<rect x="14" y="3" width="7" height="7" rx="1" />
						<rect x="3" y="14" width="7" height="7" rx="1" />
						<rect x="14" y="14" width="7" height="7" rx="1" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Nephrology</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Specialized kidney and bladder care.
				</p>
			</div>

			<!-- Card 14: Neurology -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Neurology Brain SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<circle cx="12" cy="12" r="3"/>
						<circle cx="6" cy="6" r="2"/>
						<circle cx="18" cy="6" r="2"/>
						<circle cx="6" cy="18" r="2"/>
						<circle cx="18" cy="18" r="2"/>
						<path d="M8 8l2.5 2.5M16 8l-2.5 2.5M8 16l2.5-2.5M16 16l-2.5-2.5"/>
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Neurology</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Expert brain and nervous system care.
				</p>
			</div>

			<!-- Card 15: Ophthalmology -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Eye SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
						<circle cx="12" cy="12" r="3"/>
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Ophthalmology</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Advanced pediatric vision specialist care.
				</p>
			</div>

			<!-- Card 16: Plastic & Neurosurgery -->
			<div class="bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center">
				<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
					<!-- Head SVG -->
					<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<path d="M12 2a8 8 0 0 0-8 8c0 3.5 2.5 6.5 6 7.5v2.5h4v-2.5c3.5-1 6-4 6-7.5a8 8 0 0 0-8-8z" />
						<path d="M9 10h6" />
					</svg>
				</div>
				<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3">Plastic & Neurosurgery</h3>
				<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
					Specialized surgical intervention.
				</p>
			</div>

		</div>

		

	</div>
</section>
