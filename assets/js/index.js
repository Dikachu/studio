// Product image hover effect
const productCards = document.querySelectorAll('.product-card');
productCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.querySelector('.product-overlay').style.opacity = 1;
    });
    
    card.addEventListener('mouseleave', function() {
        this.querySelector('.product-overlay').style.opacity = 0;
    });
});

// Basic form validation
const contactForm = document.querySelector('.contact-form form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        
        if (!name || !email || !message) {
            alert('Please fill in all required fields.');
            return;
        }
        
        alert('Thank you for your message! We will get back to you soon.');
        this.reset();
    });
}

// Complete the parallax scrolling effect
document.addEventListener('DOMContentLoaded', function() {

// Add parallax scrolling effect
window.addEventListener('scroll', function() {
    const parallaxElements = document.querySelectorAll('.about-image, .hero');
    
    parallaxElements.forEach(element => {
        const scrollPosition = window.pageYOffset;
        const elementOffset = element.offsetTop;
        const distance = (elementOffset - scrollPosition) * 0.2;
        
        if (element.classList.contains('hero')) {
            element.querySelector('.hero-content').style.transform = `translateY(${distance * 0.5}px)`;
        } else {
            element.querySelector('img').style.transform = `translateY(${distance * 0.3}px)`;
        }
    });
});

// Animated entrance for elements
const animateElements = document.querySelectorAll('.section-title, .product-card, .about-text, .studio-text, .testimonial-item');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.2 });

animateElements.forEach(element => {
    element.classList.add('fade-in');
    observer.observe(element);
});

// Shopping cart functionality
// let cartCount = 0;
// const cartCountElement = document.querySelector('.cart-count');

// // Add to cart buttons
// const addToCartButtons = document.querySelectorAll('.product-overlay .btn');
// addToCartButtons.forEach(button => {
//     button.addEventListener('click', function(e) {
//         e.preventDefault();
//         cartCount++;
//         cartCountElement.textContent = cartCount;
        
//         // Animation for adding to cart
//         cartCountElement.classList.add('pulse');
//         setTimeout(() => {
//             cartCountElement.classList.remove('pulse');
//         }, 500);
        
//         const productName = this.closest('.product-card').querySelector('h3').textContent;
//         showNotification(`${productName} added to cart`);
//     });
// });

// // Cart icon click
// const cartIcon = document.querySelector('.cart-icon');
// cartIcon.addEventListener('click', function() {
//     if (cartCount === 0) {
//         showNotification('Your cart is empty');
//     } else {
//         window.location.href = 'cart.html';
//     }
// });

// Notification system
function showNotification(message) {
    // Create notification element if it doesn't exist
    let notification = document.querySelector('.notification');
    if (!notification) {
        notification = document.createElement('div');
        notification.className = 'notification';
        document.body.appendChild(notification);
    }
    
    notification.textContent = message;
    notification.classList.add('show');
    
    setTimeout(() => {
        notification.classList.remove('show');
    }, 3000);
}

// Image gallery lightbox
const galleryItems = document.querySelectorAll('.gallery-item');
galleryItems.forEach(item => {
    item.addEventListener('click', function() {
        const imgSrc = this.querySelector('img').getAttribute('src');
        
        // Create lightbox
        const lightbox = document.createElement('div');
        lightbox.className = 'lightbox';
        lightbox.innerHTML = `
            <div class="lightbox-content">
                <span class="close-lightbox">&times;</span>
                <img src="${imgSrc}" alt="Gallery Image">
            </div>
        `;
        
        document.body.appendChild(lightbox);
        document.body.style.overflow = 'hidden';
        
        // Close lightbox
        lightbox.querySelector('.close-lightbox').addEventListener('click', function() {
            document.body.removeChild(lightbox);
            document.body.style.overflow = 'auto';
        });
        
        // Close lightbox on outside click
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                document.body.removeChild(lightbox);
                document.body.style.overflow = 'auto';
            }
        });
    });
});

