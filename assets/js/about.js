document.addEventListener('DOMContentLoaded', function() {
    // Initialize animations
    initScrollAnimations();
    
    // // Initialize parallax effect
    // initParallax();
    
    // Initialize team carousel
    initTeamCarousel();
    
    // Initialize testimonial slider
    initTestimonialSlider();
    
    // Initialize scroll indicator behavior
    initScrollIndicator();
});

// Scroll Animations
function initScrollAnimations() {
    const revealElements = document.querySelectorAll('.reveal-text, .reveal-element');
    
    const revealOnScroll = function() {
        const windowHeight = window.innerHeight;
        const revealPoint = 150;
        
        revealElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            
            if(elementTop < windowHeight - revealPoint) {
                element.classList.add('active');
            }
        });
    };
    
    // Initial check on page load
    revealOnScroll();
    
    // Check on scroll
    window.addEventListener('scroll', revealOnScroll);
}

// Parallax Effect
function initParallax() {
    const parallaxBg = document.querySelector('.parallax-bg');
    
    if (!parallaxBg) return;
    
    window.addEventListener('scroll', function() {
        const scrollPosition = window.pageYOffset;
        parallaxBg.style.transform = `translateY(${scrollPosition * 0.4}px)`;
    });
}

// Team Carousel
function initTeamCarousel() {
    const teamCarousel = document.querySelector('.team-carousel');
    const teamMembers = document.querySelectorAll('.team-member');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const dotsContainer = document.querySelector('.carousel-dots');
    
    if (!teamCarousel || teamMembers.length === 0) return;
    
    let currentIndex = 0;
    let slidesToShow = getSlidesToShow();
    
    // Create dots
    for (let i = 0; i <= teamMembers.length - slidesToShow; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (i === 0) dot.classList.add('active');
        
        dot.addEventListener('click', () => {
            currentIndex = i;
            updateCarousel();
        });
        
        dotsContainer.appendChild(dot);
    }
    
    // Handle previous button click
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });
    }
    
    // Handle next button click
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            if (currentIndex < teamMembers.length - slidesToShow) {
                currentIndex++;
                updateCarousel();
            }
        });
    }
    
    // Update carousel display
    function updateCarousel() {
        teamMembers.forEach((member, index) => {
            if (window.innerWidth < 768) {
                // On mobile, display one at a time
                member.style.display = index === currentIndex ? 'block' : 'none';
            } else {
                // On desktop, use translateX to create sliding effect
                member.style.transform = `translateX(${-100 * currentIndex}%)`;
            }
        });
        
        // Update active dot
        document.querySelectorAll('.dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    // Determine number of slides to show based on viewport width
    function getSlidesToShow() {
        if (window.innerWidth < 768) return 1;
        if (window.innerWidth < 992) return 2;
        return 4;
    }
    
    // Listen for window resize
    window.addEventListener('resize', () => {
        slidesToShow = getSlidesToShow();
        
        // Reset dots if needed
        while (dotsContainer.firstChild) {
            dotsContainer.removeChild(dotsContainer.firstChild);
        }
        
        for (let i = 0; i <= Math.max(0, teamMembers.length - slidesToShow); i++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (i === currentIndex) dot.classList.add('active');
            
            dot.addEventListener('click', () => {
                currentIndex = i;
                updateCarousel();
            });
            
            dotsContainer.appendChild(dot);
        }
        
        // Ensure currentIndex is valid after resize
        if (currentIndex > teamMembers.length - slidesToShow) {
            currentIndex = teamMembers.length - slidesToShow;
        }
        
        updateCarousel();
    });
    
    // Initial update
    updateCarousel();
}

// Testimonial Slider
function initTestimonialSlider() {
    const testimonialItems = document.querySelectorAll('.testimonial-item');
    const dotsContainer = document.querySelector('.testimonial-dots');
    
    if (!testimonialItems.length || !dotsContainer) return;
    
    let currentIndex = 0;
    let intervalId;
    
    // Create dots for each testimonial
    testimonialItems.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        
        dot.addEventListener('click', () => {
            clearInterval(intervalId);
            currentIndex = index;
            updateTestimonial();
            startAutoSlide();
        });
        
        dotsContainer.appendChild(dot);
    });
    
    // Update active testimonial
    function updateTestimonial() {
        testimonialItems.forEach((item, index) => {
            item.classList.toggle('active', index === currentIndex);
        });
        
        // Update active dot
        document.querySelectorAll('.testimonial-dots .dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    // Auto-slide function
    function startAutoSlide() {
        clearInterval(intervalId);
        intervalId = setInterval(() => {
            currentIndex = (currentIndex + 1) % testimonialItems.length;
            updateTestimonial();
        }, 5000);
    }
    
    // Start auto-sliding
    startAutoSlide();
}

// Scroll Indicator
function initScrollIndicator() {
    const scrollIndicator = document.querySelector('.scroll-indicator');
    
    if (!scrollIndicator) return;
    
    scrollIndicator.addEventListener('click', () => {
        const nextSection = document.querySelector('.brand-story');
        if (nextSection) {
            window.scrollTo({
                top: nextSection.offsetTop,
                behavior: 'smooth'
            });
        }
    });
    
    // Hide scroll indicator when scrolled past hero section
    window.addEventListener('scroll', () => {
        const heroSection = document.querySelector('.about-hero');
        if (heroSection && window.pageYOffset > heroSection.offsetHeight / 2) {
            scrollIndicator.style.opacity = '0';
        } else {
            scrollIndicator.style.opacity = '1';
        }
    });
}