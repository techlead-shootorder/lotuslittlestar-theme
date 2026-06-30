<?php
/**
 * Template part for displaying the home page special care section matching Figma pixel-to-pixel
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$care_wings = [
	[
		'title'    => 'Gynecology',
		'desc'     => 'From preventive women’s wellness to advanced surgical care, we offer expertise in treating ovarian cysts, fibroids, uterus removal, MTP, and other gynecological conditions for every stage of a woman’s health journey.',
		'icon_url' => get_template_directory_uri() . '/assets/gyno.svg',
		'icon_alt' => 'Gynecology',
		'bg_class' => 'bg-[#F1F4F0]',
	],
	[
		'title'    => 'Obstetrics & Fetal Care',
		'desc'     => 'Providing holistic care for pregnancy, childbirth, and maternity, with specialized support for high-risk pregnancies and cutting-edge fetal medicine for optimal mother and baby outcomes.',
		'icon_url' =>  get_template_directory_uri() . '/assets/maternity.svg',
		'icon_alt' => 'Obstetrics & Fetal Care',
		'bg_class' => 'bg-[#FDF5F7]',
	],
	[
		'title'    => 'General Pediatrics',
		'desc'     => 'Comprehensive medical care for children, including immunizations, growth monitoring, common illnesses, and preventive health programs for overall well-being.',
		'icon_url' => get_template_directory_uri() . '/assets/pediatric care.svg',
		'icon_alt' => 'General Pediatrics',
		'bg_class' => 'bg-[#F5F5FF]',
	],
	[
		'title'    => 'Neonatology & Intensive Care',
		'desc'     => 'Advanced Level III NICU and PICU services providing comprehensive critical care for premature babies, newborns, and children with complex and life-threatening conditions, supported by experienced specialists and state-of-the-art technology.',
		'icon_url' =>  get_template_directory_uri() . '/assets/neonatal NICU.svg',
		'icon_alt' => 'Neonatology & Intensive Care',
		'bg_class' => 'bg-[#FCF8F0]',
	],
	[
		'title'    => 'Pediatric Multi-Speciality',
		'desc'     => 'Expertise across multiple specialties, including pediatric surgery, oncology, nephrology, dentistry, ENT, orthopedics, gastroenterology, endocrinology, plastic, and neuro surgery to cater to the diverse healthcare needs of children.',
		'icon_url' =>  get_template_directory_uri() . 'assets/super speciality.svg',
		'icon_alt' => 'Pediatric Multi-Speciality',
		'bg_class' => 'bg-[#F0F8F8]',
	],
	[
		'title'    => 'Child Development Center (CDC)',
		'desc'     => 'A nurturing space offering therapies, assessments, and interventions to support children with developmental delays, learning challenges, or special needs, enabling them to thrive.',
		'icon_url' =>  get_template_directory_uri() . '/assets/developmental.svg',
		'icon_alt' => 'Child Development Center',
		'bg_class' => 'bg-[#F9F0FD]',
	],
	[
		'title'    => 'Pediatric Nephrology',
		'desc'     => 'Specialized diagnosis and treatment of kidney disorders in children, including urinary tract infections, congenital kidney conditions, kidney stones, and other renal diseases.',
		'icon_url' =>  get_template_directory_uri() . 'assets/pediatric-nephrology.svg',
		'icon_alt' => 'Pediatric Nephrology',
		'bg_class' => 'bg-[#F9F0FD]',
	]
];
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
			<?php foreach ( $care_wings as $wing ) : ?>
				<div class="group relative overflow-hidden <?php echo esc_attr( $wing['bg_class'] ); ?> p-10 border-brand-red rounded-r-[4px] rounded-l-[4px] shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between items-start text-left min-h-[320px] bg-cover bg-center">
					<div class="w-full relative z-10">
						<!-- Icon container -->
						<div class="bg-white p-3 rounded-full inline-flex items-center justify-center mb-6 shadow-sm">
							<img src="<?php echo esc_url( $wing['icon_url'] ); ?>" alt="<?php echo esc_attr( $wing['icon_alt'] ); ?>" class="h-10 w-10 object-contain">
						</div>
						<h3 class="text-2xl font-medium text-brand-dark mb-4 font-outfit"><?php echo esc_html( $wing['title'] ); ?></h3>
						<p class="text-brand-dark text-base leading-relaxed mb-6">
							<?php echo esc_html( $wing['desc'] ); ?>
						</p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

