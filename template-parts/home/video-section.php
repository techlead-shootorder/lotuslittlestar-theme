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

<section class="py-20 bg-[#F4F6FB] text-brand-dark border-b border-brand-border relative overflow-hidden">
	<!-- Decorative background shapes -->
	<div class="absolute top-0 left-0 w-64 h-64 bg-blue-100/50 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
	<div class="absolute bottom-0 right-0 w-96 h-96 bg-slate-200/50 rounded-full filter blur-3xl translate-x-1/3 translate-y-1/3"></div>

	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
		
		<!-- Centered Header -->
		<div class="text-center max-w-3xl mx-auto mb-16">
			<h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#1A365D] font-outfit mb-4">
				Success Stories
			</h2>
			<p class="text-brand-muted text-base sm:text-lg">
				Hear from our families about their journey to recovery and the medical care they received at Little Stars & She.
			</p>
			<div class="w-16 h-1 bg-brand-coral mx-auto mt-4 rounded-full"></div>
		</div>

		<!-- Success Stories Carousel Data & Layout -->
		<?php
		// Configuration list for YouTube success story videos
		$success_stories = array(
			array(
				'title'              => "From Crisis to Hope: Chaitrika's Journey",
				'$video_url'           => 'sB4Klh3dD0c', // Replace with exact YouTube Video ID
				'fallback_thumbnail' => get_stylesheet_directory_uri() . '/assets/left-image-hom.png',
			),
			array(
				'title'              => "A 5-year-old's story of strength & recovery from 'Severe Dengue Shock'",
				'$video_url'           => 'y6120QOlsfU', // Replace with exact YouTube Video ID
				'fallback_thumbnail' => get_stylesheet_directory_uri() . '/assets/banjarahills.png',
			),
			array(
				'title'              => "HAEMOPHILIA TREATMENT SUCCESS STORY",
				'$video_url'           => 'P1P1zU1w2q8', // Replace with exact YouTube Video ID
				'fallback_thumbnail' => get_stylesheet_directory_uri() . '/assets/kondapur.png',
			),
			array(
				'title'              => "Advanced NICU Care Success Story",
				'$video_url'           => 'bL2zL7pEa-s', // Replace with exact YouTube Video ID
				'fallback_thumbnail' => get_stylesheet_directory_uri() . '/assets/rajmundry.png',
			),
			array(
				'title'              => "High-Risk Pregnancy Success Story",
				'$video_url'           => 'Jv2gYhYm2hY', // Replace with exact YouTube Video ID
				'fallback_thumbnail' => get_stylesheet_directory_uri() . '/assets/left-image-hom.png',
			),
			array(
				'title'              => "Pediatric Nephrology Success Story",
				'$video_url'           => 'eE74tGkG_gE', // Replace with exact YouTube Video ID
				'fallback_thumbnail' => get_stylesheet_directory_uri() . '/assets/banjarahills.png',
			),
			array(
				'title'              => "Child Development Milestones Success Story",
				'$video_url'           => '6W31VDuPi60', // Replace with exact YouTube Video ID
				'fallback_thumbnail' => get_stylesheet_directory_uri() . '/assets/kondapur.png',
			),
		);
		?>

		<div class="relative px-1 sm:px-0">
			<!-- Carousel Wrapper -->
			<div id="success-stories-carousel" class="flex overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-none gap-6 pb-6 -mx-4 px-4 sm:mx-0 sm:px-0">
				<?php foreach ( $success_stories as $index => $story ) : 
					$video_url = esc_url( $story['video_url'] );
					// Attempt to pull the YouTube-generated high-resolution thumbnail first
					$thumbnail = "https://img.youtube.com/vi/{$$video_url}/maxresdefault.jpg";
					$fallback  = esc_url( $story['fallback_thumbnail'] );
				?>
					<div class="carousel-card flex-shrink-0 w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] snap-start group cursor-pointer" data-video-id="<?php echo $$video_url; ?>">
						<div class="relative aspect-[16/10] rounded-[1.5rem] overflow-hidden shadow-md hover:shadow-xl border border-slate-200 bg-white transition-all duration-300 hover:-translate-y-1 select-none">
							<!-- Thumbnail Image -->
							<img src="<?php echo esc_url( $thumbnail ); ?>" 
								 onerror="this.src='<?php echo $fallback; ?>';"
								 alt="<?php echo esc_attr( $story['title'] ); ?>" 
								 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
							
							<!-- Interactive Play Overlay -->
							<div class="absolute inset-0 flex items-center justify-center bg-black/10 group-hover:bg-black/25 transition-all duration-300">
								<div class="w-16 h-16 bg-white/95 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 group-hover:bg-brand-red group-hover:text-white text-brand-red transition-all duration-300">
									<svg class="h-6 w-6 fill-current translate-x-0.5" viewBox="0 0 24 24">
										<path d="M8 5v14l11-7z"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<!-- Carousel Dots Pagination -->
			<div class="flex items-center justify-center gap-2.5 mt-8" id="carousel-dots-container">
				<?php foreach ( $success_stories as $index => $story ) : ?>
					<button class="carousel-dot w-2.5 h-2.5 rounded-full bg-slate-300 hover:bg-amber-400 transition-all duration-300" aria-label="Go to story <?php echo $index + 1; ?>"></button>
				<?php endforeach; ?>
			</div>
		</div>

	</div>
