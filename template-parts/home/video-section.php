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

			<!-- Right Column: Video Module -->
			<div class="lg:col-span-6 relative flex justify-center">
				<div id="video-trigger" class="relative w-full aspect-[16/10] max-w-lg lg:max-w-none rounded-[1.5rem] overflow-hidden shadow-2xl border border-white/10 group cursor-pointer">
					
					<!-- Stylized Reception Desk SVG Illustration (Acts as video cover) -->
					<svg class="w-full h-full object-cover select-none" viewBox="0 0 500 320" fill="none" xmlns="http://www.w3.org/2000/svg">
						<!-- Background Wall (Light Sage Green) -->
						<rect width="500" height="320" fill="#BCCEC2"/>
						
						<!-- Ceilings & Lighting -->
						<rect y="0" width="500" height="40" fill="#FAF8F5"/>
						<circle cx="420" cy="20" r="3" fill="#FFEAA7" fill-opacity="0.8"/>
						
						<!-- Hanging Pendant Lamp -->
						<line x1="350" y1="40" x2="350" y2="130" stroke="#FAF8F5" stroke-width="1.5"/>
						<circle cx="350" cy="140" r="10" fill="#FAF8F5" fill-opacity="0.3"/>
						<circle cx="350" cy="140" r="6" fill="#FFF"/>
						<circle cx="350" cy="140" r="2" fill="#FFEAA7"/>

						<!-- Slatted Wooden Wall Column (Right side curvature) -->
						<path d="M430 40c25 0 45 40 45 90v190h-90V130c0-50 20-90 45-90z" fill="#D2B48C"/>
						<!-- Vertical slats overlay lines -->
						<line x1="390" y1="130" x2="390" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="400" y1="110" x2="400" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="410" y1="90" x2="410" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="420" y1="60" x2="420" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="430" y1="40" x2="430" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="440" y1="45" x2="440" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="450" y1="65" x2="450" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="460" y1="85" x2="460" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="470" y1="115" x2="470" y2="320" stroke="#A07855" stroke-width="1.5"/>

						<!-- Left Wooden Slats Wall Panel -->
						<rect x="0" y="110" width="80" height="210" fill="#D2B48C"/>
						<line x1="10" y1="110" x2="10" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="20" y1="110" x2="20" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="30" y1="110" x2="30" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="40" y1="110" x2="40" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="50" y1="110" x2="50" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="60" y1="110" x2="60" y2="320" stroke="#A07855" stroke-width="1.5"/>
						<line x1="70" y1="110" x2="70" y2="320" stroke="#A07855" stroke-width="1.5"/>

						<!-- Wall Logo text -->
						<text x="130" y="150" fill="#FAF8F5" fill-opacity="0.8" font-family="'Outfit', sans-serif" font-weight="bold" font-size="16" letter-spacing="1">LOTUS LITTLE STARS</text>
						<!-- Simple wall flower logo icon -->
						<circle cx="110" cy="144" r="7" stroke="#FAF8F5" stroke-width="1.5" stroke-dasharray="2 1"/>
						
						<!-- Curved Slatted Reception Counter -->
						<path d="M220 320h220v-110c0-20-15-35-35-35H255c-20 0-35 15-35 35v110z" fill="#EADCC9"/>
						<line x1="230" y1="200" x2="230" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="245" y1="185" x2="245" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="260" y1="175" x2="260" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="275" y1="175" x2="275" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="290" y1="175" x2="290" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="305" y1="175" x2="305" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="320" y1="175" x2="320" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="335" y1="175" x2="335" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="350" y1="175" x2="350" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="365" y1="175" x2="365" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="380" y1="175" x2="380" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="395" y1="175" x2="395" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="410" y1="185" x2="410" y2="320" stroke="#C5B097" stroke-width="1.5"/>
						<line x1="425" y1="200" x2="425" y2="320" stroke="#C5B097" stroke-width="1.5"/>
					</svg>
					
					<!-- Play button overlay -->
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

<!-- Video Play Modal Overlay -->
<div id="video-modal" class="hidden fixed inset-0 z-[100] bg-brand-dark/95 backdrop-blur-md flex items-center justify-center p-4">
	<!-- Close button -->
	<button id="close-video-modal" class="absolute top-6 right-6 text-white/70 hover:text-white bg-white/10 hover:bg-white/20 p-3 rounded-full transition-all focus:outline-none" aria-label="Close video">
		<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
		</svg>
	</button>
	<!-- Video Box -->
	<div class="w-full max-w-4xl aspect-video rounded-3xl overflow-hidden shadow-2xl border border-white/10">
		<iframe id="modal-video-iframe" class="w-full h-full" src="" title="Lotus Hospital Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div>
</div>

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

	// 2. Video Modal Logic (Plays a relaxing sample baby development video clip)
	const videoTrigger = document.getElementById('video-trigger');
	const videoModal = document.getElementById('video-modal');
	const closeModal = document.getElementById('close-video-modal');
	const videoIframe = document.getElementById('modal-video-iframe');
	
	// Sample clean clinical overview / medical introduction clip (Youtube embed link)
	const videoUrl = "https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1"; // Sample youtube URL

	if (videoTrigger && videoModal && closeModal && videoIframe) {
		videoTrigger.addEventListener('click', function() {
			videoIframe.src = videoUrl;
			videoModal.classList.remove('hidden');
			document.body.style.overflow = 'hidden'; // Lock background scrolling
		});

		function hideVideoModal() {
			videoIframe.src = ""; // Stop playback
			videoModal.classList.add('hidden');
			document.body.style.overflow = ''; // Unlock scrolling
		}

		closeModal.addEventListener('click', hideVideoModal);
		
		// Close modal if clicking outside the video container
		videoModal.addEventListener('click', function(e) {
			if (e.target === videoModal) {
				hideVideoModal();
			}
		});
	}
});
</script>
