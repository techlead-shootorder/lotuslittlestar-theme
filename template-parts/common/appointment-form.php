<?php
/**
 * Template part for the Appointment / Contact Booking Form
 * Integrated with ApexCura API
 *
 * @package Lotus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$form_instance_id = ! empty( $args['form_id'] ) ? esc_attr( $args['form_id'] ) : 'apt_form_' . wp_rand( 100, 999 );
$card_class       = ! empty( $args['card_class'] ) ? $args['card_class'] : 'bg-[#FAF8F5] border border-[#EBDCCB] rounded-[24px] p-6 sm:p-7 shadow-sm';
$show_title       = isset( $args['show_title'] ) ? (bool) $args['show_title'] : false;
$form_title       = ! empty( $args['title'] ) ? $args['title'] : __( 'Book an Appointment', 'lotus' );
$form_subtitle    = ! empty( $args['subtitle'] ) ? $args['subtitle'] : __( 'Fill in the details below and our team will get in touch with you.', 'lotus' );

// Auto-detect doctor if on a single doctor page
$current_doctor = '';
if ( is_singular( 'doctor' ) ) {
	$current_doctor = get_the_title();
}
?>

<div class="apexcura-form-container <?php echo esc_attr( $card_class ); ?>" id="container_<?php echo esc_attr( $form_instance_id ); ?>">
	<?php if ( $show_title ) : ?>
		<div class="mb-5 text-left">
			<h3 class="text-xl sm:text-2xl font-bold text-brand-dark font-outfit"><?php echo esc_html( $form_title ); ?></h3>
			<?php if ( ! empty( $form_subtitle ) ) : ?>
				<p class="text-xs sm:text-sm text-brand-muted mt-1"><?php echo esc_html( $form_subtitle ); ?></p>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<style>
		.custom-form-scroll::-webkit-scrollbar {
			width: 6px;
		}
		.custom-form-scroll::-webkit-scrollbar-track {
			background: #F5F2EB;
			border-radius: 4px;
		}
		.custom-form-scroll::-webkit-scrollbar-thumb {
			background: #CA9E45;
			border-radius: 4px;
		}
		.custom-form-scroll::-webkit-scrollbar-thumb:hover {
			background: #A61A24;
		}
	</style>

	<form class="apexcura-appointment-form" id="form_<?php echo esc_attr( $form_instance_id ); ?>" method="POST" novalidate>
		<!-- Hidden Context Fields -->
		<input type="hidden" name="domain" value="lotuslittlestars.in" />
		<input type="hidden" name="source_id" value="website" />
		<input type="hidden" name="form_name" value="Contact Us" />
		<input type="hidden" name="doctor" value="<?php echo esc_attr( $current_doctor ); ?>" />
		<input type="hidden" name="campaign_id" value="" />
		<input type="hidden" name="campaign_name" value="" />
		<input type="hidden" name="form_path" value="<?php echo esc_url( home_url( add_query_arg( array(), $wp->request ?? '' ) ) ); ?>" />
		<input type="hidden" name="utm_source" value="" />
		<input type="hidden" name="utm_medium" value="" />
		<input type="hidden" name="utm_campaign" value="" />

		<!-- Feedback Alerts -->
		<div class="form-feedback hidden mb-4 p-3 rounded-[6px] text-sm font-medium text-center transition-all"></div>

		<!-- Scrollable Fields Container -->
		<div class="max-h-[360px] sm:max-h-[380px] overflow-y-auto pr-1.5 custom-form-scroll space-y-4 mb-4" style="-webkit-overflow-scrolling: touch;">
			<!-- Name Field (Single input mapped to full_name) -->
			<div>
				<label for="name_<?php echo esc_attr( $form_instance_id ); ?>" class="block text-xs sm:text-sm font-semibold text-[#4A3B32] mb-1.5">
					<?php esc_html_e( 'Name', 'lotus' ); ?> <span class="text-brand-red font-bold">*</span>
				</label>
				<div class="relative">
					<span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
						</svg>
					</span>
					<input 
						type="text" 
						id="name_<?php echo esc_attr( $form_instance_id ); ?>" 
						name="full_name" 
						required 
						placeholder="<?php esc_attr_e( 'Name', 'lotus' ); ?>" 
						class="w-full pl-9 pr-3 py-2 sm:py-2.5 bg-white border border-[#CA9E45] rounded-[4px] text-sm text-[#2D2D2D] placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#CA9E45] focus:border-[#CA9E45] transition-all" 
					/>
				</div>
			</div>

			<!-- Email Field -->
			<div>
				<label for="email_<?php echo esc_attr( $form_instance_id ); ?>" class="block text-xs sm:text-sm font-semibold text-[#4A3B32] mb-1.5">
					<?php esc_html_e( 'Email', 'lotus' ); ?>
				</label>
				<div class="relative">
					<span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
						</svg>
					</span>
					<input 
						type="email" 
						id="email_<?php echo esc_attr( $form_instance_id ); ?>" 
						name="email" 
						placeholder="" 
						class="w-full pl-9 pr-3 py-2 sm:py-2.5 bg-white border border-[#CA9E45] rounded-[4px] text-sm text-[#2D2D2D] placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#CA9E45] focus:border-[#CA9E45] transition-all" 
					/>
				</div>
			</div>

			<!-- Phone Field -->
			<div>
				<label for="phone_<?php echo esc_attr( $form_instance_id ); ?>" class="block text-xs sm:text-sm font-semibold text-[#4A3B32] mb-1.5">
					<?php esc_html_e( 'Phone', 'lotus' ); ?> <span class="text-brand-red font-bold">*</span>
				</label>
				<div class="relative">
					<span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
						<svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
							<rect x="7" y="2" width="10" height="20" rx="2" stroke-linecap="round" stroke-linejoin="round"/>
							<line x1="11" y1="18" x2="13" y2="18" stroke-linecap="round"/>
						</svg>
					</span>
					<input 
						type="tel" 
						id="phone_<?php echo esc_attr( $form_instance_id ); ?>" 
						name="phone" 
						required 
						maxlength="10" 
						pattern="[0-9]{10}"
						placeholder="" 
						class="w-full pl-9 pr-3 py-2 sm:py-2.5 bg-white border border-[#CA9E45] rounded-[4px] text-sm text-[#2D2D2D] placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#CA9E45] focus:border-[#CA9E45] transition-all" 
					/>
				</div>
			</div>

			<!-- Select Your City Dropdown -->
			<div>
				<label for="city_<?php echo esc_attr( $form_instance_id ); ?>" class="block text-xs sm:text-sm font-semibold text-[#4A3B32] mb-1.5">
					<?php esc_html_e( 'Select Your City', 'lotus' ); ?> <span class="text-brand-red font-bold">*</span>
				</label>
				<div class="relative">
					<select 
						id="city_<?php echo esc_attr( $form_instance_id ); ?>" 
						name="branch_id" 
						required 
						class="w-full appearance-none px-3 py-2 sm:py-2.5 bg-white border border-[#CA9E45] rounded-[4px] text-sm text-[#2D2D2D] focus:outline-none focus:ring-1 focus:ring-[#CA9E45] focus:border-[#CA9E45] transition-all pr-10 cursor-pointer"
					>
						<option value="" disabled selected hidden></option>
						<option value="Hyderabad"><?php esc_html_e( 'Hyderabad', 'lotus' ); ?></option>
						<option value="Rajamundry"><?php esc_html_e( 'Rajamundry', 'lotus' ); ?></option>
					</select>
					<span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-600">
						<svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
						</svg>
					</span>
				</div>
			</div>

			<!-- Type of Consultation Dropdown -->
			<div>
				<label for="dept_<?php echo esc_attr( $form_instance_id ); ?>" class="block text-xs sm:text-sm font-semibold text-[#4A3B32] mb-1.5">
					<?php esc_html_e( 'Type of Consultation', 'lotus' ); ?> <span class="text-brand-red font-bold">*</span>
				</label>
				<div class="relative">
					<select 
						id="dept_<?php echo esc_attr( $form_instance_id ); ?>" 
						name="department" 
						required 
						class="w-full appearance-none px-3 py-2 sm:py-2.5 bg-white border border-[#CA9E45] rounded-[4px] text-sm text-[#2D2D2D] focus:outline-none focus:ring-1 focus:ring-[#CA9E45] focus:border-[#CA9E45] transition-all pr-10 cursor-pointer"
					>
						<option value="" disabled selected hidden></option>
						<option value="Woman Care"><?php esc_html_e( 'Woman Care', 'lotus' ); ?></option>
						<option value="Child Care"><?php esc_html_e( 'Child Care', 'lotus' ); ?></option>
					</select>
					<span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-600">
						<svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
						</svg>
					</span>
				</div>
			</div>

			<!-- Description Field -->
			<div>
				<label for="desc_<?php echo esc_attr( $form_instance_id ); ?>" class="block text-xs sm:text-sm font-semibold text-[#4A3B32] mb-1.5">
					<?php esc_html_e( 'Description', 'lotus' ); ?>
				</label>
				<textarea 
					id="desc_<?php echo esc_attr( $form_instance_id ); ?>" 
					name="description" 
					rows="3" 
					class="w-full px-3 py-2 sm:py-2.5 bg-white border border-[#CA9E45] rounded-[4px] text-sm text-[#2D2D2D] placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#CA9E45] focus:border-[#CA9E45] transition-all resize-y"
				></textarea>
			</div>
		</div>

		<!-- Submit Button -->
		<button 
			type="submit" 
			class="submit-btn w-full h-11 bg-brand-red hover:bg-brand-red-hover text-white font-semibold rounded-[4px] shadow-sm hover:shadow transition-all duration-200 flex items-center justify-center text-sm sm:text-base cursor-pointer disabled:opacity-70 disabled:cursor-not-allowed"
		>
			<span class="btn-text"><?php esc_html_e( 'Get Appointment', 'lotus' ); ?></span>
			<span class="btn-spinner hidden ml-2">
				<svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
					<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
					<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
				</svg>
			</span>
		</button>
	</form>
</div>

<script>
window.lotusAjax = window.lotusAjax || {
	ajaxurl: "<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>",
	thankyou_url: "<?php echo esc_url( home_url( '/thank-you/' ) ); ?>"
};

if (!window.lotusAppointmentFormInitialized) {
	window.lotusAppointmentFormInitialized = true;

	(function() {
		function getQueryParams() {
			var params = {};
			try {
				var search = window.location.search.substring(1);
				if (search) {
					var pairs = search.split('&');
					for (var i = 0; i < pairs.length; i++) {
						var pair = pairs[i].split('=');
						if (pair[0]) {
							params[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
						}
					}
				}
			} catch (e) {}
			return params;
		}

		function setupForms() {
			var forms = document.querySelectorAll('.apexcura-appointment-form');
			var urlParams = getQueryParams();

			for (var i = 0; i < forms.length; i++) {
				(function(form) {
					if (form.getAttribute('data-bound') === 'true') {
						return;
					}
					form.setAttribute('data-bound', 'true');

					// Populate UTMs
					if (urlParams.utm_source) {
						var utmSourceField = form.querySelector('input[name="utm_source"]');
						if (utmSourceField) utmSourceField.value = urlParams.utm_source;
						var sourceIdField = form.querySelector('input[name="source_id"]');
						if (sourceIdField) sourceIdField.value = 'web-ads';
					}
					if (urlParams.utm_medium) {
						var utmMediumField = form.querySelector('input[name="utm_medium"]');
						if (utmMediumField) utmMediumField.value = urlParams.utm_medium;
					}
					if (urlParams.utm_campaign) {
						var utmCampaignField = form.querySelector('input[name="utm_campaign"]');
						if (utmCampaignField) utmCampaignField.value = urlParams.utm_campaign;
						var campaignIdField = form.querySelector('input[name="campaign_id"]');
						if (campaignIdField) campaignIdField.value = urlParams.utm_campaign;
						var campaignNameField = form.querySelector('input[name="campaign_name"]');
						if (campaignNameField) campaignNameField.value = urlParams.utm_campaign;
					}

					var formPathField = form.querySelector('input[name="form_path"]');
					if (formPathField) {
						formPathField.value = window.location.href;
					}

					// Digits only on phone input
					var phoneInput = form.querySelector('input[name="phone"]');
					if (phoneInput) {
						phoneInput.addEventListener('input', function() {
							this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
						});
					}

					var submitBtn = form.querySelector('.submit-btn');
					var btnText = form.querySelector('.btn-text');
					var btnSpinner = form.querySelector('.btn-spinner');
					var feedbackBox = form.querySelector('.form-feedback');

					function showMessage(type, text) {
						if (!feedbackBox) return;
						feedbackBox.className = 'form-feedback mb-4 p-3 rounded-[6px] text-sm font-medium text-center transition-all';
						if (type === 'success') {
							feedbackBox.className += ' bg-green-50 text-green-800 border border-green-200';
						} else {
							feedbackBox.className += ' bg-red-50 text-red-800 border border-red-200';
						}
						feedbackBox.textContent = text;
						feedbackBox.classList.remove('hidden');
					}

					function setLoading(loading) {
						if (!submitBtn) return;
						submitBtn.disabled = loading;
						if (loading) {
							if (btnSpinner) btnSpinner.classList.remove('hidden');
							if (btnText) btnText.textContent = 'Submitting...';
						} else {
							if (btnSpinner) btnSpinner.classList.add('hidden');
							if (btnText) btnText.textContent = 'Get Appointment';
						}
					}

					form.addEventListener('submit', function(e) {
						e.preventDefault();

						var fullNameField = form.querySelector('input[name="full_name"]') || form.querySelector('input[name="first_name"]');
						var fullName = fullNameField ? fullNameField.value.trim() : '';

						var phone = phoneInput ? phoneInput.value.trim() : '';
						var emailField = form.querySelector('input[name="email"]');
						var email = emailField ? emailField.value.trim() : '';

						var citySelect = form.querySelector('select[name="branch_id"]');
						var branchId = citySelect ? citySelect.value : '';

						var deptSelect = form.querySelector('select[name="department"]');
						var department = deptSelect ? deptSelect.value : '';

						var descField = form.querySelector('textarea[name="description"]');
						var description = descField ? descField.value.trim() : '';

						var doctorField = form.querySelector('input[name="doctor"]');
						var doctor = doctorField ? doctorField.value.trim() : '';

						var sourceIdField = form.querySelector('input[name="source_id"]');
						var sourceId = sourceIdField ? sourceIdField.value : 'website';

						var campaignIdField = form.querySelector('input[name="campaign_id"]');
						var campaignId = campaignIdField ? campaignIdField.value : '';

						var formNameField = form.querySelector('input[name="form_name"]');
						var formName = formNameField ? formNameField.value : 'Contact Us';

						var formPath = formPathField ? formPathField.value : window.location.href;

						// Validations
						if (!fullName) {
							showMessage('error', 'Please enter your name.');
							if (fullNameField) fullNameField.focus();
							return;
						}
						if (!phone || phone.length < 10) {
							showMessage('error', 'Please enter a valid 10-digit mobile number.');
							if (phoneInput) phoneInput.focus();
							return;
						}
						if (!branchId) {
							showMessage('error', 'Please select your city.');
							if (citySelect) citySelect.focus();
							return;
						}
						if (!department) {
							showMessage('error', 'Please select the type of consultation.');
							if (deptSelect) deptSelect.focus();
							return;
						}

						setLoading(true);
						if (feedbackBox) feedbackBox.classList.add('hidden');

						var additionalFields = [
							{ label: 'message', value: description || 'Appointment booking request' },
							{ label: 'preferred_city', value: branchId || 'Hyderabad' },
							{ label: 'form name', value: formName },
							{ label: 'form path', value: formPath }
						];
						if (urlParams.utm_source) additionalFields.push({ label: 'utm_source', value: urlParams.utm_source });
						if (urlParams.utm_medium) additionalFields.push({ label: 'utm_medium', value: urlParams.utm_medium });
						if (urlParams.utm_campaign) additionalFields.push({ label: 'utm_campaign', value: urlParams.utm_campaign });

						var payload = {
							full_name: fullName,
							mobile_number: phone,
							domain: 'lotuslittlestars.in',
							source_id: sourceId,
							email: email,
							doctor: doctor,
							department: department,
							branch_id: null,
							appointment_date: '',
							campaign_id: campaignId,
							campaign_name: campaignId,
							form_id: '',
							form_name: formName,
							additional_fields: additionalFields
						};

						function sendViaProxy() {
							var ajaxUrl = window.lotusAjax ? window.lotusAjax.ajaxurl : '/wp-admin/admin-ajax.php';
							var formData = new FormData();
							formData.append('action', 'lotus_submit_appointment');
							formData.append('full_name', fullName);
							formData.append('phone', phone);
							formData.append('mobile_number', phone);
							formData.append('email', email);
							formData.append('branch_id', branchId);
							formData.append('department', department);
							formData.append('description', description);
							formData.append('doctor', doctor);
							formData.append('source_id', sourceId);
							formData.append('campaign_id', campaignId);
							formData.append('form_name', formName);
							formData.append('form_path', formPath);
							if (urlParams.utm_source) formData.append('utm_source', urlParams.utm_source);
							if (urlParams.utm_medium) formData.append('utm_medium', urlParams.utm_medium);
							if (urlParams.utm_campaign) formData.append('utm_campaign', urlParams.utm_campaign);

							return fetch(ajaxUrl, {
								method: 'POST',
								body: formData
							})
							.then(function(res) { return res.json(); })
							.then(function(data) {
								if (data && data.success) {
									return { success: true, message: (data.data && data.data.message) ? data.data.message : 'Submitted successfully!' };
								}
								throw new Error((data && data.data && data.data.message) ? data.data.message : 'Submission failed.');
							});
						}

						// Direct API call
						fetch('https://suite.apexcura.com/api/contactForm', {
							method: 'POST',
							headers: { 'Content-Type': 'application/json' },
							body: JSON.stringify(payload)
						})
						.then(function(res) {
							if (!res.ok) throw new Error('API returned ' + res.status);
							return res.json();
						})
						.then(function(data) {
							if (data && (data.status === true || data.status === 'true' || data.success === true)) {
								return { success: true, message: data.message || 'Details submitted successfully.' };
							}
							return sendViaProxy();
						})
						.catch(function() {
							return sendViaProxy();
						})
						.then(function(res) {
							setLoading(false);
							showMessage('success', res.message || 'Details submitted successfully! Redirecting...');
							form.reset();

							var tyUrl = (window.lotusAjax && window.lotusAjax.thankyou_url) ? window.lotusAjax.thankyou_url : '/thank-you/';
							setTimeout(function() {
								window.location.href = tyUrl;
							}, 600);
						})
						.catch(function(err) {
							setLoading(false);
							showMessage('error', err.message || 'Unable to submit details. Please try again or call us.');
						});
					});
				})(forms[i]);
			}
		}

		if (document.readyState === 'loading') {
			document.addEventListener('DOMContentLoaded', setupForms);
		} else {
			setupForms();
		}
	})();
}
</script>

