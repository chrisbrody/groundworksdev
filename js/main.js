/**
 * GroundWorks Engineering - Premium Interactive JavaScript
 * Features: Custom cursor, magnetic buttons, scroll animations,
 * ROI calculator, multi-step form, and outcome slider
 */

document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // ENABLE JS-DEPENDENT FEATURES
    // ============================================
    document.body.classList.add('js-enabled');

    // ============================================
    // CUSTOM CURSOR
    // ============================================
    const cursor = document.querySelector('.custom-cursor');

    if (cursor && window.matchMedia('(hover: hover)').matches) {
        let mouseX = 0, mouseY = 0;
        let cursorX = 0, cursorY = 0;

        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        // Smooth cursor follow
        function animateCursor() {
            const dx = mouseX - cursorX;
            const dy = mouseY - cursorY;

            cursorX += dx * 0.15;
            cursorY += dy * 0.15;

            cursor.style.left = cursorX - 10 + 'px';
            cursor.style.top = cursorY - 10 + 'px';

            requestAnimationFrame(animateCursor);
        }
        animateCursor();

        // Hover state for interactive elements
        const interactiveElements = document.querySelectorAll('a, button, .btn, .form-option, .bento-card, .outcome-card');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
            el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
        });
    }

    // ============================================
    // MAGNETIC BUTTONS
    // ============================================
    const magneticBtns = document.querySelectorAll('.magnetic-btn');

    magneticBtns.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0, 0)';
        });
    });

    // ============================================
    // HEADER SCROLL EFFECT
    // ============================================
    const header = document.querySelector('.site-header');

    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // ============================================
    // MOBILE MENU
    // ============================================
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mainNav = document.getElementById('main-nav');

    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', () => {
            mainNav.classList.toggle('open');
            mobileToggle.classList.toggle('active');
        });
    }

    // ============================================
    // SCROLL REVEAL ANIMATIONS
    // ============================================
    const revealElements = document.querySelectorAll('.reveal, .stagger-reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Unobserve after revealing to improve performance
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // ============================================
    // ROI CALCULATOR
    // ============================================
    const hoursSlider = document.getElementById('hours-slider');
    const hoursValue = document.getElementById('hours-value');
    const yearlyHours = document.getElementById('yearly-hours');
    const costValue = document.getElementById('cost-value');

    if (hoursSlider) {
        const HOURLY_RATE = 150;

        function updateCalculator() {
            const hours = parseInt(hoursSlider.value);
            const yearly = hours * 52;
            const cost = yearly * HOURLY_RATE;

            hoursValue.textContent = hours;
            yearlyHours.textContent = yearly.toLocaleString();
            costValue.textContent = cost.toLocaleString();

            // Update slider track fill
            const percentage = ((hours - 1) / 39) * 100;
            hoursSlider.style.background = `linear-gradient(to right, #FF5C00 0%, #FF5C00 ${percentage}%, #1a1a1a ${percentage}%, #1a1a1a 100%)`;
        }

        hoursSlider.addEventListener('input', updateCalculator);
        updateCalculator(); // Initialize
    }

    // ============================================
    // OUTCOMES SLIDER
    // ============================================
    const slider = document.getElementById('outcomes-slider');
    const prevBtn = document.getElementById('slider-prev');
    const nextBtn = document.getElementById('slider-next');

    if (slider && prevBtn && nextBtn) {
        let currentSlide = 0;
        const cards = slider.querySelectorAll('.outcome-card');
        const totalCards = cards.length;

        function getVisibleCards() {
            if (window.innerWidth <= 768) return 1;
            if (window.innerWidth <= 992) return 2;
            return 3;
        }

        function updateSlider() {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalCards - visibleCards);
            currentSlide = Math.min(currentSlide, maxSlide);

            const cardWidth = cards[0].offsetWidth + 24; // Include gap
            slider.style.transform = `translateX(-${currentSlide * cardWidth}px)`;

            // Update button states
            prevBtn.style.opacity = currentSlide === 0 ? '0.5' : '1';
            nextBtn.style.opacity = currentSlide >= maxSlide ? '0.5' : '1';
        }

        prevBtn.addEventListener('click', () => {
            if (currentSlide > 0) {
                currentSlide--;
                updateSlider();
            }
        });

        nextBtn.addEventListener('click', () => {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalCards - visibleCards);
            if (currentSlide < maxSlide) {
                currentSlide++;
                updateSlider();
            }
        });

        window.addEventListener('resize', updateSlider);
        updateSlider(); // Initialize
    }

    // ============================================
    // MULTI-STEP FORM
    // ============================================
    const form = document.getElementById('efficiency-form');
    const formSteps = document.querySelectorAll('.form-step');
    const progressSteps = document.querySelectorAll('.progress-step');
    const formOptions = document.querySelectorAll('.form-option');

    if (form) {
        // Handle form option selection
        formOptions.forEach(option => {
            option.addEventListener('click', function() {
                const siblings = this.parentElement.querySelectorAll('.form-option');
                siblings.forEach(sib => sib.classList.remove('selected'));
                this.classList.add('selected');
            });
        });

        // Next button handlers
        document.querySelectorAll('.form-next').forEach(btn => {
            btn.addEventListener('click', function() {
                const currentStep = this.closest('.form-step');
                const currentStepNum = parseInt(currentStep.dataset.step);
                const nextStepNum = parseInt(this.dataset.next);

                // Validate current step
                const requiredInputs = currentStep.querySelectorAll('input[required]');
                let isValid = true;

                requiredInputs.forEach(input => {
                    if (input.type === 'radio') {
                        const radioGroup = currentStep.querySelectorAll(`input[name="${input.name}"]`);
                        const isChecked = Array.from(radioGroup).some(radio => radio.checked);
                        if (!isChecked) isValid = false;
                    } else if (!input.value.trim()) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    // Visual feedback for missing selection
                    currentStep.querySelectorAll('.form-option').forEach(opt => {
                        opt.style.animation = 'shake 0.5s ease';
                        setTimeout(() => opt.style.animation = '', 500);
                    });
                    return;
                }

                // Transition to next step
                currentStep.classList.remove('active');
                document.querySelector(`.form-step[data-step="${nextStepNum}"]`).classList.add('active');

                // Update progress
                progressSteps.forEach(step => {
                    const stepNum = parseInt(step.dataset.step);
                    step.classList.remove('active', 'completed');
                    if (stepNum < nextStepNum) {
                        step.classList.add('completed');
                    } else if (stepNum === nextStepNum) {
                        step.classList.add('active');
                    }
                });
            });
        });

        // Previous button handlers
        document.querySelectorAll('.form-prev').forEach(btn => {
            btn.addEventListener('click', function() {
                const currentStep = this.closest('.form-step');
                const prevStepNum = parseInt(this.dataset.prev);

                currentStep.classList.remove('active');
                document.querySelector(`.form-step[data-step="${prevStepNum}"]`).classList.add('active');

                // Update progress
                progressSteps.forEach(step => {
                    const stepNum = parseInt(step.dataset.step);
                    step.classList.remove('active', 'completed');
                    if (stepNum < prevStepNum) {
                        step.classList.add('completed');
                    } else if (stepNum === prevStepNum) {
                        step.classList.add('active');
                    }
                });
            });
        });

        // Form hours slider
        const formHoursSlider = document.getElementById('form-hours-slider');
        const formHoursValue = document.getElementById('form-hours-value');

        if (formHoursSlider && formHoursValue) {
            formHoursSlider.addEventListener('input', function() {
                formHoursValue.textContent = this.value;

                // Update slider track fill
                const percentage = ((this.value - 1) / 39) * 100;
                this.style.background = `linear-gradient(to right, #FF5C00 0%, #FF5C00 ${percentage}%, #1a1a1a ${percentage}%, #1a1a1a 100%)`;
            });

            // Initialize
            const percentage = ((formHoursSlider.value - 1) / 39) * 100;
            formHoursSlider.style.background = `linear-gradient(to right, #FF5C00 0%, #FF5C00 ${percentage}%, #1a1a1a ${percentage}%, #1a1a1a 100%)`;
        }

        // Form submission
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;

            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;

            // Allow form to submit normally
            // If you want AJAX submission, prevent default and handle here
        });
    }

    // ============================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const headerHeight = document.querySelector('.site-header')?.offsetHeight || 0;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ============================================
    // DATA BAR ANIMATIONS (for bento cards)
    // ============================================
    const dataBars = document.querySelectorAll('.data-bar-fill');

    const barObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const width = entry.target.dataset.width || '80%';
                entry.target.style.width = width;
            }
        });
    }, { threshold: 0.5 });

    dataBars.forEach(bar => {
        bar.style.width = '0%';
        barObserver.observe(bar);
    });

    // ============================================
    // CONTACT FORM (from original)
    // ============================================
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        const formActionUrl = contactForm.getAttribute('action');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const nameInput = this.querySelector('#contact_name');
            const emailInput = this.querySelector('#contact_email');
            const messageInput = this.querySelector('#contact_message');

            let isValid = true;

            if (nameInput && !nameInput.value.trim()) {
                displayError('Name is required.');
                isValid = false;
            }
            if (emailInput && !emailInput.value.trim()) {
                displayError('Email address is required.');
                isValid = false;
            } else if (emailInput) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput.value)) {
                    displayError('Please enter a valid email address.');
                    isValid = false;
                }
            }
            if (messageInput && !messageInput.value.trim()) {
                displayError('Message is required.');
                isValid = false;
            }

            if (!isValid) return;

            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.textContent;
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;

            const formData = new FormData(contactForm);

            fetch(formActionUrl, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.redirected) {
                    window.location.href = response.url;
                } else {
                    submitButton.textContent = originalButtonText;
                    submitButton.disabled = false;
                    displayError('An error occurred during submission. Please try again.');
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

    function displayError(message) {
        const form = document.querySelector('.contact-form') || document.querySelector('.diagnostic-form');
        if (!form) return;

        const existingError = document.querySelector('.form-error-message');
        if (existingError) existingError.remove();

        const errorDiv = document.createElement('div');
        errorDiv.className = 'form-error-message';
        errorDiv.style.cssText = 'background: rgba(255, 92, 0, 0.1); border: 1px solid #FF5C00; color: #FF5C00; padding: 16px; border-radius: 8px; margin-bottom: 20px; font-family: var(--font-mono); font-size: 0.875rem;';
        errorDiv.textContent = message;

        form.insertBefore(errorDiv, form.firstChild);

        setTimeout(() => errorDiv.remove(), 5000);
    }

});

// Add shake animation for form validation
const style = document.createElement('style');
style.textContent = `
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
`;
document.head.appendChild(style);
