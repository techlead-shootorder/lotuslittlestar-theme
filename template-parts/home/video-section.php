<?php
/**
 * Template part for displaying the home page stories of care (video & testimonials)
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the Front Page ID
$home_page_id = get_option( 'page_on_front' );
if ( ! $home_page_id ) {
	$home_page_id = get_the_ID();
}

// Fetch section header fields
$success_stories_heading     = function_exists( 'get_field' ) ? get_field( 'success_stories_heading', $home_page_id ) : '';
$success_stories_description = function_exists( 'get_field' ) ? get_field( 'success_stories_description', $home_page_id ) : '';
$success_story_links         = function_exists( 'get_field' ) ? get_field( 'success_story_links', $home_page_id ) : null;

if ( empty( $success_stories_heading ) ) {
	$success_stories_heading = __( 'Success Stories', 'lotus' );
}
if ( empty( $success_stories_description ) ) {
	$success_stories_description = __( 'Hear from our families about their journey to recovery and the medical care they received at Lotus little stars.', 'lotus' );
}

/**
 * Helper function to extract YouTube Video ID from various URL formats
 */
if ( ! function_exists( 'lotus_get_youtube_id' ) ) {
	function lotus_get_youtube_id( $url ) {
		if ( empty( $url ) ) {
			return '';
		}
		// If it's already an 11-character video ID
		if ( strlen( $url ) === 11 ) {
			return $url;
		}
		// Regex to parse various YouTube link formats
		$pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i';
		if ( preg_match( $pattern, $url, $matches ) ) {
			return $matches[1];
		}
		return '';
	}
}

$processed_stories = array();

if ( ! empty( $success_story_links ) && is_array( $success_story_links ) ) {
	foreach ( $success_story_links as $item ) {
		$youtube_url = isset( $item['story_youtube_link'] ) ? $item['story_youtube_link'] : '';
		if ( empty( $youtube_url ) ) {
			continue; // If no YouTube URL exists, skip that card
		}

		$video_id = lotus_get_youtube_id( $youtube_url );
		if ( empty( $video_id ) ) {
			continue; // If URL is invalid, skip
		}

		// Title and Thumbnail if they are set in the repeater (otherwise defaults are used below)
		$title = isset( $item['title'] ) ? $item['title'] : __( 'Success Story', 'lotus' );
		$thumbnail_url = isset( $item['thumbnail_url'] ) ? $item['thumbnail_url'] : '';

		$processed_stories[] = array(
			'title'         => $title,
			'video_id'      => $video_id,
			'thumbnail_url' => $thumbnail_url,
		);
	}
}


// Only render output if success stories exist
if ( ! empty( $processed_stories ) ) :
?>

