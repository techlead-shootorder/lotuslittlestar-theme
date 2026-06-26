<?php
/**
 * Template part for displaying the Founders section on the about page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$founders = array(
	'satish' => array(
		'name'          => 'Dr. Satish Ghanta',
		'qualification' => 'MBBS (Manipal University), MD – Pediatrics, Fellowship in Neonatology, Pediatric & Cardiac Intensive Care (Australia)',
		'specialty'     => 'Managing Director - Pediatrics Critical Care',
		'image_name'    => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/satish-ghanta.webp',
		'bio'           => 'Dr. Satish Ghanta, our Managing Director, is a highly experienced Neonatologist, Developmental Paediatrician, and Paediatric Intensivist with over 32+ years of clinical experience. Until 2007, he had extensive international training (Neonatal & Paediatric Critical Care) at the Royal Hospital for Women, Sydney and Sydney Children’s Hospital. He & his team bring unparalleled leadership to our institution, guiding our strategic initiatives and fostering a culture of excellence. He is also the founder of CHOICE foundation, a charitable organization dedicated to providing critical and emergency medical care to underprivileged women and children over the last 12 years.',
	),
	'V.S.V. Prasad' => array(
		'name'          => 'Dr. V.S.V. Prasad',
		'qualification' => 'MD Pediatrics (AIIMS, New Delhi),FRCPCH (UK)',
		'specialty'     => 'Managing Director - Neonatology & Pediatrics',
		'image_name'    => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/vsv-prasad-1.png',
		'bio'           => 'Dr. V.S.V. Prasad, our Managing Director and Founder of Lotus Hospitals, is a renowned Neonatologist and Pediatric Critical Care Specialist with over 35+ years of experience in advancing neonatal and pediatric healthcare. After completing his medical education at AIIMS, New Delhi, he pursued advanced training in Neonatology and Pediatric Critical Care in the United States and the United Kingdom.Returning to India with a vision to establish world-class healthcare services for children, Dr. Prasad founded Lotus Hospitals in 2006 with a mission to make quality healthcare accessible to every family. Under his leadership, Lotus Hospitals has grown into one of the most trusted names in women and child healthcare, recognized for clinical excellence, advanced technology, and compassionate patient care.His commitment to innovation and patient-centered care continues to inspire the growth of Lotus Little Stars, helping set new benchmarks in neonatal, pediatric, and maternal healthcare for families across the region.',
	),
	'K.V.S Narayana' => array(
		'name' => 'K.V.S Narayana',
		'qualification' => 'MBBS, MS (General Surgery) ,MCh (Pediatric Surgery)',
		'specialty' => 'Consultant Pediatric Surgeon',
		'image_name' => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/Dr-narayana-new-scaled.jpg',
		'bio' => 'Dr. K.V.S. Narayana is a highly experienced Pediatric Surgeon with over 30 years of expertise in diagnosing and treating surgical conditions in newborns, infants, children, and adolescents. Renowned for his precision, clinical excellence, and child-centered approach, he specializes in performing a wide range of pediatric surgical procedures with a focus on safety, faster recovery, and optimal outcomes.',
	),
	'ramana' => array(
		'name'          => 'Dr. Ramana Dandamudi',
		'qualification' => 'MBBS, MD – Pediatrics, DCH, MRCP (UK)',
		'specialty'     => 'Paediatric Hemato-Oncology',
		'image_name'    => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/ramana-new.png',
		'bio'           => 'Dr. Ramana Dandamudi, our Director is a distinguished Paediatric Haematologist and Oncologist with over 39+ years of expertise in treating paediatric blood disorders and cancers. He received advanced training in Paediatric Haematology and Oncology at Our Lady’s Hospital, Dublin, and Manchester Children’s Hospital, UK. In 1995, Dr. Ramana Dandamudi spearheaded the establishment of the Paediatric Haematology - Oncology Department at the Indo-American Cancer Institute in Hyderabad, introducing dedicated paediatric haematology and oncology services for the first time to united Andhra Pradesh. He heads the Haematology - Oncology Department at Little Stars & She Women and Children’s Hospital Hyderabad, dedicated to delivering compassionate, comprehensive care, achieving child cancer survival rates on par with global standards. Dr. Dandamudi’s unwavering commitment to advancing paediatric oncology is also reflected in his contributions to the Children’s Cancer Foundation, where he continues to innovate and enhance care for young patients with blood disorders.',
	),
	'mehul' => array(
		'name'          => 'Dr. Mehul Shah',
		'qualification' => 'MD(PED),DCH(BOM),MD(USA),DABPN(USA)',
		'specialty'     => 'PEDIATRICS & NEPHROLOGY',
		'image_name'    => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/Dr-Mhul-A-shah-scaled.webp',
		'bio'           => 'Dr. Mehul Shah is a highly experienced Paediatric Nephrology Specialist with over 30 years of expertise. He completed his medical education at King Edward Memorial Hospital and Seth Gordhandas Sunderdas Medical College, specializing in Pediatrics at Wadia Children’s Hospital. Dr. Shah furthered his qualifications with a Diploma in Child Health (DCH) from the University of Mumbai and advanced studies in Paediatric Nephrology in the United States. He is board-certified by the American Board of Pediatrics and Paediatric Nephrology. At Little Stars & She Hospital in Banjara Hills, Hyderabad, Dr. Shah heads the department and provides comprehensive renal care and is dedicated to delivering exceptional treatment to his patients. In 1995, he pioneered Paediatric Nephrology services in united Andhra Pradesh, introducing the specialty when it was virtually non-existent, particularly at Apollo Hospitals. Dr. Shah’s expertise attracts patients from across India and abroad, and he remains a leading figure in the field of paediatric nephrology.',
	),
	'Roopa' => array(
		'name'          => 'Dr. Roopa Ghanta',
		'qualification' => 'MBBS, DGO, CCPU',
		'specialty'     => 'HOD - OBSTETRICS & GYNAECOLOGY',
		'image_name'    => 'http://lotuslittlestars.in/wp-content/uploads/2026/06/DR-Roopa-ghanta-scaled.webp',
		'bio'           => 'Dr. Roopa Ghanta, with over 26 years of expertise in Gynaecology and Obstetrics heads the OBG Department at Little Stars & She Women and Children’s Hospital. Her international experience at the Royal Hospital for Women in Sydney in High-Risk Obstetrics and her enhanced proficiency & certification in clinician performed ultrasonography in obstetrics and gynaecology adds a high level of precision and expertise in patient care. Dr. Roopa Ghanta specializes in high-risk pregnancy care and advanced gynaecological treatments. She has introduced innovative practices like water birthing, midwifery, painless birthing etc at Little Stars & She Hospital, where she is committed to delivering world-class, patient-centred care.',
	),
);
?>

<section class="py-20 bg-white border-b border-brand-cream relative">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="text-center max-w-3xl mx-auto mb-16">
			<span class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold bg-brand-red/5 text-brand-red border border-brand-red/30 mb-4 uppercase tracking-wider">
				Our Leadership
			</span>
			<h2 class="text-3xl sm:text-4xl font-medium text-brand-green font-outfit mb-4">
				Our Founders
			</h2>
			<p class="text-brand-muted text-sm sm:text-base leading-relaxed">
				Meet the visionary minds and clinical leaders behind Lotus Little Stars Hospital, dedicated to elevating healthcare standards for mothers and children.
			</p>
		</div>

		<!-- Founders Grid -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto">
			<?php foreach ( $founders as $id => $founder ) : 
				$img_input = $founder['image_name'];
				if ( strpos( $img_input, 'http://' ) === 0 || strpos( $img_input, 'https://' ) === 0 ) {
					$img_url = $img_input;
				} else {
					$img_path = get_stylesheet_directory() . '/assets/' . $img_input;
					$img_url  = file_exists( $img_path ) ? get_stylesheet_directory_uri() . '/assets/' . $img_input : '';
				}
			?>
				<div class="bg-[#FAF9F5] rounded-3xl border border-[#EBE8E2] shadow-sm hover:shadow-md transition-all duration-300 p-8 flex flex-col sm:flex-row items-center sm:items-start gap-8 text-center sm:text-left group">
					<!-- Circular Image Frame -->
					<div class="relative w-36 h-36 rounded-full shrink-0 overflow-hidden bg-brand-cream border-2 border-brand-cream group-hover:border-brand-red/30 transition-all duration-300">
						<?php if ( $img_url ) : ?>
							<img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $founder['name'] ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
						<?php else : ?>
							<div class="w-full h-full flex items-center justify-center text-brand-coral/40">
								<svg class="h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
								</svg>
							</div>
						<?php endif; ?>
					</div>

					<!-- Details -->
					<div class="flex flex-col justify-between h-full flex-grow">
						<div>
							<h3 class="text-xl font-bold text-brand-dark font-outfit mb-1"><?php echo esc_html( $founder['name'] ); ?></h3>
							<p class="text-sm text-brand-muted leading-relaxed mb-6 font-sans">
								<?php echo esc_html( $founder['specialty'] ); ?>
							</p>
							<!-- <p class="text-xs font-semibold text-brand-red uppercase tracking-wider mb-2"><?php echo esc_html( $founder['qualification'] ); ?></p> -->
						</div>
						<div class="mt-auto">
							<button type="button" data-founder-target="<?php echo esc_attr( $id ); ?>" class="open-founder-modal inline-flex items-center justify-center px-6 h-10 border border-brand-red text-brand-red hover:bg-brand-red hover:text-white text-xs font-bold rounded-lg transition-all duration-300">
								KNOW MORE
							</button>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Founder Modals -->
<?php foreach ( $founders as $id => $founder ) : 
	$img_input = $founder['image_name'];
	if ( strpos( $img_input, 'http://' ) === 0 || strpos( $img_input, 'https://' ) === 0 ) {
		$img_url = $img_input;
	} else {
		$img_path = get_stylesheet_directory() . '/assets/' . $img_input;
		$img_url  = file_exists( $img_path ) ? get_stylesheet_directory_uri() . '/assets/' . $img_input : '';
	}
?>
	<div id="modal-<?php echo esc_attr( $id ); ?>" class="founder-modal fixed inset-0 z-55 flex items-center justify-center p-4 bg-brand-dark/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300">
		<!-- Modal Content Box -->
		<div class="bg-white w-full max-w-3xl rounded-[0.5rem] shadow-2xl relative overflow-hidden flex flex-col md:flex-row transform scale-95 transition-transform duration-300 max-h-[70vh] overflow-y-auto md:overflow-y-visible md:h-[480px] mt-12">
			<!-- Close Button -->
			<button type="button" class="close-founder-modal absolute top-6 right-6 text-brand-muted hover:text-brand-red transition-colors z-20 focus:outline-none">
				<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
					<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>

			<!-- Left Column (Image & Yellow Background Mask) -->
			<div class="w-full md:w-5/12 bg-white flex items-center justify-center relative p-6 md:p-8 min-h-[250px] md:min-h-0 md:h-full overflow-hidden shrink-0 border-b md:border-b-0 md:border-r border-[#F3F4F6]">
				<!-- Parent Mask Container -->
				<div class="relative w-48 h-48 md:w-60 md:h-60 rounded-full overflow-hidden border-4 border-white shadow-xl bg-white z-10">
					
					<!-- Grayscale Avatar with Blending -->
					<?php if ( $img_url ) : ?>
						<img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $founder['name'] ); ?>" class="absolute inset-0 w-full h-full object-cover  z-10">
					<?php else : ?>
						<div class="absolute inset-0 w-full h-full flex items-center justify-center text-[#D93B48] opacity-20 z-10">
							<!-- Clean SVG headshot silhouette fallback matching screenshot shape -->
							<svg class="h-20 w-20" fill="currentColor" viewBox="0 0 24 24">
								<path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
							</svg>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<!-- Right Column (Text Bio details - scrollable on desktop) -->
			<div class="w-full md:w-7/12 flex flex-col p-6 md:p-10 text-left md:h-full md:overflow-y-auto relative z-10">
				<h3 class="font-outfit text-2xl md:text-2xl font-bold text-[#3B497D] mb-1 leading-tight"><?php echo esc_html( $founder['name'] ); ?></h3>
				<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-4 block"><?php echo esc_html( $founder['qualification'] ); ?></span>
				
				<div class="text-[#374151] text-sm md:text-sm leading-relaxed space-y-4 font-sans font-normal border-t border-[#F3F4F6] pt-4">
					<p><?php echo esc_html( $founder['bio'] ); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>

<!-- JavaScript for Modal Functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const openButtons = document.querySelectorAll('.open-founder-modal');
	const closeButtons = document.querySelectorAll('.close-founder-modal');
	const modals = document.querySelectorAll('.founder-modal');

	openButtons.forEach(button => {
		button.addEventListener('click', function() {
			const targetId = this.getAttribute('data-founder-target');
			const modal = document.getElementById('modal-' + targetId);
			if (modal) {
				// Show backdrop scroll lock
				document.body.style.overflow = 'hidden';
				// Open animation
				modal.classList.remove('opacity-0', 'pointer-events-none');
				modal.classList.add('opacity-100');
				const box = modal.querySelector('div');
				if (box) {
					box.classList.remove('scale-95');
					box.classList.add('scale-100');
				}
			}
		});
	});

	function closeModal(modal) {
		document.body.style.overflow = '';
		modal.classList.remove('opacity-100');
		modal.classList.add('opacity-0', 'pointer-events-none');
		const box = modal.querySelector('div');
		if (box) {
			box.classList.remove('scale-100');
			box.classList.add('scale-95');
		}
	}

	closeButtons.forEach(button => {
		button.addEventListener('click', function() {
			const modal = this.closest('.founder-modal');
			if (modal) {
				closeModal(modal);
			}
		});
	});

	// Close when clicking backdrop
	modals.forEach(modal => {
		modal.addEventListener('click', function(e) {
			if (e.target === this) {
				closeModal(this);
			}
		});
	});
});
</script>
