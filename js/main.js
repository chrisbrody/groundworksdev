document.addEventListener('DOMContentLoaded', function() {
    // ... (your existing code for mobile menu, smooth scrolling) ...

    // AJAX submission for contact form
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        // --- IMPORTANT CHANGE HERE ---
        // Get the form's action URL directly from the form element's action attribute
        const formActionUrl = contactForm.getAttribute('action');
        const formMethod = contactForm.method;

        // Log the URL to verify it's correct
        console.log("Contact Form:", contactForm); 
        console.log("Form action URL:", formActionUrl); 

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Client-side validation (keep this for immediate feedback)
            const nameInput = this.querySelector('#contact_name');
            const emailInput = this.querySelector('#contact_email');
            const messageInput = this.querySelector('#contact_message');
            
            // --- Add logic to get success/error message containers ---
            // These need to be present in your page-contact.php HTML structure for this to work.
            // If they are not present, the JS will fail to remove/add them.
            // Let's assume they exist as you showed in previous code.
            let successMessageContainer = this.querySelector('.success-message');
            let errorMessageContainer = this.querySelector('.error-message');

            // Clear previous messages before a new submission attempt
            if (successMessageContainer) successMessageContainer.remove();
            if (errorMessageContainer) errorMessageContainer.remove();
            
            let isValid = true;

            // Basic validation checks
            if (!nameInput.value.trim()) {
                displayError('Name is required.');
                isValid = false;
            }
            if (!emailInput.value.trim()) {
                displayError('Email address is required.');
                isValid = false;
            } else {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput.value)) {
                    displayError('Please enter a valid email address.');
                    isValid = false;
                }
            }
            if (!messageInput.value.trim()) {
                displayError('Message is required.');
                isValid = false;
            }

            if (!isValid) {
                return; // Stop if validation failed
            }

            // If client-side validation passes, proceed with AJAX submission
            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.textContent;
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;

            const formData = new FormData(contactForm);

            fetch(formActionUrl, { // Use the captured formActionUrl
                method: formMethod,
                body: formData
            })
            .then(response => {
                // Check if the response is a redirect
                if (response.redirected) {
                    // Follow the redirect. WordPress redirects will handle showing messages.
                    window.location.href = response.url;
                } else {
                    // If it's not a redirect (fetch error, or PHP error not resulting in redirect)
                    submitButton.textContent = originalButtonText;
                    submitButton.disabled = false;
                    displayError('An error occurred during submission. Please try again.');
                    console.error('Form submission did not redirect as expected:', response);
                }
            })
            .catch(error => {
                console.error('Error submitting form:', error);
                submitButton.textContent = originalButtonText;
                submitButton.disabled = false;
                displayError('An error occurred. Please check your connection and try again.');
            });
        });
    }

    // Helper function to display error messages
    function displayError(message) {
        const form = document.querySelector('.contact-form');
        if (!form) return;

        // Remove any existing messages
        const existingError = form.querySelector('.error-message');
        if (existingError) existingError.remove();
        const existingSuccess = form.querySelector('.success-message');
        if (existingSuccess) existingSuccess.remove();

        const errorMessageDiv = document.createElement('div');
        errorMessageDiv.className = 'error-message';
        errorMessageDiv.style.background = '#f8d7da';
        errorMessageDiv.style.color = '#721c24';
        errorMessageDiv.style.padding = '15px';
        errorMessageDiv.style.borderRadius = '5px';
        errorMessageDiv.style.marginBottom = '20px';
        errorMessageDiv.style.textAlign = 'center';
        errorMessageDiv.innerHTML = `<h4 style="margin: 0 0 5px 0; color: #721c24;">Error</h4><p style="margin: 0;">${message}</p>`;
        
        // Insert the error message before the form
        form.parentNode.insertBefore(errorMessageDiv, form);
    }

    // Helper function to display success messages (used as a fallback if redirect logic fails)
    function displaySuccess(message) {
        const form = document.querySelector('.contact-form');
        if (!form) return;

        // Remove any existing messages
        const existingError = form.querySelector('.error-message');
        if (existingError) existingError.remove();
        const existingSuccess = form.querySelector('.success-message');
        if (existingSuccess) existingSuccess.remove();

        const successMessageDiv = document.createElement('div');
        successMessageDiv.className = 'success-message';
        successMessageDiv.style.background = '#d4edda';
        successMessageDiv.style.color = '#155724';
        successMessageDiv.style.padding = '15px';
        successMessageDiv.style.borderRadius = '5px';
        successMessageDiv.style.marginBottom = '20px';
        successMessageDiv.style.textAlign = 'center';
        successMessageDiv.innerHTML = `<h4 style="margin: 0 0 5px 0; color: #155724;">Success</h4><p style="margin: 0;">${message}</p>`;
        
        // Insert the success message before the form
        form.parentNode.insertBefore(successMessageDiv, form);
    }

    // Animate elements on scroll
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.service-card, .case-study');
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };
    
    const animatedElements = document.querySelectorAll('.service-card, .case-study');
    animatedElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });
    
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Run once on load
});