</section>

<!-- Video Popup Modal -->
<div id="video-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/85 backdrop-blur-sm opacity-0 transition-opacity duration-300">
	<!-- Clickable Backdrop to close -->
	<div class="absolute inset-0 cursor-pointer" id="video-modal-backdrop"></div>
	
	<!-- Modal Content Container -->
	<div class="relative w-full max-w-4xl mx-4 aspect-video bg-black rounded-2xl overflow-hidden shadow-2xl border border-white/10 scale-95 transition-transform duration-300" id="video-modal-content">
		<!-- Close Button -->
		<button id="close-video-modal" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-black/40 hover:bg-black/60 text-white hover:text-brand-coral flex items-center justify-center transition-all" aria-label="Close modal">
			<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
			</svg>
		</button>
		
		<!-- Embedded Player Iframe Container -->
		<div class="w-full h-full" id="video-iframe-container"></div>
	</div>
</div>

<!-- Styling for hiding scrollbars -->
<style>
	#success-stories-carousel::-webkit-scrollbar {
		display: none;
	}
	#success-stories-carousel {
		-ms-overflow-style: none;  /* IE/Edge */
		scrollbar-width: none;  /* Firefox */
	}
</style>

<!-- Carousel Interaction & Popup JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	// 1. Carousel Scroll and Dot Navigation Logic
	const carousel = document.getElementById('success-stories-carousel');
	const cards = carousel.querySelectorAll('.carousel-card');
	const dots = document.querySelectorAll('.carousel-dot');

	function updateActiveDot() {
		const scrollLeft = carousel.scrollLeft;
		let activeIndex = 0;
		let minDiff = Infinity;

		cards.forEach((card, idx) => {
			const cardOffset = card.offsetLeft - carousel.offsetLeft;
			const diff = Math.abs(cardOffset - scrollLeft);
			if (diff < minDiff) {
				minDiff = diff;
				activeIndex = idx;
			}
		});

		dots.forEach((dot, idx) => {
			if (idx === activeIndex) {
				dot.classList.add('bg-amber-500', 'scale-125');
				dot.classList.remove('bg-slate-300');
			} else {
				dot.classList.remove('bg-amber-500', 'scale-125');
				dot.classList.add('bg-slate-300');
			}
		});
	}

	// Initialize dots
	updateActiveDot();

	// Scroll event listener
	carousel.addEventListener('scroll', updateActiveDot);

	// Dot click triggers scrolling
	dots.forEach((dot, idx) => {
		dot.addEventListener('click', () => {
			const targetCard = cards[idx];
			carousel.scrollTo({
				left: targetCard.offsetLeft - carousel.offsetLeft,
				behavior: 'smooth'
			});
		});
	});

	// 2. Video Modal Popup Logic
	const modal = document.getElementById('video-modal');
	const modalContent = document.getElementById('video-modal-content');
	const iframeContainer = document.getElementById('video-iframe-container');
	const closeModalBtn = document.getElementById('close-video-modal');
	const backdrop = document.getElementById('video-modal-backdrop');

	function openModal(videoId) {
		// Populate modal with YouTube autoplay iframe
		iframeContainer.innerHTML = `
			<iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1" 
					class="w-full h-full border-0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
					allowfullscreen>
			</iframe>
		`;

		// Open transitions
		modal.classList.remove('hidden');
		modal.classList.add('flex');
		// Trigger layout reflow to allow transition
		modal.offsetHeight;
		modal.classList.remove('opacity-0');
		modal.classList.add('opacity-100');
		modalContent.classList.remove('scale-95');
		modalContent.classList.add('scale-100');

		// Prevent background document scrolling
		document.body.classList.add('overflow-hidden');
	}

	function closeModal() {
		// Close transitions
		modal.classList.remove('opacity-100');
		modal.classList.add('opacity-0');
		modalContent.classList.remove('scale-100');
		modalContent.classList.add('scale-95');

		setTimeout(() => {
			modal.classList.remove('flex');
			modal.classList.add('hidden');
			// Clear iframe to stop playback
			iframeContainer.innerHTML = '';
			document.body.classList.remove('overflow-hidden');
		}, 300);
	}

	// Add click listener on cards to open modal
	cards.forEach(card => {
		card.addEventListener('click', () => {
			const videoId = card.getAttribute('data-video-id');
			if (videoId) {
				openModal(videoId);
			}
		});
	});

	// Add close listeners
	closeModalBtn.addEventListener('click', closeModal);
	backdrop.addEventListener('click', closeModal);

	// Close on Escape key
	document.addEventListener('keydown', function(e) {
		if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
			closeModal();
		}
	});
});
</script>