<section class="py-20 bg-[#F4F6FB] text-brand-dark border-b border-brand-border relative overflow-hidden">
	<!-- Decorative background shapes -->
	<div class="absolute top-0 left-0 w-64 h-64 bg-blue-100/50 rounded-full filter blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
	<div class="absolute bottom-0 right-0 w-96 h-96 bg-slate-200/50 rounded-full filter blur-3xl translate-x-1/3 translate-y-1/3"></div>

	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
		
		<!-- Centered Header -->
		<div class="text-center max-w-3xl mx-auto mb-16">
			<h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#1A365D] font-outfit mb-4">
				<?php echo esc_html( $success_stories_heading ); ?>
			</h2>
			<p class="text-brand-muted text-base sm:text-lg">
				<?php echo esc_html( $success_stories_description ); ?>
			</p>
			<div class="w-16 h-1 bg-brand-coral mx-auto mt-4 rounded-full"></div>
		</div>

		<div class="relative px-1 sm:px-0">
			<!-- Navigation Arrows -->
			<button id="carousel-prev" class="absolute left-0 top-[40%] -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/95 hover:bg-brand-red hover:text-white text-brand-dark hidden md:flex items-center justify-center shadow-lg border border-slate-200 transition-all duration-300 -translate-x-1/2 focus:outline-none focus:ring-2 focus:ring-brand-red/40 select-none cursor-pointer" aria-label="Previous Slide">
				<svg class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="2.5">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
				</svg>
			</button>
			<button id="carousel-next" class="absolute right-0 top-[40%] -translate-y-1/2 z-20 w-12 h-12 rounded-full bg-white/95 hover:bg-brand-red hover:text-white text-brand-dark hidden md:flex items-center justify-center shadow-lg border border-slate-200 transition-all duration-300 translate-x-1/2 focus:outline-none focus:ring-2 focus:ring-brand-red/40 select-none cursor-pointer" aria-label="Next Slide">
				<svg class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke-width="2.5">
					<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
				</svg>
			</button>

			<!-- Carousel Wrapper -->
			<div id="success-stories-carousel" class="flex overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-none gap-6 pb-6 -mx-4 px-4 sm:mx-0 sm:px-0">
				<?php foreach ( $processed_stories as $index => $story ) : 
					$video_id  = esc_attr( $story['video_id'] );
					$thumbnail = ! empty( $story['thumbnail_url'] ) ? esc_url( $story['thumbnail_url'] ) : "https://img.youtube.com/vi/{$video_id}/maxresdefault.jpg";
					$local_fallback = esc_url( get_stylesheet_directory_uri() . '/assets/left-image-hom.png' );
				?>
					<div class="carousel-card flex-shrink-0 w-full sm:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] snap-start group cursor-pointer" data-video-id="<?php echo $video_id; ?>">
						<div class="relative aspect-[16/10] rounded-[1.5rem] overflow-hidden shadow-md hover:shadow-xl border border-slate-200 bg-white transition-all duration-300 hover:-translate-y-1 select-none">
							<!-- Thumbnail Image -->
							<img src="<?php echo $thumbnail; ?>" 
								 onerror="if (this.src.indexOf('hqdefault.jpg') === -1) { this.src='https://img.youtube.com/vi/<?php echo $video_id; ?>/hqdefault.jpg'; } else { this.src='<?php echo $local_fallback; ?>'; }"
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
				<?php foreach ( $processed_stories as $index => $story ) : ?>
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
	if (!carousel) return;
	const cards = carousel.querySelectorAll('.carousel-card');
	const dots = document.querySelectorAll('.carousel-dot');
	const prevBtn = document.getElementById('carousel-prev');
	const nextBtn = document.getElementById('carousel-next');

	let currentActiveIndex = 0;
	let autoPlayInterval;
	const delay = 3000; // 3 seconds interval for auto-sliding

	function updateActiveDot() {
		const scrollLeft = carousel.scrollLeft;
		let minDiff = Infinity;

		cards.forEach((card, idx) => {
			const cardOffset = card.offsetLeft - carousel.offsetLeft;
			const diff = Math.abs(cardOffset - scrollLeft);
			if (diff < minDiff) {
				minDiff = diff;
				currentActiveIndex = idx;
			}
		});

		dots.forEach((dot, idx) => {
			if (idx === currentActiveIndex) {
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

	function slideTo(index) {
		if (index < 0) {
			index = cards.length - 1;
		} else if (index >= cards.length) {
			index = 0;
		}
		
		const targetCard = cards[index];
		if (targetCard) {
			carousel.scrollTo({
				left: targetCard.offsetLeft - carousel.offsetLeft,
				behavior: 'smooth'
			});
		}
	}

	function slideNext() {
		slideTo(currentActiveIndex + 1);
	}

	function slidePrev() {
		slideTo(currentActiveIndex - 1);
	}

	function startAutoPlay() {
		stopAutoPlay();
		autoPlayInterval = setInterval(slideNext, delay);
	}

	function stopAutoPlay() {
		if (autoPlayInterval) {
			clearInterval(autoPlayInterval);
		}
	}

	// Arrow Navigation Listeners
	if (prevBtn) {
		prevBtn.addEventListener('click', () => {
			slidePrev();
			startAutoPlay(); // Reset auto slide timer on interaction
		});
	}

	if (nextBtn) {
		nextBtn.addEventListener('click', () => {
			slideNext();
			startAutoPlay(); // Reset auto slide timer on interaction
		});
	}

	// Dot click triggers scrolling
	dots.forEach((dot, idx) => {
		dot.addEventListener('click', () => {
			slideTo(idx);
			startAutoPlay(); // Reset auto slide timer on interaction
		});
	});

	// Pause autoplay on mouse enter / resume on leave
	carousel.addEventListener('mouseenter', stopAutoPlay);
	carousel.addEventListener('mouseleave', startAutoPlay);

	// Pause autoplay on mobile touch gestures
	carousel.addEventListener('touchstart', stopAutoPlay, { passive: true });
	carousel.addEventListener('touchend', startAutoPlay, { passive: true });

	// Start autoplay initially
	startAutoPlay();

	// 2. Video Modal Popup Logic
	const modal = document.getElementById('video-modal');
	const modalContent = document.getElementById('video-modal-content');
	const iframeContainer = document.getElementById('video-iframe-container');
	const closeModalBtn = document.getElementById('close-video-modal');
	const backdrop = document.getElementById('video-modal-backdrop');

	function openModal(videoId) {
		// Pause autoplay while video is open
		stopAutoPlay();

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
			
			// Resume autoplay after closing
			startAutoPlay();
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
	if (closeModalBtn) closeModalBtn.addEventListener('click', closeModal);
	if (backdrop) backdrop.addEventListener('click', closeModal);

	// Close on Escape key
	document.addEventListener('keydown', function(e) {
		if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
			closeModal();
		}
	});
});
</script>

<?php endif; ?>
