<?php
/**
 * Template part for displaying the FAQ section on the home page
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$faqs = array(
	array(
		'question' => 'Why choose Lotus Little Stars Hospital for women and child healthcare?',
		'answer'   => 'Lotus Little Stars Hospital offers comprehensive maternity, gynecology, neonatal, and pediatric care with experienced specialists, advanced technology, and patient-centered treatment.',
	),
	array(
		'question' => 'Do you provide high-risk pregnancy care?',
		'answer'   => 'Yes. Our expert obstetricians and fetal medicine specialists provide advanced care and monitoring for high-risk pregnancies to ensure the best outcomes for both mother and baby.',
	),
	array(
		'question' => 'Does the hospital have NICU and PICU facilities?',
		'answer'   => 'Yes. We have state-of-the-art Neonatal Intensive Care Unit (NICU) and Pediatric Intensive Care Unit (PICU) facilities for newborns and children requiring specialized critical care.',
	),
	array(
		'question' => 'What pediatric specialties are available?',
		'answer'   => 'We offer pediatric super-specialty services including Pediatric Cardiology, Nephrology, Neurology, Endocrinology, Gastroenterology, Hemato Oncology, Pulmonology, and Pediatric Surgery.',
	),
	array(
		'question' => 'Do you provide vaccination services for children?',
		'answer'   => 'Yes. We offer comprehensive immunization and vaccination programs as per national and international guidelines.',
	),
	array(
		'question' => 'Can I book an appointment online?',
		'answer'   => 'Yes. You can book appointments online or contact our team directly for consultations with our specialists',
	),
	array(
		'question' => 'What gynecology services do you offer?',
		'answer'   => 'Our gynecology department provides care for menstrual disorders, PCOS, infertility evaluation, fibroids, ovarian cysts, menopause management, and minimally invasive surgeries.',
	),
	array(
		'question' => ' Do you offer fetal medicine and prenatal diagnostic services?',
		'answer'   => 'Yes. We provide advanced fetal scans, prenatal diagnostics, genetic counseling, and fetal medicine services for comprehensive pregnancy care.',
	)
);
?>

<section class="py-20 bg-brand-cream border-b border-brand-cream relative">
	<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
		<!-- Section Header -->
		<div class="text-center mb-16">
			<h2 class="text-3xl sm:text-3xl font-semibold text-brand-green tracking-tight font-outfit mb-4">
				Common Inquiries
			</h2>
		</div>

		<!-- Accordion Stack -->
		<div class="space-y-4">
			<?php if ( ! empty( $faqs ) && is_array( $faqs ) ) : ?>
				<?php foreach ( $faqs as $index => $faq ) : ?>
					<!-- FAQ Item <?php echo $index + 1; ?> -->
					<div class="faq-item bg-white rounded-2xl border border-brand-cream overflow-hidden transition-all duration-300">
						<!-- Header Button -->
						<button type="button" class="faq-toggle w-full flex items-center justify-between px-8 py-6 text-left focus:outline-none select-none">
							<span class="font-semibold text-brand-green text-base sm:text-lg"><?php echo esc_html( $faq['question'] ); ?></span>
							<!-- Chevron Icon -->
							<svg class="faq-chevron h-5 w-5 text-brand-green transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
								<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
							</svg>
						</button>
						<!-- Answer Panel -->
						<div class="faq-panel max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
							<div class="px-8 pb-6 text-brand-green text-xs sm:text-sm leading-relaxed border-t border-brand-cream/60 pt-4">
								<?php echo esc_html( $faq['answer'] ); ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- Accordion Toggle JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	const toggles = document.querySelectorAll('.faq-toggle');
	
	toggles.forEach(toggle => {
		toggle.addEventListener('click', function() {
			const item = this.closest('.faq-item');
			const panel = item.querySelector('.faq-panel');
			const chevron = this.querySelector('.faq-chevron');
			
			// Check if already open
			const isOpen = !panel.classList.contains('max-h-0') && panel.style.maxHeight;

			// Close all other panels
			document.querySelectorAll('.faq-panel').forEach(otherPanel => {
				otherPanel.style.maxHeight = null;
				otherPanel.classList.add('max-h-0');
				otherPanel.closest('.faq-item').classList.remove('border-brand-coral/20');
				otherPanel.closest('.faq-item').querySelector('.faq-chevron').classList.remove('rotate-180');
			});

			if (!isOpen) {
				// Open clicked panel
				panel.classList.remove('max-h-0');
				panel.style.maxHeight = panel.scrollHeight + "px";
				item.classList.add('border-brand-coral/20');
				chevron.classList.add('rotate-180');
			}
		});
	});
});
</script>