// Testimonial slider
let currentTestimonial = 0;
const testimonials = [
    {
        text: "The attention to detail and craftsmanship at EASY TREND LUXE is unparalleled. Their designs have become staples in my wardrobe, and their photography services elevated my brand to new heights.",
        author: "Alexandra Johnson, Fashion Influencer"
    },
    {
        text: "Working with the EASY TREND LUXE studio was a game-changer for my fashion label. The team's creativity and professionalism helped us create stunning visuals that truly represent our brand's essence.",
        author: "Marcus Chen, Designer"
    },
    {
        text: "I've purchased several pieces from EASY TREND LUXE and each one exudes quality and sophistication. The studio photography session I booked for my portfolio exceeded all expectations.",
        author: "Sophia Rodriguez, Model"
    }
];

const testimonialText = document.querySelector('.testimonial-text');
const testimonialAuthor = document.querySelector('.testimonial-author');

// Create navigation dots
const testimonialSlider = document.querySelector('.testimonial-slider');
const dotsContainer = document.createElement('div');
dotsContainer.className = 'slider-dots';

testimonials.forEach((_, index) => {
    const dot = document.createElement('span');
    dot.className = 'slider-dot';
    if (index === 0) dot.classList.add('active');
    
    dot.addEventListener('click', () => {
        currentTestimonial = index;
        updateTestimonial();
    });
    
    dotsContainer.appendChild(dot);
});

testimonialSlider.appendChild(dotsContainer);

function updateTestimonial() {
    // Fade out
    testimonialText.style.opacity = 0;
    testimonialAuthor.style.opacity = 0;
    
    setTimeout(() => {
        // Update content
        testimonialText.textContent = `"${testimonials[currentTestimonial].text}"`;
        testimonialAuthor.textContent = `- ${testimonials[currentTestimonial].author}`;
        
        // Update active dot
        document.querySelectorAll('.slider-dot').forEach((dot, index) => {
            if (index === currentTestimonial) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
        
        // Fade in
        testimonialText.style.opacity = 1;
        testimonialAuthor.style.opacity = 1;
    }, 500);
}

// Auto-rotate testimonials
setInterval(() => {
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    updateTestimonial();
}, 5000);

// Newsletter subscription
const newsletterForm = document.querySelector('.newsletter');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = this.querySelector('input[type="email"]').value;
        
        if (!email) {
            showNotification('Please enter your email address');
            return;
        }
        
        showNotification('Thank you for subscribing to our newsletter!');
        this.reset();
    });
}
});

// Add CSS classes for animations
document.head.insertAdjacentHTML('beforeend', `
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

.fade-in {
    opacity: 0;
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.fade-in.animate {
    opacity: 1;
    transform: translateY(0);
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.2); }
    100% { transform: scale(1); }
}

.pulse {
    animation: pulse 0.5s ease;
}

.notification {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: var(--secondary-color);
    color: var(--light-text);
    padding: 15px 25px;
    border-left: 4px solid var(--accent-color);
    border-radius: 4px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    transform: translateX(150%);
    transition: transform 0.5s ease;
    z-index: 1000;
}

.notification.show {
    transform: translateX(0);
}

.lightbox {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1001;
}

.lightbox-content {
    position: relative;
    max-width: 80%;
    max-height: 80%;
}

.lightbox img {
    max-width: 100%;
    max-height: 80vh;
    box-shadow: 0 5px 30px rgba(0,0,0,0.3);
}

.close-lightbox {
    position: absolute;
    top: -40px;
    right: 0;
    color: var(--light-text);
    font-size: 2rem;
    cursor: pointer;
}

.slider-dots {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.slider-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255,255,255,0.3);
    margin: 0 5px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.slider-dot.active {
    background: var(--accent-color);
    transform: scale(1.2);
}

.testimonial-text, .testimonial-author {
    transition: opacity 0.5s ease;
}
</style>
`)