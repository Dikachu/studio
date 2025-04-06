// Google Map Initialization
function initMap() {
    // Replace with your studio's coordinates
    const studioLocation = { lat: 40.7580, lng: -73.9855 };
    
    // Custom map styling for luxury look
    const mapStyles = [
        {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
        },
        {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [{"visibility": "off"}]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{"color": "#dedede"}, {"lightness": 21}]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"color": "#c9a36c"}, {"lightness": 50}]
        }
    ];

    // Create map
    const map = new google.maps.Map(document.getElementById("googleMap"), {
        zoom: 16,
        center: studioLocation,
        styles: mapStyles,
        disableDefaultUI: true,
        zoomControl: true,
        mapTypeControl: false
    });

    // Custom marker icon
    const markerIcon = {
        path: 'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
        fillColor: '#c9a36c',
        fillOpacity: 1,
        strokeWeight: 0,
        scale: 2,
        anchor: new google.maps.Point(12, 24),
    };

    // Add marker
    const marker = new google.maps.Marker({
        position: studioLocation,
        map: map,
        icon: markerIcon,
        title: "EASY TREND LUXE Studio",
        animation: google.maps.Animation.DROP
    });

    // Add info window
    const infoContent = `
        <div style="padding: 15px; font-family: 'Montserrat', sans-serif;">
            <h3 style="margin: 0 0 10px; color: #1a1a1a; font-weight: 500;">EASY TREND LUXE</h3>
            <p style="margin: 0 0 5px; color: #666;">123 Luxury Avenue, Fashion District</p>
            <p style="margin: 0; color: #666;">New York, NY 10001</p>
        </div>
    `;

    const infoWindow = new google.maps.InfoWindow({
        content: infoContent
    });

    marker.addListener('click', () => {
        infoWindow.open(map, marker);
    });
}

// Form Validation and Animation
document.addEventListener('DOMContentLoaded', function() {
    // Initialize form placeholders
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        // Set placeholder to empty to allow our custom labels to work
        input.setAttribute('placeholder', ' ');
        
        // Move label up if field has value on page load
        if (input.value.trim() !== '') {
            const label = input.nextElementSibling;
            label.classList.add('active');
        }
    });

    // Contact form submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission (replace with actual form submission)
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<span>Sending...</span>';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                // Show success message
                contactForm.innerHTML = `
                    <div class="success-message">
                        <div class="icon-wrapper">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3>Message Sent Successfully</h3>
                        <p>Thank you for contacting EASY TREND LUXE. We will get back to you within 24 hours.</p>
                    </div>
                `;
                
                // Scroll to success message
                contactForm.scrollIntoView({ behavior: 'smooth' });
            }, 2000);
        });
    }

    // Booking form submission
    const bookingForm = document.getElementById('bookingForm');
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission (replace with actual form submission)
            const submitBtn = bookingForm.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<span>Processing...</span>';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                // Show success message
                bookingForm.innerHTML = `
                    <div class="success-message">
                        <div class="icon-wrapper">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3>Booking Request Received</h3>
                        <p>Your studio booking request has been received. We will confirm your appointment shortly via email.</p>
                    </div>
                `;
                
                // Scroll to success message
                bookingForm.scrollIntoView({ behavior: 'smooth' });
            }, 2000);
        });
    }

    // Newsletter form submission
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission (replace with actual form submission)
            const submitBtn = newsletterForm.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<span>Subscribing...</span>';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                // Show success message
                newsletterForm.innerHTML = `
                    <div class="success-message">
                        <div class="icon-wrapper">
                            <i class="fas fa-check"></i>
                        </div>
                        <h3>Successfully Subscribed</h3>
                        <p>Welcome to our elite circle. You'll now receive exclusive offers and updates.</p>
                    </div>
                `;
            }, 1500);
        });
    }

    // FAQ accordion functionality
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });

    // Initialize calendar (using Vanilla JS for simplicity, replace with a proper calendar library)
    initSimpleCalendar();
});

