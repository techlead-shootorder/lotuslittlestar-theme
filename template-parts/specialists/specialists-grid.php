<?php
/**
 * Template part for displaying the specialists grid and details
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$specialties = [
	// CHILD CARE
	[
		'title'    => 'General Pediatrics',
		'desc'     => 'Comprehensive wellness exams, immunizations, and developmental tracking.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<rect x="3" y="8" width="18" height="12" rx="2" ry="2" />
			<path d="M17 8V5a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v3M12 11v6M9 14h6" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Hemato-Oncology & BMT',
		'desc'     => 'Specialized care for blood disorders, childhood cancers, and bone marrow transplant.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 22a7 7 0 0 0 7-7c0-4.3-7-13-7-13S5 11 5 15a7 7 0 0 0 7 7z" />
			<path d="M12 12v6M9 15h6" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Nephrology',
		'desc'     => 'Specialized kidney and bladder care.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<rect x="3" y="3" width="7" height="7" rx="1" />
			<rect x="14" y="3" width="7" height="7" rx="1" />
			<rect x="3" y="14" width="7" height="7" rx="1" />
			<rect x="14" y="14" width="7" height="7" rx="1" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Endocrinology',
		'desc'     => 'Hormonal balance and growth issues.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 3v17M5 8h14M7 8l-2 6h4l-2-6zm12 0l-2 6h4l-2-6z" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Gastroenterology',
		'desc'     => 'Digestive health and nutrition expert care.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 2a5 5 0 0 0-5 5c0 3 3 5 3 7s-2 3-2 5a3 3 0 0 0 6 0c0-2-2-3-2-5s3-4 3-7a5 5 0 0 0-3-5z" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Surgery',
		'desc'     => 'Minimally invasive surgical procedures.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<circle cx="6" cy="6" r="3" />
			<circle cx="6" cy="18" r="3" />
			<path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Urology',
		'desc'     => 'Pediatric urological condition management.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M8 6c-3 1-4 4-2 7 2 3 4 3 4 1s-1-4-2-8zM16 6c3 1 4 4 2 7-2 3-4 3-4 1s1-4 2-8z" />
		</svg>'
	],
	[
		'title'    => 'Plastic Surgery',
		'desc'     => 'Specialized reconstructive and corrective surgical intervention.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 2a8 8 0 0 0-8 8c0 3.5 2.5 6.5 6 7.5v2.5h4v-2.5c3.5-1 6-4 6-7.5a8 8 0 0 0-8-8z" />
			<path d="M9 10h6" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Neurology & Neuro surgery',
		'desc'     => 'Expert brain, nerve, and spine disease management.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<circle cx="12" cy="12" r="3"/>
			<circle cx="6" cy="6" r="2"/>
			<circle cx="18" cy="6" r="2"/>
			<circle cx="6" cy="18" r="2"/>
			<circle cx="18" cy="18" r="2"/>
			<path d="M8 8l2.5 2.5M16 8l-2.5 2.5M8 16l2.5-2.5M16 16l-2.5-2.5"/>
		</svg>'
	],
	[
		'title'    => 'Pediatric Orthopaedics',
		'desc'     => 'Bone and joint health for active kids.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M8 5h8M7 10h10M6 15h12M5 20h14M12 2v20" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Dentistry',
		'desc'     => 'Preventive and corrective dental care.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M6.5 3c-1.5 0-3 1.5-3 3.5 0 2 1.5 3.5 1.5 6.5s-1.5 5.5.5 7.5c2 2 4.5 1 6.5.5 2 .5 4.5 1.5 6.5-.5 2-2 .5-4.5.5-7.5s1.5-4.5 1.5-6.5c0-2-1.5-3.5-3-3.5-2 0-3.5 1.5-4 3-.5-1.5-2-3-4-3z"/>
		</svg>'
	],
	[
		'title'    => 'Pediatric ENT',
		'desc'     => 'Expert care for hearing and airway.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M8.5 6A5.5 5.5 0 0 1 14 11.5v3.5a3.5 3.5 0 1 1-7 0m0-3.5h7" />
		</svg>'
	],
	[
		'title'    => 'Pediatric Ophthalmology',
		'desc'     => 'Advanced pediatric vision specialist care.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
			<circle cx="12" cy="12" r="3"/>
		</svg>'
	],
	[
		'title'    => 'NICU (Neonatal Intensive Care Unit)',
		'desc'     => 'Advanced intensive care for critically ill and premature newborns.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07L19.07 4.93"/>
		</svg>'
	],
	[
		'title'    => 'PICU (Pediatric Intensive Care Unit)',
		'desc'     => 'Specialized intensive care for critically ill children.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M22 12h-4l-3 9L9 3l-3 9H2" />
		</svg>'
	],
	[
		'title'    => 'Child Neurology & Developmental Centre',
		'desc'     => 'Specialized care for neurological and developmental disorders.',
		'category' => 'child-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96-.44 2.5 2.5 0 0 1 0-3.12 3 3 0 0 1 0-3.88 2.5 2.5 0 0 1 0-3.12A2.5 2.5 0 0 1 9.5 2zM14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96-.44 2.5 2.5 0 0 0 0-3.12 3 3 0 0 0 0-3.88 2.5 2.5 0 0 0 0-3.12A2.5 2.5 0 0 0 14.5 2z"/>
		</svg>'
	],

	// WOMAN CARE
	[
		'title'    => 'Laparoscopic Surgery',
		'desc'     => 'Advanced minimally invasive gynecological procedures.',
		'category' => 'woman-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<circle cx="12" cy="12" r="10" />
			<circle cx="12" cy="12" r="3" />
			<path d="M12 2v4M12 18v4M2 12h4M18 12h4" />
		</svg>'
	],
	[
		'title'    => 'Adolescent Gynaecology',
		'desc'     => 'Specialized care for adolescent girls\' health.',
		'category' => 'woman-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<circle cx="12" cy="9" r="6"/>
			<path d="M12 15v7M9 19h6"/>
		</svg>'
	],
	[
		'title'    => 'Gynaec-Oncology',
		'desc'     => 'Expert care for gynecological cancers.',
		'category' => 'woman-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
			<path d="M12 8v8M9 12h6" />
		</svg>'
	],
	[
		'title'    => 'Uro-Gynaecology',
		'desc'     => 'Specialized treatment for pelvic floor and urinary disorders.',
		'category' => 'woman-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M8 6c-3 1-4 4-2 7 2 3 4 3 4 1s-1-4-2-8zM16 6c3 1 4 4 2 7-2 3-4 3-4 1s1-4 2-8z" />
		</svg>'
	],
	[
		'title'    => 'Aesthetic Gynaecology',
		'desc'     => 'Advanced solutions for intimate wellness.',
		'category' => 'woman-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 2c1 3 4 3 4 5 0 2.2-1.8 4-4 4s-4-1.8-4-4c0-2 3-2 4-5z" />
			<path d="M12 22c-1-3-4-3-4-5 0-2.2 1.8-4 4-4s4 1.8 4 4c0 2-3 2-4 5z" />
			<path d="M22 12c-3-1-3-4-5-4-2.2 0-4 1.8-4 4s1.8 4 4 4c2 0 2-3 5-4z" />
			<path d="M2 12c3 1 3 4 5 4 2.2 0 4-1.8 4-4s-1.8-4-4-4c-2 0-2 3-5 4z" />
		</svg>'
	],
	[
		'title'    => 'MICU (Medical Intensive Care Unit)',
		'desc'     => 'Critical care for complex medical conditions.',
		'category' => 'woman-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 2v20M2 12h20M4.93 4.93l14.14 14.14M4.93 19.07L19.07 4.93"/>
		</svg>'
	],

	// MATERNITY CARE
	[
		'title'    => 'Preconception Advice & Care',
		'desc'     => 'Preparing you for a healthy pregnancy.',
		'category' => 'maternity-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
			<path d="M12 7a2 2 0 0 0-2 2c0 2 2 3 2 3s2-1 2-3a2 2 0 0 0-2-2z" />
		</svg>'
	],
	[
		'title'    => 'Labor, Delivery & Birthing Services',
		'desc'     => 'Safe and compassionate childbirth care.',
		'category' => 'maternity-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5l6.74-6.76zM16 8l-6 6" />
		</svg>'
	],
	[
		'title'    => 'Fetal Medicine',
		'desc'     => 'Advanced care for your baby\'s development.',
		'category' => 'maternity-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<rect x="6" y="3" width="12" height="18" rx="3" />
			<path d="M6 8h12M6 16h12M9 12h1.5l1-2 1 4 1-2H15" />
		</svg>'
	],
	[
		'title'    => 'Antenatal Care',
		'desc'     => 'Comprehensive care throughout pregnancy.',
		'category' => 'maternity-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
		</svg>'
	],
	[
		'title'    => 'High-Risk Obstetric Unit with Maternal ICU',
		'desc'     => 'Expert care for high-risk pregnancies.',
		'category' => 'maternity-care',
		'icon'     => '<svg class="h-6 w-6 text-[#2D5A44]" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
			<path d="M12 2a10 10 0 0 1 10 10c0 5.52-4.48 10-10 10S2 17.52 2 12A10 10 0 0 1 12 2z" />
			<path d="M12 6a6 6 0 0 1 6 6c0 3.31-2.69 6-6 6S6 15.31 6 12a6 6 0 0 1 6-6z" />
		</svg>'
	]
];

// Helper function to render card HTML
function lotus_render_specialty_card( $item ) {
	$is_hidden = $item['category'] !== 'child-care';
	$display_style = $is_hidden ? 'style="display: none;"' : '';
	$opacity_class = $is_hidden ? 'opacity-0 scale-95' : 'opacity-100 scale-100';
	?>
	<div class="specialty-card-item bg-white p-8 sm:p-10 rounded-[2rem] border border-brand-cream/60 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col items-center justify-center text-center <?php echo $opacity_class; ?>" data-category="<?php echo esc_attr( $item['category'] ); ?>" <?php echo $display_style; ?>>
		<div class="w-14 h-14 bg-[#DCEFE5] rounded-full flex items-center justify-center mb-6 select-none shrink-0">
			<?php echo $item['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div>
		<h3 class="font-outfit text-xl font-bold text-brand-dark mb-3"><?php echo esc_html( $item['title'] ); ?></h3>
		<p class="text-brand-muted text-xs sm:text-sm leading-relaxed max-w-[240px] font-medium">
			<?php echo esc_html( $item['desc'] ); ?>
		</p>
	</div>
	<?php
}
?>

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
					<span id="specialty-dropdown-label" class="font-outfit text-brand-dark">Child Care</span>
					<svg class="w-4 h-4 ml-2 text-brand-muted transition-transform duration-300" id="specialty-dropdown-arrow" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
						<polyline points="6 9 12 15 18 9"></polyline>
					</svg>
				</button>
				<div class="absolute right-0 mt-2 w-52 rounded-xl bg-white border border-brand-cream shadow-lg ring-1 ring-black ring-opacity-5 z-20 hidden transition-all duration-200 origin-top-right transform scale-95 opacity-0" id="specialty-dropdown-menu">
					<div class="py-1.5 px-1" role="menu" aria-orientation="vertical">
						<button class="specialty-dropdown-item w-full text-left block px-4 py-2.5 text-sm rounded-lg font-semibold text-brand-red bg-brand-cream transition-colors duration-150 cursor-pointer" data-value="child-care" role="menuitem">Child Care</button>
						<button class="specialty-dropdown-item w-full text-left block px-4 py-2.5 text-sm rounded-lg font-semibold text-brand-dark hover:bg-brand-cream/50 transition-colors duration-150 cursor-pointer" data-value="woman-care" role="menuitem">Woman Care</button>
						<button class="specialty-dropdown-item w-full text-left block px-4 py-2.5 text-sm rounded-lg font-semibold text-brand-dark hover:bg-brand-cream/50 transition-colors duration-150 cursor-pointer" data-value="maternity-care" role="menuitem">Maternity Care</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Specialties Grid -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-24" id="specialties-container">
			<?php
			foreach ( $specialties as $item ) {
				lotus_render_specialty_card( $item );
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
			if (cardCategory === category) {
				card.style.display = '';
				// Trigger layout reflow for animation
				void card.offsetHeight;
				card.classList.remove('opacity-0', 'scale-95');
				card.classList.add('opacity-100', 'scale-100');
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

