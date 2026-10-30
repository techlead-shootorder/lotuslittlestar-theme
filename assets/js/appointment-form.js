/**
 * ApexCura Appointment Form Handler
 * Handles form validation, UTM parameter capture, and API submission
 */
(function () {
    'use strict';

    function getUrlParams() {
        var params = {};
        try {
            var search = window.location.search.substring(1);
            if (search) {
                var pairs = search.split('&');
                for (var i = 0; i < pairs.length; i++) {
                    var pair = pairs[i].split('=');
                    params[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
                }
            }
        } catch (e) { }
        return params;
    }

    function initAppointmentForms() {
        var forms = document.querySelectorAll('.apexcura-appointment-form');
        var urlParams = getUrlParams();

        forms.forEach(function (form) {
            // Avoid double initialization
            if (form.getAttribute('data-initialized') === 'true') {
                return;
            }
            form.setAttribute('data-initialized', 'true');

            // Pre-populate UTMs into hidden fields
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

            // Capture current form path
            var formPathField = form.querySelector('input[name="form_path"]');
            if (formPathField) {
                formPathField.value = window.location.href;
            }

            var submitBtn = form.querySelector('.submit-btn');
            var btnText = form.querySelector('.btn-text');
            var btnSpinner = form.querySelector('.btn-spinner');
            var feedbackBox = form.querySelector('.form-feedback');

            function showFeedback(type, message) {
                if (!feedbackBox) return;
                feedbackBox.classList.remove('hidden', 'bg-green-50', 'text-green-800', 'border-green-200', 'bg-red-50', 'text-red-800', 'border-red-200');
                if (type === 'success') {
                    feedbackBox.classList.add('bg-green-50', 'text-green-800', 'border', 'border-green-200');
                } else {
                    feedbackBox.classList.add('bg-red-50', 'text-red-800', 'border', 'border-red-200');
                }
                feedbackBox.textContent = message;
                feedbackBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }

            function setSubmitting(isSubmitting) {
                if (!submitBtn) return;
                submitBtn.disabled = isSubmitting;
                if (isSubmitting) {
                    if (btnSpinner) btnSpinner.classList.remove('hidden');
                    if (btnText) btnText.textContent = 'Submitting...';
                } else {
                    if (btnSpinner) btnSpinner.classList.add('hidden');
                    if (btnText) btnText.textContent = 'Get Appointment';
                }
            }

            // Only allow numbers in phone input
            var phoneInput = form.querySelector('input[name="phone"]');
            if (phoneInput) {
                phoneInput.addEventListener('input', function (e) {
                    this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
                });
            }

            form.addEventListener('submit', function (e) {
                e.preventDefault();

                var firstName = (form.querySelector('input[name="first_name"]')?.value || '').trim();
                var lastName = (form.querySelector('input[name="last_name"]')?.value || '').trim();
                var fullName = (firstName + ' ' + lastName).trim();
                var phone = (form.querySelector('input[name="phone"]')?.value || '').trim();
                var email = (form.querySelector('input[name="email"]')?.value || '').trim();
                var branchId = form.querySelector('select[name="branch_id"]')?.value || '';
                var department = form.querySelector('select[name="department"]')?.value || '';
                var description = (form.querySelector('textarea[name="description"]')?.value || '').trim();
                var doctor = (form.querySelector('input[name="doctor"]')?.value || '').trim();
                var sourceId = (form.querySelector('input[name="source_id"]')?.value || 'website');
                var campaignId = (form.querySelector('input[name="campaign_id"]')?.value || '');
                var formName = (form.querySelector('input[name="form_name"]')?.value || 'Contact Us');
                var formPath = (form.querySelector('input[name="form_path"]')?.value || window.location.href);

                // Validation
                if (!firstName) {
                    showFeedback('error', 'Please enter your first name.');
                    form.querySelector('input[name="first_name"]')?.focus();
                    return;
                }
                if (!phone || phone.length < 10) {
                    showFeedback('error', 'Please enter a valid 10-digit mobile number.');
                    phoneInput?.focus();
                    return;
                }
                if (!branchId) {
                    showFeedback('error', 'Please select your city.');
                    form.querySelector('select[name="branch_id"]')?.focus();
                    return;
                }
                if (!department) {
                    showFeedback('error', 'Please select the type of consultation.');
                    form.querySelector('select[name="department"]')?.focus();
                    return;
                }

                setSubmitting(true);
                if (feedbackBox) feedbackBox.classList.add('hidden');

                // Prepare ApexCura Payload
                var additionalFields = [
                    { label: 'message', value: description || 'Appointment booking request' },
                    { label: 'form name', value: formName },
                    { label: 'form path', value: formPath }
                ];

                if (urlParams.utm_source) additionalFields.push({ label: 'utm_source', value: urlParams.utm_source });
                if (urlParams.utm_medium) additionalFields.push({ label: 'utm_medium', value: urlParams.utm_medium });
                if (urlParams.utm_campaign) additionalFields.push({ label: 'utm_campaign', value: urlParams.utm_campaign });

                var apiPayload = {
                    full_name: fullName,
                    mobile_number: phone,
                    domain: 'lotuslittlestars.in',
                    source_id: sourceId,
                    email: email,
                    doctor: doctor,
                    department: department,
                    branch_id: branchId,
                    appointment_date: '',
                    campaign_id: campaignId,
                    campaign_name: campaignId,
                    form_id: '',
                    form_name: formName,
                    additional_fields: additionalFields
                };

                // Function to submit via WordPress AJAX proxy
                function submitViaAjax() {
                    var ajaxUrl = (window.lotusAjax && window.lotusAjax.ajaxurl) ? window.lotusAjax.ajaxurl : '/wp-admin/admin-ajax.php';
                    var formData = new FormData();
                    formData.append('action', 'lotus_submit_appointment');
                    formData.append('first_name', firstName);
                    formData.append('last_name', lastName);
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
                        .then(function (res) { return res.json(); })
                        .then(function (data) {
                            if (data && data.success) {
                                return { success: true, message: data.data?.message || 'Appointment details submitted successfully!' };
                            } else {
                                throw new Error(data?.data?.message || 'Submission failed');
                            }
                        });
                }

                // Primary submission to ApexCura API directly
                fetch('https://suite.apexcura.com/api/contactForm', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(apiPayload)
                })
                    .then(function (res) {
                        if (!res.ok) {
                            throw new Error('API status ' + res.status);
                        }
                        return res.json();
                    })
                    .then(function (data) {
                        if (data && (data.status === true || data.status === 'true' || data.success === true)) {
                            return { success: true, message: data.message || 'Contact details submitted successfully' };
                        } else {
                            // Fallback to AJAX proxy if API returns error
                            return submitViaAjax();
                        }
                    })
                    .catch(function (err) {
                        // In case of CORS or network error, fallback to WordPress AJAX proxy
                        console.warn('Direct API submission encountered error, trying WordPress proxy...', err);
                        return submitViaAjax();
                    })
                    .then(function (result) {
                        setSubmitting(false);
                        showFeedback('success', result.message || 'Thank you! Your appointment request has been submitted successfully.');
                        form.reset();

                        // If inside modal, keep modal open for a few seconds to let user read success message
                        var modal = form.closest('#booking-modal');
                        if (modal) {
                            setTimeout(function () {
                                var closeBtn = modal.querySelector('#close-booking-modal');
                                if (closeBtn) closeBtn.click();
                            }, 3000);
                        }
                    })
                    .catch(function (finalErr) {
                        setSubmitting(false);
                        showFeedback('error', finalErr.message || 'Something went wrong while submitting. Please try again or call us directly.');
                    });
            });
        });
    }

    // Initialize on DOM load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAppointmentForms);
    } else {
        initAppointmentForms();
    }

    // Expose init function globally in case forms are dynamically injected or opened in modals
    window.initLotusAppointmentForms = initAppointmentForms;
})();
