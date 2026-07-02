<?php
/**
 * Template part for displaying the locations grid
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="relative min-h-screen lg:min-h-0 flex items-center py-16 lg:py-14 border-b border-brand-cream/60 overflow-hidden">
	<!-- Background Image -->
	<div class="absolute inset-0 bg-cover bg-[position:80%_center] md:bg-right lg:bg-center bg-no-repeat -z-20" style="background-image: url('http://lotuslittlestars.in/wp-content/uploads/2026/06/contact-page-banner.jpg');"></div>
	
	<!-- Overlay Gradient to ensure text readability -->
	<div class="absolute inset-0 bg-white/65 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/65 sm:via-white/60 sm:to-transparent -z-10"></div>
	
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-left">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
			
			<!-- Left Column: Content -->
			<div class="lg:col-span-6 xl:col-span-7">
				<span class="inline-flex items-center px-5 py-2 rounded-full text-sm font-semibold border border-brand-red text-brand-red bg-brand-red/10 mb-4">Contact Us</span>
				<h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-brand-green mt-2 mb-4">
					Connect with Lotus Little Stars Hospital
				</h1>
				<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-xl">
					From maternity and women's healthcare to specialized pediatric services, our dedicated team is ready to assist you. Contact us today to book an appointment or learn more about our comprehensive healthcare services.				</p>
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
					<iframe id="ziframe_518622" aria-label="Appointment Booking Form" frameborder="0" style="height:530px;width:100%;border:none;" src='https://forms.zohopublic.in/lotuslittlestars1/form/AppointmentBookingForm/formperma/PjujkW3Efvz-ZdXvFM0ey7k0rNAlotX7ZcStZBYd3Bg'>    
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
					})();
					</script>
				</div>
			</div>

		</div>
	</div>
</section>

<section id="locations-grid" class="py-20 bg-brand-bg min-h-screen">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<!-- Locations Grid -->
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
			<!-- Location 1: Banjara Hills -->
			<div class="bg-white rounded-[2rem] border border-brand-cream shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col group text-left">
				<!-- Image Header -->
				<div class="aspect-[16/9] bg-brand-cream relative overflow-hidden flex items-center justify-center">
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/banjara-hills.png" alt="Banjara Hills, Hyderabad" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
				</div>
				
				<!-- Body Content -->
				<div class="p-8 flex flex-col flex-grow">
					<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2">Flagship Tertiary Center</span>
					<h3 class="text-xl font-bold text-brand-dark mb-4">Banjara Hills, Hyderabad</h3>
					
					<div class="space-y-4 text-xs text-brand-muted mb-8 leading-relaxed">
						<p class="flex gap-2 items-start">
							<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
							</svg>
							<span>Accent Towers, 8-2-590, Road No. 10, Banjara Hills, Hyderabad, Telangana 500034, India.</span>
						</p>
						<p class="flex gap-2 items-center">
							<svg class="h-5 w-5 text-brand-coral shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
							</svg>
							<span>+91 40 4000 6000</span>
						</p>
					</div>

					<div class="mt-auto pt-6 border-t border-brand-cream grid grid-cols-2 gap-4">
						<a href="https://maps.app.goo.gl/pYsM12x43wwQvR1y7" target="_blank" class="inline-flex items-center justify-center h-11 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-full transition-all">
							<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Directions
						</a>
						<a href="tel:+914040006000" class="inline-flex items-center justify-center h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full transition-all">
							<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>Call Facility
						</a>
					</div>
				</div>
			</div>

			

			<!-- Location 3: Rajahmundry -->
			<div class="bg-white rounded-[2rem] border border-brand-cream shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col group text-left">
				<!-- Image Header -->
				<div class="aspect-[16/9] bg-brand-cream relative overflow-hidden flex items-center justify-center">
					<img src="http://lotuslittlestars.in/wp-content/uploads/2026/06/rajamundry-loc.png" alt="Rajahmundry, Andhra Pradesh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
				</div>
				
				<!-- Body Content -->
				<div class="p-8 flex flex-col flex-grow">
					<span class="text-xs font-bold text-brand-red uppercase tracking-wider mb-2">Advanced Pediatric Hub</span>
					<h3 class="text-xl font-bold text-brand-dark mb-4">Rajahmundry, Andhra Pradesh</h3>
					
					<div class="space-y-4 text-xs text-brand-muted mb-8 leading-relaxed">
						<p class="flex gap-2 items-start">
							<svg class="h-5 w-5 text-brand-coral shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
							</svg>
							<span>Door No. 76-8-11, Plot No. B-4, Danavaipeta, Rajahmundry, Andhra Pradesh 533103, India.</span>
						</p>
						<p class="flex gap-2 items-center">
							<svg class="h-5 w-5 text-brand-coral shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
							</svg>
							<span>+91 883 243 4000</span>
						</p>
					</div>

					<div class="mt-auto pt-6 border-t border-brand-cream grid grid-cols-2 gap-4">
						<a href="https://maps.app.goo.gl/hwhEdxf9FrWPKWyA7" target="_blank" class="inline-flex items-center justify-center h-11 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-full transition-all">
							<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>Directions
						</a>
						<a href="tel:+918832434000" class="inline-flex items-center justify-center h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full transition-all">
							<svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>Call Facility
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
