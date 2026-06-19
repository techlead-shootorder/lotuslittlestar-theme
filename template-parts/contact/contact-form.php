<?php
/**
 * Template part for displaying the contact form section
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<section class="py-16 sm:py-10 bg-brand-bg/30 border-b border-brand-cream/60">
	<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
		<div class="bg-white border border-[#EBE8E2] rounded-[2rem] p-8 sm:p-12 shadow-sm text-left">
			
			<!-- Form Header -->
			<h2 class="text-2xl sm:text-3xl font-semibold text-brand-dark mb-8 font-outfit">
				Send us a Message
			</h2>

			<!-- Contact Form -->
			<form action="#" method="POST" class="space-y-6">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
					
					<!-- Full Name -->
					<div class="flex flex-col gap-2">
						<label for="full_name" class="text-xs font-semibold text-brand-muted">
							Full Name
						</label>
						<input type="text" 
							   name="full_name" 
							   id="full_name" 
							   placeholder="John Doe" 
							   class="w-full px-4 h-12 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark placeholder-brand-muted/50" 
							   required>
					</div>

					<!-- Email Address -->
					<div class="flex flex-col gap-2">
						<label for="email_address" class="text-xs font-semibold text-brand-muted">
							Email Address
						</label>
						<input type="email" 
							   name="email_address" 
							   id="email_address" 
							   placeholder="john@example.com" 
							   class="w-full px-4 h-12 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark placeholder-brand-muted/50" 
							   required>
					</div>

					<!-- Phone Number -->
					<div class="flex flex-col gap-2">
						<label for="phone_number" class="text-xs font-semibold text-brand-muted">
							Phone Number
						</label>
						<input type="tel" 
							   name="phone_number" 
							   id="phone_number" 
							   placeholder="+91 XXXXX XXXXX" 
							   class="w-full px-4 h-12 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark placeholder-brand-muted/50" 
							   required>
					</div>

					<!-- Subject Dropdown -->
					<div class="flex flex-col gap-2">
						<label for="subject" class="text-xs font-semibold text-brand-muted">
							Subject
						</label>
						<div class="relative w-full">
							<select name="subject" 
									id="subject" 
									class="w-full px-4 h-12 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark appearance-none pr-10" 
									required>
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
					<div class="flex flex-col gap-2 md:col-span-2">
						<label for="message" class="text-xs font-semibold text-brand-muted">
							Message
						</label>
						<textarea name="message" 
								  id="message" 
								  rows="5" 
								  placeholder="How can we help you today?" 
								  class="w-full p-4 rounded-[12px] border border-[#D1D5DB] focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red bg-[#FDFBF7]/40 text-sm text-brand-dark placeholder-brand-muted/50 resize-y min-h-[120px]" 
								  required></textarea>
					</div>

				</div>

				<!-- Submit Button -->
				<div class="flex justify-start">
					<button type="submit" 
							class="h-11 px-6 bg-brand-red hover:bg-brand-red-hover text-white text-xs font-bold uppercase tracking-wider rounded-[10px] shadow-sm transition-all duration-200 cursor-pointer">
						Send Message
					</button>
				</div>
			</form>

		</div>
	</div>
</section>
