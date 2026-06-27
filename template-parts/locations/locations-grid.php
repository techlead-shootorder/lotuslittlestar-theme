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

<section class="relative bg-cover bg-center py-16 lg:py-14 border-b border-brand-cream/60 overflow-hidden" style="background-image: url('http://lotuslittlestars.in/wp-content/uploads/2026/06/location-hero-bg.png');">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-left">
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
			
			<!-- Left Column: Content -->
			<div class="lg:col-span-6 xl:col-span-7">
				<span class="inline-flex items-center px-5 py-2 rounded-full text-sm font-semibold border border-brand-red text-brand-red bg-brand-red/10 mb-4">Contact Us</span>
				<h1 class="text-4xl sm:text-5xl font-semibold text-brand-green mt-2 mb-4">
					Our Hospital Network
				</h1>
				<p class="text-brand-muted text-sm sm:text-base leading-relaxed max-w-xl">
					Lotus Little Stars operates advanced multi-specialty centers in key areas, delivering exceptional medical support to your doorstep. Get in touch with our team or visit one of our premium locations.
				</p>
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
					
					<!-- Form -->
					<form action="#" method="POST" class="space-y-4">
						<!-- Full Name -->
						<div class="flex flex-col gap-1.5">
							<label for="full_name" class="text-xs font-semibold text-brand-muted">Full Name</label>
							<input type="text" name="full_name" id="full_name" placeholder="John Doe" class="w-full px-4 h-11 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark placeholder-brand-muted/50" required>
						</div>

						<!-- Email Address & Phone Number Grid -->
						<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
							<div class="flex flex-col gap-1.5">
								<label for="email_address" class="text-xs font-semibold text-brand-muted">Email Address</label>
								<input type="email" name="email_address" id="email_address" placeholder="john@example.com" class="w-full px-4 h-11 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark placeholder-brand-muted/50" required>
							</div>
							<div class="flex flex-col gap-1.5">
								<label for="phone_number" class="text-xs font-semibold text-brand-muted">Phone Number</label>
								<input type="tel" name="phone_number" id="phone_number" placeholder="+91 XXXXX XXXXX" class="w-full px-4 h-11 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark placeholder-brand-muted/50" required>
							</div>
						</div>

						<!-- Subject Dropdown -->
						<div class="flex flex-col gap-1.5">
							<label for="subject" class="text-xs font-semibold text-brand-muted">Subject</label>
							<div class="relative w-full">
								<select name="subject" id="subject" class="w-full px-4 h-11 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark appearance-none pr-10" required>
									<option value="General Inquiry">General Inquiry</option>
									<option value="Appointment Booking">Appointment Booking</option>
									<option value="Patient Support">Patient Support</option>
									<option value="Feedback & Suggestions">Feedback & Suggestions</option>
								</select>
								<div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-brand-muted">
									<svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
										<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
									</svg>
								</div>
							</div>
						</div>

						<!-- Message Textarea -->
						<div class="flex flex-col gap-1.5">
							<label for="message" class="text-xs font-semibold text-brand-muted">Message</label>
							<textarea name="message" id="message" rows="3" placeholder="How can we help you today?" class="w-full p-3 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark placeholder-brand-muted/50 resize-y min-h-[80px]" required></textarea>
						</div>

						<!-- Submit Button -->
						<div class="pt-2">
							<button type="submit" class="w-full h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold uppercase tracking-wider rounded-[10px] shadow-sm transition-all duration-200 cursor-pointer">
								Send Message
							</button>
						</div>
					</form>
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
						<a href="https://maps.google.com" target="_blank" class="inline-flex items-center justify-center h-11 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-full transition-all">
							Directions
						</a>
						<a href="tel:+914040006000" class="inline-flex items-center justify-center h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full transition-all">
							Call Facility
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
						<a href="https://maps.google.com" target="_blank" class="inline-flex items-center justify-center h-11 border border-brand-red text-brand-red hover:bg-brand-cream text-xs font-bold rounded-full transition-all">
							Directions
						</a>
						<a href="tel:+918832434000" class="inline-flex items-center justify-center h-11 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold rounded-full transition-all">
							Call Facility
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
