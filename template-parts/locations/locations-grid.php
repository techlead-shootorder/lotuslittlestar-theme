<?php
/**
 * Template part for displaying the locations grid
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Fetch SCF Fields
$contact_page_id = get_the_ID();
if ( ! is_page_template( 'page-contact.php' ) ) {
	$contact_page = get_page_by_path( 'contact' );
	if ( $contact_page ) {
		$contact_page_id = $contact_page->ID;
	}
}

$contact_hero_badge       = function_exists( 'get_field' ) ? get_field( 'contact_hero_badge', $contact_page_id ) : '';
$contact_hero_heading     = function_exists( 'get_field' ) ? get_field( 'contact_hero_heading', $contact_page_id ) : '';
$contact_hero_description = function_exists( 'get_field' ) ? get_field( 'contact_hero_description', $contact_page_id ) : '';
$contact_hero_background  = function_exists( 'get_field' ) ? get_field( 'contact_hero_background', $contact_page_id ) : null;
$locations                = function_exists( 'get_field' ) ? get_field( 'location_section', $contact_page_id ) : null;

// Write debug info to a local file
$debug_info = array(
	'contact_page_id' => $contact_page_id,
	'locations'       => $locations,
	'is_page_template' => is_page_template( 'page-contact.php' ) ? 'true' : 'false',
	'get_the_ID'       => get_the_ID(),
);
file_put_contents( get_theme_file_path( 'debug_acf.txt' ), print_r( $debug_info, true ) );

// Fallbacks
if ( empty( $contact_hero_badge ) ) {
	$contact_hero_badge = __( 'Contact Us', 'lotus' );
}
if ( empty( $contact_hero_heading ) ) {
	$contact_hero_heading = '<h1>' . __( 'Connect with Lotus Little Stars Hospital', 'lotus' ) . '</h1>';
}
if ( empty( $contact_hero_description ) ) {
	$contact_hero_description = '<p>' . __( 'From maternity and women\'s healthcare to specialized pediatric services, our dedicated team is ready to assist you. Contact us today to book an appointment or learn more about our comprehensive healthcare services.', 'lotus' ) . '</p>';
}

// Background Image
$bg_image_url = 'http://lotuslittlestars.in/wp-content/uploads/2026/06/contact-page-banner.jpg';
if ( ! empty( $contact_hero_background ) ) {
	if ( is_array( $contact_hero_background ) && ! empty( $contact_hero_background['url'] ) ) {
		$bg_image_url = $contact_hero_background['url'];
	} elseif ( is_string( $contact_hero_background ) ) {
		$bg_image_url = $contact_hero_background;
	}
}
?>

<section class="relative min-h-screen lg:min-h-0 flex items-center py-16 lg:py-14 border-b border-brand-cream/60 overflow-hidden">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat -z-20" style="background-image: url('<?php echo esc_url( $bg_image_url ); ?>');"></div>
	
	<!-- Overlay Gradient to ensure text readability -->
	<div class="absolute inset-0 bg-white/65 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/65 sm:via-white/60 sm:to-transparent -z-10"></div>
	
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-left">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
			
			<!-- Left Column: Content -->
			<div class="lg:col-span-6 xl:col-span-7">
				<?php if ( ! empty( $contact_hero_badge ) ) : ?>
					<span class="inline-flex items-center px-5 py-2 rounded-full text-sm font-semibold border border-brand-red text-brand-red bg-brand-red/10 mb-4">
						<?php echo esc_html( $contact_hero_badge ); ?>
					</span>
				<?php endif; ?>
				
				<?php if ( ! empty( $contact_hero_heading ) ) : ?>
					<div class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-brand-green mt-2 mb-4">
						<?php echo wp_kses_post( $contact_hero_heading ); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( ! empty( $contact_hero_description ) ) : ?>
					<div class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-xl">
						<?php echo wp_kses_post( $contact_hero_description ); ?>
					</div>
				<?php endif; ?>
				
				<div class="mt-6 flex">
					<a href="#locations-grid" class="inline-flex items-center justify-center px-6 h-12 bg-brand-red hover:bg-brand-red-hover text-white text-sm font-bold rounded-[4px] shadow-sm hover:shadow transition-all duration-200">
						View Centers
					</a>
				</div>
			</div>

			<!-- Right Column: Contact Form -->
			<div class="lg:col-span-6 xl:col-span-5">
				<div class="bg-white border border-[#EBE8E2] rounded-[2rem] p-6 sm:p-8 shadow-sm">
					<h3 class="text-xl font-bold text-brand-dark mb-6 font-outfit">Send us a Message</h3>
					
					<!-- Zoho Appointment Booking Form Iframe -->
					<iframe id="ziframe_518622" aria-label="Appointment Booking Form" frameborder="0" scrolling="no" style="height:720px;width:100%;border:none;transition:height 0.2s ease-in-out;" src='https://forms.zohopublic.in/lotuslittlestars1/form/AppointmentBookingForm/formperma/PjujkW3Efvz-ZdXvFM0ey7k0rNAlotX7ZcStZBYd3Bg'>    
					</iframe>

					<script type="text/javascript">
					(function() {
					  try {
						var zf_frame = document.getElementById("ziframe_518622");
						var ifrmSrc = zf_frame.src;

							if (!((new RegExp("[?&]referrername=")).test(ifrmSrc))) {
								var rfr = window.location.href;

								try { 
									rfr = window.self !== window.top ? 
										window.top.location.href : 
										(/^https?:\/\/[\w.-]+\.[a-zA-Z]{2,}/i.test(rfr) ? rfr : "");
								} catch (e) {}

								if (rfr && rfr !== "") {
									if (rfr.length > 1800) {
										var queryIndex = rfr.indexOf('?');
										if (queryIndex > -1) {
											rfr = rfr.substring(0, queryIndex);
										}
										if (rfr.length > 1800) {
											rfr = rfr.substring(0, 1800);
										}
									}
									ifrmSrc += ((ifrmSrc.indexOf('?') > 0) ? '&' : '?') + 'referrername=' + encodeURIComponent(rfr);
								}
							}
							if (zf_frame.src !== ifrmSrc) {
								zf_frame.src = ifrmSrc;
							}
					  } catch (e) {}

					  // Listen to messages from the Zoho Form to auto-resize and remove scrollbar
					  window.addEventListener('message', function(event) {
						try {
						  var evntData = event.data;
						  if (evntData && typeof evntData === 'string') {
							var zf_ifrm_data = evntData.split("|");
							if (zf_ifrm_data.length === 2) {
							  var zf_perma = zf_ifrm_data[0];
							  var zf_ifrm_ht_nw = (parseInt(zf_ifrm_data[1], 10) + 15) + "px";
							  var iframe = document.getElementById("ziframe_518622");
							  if (iframe && iframe.src.indexOf(zf_perma) > 0) {
								if (iframe.style.height !== zf_ifrm_ht_nw) {
								  iframe.style.height = zf_ifrm_ht_nw;
								}
							  }
							}
						  }
						} catch (e) {}
					  }, false);
					})();
					</script>
				</div>
			</div>

		</div>
	</div>
</section>

<?php if ( ! empty( $locations ) && is_array( $locations ) ) : ?>
<section id="locations-grid" class="py-20 bg-brand-bg min-h-screen">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Locations Grid -->
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
			<?php
			foreach ( $locations as $location ) :
				$location_image   = isset( $location['location_image'] ) ? $location['location_image'] : null;
				$location_badge   = isset( $location['location_badge'] ) ? $location['location_badge'] : '';
				$location_name    = isset( $location['location_name'] ) ? $location['location_name'] : '';
				$location_address = isset( $location['location_address'] ) ? $location['location_address'] : '';
				$location_phone   = isset( $location['location_phone_number'] ) ? $location['location_phone_number'] : ( isset( $location['location_phone'] ) ? $location['location_phone'] : '' );
				$google_map_link  = isset( $location['location_map_link'] ) ? $location['location_map_link'] : '';
				$call_number      = isset( $location['call_number'] ) ? $location['call_number'] : '';

				$image_url = '';
				$image_alt = '';
				if ( is_array( $location_image ) ) {
					$image_url = isset( $location_image['url'] ) ? $location_image['url'] : '';
					$image_alt = isset( $location_image['alt'] ) ? $location_image['alt'] : '';
				} elseif ( is_numeric( $location_image ) ) {
					$image_url = wp_get_attachment_image_url( $location_image, 'full' );
					$image_alt = get_post_meta( $location_image, '_wp_attachment_image_alt', true );
				} elseif ( is_string( $location_image ) ) {
					$image_url = $location_image;
				}
				if ( empty( $image_alt ) ) {
					$image_alt = $location_name;
				}
				?>
				<div class="bg-white rounded-[2rem] border border-brand-cream shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col group text-left">
					<!-- Image Header -->
					<div class="aspect-[16/9] bg-brand-cream relative overflow-hidden flex items-center justify-center">
						<?php if ( ! empty( $image_url ) ) : ?>
							<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
						<?php endif; ?>
					</div>
					
					<!-- Body Content -->
					<div class="p-8 flex flex-col flex-grow">
						<?php if ( ! empty( $location_badge ) ) : ?>
							<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2"><?php echo esc_html( $location_badge ); ?></span>
						<?php endif; ?>
						
						<?php if ( ! empty( $location_name ) ) : ?>
							<h3 class="text-xl font-bold text-brand-dark mb-4"><?php echo esc_html( $location_name ); ?></h3>
						<?php endif; ?>
						
						<div class="space-y-4 text-xs text-brand-muted mb-8 leading-relaxed">
							<?php if ( ! empty( $location_address ) ) : ?>
								<p class="flex gap-2 items-start">
									<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
									</svg>
									<span><?php echo nl2br( esc_html( $location_address ) ); ?></span>
								</p>
							<?php endif; ?>
							
							<?php if ( ! empty( $location_phone ) ) : ?>
								<p class="flex gap-2 items-center">
									<svg class="h-5 w-5 text-brand-coral shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
									</svg>
									<span><?php echo esc_html( $location_phone ); ?></span>
								</p>
							<?php endif; ?>
						</div>

						<div class="mt-auto pt-6 border-t border-brand-cream grid grid-cols-2 gap-4">
							<?php if ( ! empty( $google_map_link ) ) : ?>
								<a href="<?php echo esc_url( $google_map_link ); ?>" target="_blank" class="inline-flex items-center justify-center h-11 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-full transition-all">
									<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Directions
								</a>
							<?php endif; ?>
							
							<?php if ( ! empty( $call_number ) ) : ?>
								<a href="tel:<?php echo esc_attr( $call_number ); ?>" class="inline-flex items-center justify-center h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full transition-all">
									<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>Call Facility
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>
