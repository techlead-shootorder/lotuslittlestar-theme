<?php
/**
 * Template part for displaying the specialists grid and details
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$is_wp_active = false;
$speciality_posts = array();
$categories = array();

if ( class_exists( 'WP_Query' ) ) {
	$args = array(
		'post_type'      => 'speciality',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
	);
	$speciality_query = new WP_Query( $args );

	if ( $speciality_query->have_posts() ) {
		$is_wp_active = true;
		while ( $speciality_query->have_posts() ) {
			$speciality_query->the_post();
			global $post;
			$speciality_posts[] = $post;
		}
		wp_reset_postdata();

		// Sort posts: woman-care, maternity-care, child-care, then others alphabetically. Within each category, sort alphabetically by title.
		usort( $speciality_posts, function( $a, $b ) {
			$terms_a = get_the_terms( $a->ID, 'speciality_category' );
			$terms_b = get_the_terms( $b->ID, 'speciality_category' );
			
			$cat_a = ( ! empty( $terms_a ) && ! is_wp_error( $terms_a ) ) ? $terms_a[0]->slug : '';
			$cat_b = ( ! empty( $terms_b ) && ! is_wp_error( $terms_b ) ) ? $terms_b[0]->slug : '';

			$order = array(
				'woman-care'     => 1,
				'maternity-care' => 2,
				'meternity-care' => 2,
				'child-care'     => 3,
			);

			$order_a = isset( $order[ $cat_a ] ) ? $order[ $cat_a ] : 99;
			$order_b = isset( $order[ $cat_b ] ) ? $order[ $cat_b ] : 99;

			if ( $order_a !== $order_b ) {
				return $order_a <=> $order_b;
			}

			return strcasecmp( $a->post_title, $b->post_title );
		} );

		// Fetch all categories for dropdown
		$raw_categories = get_terms( array(
			'taxonomy'   => 'speciality_category',
			'hide_empty' => false,
		) );
		if ( ! is_wp_error( $raw_categories ) && ! empty( $raw_categories ) ) {
			$categories = $raw_categories;
			// Sort categories
			usort( $categories, function( $a, $b ) {
				$order = array(
					'woman-care'     => 1,
					'maternity-care' => 2,
					'meternity-care' => 2,
					'child-care'     => 3,
				);
				$order_a = isset( $order[ $a->slug ] ) ? $order[ $a->slug ] : 99;
				$order_b = isset( $order[ $b->slug ] ) ? $order[ $b->slug ] : 99;
				if ( $order_a !== $order_b ) {
					return $order_a <=> $order_b;
				}
				return strcasecmp( $a->name, $b->name );
			} );
		}
	}
}

function lotus_render_specialty_card( $post_obj ) {
	$display_style = '';
	$opacity_class = 'opacity-100 scale-100';

	$post_id = $post_obj->ID;
	$title = get_the_title( $post_id );
	$permalink = get_permalink( $post_id );
	$icon = function_exists( 'get_field' ) ? get_field( 'speciality_icon', $post_id ) : '';
	$desc = function_exists( 'get_field' ) ? get_field( 'speciality_short_description', $post_id ) : '';
	
	$icon_html = '';
	if ( ! empty( $icon ) ) {
		if ( is_array( $icon ) ) {
			$icon_url  = ! empty( $icon['url'] ) ? $icon['url'] : '';
			$icon_alt  = ! empty( $icon['alt'] ) ? $icon['alt'] : $title;
			$icon_html = '<img src="' . esc_url( $icon_url ) . '" alt="' . esc_attr( $icon_alt ) . '" class="w-14 h-14 object-contain" loading="lazy" />';
		} elseif ( is_numeric( $icon ) ) {
			$icon_url  = wp_get_attachment_url( $icon );
			$icon_alt  = get_post_meta( $icon, '_wp_attachment_image_alt', true ) ?: $title;
			$icon_html = '<img src="' . esc_url( $icon_url ) . '" alt="' . esc_attr( $icon_alt ) . '" class="w-14 h-14 object-contain" loading="lazy" />';
		} elseif ( is_string( $icon ) ) {
			if ( filter_var( $icon, FILTER_VALIDATE_URL ) || preg_match( '/\.(jpg|jpeg|png|gif|svg|webp)/i', $icon ) ) {
				$icon_html = '<img src="' . esc_url( $icon ) . '" alt="' . esc_attr( $title ) . '" class="w-14 h-14 object-contain" loading="lazy" />';
			} else {
				$icon_html = $icon;
			}
		}
	}

	$category_slug = '';
	$terms = get_the_terms( $post_id, 'speciality_category' );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
		$category_slug = $terms[0]->slug;
	}

	// Determine category-specific classes and styles
	$card_bg_style = '';
	$card_classes = 'bg-white border-brand-cream/60';
	$title_classes = 'text-brand-dark';
	$desc_classes = 'text-brand-muted';
	$icon_bg_style = 'background-color: #DCEFE5;';
	$svg_color_style = '';

	if ( $category_slug === 'child-care' ) {
		$card_bg_style = 'background-color: #FDF5F7;';
		$card_classes = 'border-transparent text-brand-dark';
		$title_classes = 'text-brand-dark';
		$desc_classes = 'text-brand-muted';
		$icon_bg_style = 'background-color: #FBE3E7;';
		$svg_color_style = 'color: #A61A24;';
	} elseif ( $category_slug === 'woman-care' ) {
		$card_bg_style = 'background-color: #FCF8F0;';
		$card_classes = 'border-transparent text-brand-dark';
		$title_classes = 'text-brand-dark';
		$desc_classes = 'text-brand-muted';
		$icon_bg_style = 'background-color: #F5EDDA;';
		$svg_color_style = 'color: #A19373;';
	} elseif ( $category_slug === 'maternity-care' || $category_slug === 'meternity-care' ) {
		$card_bg_style = 'background-color: #F1F4F0;';
		$card_classes = 'border-transparent text-brand-dark';
		$title_classes = 'text-brand-dark';
		$desc_classes = 'text-brand-muted';
		$icon_bg_style = 'background-color: #DCEFE5;';
		$svg_color_style = 'color: #3C493D;';
	}

	// If icon is custom SVG text from CPT / inline mockup, replace any hardcoded text-[#2D5A44] or set inline style for color
	if ( ! empty( $svg_color_style ) && ! empty( $icon_html ) ) {
		// Extract hex from color style if present, e.g. "color: #A61A24;" -> "#A61A24"
		$hex_color = '';
		if ( preg_match( '/#([0-9a-fA-F]{3,6})/', $svg_color_style, $matches ) ) {
			$hex_color = '#' . $matches[1];
		}
		
		if ( ! empty( $hex_color ) && stripos( $icon_html, '<svg' ) !== false ) {
			$icon_html = preg_replace( '/text-\[[^\]]+\]/', '', $icon_html );
			if ( preg_match( '/style=(["\'])(.*?)\1/i', $icon_html ) ) {
				$icon_html = preg_replace( '/style=(["\'])(.*?)\1/i', 'style="color: ' . esc_attr( $hex_color ) . '; $2"', $icon_html );
			} else {
				$icon_html = str_ireplace( '<svg', '<svg style="color: ' . esc_attr( $hex_color ) . ';"', $icon_html );
			}
		}
	}
	?>
	<a href="<?php echo esc_url( $permalink ); ?>" class="specialty-card-item <?php echo esc_attr( $card_classes ); ?> p-8 sm:p-10 rounded-[2rem] shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center <?php echo $opacity_class; ?>" data-category="<?php echo esc_attr( $category_slug ); ?>" <?php echo $display_style; ?> style="<?php echo esc_attr( $card_bg_style ); ?>">
		<?php if ( ! empty( $icon_html ) ) : ?>
			<div class="w-14 h-14 flex items-center justify-center mb-6 select-none shrink-0" style="<?php echo esc_attr( $icon_bg_style ); ?>">
				<?php echo $icon_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>
		<?php endif; ?>
		<h3 class="font-outfit text-xl font-bold <?php echo esc_attr( $title_classes ); ?> mb-3"><?php echo esc_html( $title ); ?></h3>
		<?php if ( ! empty( $desc ) ) : ?>
			<p class="<?php echo esc_attr( $desc_classes ); ?> text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
				<?php echo esc_html( $desc ); ?>
			</p>
		<?php endif; ?>
	</a>
	<?php
}
?>

<?php if ( ! empty( $speciality_posts ) ) : ?>
<section id="specialists-grid" class="py-20 bg-[#FAF9F6] border-b border-brand-cream/40">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		
		<!-- Header with Dropdown Filter -->
		<div class="flex flex-col md:flex-row md:items-end justify-between mb-12 pb-8 border-b border-brand-cream/60 gap-6">
			<div class="text-left">
				<h1 class="font-outfit text-3xl sm:text-4xl font-semibold text-brand-dark">
					Centers in Our Specialities 
				</h1>
				<p class="text-brand-muted text-sm sm:text-base mt-2 font-medium">
					Comprehensive Care Centers offering a full spectrum of pediatric and maternity services.
				</p>
			</div>
			
			<!-- Specialty Filter Dropdown (Custom UI) -->
			<div class="relative shrink-0 text-left select-none z-30" id="specialty-filter-dropdown">
				<button type="button" class="inline-flex items-center justify-between w-52 px-5 py-3 bg-white border border-brand-dark/15 rounded-xl text-sm font-semibold text-brand-dark shadow-sm hover:bg-brand-cream/10 focus:outline-none transition-all cursor-pointer" id="specialty-dropdown-btn" aria-haspopup="true" aria-expanded="false">
					<span id="specialty-dropdown-label" class="font-outfit text-brand-dark">All Specialities</span>
					<svg class="w-4 h-4 ml-2 text-brand-muted transition-transform duration-300" id="specialty-dropdown-arrow" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<polyline points="6 9 12 15 18 9"></polyline>
					</svg>
				</button>
				<div class="absolute right-0 mt-2 w-52 rounded-xl bg-white border border-brand-cream shadow-lg ring-1 ring-black ring-opacity-5 z-20 hidden transition-all duration-200 origin-top-right transform scale-95 opacity-0" id="specialty-dropdown-menu">
					<div class="py-1.5 px-1" role="menu" aria-orientation="vertical">
						<button class="specialty-dropdown-item w-full text-left block px-4 py-2.5 text-sm rounded-lg font-semibold text-brand-red bg-brand-cream transition-colors duration-150 cursor-pointer" data-value="all" role="menuitem">All Specialities</button>
						<?php
						if ( ! empty( $categories ) ) {
							foreach ( $categories as $category ) {
								?>
								<button class="specialty-dropdown-item w-full text-left block px-4 py-2.5 text-sm rounded-lg font-semibold text-brand-dark hover:bg-brand-cream/50 transition-colors duration-150 cursor-pointer" data-value="<?php echo esc_attr( $category->slug ); ?>" role="menuitem"><?php echo esc_html( $category->name ); ?></button>
								<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>

		<!-- Specialties Grid -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-24" id="specialties-container">
			<?php
			foreach ( $speciality_posts as $post_obj ) {
				lotus_render_specialty_card( $post_obj );
			}
			?>
		</div>

	</div>
</section>

<!-- Client side Search & Filters JS script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const dropdownBtn = document.getElementById('specialty-dropdown-btn');
	const dropdownMenu = document.getElementById('specialty-dropdown-menu');
	const dropdownLabel = document.getElementById('specialty-dropdown-label');
	const dropdownArrow = document.getElementById('specialty-dropdown-arrow');
	const dropdownItems = document.querySelectorAll('.specialty-dropdown-item');
	const cards = document.querySelectorAll('.specialty-card-item');

	if (dropdownBtn && dropdownMenu) {
		dropdownBtn.addEventListener('click', function(e) {
			e.stopPropagation();
			const isHidden = dropdownMenu.classList.contains('hidden');
			if (isHidden) {
				dropdownMenu.classList.remove('hidden');
				// Let browser paint first, then run animation classes
				setTimeout(() => {
					dropdownMenu.classList.remove('opacity-0', 'scale-95');
					dropdownMenu.classList.add('opacity-100', 'scale-100');
				}, 10);
				dropdownArrow.classList.add('rotate-180');
			} else {
				closeDropdown();
			}
		});

		document.addEventListener('click', function(e) {
			if (!dropdownMenu.classList.contains('hidden') && !e.target.closest('#specialty-filter-dropdown')) {
				closeDropdown();
			}
		});

		function closeDropdown() {
			dropdownMenu.classList.remove('opacity-100', 'scale-100');
			dropdownMenu.classList.add('opacity-0', 'scale-95');
			dropdownArrow.classList.remove('rotate-180');
			setTimeout(() => {
				if (dropdownMenu.classList.contains('opacity-0')) {
					dropdownMenu.classList.add('hidden');
				}
			}, 200);
		}
	}

	function applyFilter(category) {
		cards.forEach(card => {
			const cardCategory = card.getAttribute('data-category') || '';
			
			const h3 = card.querySelector('h3');
			const p = card.querySelector('p');
			const iconBg = card.querySelector('.w-14');
			const svg = card.querySelector('svg');

			if (category === 'all' || cardCategory === category) {
				card.style.display = '';
				// Trigger layout reflow for animation
				void card.offsetHeight;
				card.classList.remove('opacity-0', 'scale-95');
				card.classList.add('opacity-100', 'scale-100');
				
				// Always style card based on its own category
				if (cardCategory === 'child-care') {
					card.style.backgroundColor = '#FDF5F7';
					card.classList.remove('bg-white', 'border-brand-cream/60', 'text-white');
					card.classList.add('text-brand-dark', 'border-transparent');
					if (h3) {
						h3.classList.remove('text-white');
						h3.classList.add('text-brand-dark');
					}
					if (p) {
						p.classList.remove('text-white/80');
						p.classList.add('text-brand-muted');
					}
					if (iconBg) {
						iconBg.style.backgroundColor = '#FBE3E7';
					}
					if (svg) {
						svg.style.color = '#A61A24';
						svg.classList.remove('text-white', 'text-[#2D5A44]', 'text-[#A19373]', 'text-[#3C493D]');
						svg.classList.add('text-[#A61A24]');
					}
				} else if (cardCategory === 'woman-care') {
					card.style.backgroundColor = '#FCF8F0';
					card.classList.remove('bg-white', 'border-brand-cream/60', 'text-white');
					card.classList.add('text-brand-dark', 'border-transparent');
					if (h3) {
						h3.classList.remove('text-white');
						h3.classList.add('text-brand-dark');
					}
					if (p) {
						p.classList.remove('text-white/80');
						p.classList.add('text-brand-muted');
					}
					if (iconBg) {
						iconBg.style.backgroundColor = '#F5EDDA';
					}
					if (svg) {
						svg.style.color = '#A19373';
						svg.classList.remove('text-white', 'text-[#2D5A44]', 'text-[#A61A24]', 'text-[#3C493D]');
						svg.classList.add('text-[#A19373]');
					}
				} else if (cardCategory === 'maternity-care' || cardCategory === 'meternity-care') {
					card.style.backgroundColor = '#F1F4F0';
					card.classList.remove('bg-white', 'border-brand-cream/60', 'text-white');
					card.classList.add('text-brand-dark', 'border-transparent');
					if (h3) {
						h3.classList.remove('text-white');
						h3.classList.add('text-brand-dark');
					}
					if (p) {
						p.classList.remove('text-white/80');
						p.classList.add('text-brand-muted');
					}
					if (iconBg) {
						iconBg.style.backgroundColor = '#DCEFE5';
					}
					if (svg) {
						svg.style.color = '#3C493D';
						svg.classList.remove('text-white', 'text-[#2D5A44]', 'text-[#A61A24]', 'text-[#A19373]');
						svg.classList.add('text-[#3C493D]');
					}
				} else {
					// Fallback to default white styling
					card.style.backgroundColor = '';
					card.classList.remove('text-white', 'text-brand-dark', 'border-transparent');
					card.classList.add('bg-white', 'border-brand-cream/60');
					if (h3) {
						h3.classList.remove('text-white');
						h3.classList.add('text-brand-dark');
					}
					if (p) {
						p.classList.remove('text-white/80');
						p.classList.add('text-brand-muted');
					}
					if (iconBg) {
						iconBg.style.backgroundColor = '';
					}
					if (svg) {
						svg.style.color = '';
						svg.classList.remove('text-white', 'text-[#A61A24]', 'text-[#A19373]', 'text-[#3C493D]');
						svg.classList.add('text-[#2D5A44]');
					}
				}
			} else {
				card.classList.remove('opacity-100', 'scale-100');
				card.classList.add('opacity-0', 'scale-95');
				card.style.display = 'none';
			}
		});
	}

	dropdownItems.forEach(item => {
		item.addEventListener('click', function(e) {
			e.preventDefault();
			const category = this.getAttribute('data-value');
			if (dropdownLabel) {
				dropdownLabel.textContent = this.textContent;
			}
			
			// Highlight the active option in dropdown list
			dropdownItems.forEach(i => {
				if (i.getAttribute('data-value') === category) {
					i.classList.add('bg-brand-cream', 'text-brand-red');
					i.classList.remove('text-brand-dark', 'hover:bg-brand-cream/50');
				} else {
					i.classList.remove('bg-brand-cream', 'text-brand-red');
					i.classList.add('text-brand-dark', 'hover:bg-brand-cream/50');
				}
			});

			applyFilter(category);
			closeDropdown();
		});
	});
});
</script>
<?php endif; ?>

