// Gallery Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Variables
    const galleryItems = document.querySelectorAll('.gallery-item');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const lightboxModal = document.querySelector('.lightbox-modal');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxDesc = document.getElementById('lightbox-description');
    const closeLightbox = document.querySelector('.close-lightbox');
    const lightboxPrev = document.querySelector('.lightbox-nav.prev');
    const lightboxNext = document.querySelector('.lightbox-nav.next');
    const viewBtns = document.querySelectorAll('.view-btn');
    const bookBtns = document.querySelectorAll('.book-btn');
    const bookingModal = document.querySelector('.booking-modal');
    const closeBooking = document.querySelector('.close-booking');
    const bookingCta = document.querySelector('.booking-cta');
    const bookingForm = document.getElementById('booking-form');
    const testimonialTrack = document.querySelector('.testimonial-track');
    const testimonialDots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    
    let currentSlide = 0;
    let currentLightboxIndex = 0;
    let filteredItems = Array.from(galleryItems);
    
    // Initialize with animation
    initializeAnimations();
    
    // Filter gallery items
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            galleryItems.forEach(item => {
                if (filter === 'all') {
                    item.style.display = 'block';
                    item.classList.add('fade-in');
                } else if (item.classList.contains(filter)) {
                    item.style.display = 'block';
                    item.classList.add('fade-in');
                } else {
                    item.style.display = 'none';
                    item.classList.remove('fade-in');
                }
            });
            
            // Update filtered items array for lightbox navigation
            filteredItems = Array.from(galleryItems).filter(item => {
                return filter === 'all' || item.classList.contains(filter);
            });
        });
    });
    
    // Lightbox functionality
    viewBtns.forEach((btn, index) => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openLightbox(index);
        });
    });
    
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            openLightbox(index);
        });
    });
    
    closeLightbox.addEventListener('click', function() {
        lightboxModal.classList.remove('active');
    });
    
    lightboxPrev.addEventListener('click', function() {
        navigateLightbox('prev');
    });
    
    lightboxNext.addEventListener('click', function() {
        navigateLightbox('next');
    });
    
    // Close lightbox with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && lightboxModal.classList.contains('active')) {
            lightboxModal.classList.remove('active');
        }
        
        if (e.key === 'ArrowLeft' && lightboxModal.classList.contains('active')) {
            navigateLightbox('prev');
        }
        
        if (e.key === 'ArrowRight' && lightboxModal.classList.contains('active')) {
            navigateLightbox('next');
        }
    });
    
    // Booking modal functionality
    bookBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            bookingModal.classList.add('active');
        });
    });
    
    bookingCta.addEventListener('click', function() {
        bookingModal.classList.add('active');
    });
    
    closeBooking.addEventListener('click', function() {
        bookingModal.classList.remove('active');
    });
    
    // Close booking modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && bookingModal.classList.contains('active')) {
            bookingModal.classList.remove('active');
        }
    });
    
    // Close modals when clicking outside content
    window.addEventListener('click', function(e) {
        if (e.target === lightboxModal) {
            lightboxModal.classList.remove('active');
        }
        
        if (e.target === bookingModal) {
            bookingModal.classList.remove('active');
        }
    });
    
    // Handle booking form submission
    bookingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Here you would typically send the form data to your server
        // For now, we'll just show a success message
        const formData = new FormData(bookingForm);
        const formObject = {};
        
        formData.forEach((value, key) => {
            formObject[key] = value;
        });
        
        console.log('Form submitted:', formObject);
        
        // Reset form and show success message
        bookingForm.reset();
        
        // Create success message
        const successMessage = document.createElement('div');
        successMessage.className = 'success-message';
        successMessage.innerHTML = `
            <i class="fas fa-check-circle"></i>
            <p>Your booking request has been submitted successfully! We'll contact you shortly to confirm your session.</p>
        `;
        
        // Replace form with success message
        bookingForm.style.display = 'none';
        bookingModal.querySelector('.booking-modal-content').appendChild(successMessage);
        
        // Close modal after 3 seconds
        setTimeout(() => {
            bookingModal.classList.remove('active');
            // Reset the form display after modal is closed
            setTimeout(() => {
                successMessage.remove();
                bookingForm.style.display = 'block';
            }, 500);
        }, 3000);
    });
    
    // Testimonial slider functionality
    function showSlide(n) {
        currentSlide = n;
        
        if (currentSlide < 0) {
            currentSlide = testimonialDots.length - 1;
        } else if (currentSlide >= testimonialDots.length) {
            currentSlide = 0;
        }
        
        // Move the track
        testimonialTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        testimonialDots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
    }
    
    nextBtn.addEventListener('click', () => {
        showSlide(currentSlide + 1);
    });
    
    prevBtn.addEventListener('click', () => {
        showSlide(currentSlide - 1);
    });
    
    testimonialDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
        });
    });
    
    // Auto-rotate testimonials
    let testimonialInterval = setInterval(() => {
        showSlide(currentSlide + 1);
    }, 5000);
    
    // Pause auto-rotation when hovering over testimonials
    testimonialTrack.addEventListener('mouseenter', () => {
        clearInterval(testimonialInterval);
    });
    
    testimonialTrack.addEventListener('mouseleave', () => {
        testimonialInterval = setInterval(() => {
            showSlide(currentSlide + 1);
        }, 5000);
    });
    
    // Function to open lightbox
    function openLightbox(index) {
        // Find the index in filtered items
        currentLightboxIndex = filteredItems.indexOf(galleryItems[index]);
        if (currentLightboxIndex === -1) currentLightboxIndex = 0;
        
        updateLightboxContent();
        lightboxModal.classList.add('active');
    }
    
    // Function to navigate lightbox
    function navigateLightbox(direction) {
        if (direction === 'prev') {
            currentLightboxIndex = (currentLightboxIndex - 1 + filteredItems.length) % filteredItems.length;
        } else {
            currentLightboxIndex = (currentLightboxIndex + 1) % filteredItems.length;
        }
        
        updateLightboxContent();
    }
    
    // Function to update lightbox content
    function updateLightboxContent() {
        const currentItem = filteredItems[currentLightboxIndex];
        const imgSrc = currentItem.querySelector('img').src;
        const title = currentItem.querySelector('h3').textContent;
        const desc = currentItem.querySelector('p').textContent;
        
        lightboxImage.src = imgSrc;
        lightboxTitle.textContent = title;
        lightboxDesc.textContent = desc;
    }
    
    // Function to initialize animations
    function initializeAnimations() {
        // Add scroll-based animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        // Elements to observe
        const elementsToAnimate = [
            ...document.querySelectorAll('.gallery-item'),
            document.querySelector('.booking-content'),
            document.querySelector('.testimonials h2'),
            document.querySelector('.testimonial-slider')
        ];
        
        elementsToAnimate.forEach(element => {
            if (element) {
                observer.observe(element);
            }
        });
    }
    
    // Initialize the gallery
    function init() {
        // Show first testimonial
        showSlide(0);
        
        // Add active class to "All" filter button by default
        filterButtons[0].classList.add('active');
    }
    
    // Call init function
    init();
});