// Simple Calendar Implementation (replace with a better calendar library in production)
function initSimpleCalendar() {
    const calendar = document.getElementById('booking-calendar');
    if (!calendar) return;
    
    const date = new Date();
    const currentMonth = date.getMonth();
    const currentYear = date.getFullYear();
    
    renderCalendar(currentMonth, currentYear);
    
    function renderCalendar(month, year) {
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        
        const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        
        let calendarHTML = `
            <div class="calendar-header">
                <button class="prev-month"><i class="fas fa-chevron-left"></i></button>
                <h3>${monthNames[month]} ${year}</h3>
                <button class="next-month"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="calendar-body">
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days">
        `;
        
        // Add blank spaces for days before the first day of the month
        for (let i = 0; i < firstDay; i++) {
            calendarHTML += `<div class="day empty"></div>`;
        }
        
        // Add days of the month
        const today = new Date().getDate();
        const currentMonthCheck = new Date().getMonth() === month && new Date().getFullYear() === year;
        
        for (let i = 1; i <= daysInMonth; i++) {
            // Check if date is in the past
            const isPast = currentMonthCheck && i < today;
            // Check if it's a weekend (0 = Sunday, 6 = Saturday)
            const dayOfWeek = new Date(year, month, i).getDay();
            const isWeekend = dayOfWeek === 0 || dayOfWeek === 6;
            
            let classNames = 'day';
            if (currentMonthCheck && i === today) classNames += ' today';
            if (isPast) classNames += ' past';
            if (isWeekend) classNames += ' weekend';
            
            calendarHTML += `<div class="${classNames}" data-date="${year}-${month+1}-${i}">${i}</div>`;
        }
        
        calendarHTML += `
                </div>
            </div>
        `;
        
        calendar.innerHTML = calendarHTML;
        
        // Add event listeners for calendar navigation
        calendar.querySelector('.prev-month').addEventListener('click', () => {
            let newMonth = month - 1;
            let newYear = year;
            if (newMonth < 0) {
                newMonth = 11;
                newYear--;
            }
            renderCalendar(newMonth, newYear);
        });
        
        calendar.querySelector('.next-month').addEventListener('click', () => {
            let newMonth = month + 1;
            let newYear = year;
            if (newMonth > 11) {
                newMonth = 0;
                newYear++;
            }
            renderCalendar(newMonth, newYear);
        });
        
        // Add event listeners for day selection
        const days = calendar.querySelectorAll('.day:not(.empty):not(.past)');
        days.forEach(day => {
            day.addEventListener('click', () => {
                // Remove selected class from all days
                days.forEach(d => d.classList.remove('selected'));
                // Add selected class to clicked day
                day.classList.add('selected');
                
                // Update the date input in the booking form
                const dateString = day.getAttribute('data-date');
                const [y, m, d] = dateString.split('-');
                const formattedDate = `${m}/${d}/${y}`;
                
                const dateInput = document.getElementById('booking-date');
                if (dateInput) {
                    dateInput.value = formattedDate;
                    // Trigger the input event to update the label
                    dateInput.dispatchEvent(new Event('input'));
                }
            });
        });
    }
    
    // Add CSS styles for the calendar
    const style = document.createElement('style');
    style.textContent = `
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .calendar-header button {
            background: transparent;
            border: none;
            color: var(--accent-color);
            cursor: pointer;
            font-size: 1.2rem;
            padding: 5px;
        }
        
        .calendar-header h3 {
            margin: 0;
            font-weight: 400;
        }
        
        .weekdays {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            font-weight: 500;
            margin-bottom: 10px;
            color: var(--accent-color);
        }
        
        .days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }
        
        .day {
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border-radius: 50%;
            transition: var(--transition);
        }
        
        .day:not(.empty):not(.past):hover {
            background-color: rgba(201, 163, 108, 0.2);
        }
        
        .day.selected {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }
        
        .day.today {
            border: 1px solid var(--accent-color);
        }
        
        .day.past, .day.empty {
            color: var(--text-secondary);
            opacity: 0.5;
            cursor: default;
        }
        
        .day.weekend {
            color: #ff9e9e;
        }
        
        .success-message {
            text-align: center;
            padding: 30px;
            animation: fadeIn 0.5s ease-in-out;
        }
    `;
    document.head.appendChild(style);
}

// Page load animations
window.addEventListener('load', function() {
    // Add entrance animations for sections
    const sections = document.querySelectorAll('section');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    // const sectionObserver = new IntersectionObserver(function(entries, observer) {
    //     entries.forEach(entry => {
    //         // console.log(entry);
    //         // if (entry.isIntersecting) {
                
    //             entry.target.classList.add('visible');
    //             observer.unobserve(entry.target);
    //         // }
    //     });
    // }, observerOptions);
    
    // sections.forEach(section => {
    //     section.style.opacity = '0';
    //     section.style.transform = 'translateY(30px)';
    //     section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
    //     sectionObserver.observe(section);
    // });
    
    // // Helper class for animated sections
    // document.querySelectorAll('.visible').forEach(el => {
    //     el.style.opacity = '1';
    //     el.style.transform = 'translateY(0)';
    // });
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});