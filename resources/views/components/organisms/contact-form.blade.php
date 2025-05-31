<div class="max-w-2xl mx-auto bg-clay-50 rounded-xl p-8 shadow-md">
    <div class="mb-6">
        <h3 class="font-nohemi font-bold text-h4-desktop text-charcoal-700 mb-2">Get in Touch</h3>
        <p class="font-poppins text-body text-charcoal-600">
            Have questions about our premium charcoal products? Fill out the form below and our team will get back to you shortly.
        </p>
    </div>

    <form 
        action="https://api.web3forms.com/submit"
        method="POST" 
        id="contact-form"
        class="grid gap-6"
    >
        @csrf
        <!-- Web3Forms Access Key -->
        <input type="hidden" name="access_key" value="96d41d8b-5b1e-499d-84cb-5d28559c45f4">
        <input type="hidden" name="subject" value="New Inquiry from Àlá Premium Charcoal Website">
        <input type="hidden" name="from_name" value="Àlá Premium Charcoal">
        <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

        <!-- Name Field -->
        <div>
            <label for="name" class="block font-poppins text-small font-medium text-charcoal-700 mb-1">
                Full Name <span class="text-ember-500">*</span>
            </label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                required
                class="w-full px-3 py-2 border border-ash-300 focus:border-palm-500 rounded-md focus:outline-none focus:ring-1 focus:ring-palm-500 font-poppins text-charcoal-700 transition-all duration-300"
                placeholder="Enter your full name"
            >
        </div>

        <!-- Email Field -->
        <div>
            <label for="email" class="block font-poppins text-small font-medium text-charcoal-700 mb-1">
                Email Address <span class="text-ember-500">*</span>
            </label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                required
                class="w-full px-3 py-2 border border-ash-300 focus:border-palm-500 rounded-md focus:outline-none focus:ring-1 focus:ring-palm-500 font-poppins text-charcoal-700 transition-all duration-300"
                placeholder="Enter your email address"
            >
        </div>

        <!-- Phone Field -->
        <div>
            <label for="phone" class="block font-poppins text-small font-medium text-charcoal-700 mb-1">
                Phone Number
            </label>
            <input 
                type="tel" 
                id="phone" 
                name="phone"
                class="w-full px-3 py-2 border border-ash-300 focus:border-palm-500 rounded-md focus:outline-none focus:ring-1 focus:ring-palm-500 font-poppins text-charcoal-700 transition-all duration-300"
                placeholder="Enter your phone number"
            >
            <p class="mt-1 font-poppins text-small text-ash-500">Optional, but recommended for faster response</p>
        </div>

        <!-- Interest Field -->
        <div>
            <label for="interest" class="block font-poppins text-small font-medium text-charcoal-700 mb-1">
                Primary Interest <span class="text-ember-500">*</span>
            </label>
            <div class="relative">
                <select 
                    id="interest" 
                    name="interest" 
                    required
                    class="appearance-none w-full px-3 py-2 border border-ash-300 focus:border-palm-500 rounded-md focus:outline-none focus:ring-1 focus:ring-palm-500 font-poppins text-charcoal-700 bg-white transition-all duration-300 pr-8"
                >
                    <option value="" selected disabled>Select your primary interest</option>
                    <option value="premium-lump">Premium Lump Charcoal</option>
                    <option value="restaurant-grade">Restaurant Grade Charcoal</option>
                    <option value="bbq-briquettes">BBQ Briquettes</option>
                    <option value="export-bulk">Export/Bulk Packaging</option>
                    <option value="distribution">Distribution Opportunities</option>
                    <option value="other">Other Inquiry</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-charcoal-700">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Message Field -->
        <div>
            <label for="message" class="block font-poppins text-small font-medium text-charcoal-700 mb-1">
                Message <span class="text-ember-500">*</span>
            </label>
            <textarea 
                id="message" 
                name="message" 
                rows="4" 
                required
                class="w-full px-3 py-2 border border-ash-300 focus:border-palm-500 rounded-md focus:outline-none focus:ring-1 focus:ring-palm-500 font-poppins text-charcoal-700 transition-all duration-300"
                placeholder="Please describe your inquiry in detail"
            ></textarea>
        </div>

        <!-- Consent Checkbox -->
        <div class="mt-2">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input 
                        id="consent" 
                        name="consent" 
                        type="checkbox" 
                        required
                        class="h-4 w-4 border-ash-300 rounded accent-palm-500 focus:ring-palm-500 focus:ring-offset-2"
                    >
                </div>
                <div class="ml-3">
                    <label for="consent" class="font-poppins text-small text-charcoal-600">
                        I agree to the <a href="#" class="text-ember-400 hover:text-ember-500 underline">privacy policy</a> and consent to being contacted regarding my inquiry. <span class="text-ember-500">*</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
            <button
                type="submit"
                class="w-full bg-palm-500 hover:bg-palm-600 text-clay-50 py-3 px-6 rounded-md transition-all duration-300 font-poppins font-medium focus:outline-none focus:ring-2 focus:ring-palm-300 focus:ring-offset-2"
            >
                Submit Inquiry
            </button>
        </div>

        <!-- Form Status Messages -->
        <div id="result" class="hidden">
            <!-- Success message -->
            <div id="success-message" class="hidden bg-palm-50 text-palm-700 rounded-md p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-palm-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-nohemi font-bold text-palm-700 text-h5-desktop">Inquiry Submitted Successfully!</h3>
                        <p class="mt-2 font-poppins text-body text-palm-600">
                            Thank you for your interest in Àlá Premium Charcoal. Our team will review your inquiry and get back to you within 24-48 business hours.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Error message -->
            <div id="error-message" class="hidden bg-ember-50 text-ember-700 rounded-md p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-ember-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="font-nohemi font-bold text-ember-700 text-h5-desktop">Unable to Submit Form</h3>
                        <p class="mt-2 font-poppins text-body text-ember-600">
                            There was an error submitting your form. Please check your internet connection and try again, or contact us directly at info@alapremiumcharcoal.com.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contact-form');
        const result = document.getElementById('result');
        const successMessage = document.getElementById('success-message');
        const errorMessage = document.getElementById('error-message');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            result.classList.remove('hidden');
            successMessage.classList.add('hidden');
            errorMessage.classList.add('hidden');

            // Get form data
            const formData = new FormData(form);

            // Submit to Web3Forms
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    successMessage.classList.remove('hidden');
                    form.reset();
                } else {
                    // Show error message
                    errorMessage.classList.remove('hidden');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                errorMessage.classList.remove('hidden');
            });
        });
    });
</script>
@endpush 