<?php
/**
 * Template part for displaying the home page stories of care (video & testimonials)
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-20 bg-brand-red text-white border-b border-brand-cream relative overflow-hidden">
	<!-- Decorative background shapes -->
	<div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
	<div class="absolute bottom-0 right-0 w-96 h-96 bg-black/10 rounded-full filter blur-3xl translate-x-1/3 translate-y-1/3"></div>

	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
			
			<!-- Left Column: Dynamic Testimonial Stories -->
			<div class="lg:col-span-6 flex flex-col items-start text-left">
				<h2 class="text-3xl sm:text-3xl font-semibold tracking-tight mb-2 font-outfit">
					Stories of Care
				</h2>
				
				<!-- Large quote mark -->
				<span class="text-white/30 text-5xl font-serif select-none mt-2">”</span>
				
				<!-- Quote Card Container -->
				<div class="w-full bg-[#901720]/80 border border-white/5 rounded-[1.5rem] p-8 sm:p-10 shadow-lg mb-8 relative min-h-[260px] flex flex-col justify-between">
					<div class="transition-opacity duration-300" id="testimonial-content-wrapper">
						<p class="text-white/90 text-sm sm:text-base leading-relaxed italic mb-8" id="testimonial-text">
							"The level of attention and clinical excellence during my high-risk pregnancy was beyond anything I expected. Lotus Little Stars didn't just provide medical care; they gave me peace of mind."
						</p>
						
						<!-- Author Meta -->
						<div class="flex items-center gap-4">
							<div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center shrink-0">
								<!-- Icon placeholder -->
								<svg class="h-6 w-6 text-white/80" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
								</svg>
							</div>
							<div>
								<h4 class="font-bold text-sm" id="testimonial-author">Ananya Sharma</h4>
								<p class="text-xs text-white/70" id="testimonial-meta">Patient, Banjara Hills</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Nav Arrows -->
				<div class="flex gap-4">
					<button id="prev-testimonial" class="w-12 h-12 border border-white/30 hover:border-white rounded-lg flex items-center justify-center text-white hover:bg-white/10 transition-all" aria-label="Previous story">
						<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
						</svg>
					</button>
					<button id="next-testimonial" class="w-12 h-12 border border-white/30 hover:border-white rounded-lg flex items-center justify-center text-white hover:bg-white/10 transition-all" aria-label="Next story">
						<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
						</svg>
					</button>
				</div>
			</div>

			<!-- Right Column: Video Module Placeholder Image -->
			<div class="lg:col-span-6 relative flex justify-center">
				<div class="relative w-full aspect-[16/10] max-w-lg lg:max-w-none rounded-[1.5rem] overflow-hidden shadow-2xl border border-white/10 group select-none">
					
					<!-- Video Placeholder Image -->
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/video-placeholder.png" 
						 alt="Lotus Hospital Video Overview" 
						 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
						 onerror="this.src='http://lotuslittlestars.in/wp-content/uploads/2026/06/left-image-hom.png';">
					
					<!-- Play button overlay (visual placeholder only) -->
					<div class="absolute inset-0 flex items-center justify-center bg-black/15 group-hover:bg-black/25 transition-all">
						<div class="w-20 h-14 bg-white/20 backdrop-blur-md rounded-[1rem] border border-white/20 flex items-center justify-center group-hover:scale-105 transition-all duration-300 shadow-xl">
							<svg class="h-6 w-6 text-white fill-current translate-x-0.5" viewBox="0 0 24 24">
								<path d="M8 5v14l11-7z"/>
							</svg>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Testimonials and Video Modal Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	// 1. Dynamic Testimonials Array
	const testimonials = [
		{
			text: `"The level of attention and clinical excellence during my high-risk pregnancy was beyond anything I expected. Lotus Little Stars didn't just provide medical care; they gave me peace of mind."`,
			author: "Ananya Sharma",
			meta: "Patient, Banjara Hills"
		},
		{
			text: `"Our baby was admitted in the NICU right after birth. The expertise, cleanliness, and the constant updates from the doctors made us feel incredibly safe. We cannot thank Lotus enough."`,
			author: "Rajesh Kumar",
			meta: "Parent, Kondapur"
		},
		{
			text: `"Lotus Child Development Center has been phenomenal for my son's sensory speech therapy. In just 3 months, we've seen incredible improvements in his communication skills."`,
			author: "Priya Rao",
			meta: "Parent, Rajahmundry"
		}
	];

	let currentIndex = 0;
	const textElem = document.getElementById('testimonial-text');
	const authorElem = document.getElementById('testimonial-author');
	const metaElem = document.getElementById('testimonial-meta');
	const wrapper = document.getElementById('testimonial-content-wrapper');

	function updateTestimonial(index) {
		// Smooth fade out transition
		wrapper.style.opacity = '0';
		setTimeout(() => {
			textElem.textContent = testimonials[index].text;
			authorElem.textContent = testimonials[index].author;
			metaElem.textContent = testimonials[index].meta;
			// Smooth fade in
			wrapper.style.opacity = '1';
		}, 200);
	}

	document.getElementById('prev-testimonial').addEventListener('click', function() {
		currentIndex = (currentIndex === 0) ? testimonials.length - 1 : currentIndex - 1;
		updateTestimonial(currentIndex);
	});

	document.getElementById('next-testimonial').addEventListener('click', function() {
		currentIndex = (currentIndex === testimonials.length - 1) ? 0 : currentIndex + 1;
		updateTestimonial(currentIndex);
	});


});
</script>
