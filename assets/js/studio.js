// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    
    // Gallery Filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            button.classList.add('active');
            
            // Get filter value
            const filterValue = button.getAttribute('data-filter');
            
            // Filter gallery items
            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Testimonial Slider
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const nextButton = document.querySelector('.next-btn');
    const prevButton = document.querySelector('.prev-btn');
    const dots = document.querySelectorAll('.dot');
    
    let currentSlide = 0;
    
    // Function to update slide position
    function updateSlide() {
        testimonialSlides.forEach((slide, index) => {
            if (index === currentSlide) {
                slide.style.opacity = '1';
                slide.style.position = 'relative';
            } else {
                slide.style.opacity = '0';
                slide.style.position = 'absolute';
            }
        });
        
        // Update dots
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }
    
    // Next button click event
    if (nextButton) {
        nextButton.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % testimonialSlides.length;
            updateSlide();
        });
    }
    
    // Previous button click event
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + testimonialSlides.length) % testimonialSlides.length;
            updateSlide();
        });
    }
    
    // Dot click events
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateSlide();
        });
    });
    
    // Auto rotate testimonials
    let testimonialInterval = setInterval(() => {
        currentSlide = (currentSlide + 1) % testimonialSlides.length;
        updateSlide();
    }, 5000);
    
    // Pause auto rotation on hover
    const testimonialsSection = document.querySelector('.testimonials');
    if (testimonialsSection) {
        testimonialsSection.addEventListener('mouseenter', () => {
            clearInterval(testimonialInterval);
        });
        
        testimonialsSection.addEventListener('mouseleave', () => {
            testimonialInterval = setInterval(() => {
                currentSlide = (currentSlide + 1) % testimonialSlides.length;
                updateSlide();
            }, 5000);
        });
    }
    
    // FAQ Toggle
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            // Toggle active class
            item.classList.toggle('active');
            
            // Update icon
            const icon = item.querySelector('.faq-toggle i');
            if (item.classList.contains('active')) {
                icon.classList.remove('fa-plus');
                icon.classList.add('fa-minus');
            } else {
                icon.classList.remove('fa-minus');
                icon.classList.add('fa-plus');
            }
        });
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Form validation
    const bookingForm = document.getElementById('studio-booking-form');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            let isValid = true;
            const inputs = bookingForm.querySelectorAll('input, select, textarea');
            
            inputs.forEach(input => {
                if (input.hasAttribute('required') && !input.value) {
                    isValid = false;
                    input.style.borderColor = '#ff4d4d';
                } else {
                    input.style.borderColor = 'rgba(255, 255, 255, 0.2)';
                }
            });
            
            if (isValid) {
                // Here you would normally send the form data to your server
                // For now, just show a success message
                const submitBtn = bookingForm.querySelector('.submit-btn');
                const originalText = submitBtn.textContent;
                
                submitBtn.textContent = 'Booking Submitted!';
                submitBtn.style.backgroundColor = '#4CAF50';
                submitBtn.disabled = true;
                
                // Reset form after delay
                setTimeout(() => {
                    bookingForm.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.style.backgroundColor = '';
                    submitBtn.disabled = false;
                }, 3000);
            }
        });
    }
    
    // View More Gallery Button
    const viewMoreBtn = document.querySelector('.view-more-btn');
    if (viewMoreBtn) {
        viewMoreBtn.addEventListener('click', function() {
            // In a real implementation, this would load more gallery items
            // For now, just change the button text
            viewMoreBtn.textContent = 'Loading...';
            
            setTimeout(() => {
                viewMoreBtn.textContent = 'All Projects Loaded';
                viewMoreBtn.disabled = true;
            }, 1500);
        });
    }
    
    // CTA Buttons
    const ctaButtons = document.querySelectorAll('.cta-button');
    ctaButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Scroll to booking section
            const bookingSection = document.getElementById('booking');
            if (bookingSection) {
                window.scrollTo({
                    top: bookingSection.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Parallax effect for hero section
    const heroSection = document.querySelector('.studio-hero');
    if (heroSection) {
        window.addEventListener('scroll', () => {
            const scrollPosition = window.pageYOffset;
            heroSection.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        });
    }
    
    // Animate elements on scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.service-card, .feature, .gallery-item, .section-heading');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 100) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }
    
    // Set initial state for animation
    document.querySelectorAll('.service-card, .feature, .gallery-item, .section-heading').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(50px)';
        element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });
    
    // Run animation on scroll
    window.addEventListener('scroll', animateOnScroll);
    
    // Initial animation call
    animateOnScroll();
});