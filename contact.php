<?php require_once 'header.php' ?>
  
    <main class="contact-main">
        <!-- Hero Section -->
        <section class="contact-hero">
            <div class="hero-content">
                <h1>Get in <span>Touch</span></h1>
                <p class="subtitle">We're here to answer any questions about our luxury products and services</p>
            </div>
        </section>
        
        <!-- Contact Information Section -->
        <section class="contact-info-section">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Visit Our Studio</h3>
                        <p>123 Luxury Avenue, Fashion District</p>
                        <p>New York, NY 10001</p>
                    </div>
                    
                    <div class="contact-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3>Call Us</h3>
                        <p>+1 (888) LUXE-123</p>
                        <p>Monday - Saturday: 10am - 8pm</p>
                    </div>
                    
                    <div class="contact-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email Us</h3>
                        <p>info@easytrendluxe.com</p>
                        <p>support@easytrendluxe.com</p>
                    </div>
                    
                    <div class="contact-card">
                        <div class="icon-wrapper">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Opening Hours</h3>
                        <p>Store: 10am - 9pm Daily</p>
                        <p>Studio: By Appointment Only</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contact Form & Map Section -->
        <section class="contact-form-section">
            <div class="container">
                <div class="form-map-container">
                    <div class="form-container">
                        <div class="form-header">
                            <h2>Send Us a <span>Message</span></h2>
                            <p>We typically respond within 24 hours</p>
                        </div>
                        
                        <form id="contactForm" class="luxury-form">
                            <div class="form-group">
                                <input type="text" id="name" name="name" required>
                                <label for="name">Full Name</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" id="email" name="email" required>
                                <label for="email">Email Address</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-group">
                                <input type="tel" id="phone" name="phone">
                                <label for="phone">Phone Number (Optional)</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-group">
                                <select id="subject" name="subject" required>
                                    <option value="" disabled selected></option>
                                    <option value="general">General Inquiry</option>
                                    <option value="product">Product Information</option>
                                    <option value="booking">Studio Booking</option>
                                    <option value="support">Customer Support</option>
                                    <option value="partnership">Business Partnership</option>
                                </select>
                                <label for="subject">Subject</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-group">
                                <textarea id="message" name="message" rows="5" required></textarea>
                                <label for="message">Your Message</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">Subscribe to our newsletter for exclusive offers</label>
                            </div>
                            
                            <button type="submit" class="submit-btn">
                                <span>Send Message</span>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                    
                    <div class="map-container">
                        <div class="map-overlay">
                            <h3>Our Flagship Location</h3>
                            <p>Experience luxury in person</p>
                        </div>
                        <div id="googleMap" class="google-map"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Studio Booking Section -->
        <section class="booking-section">
            <div class="container">
                <div class="booking-header">
                    <h2>Book Our <span>Studio</span></h2>
                    <p>Schedule a photoshoot or private shopping experience</p>
                </div>
                
                <div class="booking-container">
                    <div class="calendar-container">
                        <div id="booking-calendar" class="booking-calendar"></div>
                    </div>
                    
                    <div class="booking-form-container">
                        <form id="bookingForm" class="luxury-form">
                            <div class="form-group">
                                <input type="text" id="booking-name" name="booking-name" required>
                                <label for="booking-name">Full Name</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" id="booking-email" name="booking-email" required>
                                <label for="booking-email">Email Address</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-group">
                                <input type="tel" id="booking-phone" name="booking-phone" required>
                                <label for="booking-phone">Phone Number</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-group">
                                <select id="booking-type" name="booking-type" required>
                                    <option value="" disabled selected></option>
                                    <option value="portrait">Portrait Photography</option>
                                    <option value="fashion">Fashion Photography</option>
                                    <option value="product">Product Photography</option>
                                    <option value="private">Private Shopping Experience</option>
                                    <option value="event">Private Event</option>
                                </select>
                                <label for="booking-type">Booking Type</label>
                                <div class="line"></div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group half">
                                    <input type="text" id="booking-date" name="booking-date" readonly required>
                                    <label for="booking-date">Selected Date</label>
                                    <div class="line"></div>
                                </div>
                                
                                <div class="form-group half">
                                    <select id="booking-time" name="booking-time" required>
                                        <option value="" disabled selected></option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="14:00">2:00 PM</option>
                                        <option value="16:00">4:00 PM</option>
                                        <option value="18:00">6:00 PM</option>
                                    </select>
                                    <label for="booking-time">Preferred Time</label>
                                    <div class="line"></div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <textarea id="booking-notes" name="booking-notes" rows="3"></textarea>
                                <label for="booking-notes">Special Requests (Optional)</label>
                                <div class="line"></div>
                            </div>
                            
                            <button type="submit" class="submit-btn">
                                <span>Confirm Booking</span>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <div class="faq-header">
                    <h2>Frequently Asked <span>Questions</span></h2>
                    <p>Find quick answers to common inquiries</p>
                </div>
                
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What are your studio rental rates?</h3>
                            <div class="toggle-icon"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="faq-answer">
                            <p>Our studio rental rates start at $400 per hour with a minimum booking of 2 hours. Package deals are available for half-day (4 hours) and full-day (8 hours) bookings. All equipment and basic props are included in the rental fee.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you offer international shipping?</h3>
                            <div class="toggle-icon"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we ship to over 90 countries worldwide. International shipping rates vary depending on location and order value. Free shipping is available for international orders over $500. Please allow 5-10 business days for international deliveries.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What is your return policy?</h3>
                            <div class="toggle-icon"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="faq-answer">
                            <p>We offer a 14-day return policy for all unused and unworn items in their original packaging. Custom orders and fragrance products are final sale. Return shipping fees are the responsibility of the customer unless the item is defective.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How can I track my order?</h3>
                            <div class="toggle-icon"><i class="fas fa-plus"></i></div>
                        </div>
                        <div class="faq-answer">
                            <p>Once your order is processed and shipped, you will receive a confirmation email with tracking information. You can also log into your account on our website to track your order status in real-time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Newsletter Section -->
        <!-- <section class="newsletter-section">
            <div class="container">
                <div class="newsletter-container">
                    <div class="newsletter-content">
                        <h2>Join Our <span>Elite Circle</span></h2>
                        <p>Subscribe to receive exclusive offers, early access to new collections, and VIP event invitations</p>
                        
                        <form id="newsletterForm" class="newsletter-form">
                            <div class="form-group">
                                <input type="email" id="newsletter-email" name="newsletter-email" required>
                                <label for="newsletter-email">Your Email Address</label>
                                <div class="line"></div>
                            </div>
                            <button type="submit" class="submit-btn">
                                <span>Subscribe</span>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
    </main>


<?php require_once 'footer.php' ?>